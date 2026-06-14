<?php

declare(strict_types=1);

namespace Reorder\Util;

defined('ABSPATH') || exit;

use const Reorder\PLUGIN_DIR;

/**
 * Loads templates with theme override support.
 *
 * Templates are looked up in this order:
 * 1. {theme}/reorder/{template}.php
 * 2. {plugin}/templates/{template}.php
 */
final class TemplateLoader
{
    private const THEME_DIR = 'reorder';

    /**
     * Render a template and return the HTML.
     *
     * @param string               $template Template name (e.g. 'reorder-button').
     * @param array<string, mixed> $args     Variables to extract into template scope.
     */
    public function render(string $template, array $args = []): string
    {
        ob_start();
        $this->include($template, $args);

        return (string) ob_get_clean();
    }

    /**
     * Include a template directly (outputs to the buffer).
     *
     * @param string               $template Template name.
     * @param array<string, mixed> $args     Variables to extract into template scope.
     */
    public function include(string $template, array $args = []): void
    {
        $path = $this->locate($template);

        if ($path === null) {
            return;
        }

        /**
         * Filter template arguments before rendering.
         *
         * @param array<string, mixed> $args     Template arguments.
         * @param string               $template Template name.
         */
        $args = apply_filters('reorder/template/args', $args, $template);

        // Prefix every template variable with `reorder_` to keep templates within
        // the plugin's variable namespace (per WordPress.org coding standards).
        $reorder_args = [];
        foreach ($args as $reorder_args_key => $reorder_args_value) {
            if (! is_string($reorder_args_key) || $reorder_args_key === '') {
                continue;
            }
            $reorder_args[str_starts_with($reorder_args_key, 'reorder_') ? $reorder_args_key : 'reorder_' . $reorder_args_key] = $reorder_args_value;
        }

        unset($args, $reorder_args_key, $reorder_args_value);

        extract($reorder_args, EXTR_SKIP); // phpcs:ignore WordPress.PHP.DontExtract.extract_extract

        include $path;
    }

    /**
     * Locate a template file. Returns null if not found.
     */
    public function locate(string $template): ?string
    {
        $template = ltrim($template, '/');

        if (! str_ends_with($template, '.php')) {
            $template .= '.php';
        }

        $themePath = locate_template(self::THEME_DIR . '/' . $template);

        if ($themePath !== '') {
            /** @var string */
            return apply_filters('reorder/template/path', $themePath, $template);
        }

        $pluginPath = PLUGIN_DIR . '/templates/' . $template;

        if (file_exists($pluginPath)) {
            /** @var string */
            return apply_filters('reorder/template/path', $pluginPath, $template);
        }

        return null;
    }
}
