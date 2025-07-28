<?php
/**
 * Mobile navigation template part
 */
?>

<nav class="lg:hidden py-4 border-t border-border/10 hidden" id="mobile-menu">
    <div class="flex flex-col space-y-3">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'flex flex-col space-y-3',
            'container' => false,
            'walker' => new Mobile_Nav_Walker(),
        ));
        ?>
        <a href="<?php echo get_theme_mod('contact_link', '#contact'); ?>" class="border-primary/20 text-primary hover:bg-primary/5 w-fit mt-4 px-3 py-2 border rounded text-sm">
            📧 <?php echo get_theme_mod('contact_button_text', 'Contact Us'); ?>
        </a>
    </div>
</nav>