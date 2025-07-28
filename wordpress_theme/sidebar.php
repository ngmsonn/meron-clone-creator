<?php
/**
 * Sidebar template
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar">
    <div class="space-y-8">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</aside>