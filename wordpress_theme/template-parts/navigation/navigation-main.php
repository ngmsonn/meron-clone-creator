<?php
/**
 * Main navigation template part
 */
?>

<nav class="hidden lg:flex items-center space-x-8">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'flex items-center space-x-8',
        'container' => false,
        'walker' => new Custom_Nav_Walker(),
    ));
    ?>
</nav>