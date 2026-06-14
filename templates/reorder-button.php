<?php
/**
 * Reorder button (single order view).
 *
 * Override in a theme at: yourtheme/reorder/reorder-button.php
 *
 * @var string $reorder_url   Nonce-protected reorder URL.
 * @var string $reorder_label Button label.
 *
 * @package Reorder
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

$reorder_url   = isset($reorder_url) ? (string) $reorder_url : '';
$reorder_label = isset($reorder_label) ? (string) $reorder_label : '';

if ($reorder_url === '' || $reorder_label === '') {
    return;
}
?>
<p class="reorder-view-actions">
    <a href="<?php echo esc_url($reorder_url); ?>" class="button reorder-button">
        <?php echo esc_html($reorder_label); ?>
    </a>
</p>
