<?php
/**
 * Site header template part
 */
?>

<header class="bg-gradient-glass shadow-glass sticky top-0 z-50 border-b border-border/20 backdrop-blur-md">
    <div class="container mx-auto px-4">
        <!-- Top bar -->
        <div class="hidden lg:flex justify-end py-3 space-x-4 border-b border-border/10">
            <button class="text-xs border-primary/20 text-primary hover:bg-primary/5 px-3 py-2 border rounded">
                <?php echo get_theme_mod('rd_solutions_text', 'R&D Solutions'); ?>
                <br />
                <span class="text-xs opacity-75"><?php echo get_theme_mod('rd_solutions_subtitle', 'Natural Ingredient Development'); ?></span>
            </button>
            <button class="text-xs border-primary/20 text-primary hover:bg-primary/5 px-3 py-2 border rounded">
                <?php echo get_theme_mod('oem_services_text', 'OEM/ODM Services'); ?>
                <br />
                <span class="text-xs opacity-75"><?php echo get_theme_mod('oem_services_subtitle', 'Full-Package Manufacturing'); ?></span>
            </button>
        </div>
        
        <!-- Main header -->
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-3">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meron-logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" />
                <?php endif; ?>
                <div class="text-foreground">
                    <div class="font-playfair font-semibold text-lg leading-none"><?php echo get_theme_mod('company_name_line1', 'Asia Food'); ?></div>
                    <div class="font-playfair font-semibold text-lg leading-none"><?php echo get_theme_mod('company_name_line2', 'Chemical'); ?></div>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <?php get_template_part('template-parts/navigation/navigation-main'); ?>

            <div class="flex items-center space-x-3">
                <a href="<?php echo get_theme_mod('contact_link', '#contact'); ?>" class="hidden lg:flex border-primary/20 text-primary hover:bg-primary/5 px-3 py-2 border rounded text-sm">
                    📧 <?php echo get_theme_mod('contact_button_text', 'Contact Us'); ?>
                </a>
                
                <!-- Mobile menu button -->
                <button class="lg:hidden" id="mobile-menu-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <?php get_template_part('template-parts/navigation/navigation-mobile'); ?>
    </div>
</header>