<?php
/**
 * Footer template
 * Static: Layout structure, social icons
 * Dynamic: Company info, product links, contact details
 */
?>

<footer class="bg-primary text-primary-foreground">
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center space-x-3 mb-6">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/meron-logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" />
                    <?php endif; ?>
                    <div class="text-sm font-medium">
                        <?php echo get_theme_mod('company_name_line1', 'Asia Food'); ?>
                        <br />
                        <?php echo get_theme_mod('company_name_line2', 'Chemical'); ?>
                    </div>
                </div>
                <p class="text-primary-foreground/80 mb-6 text-sm">
                    <?php echo get_theme_mod('company_description', 'Leading Vietnamese company specializing in natural food ingredients. Full-stack R&D, manufacturing, OEM/ODM, and international distribution services.'); ?>
                </p>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span><?php echo get_theme_mod('company_locations', 'Hanoi (HQ), HCM Branch, R&D Factory in Bac Ninh'); ?></span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span><?php echo get_theme_mod('company_phone', '+84 989 111 222'); ?></span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span><?php echo get_theme_mod('company_email', 'contact@asia-foodchem.com'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div>
                <h3 class="font-semibold mb-4"><?php echo get_theme_mod('products_title', 'Products'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_products',
                    'menu_class' => 'space-y-2 text-sm text-primary-foreground/80',
                    'container' => false,
                    'walker' => new Footer_Nav_Walker(),
                ));
                ?>
            </div>

            <!-- Services -->
            <div>
                <h3 class="font-semibold mb-4"><?php echo get_theme_mod('services_title', 'Services'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_services',
                    'menu_class' => 'space-y-2 text-sm text-primary-foreground/80',
                    'container' => false,
                    'walker' => new Footer_Nav_Walker(),
                ));
                ?>
            </div>

            <!-- Company Links -->
            <div>
                <h3 class="font-semibold mb-4"><?php echo get_theme_mod('company_links_title', 'Company'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_company',
                    'menu_class' => 'space-y-2 text-sm text-primary-foreground/80',
                    'container' => false,
                    'walker' => new Footer_Nav_Walker(),
                ));
                ?>
                
                <div class="mt-6">
                    <h4 class="font-medium mb-3"><?php echo get_theme_mod('news_title', 'Latest News'); ?></h4>
                    <ul class="space-y-2 text-sm text-primary-foreground/80">
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 3,
                            'post_status' => 'publish'
                        ));
                        foreach($recent_posts as $post) :
                        ?>
                            <li><a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-white transition-colors"><?php echo $post['post_title']; ?></a></li>
                        <?php endforeach; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-white/20 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-sm text-primary-foreground/80">
                    <?php echo get_theme_mod('copyright_text', '© 2024 Asia Food Chemical Joint Stock Company (AFChem). All rights reserved.'); ?>
                </div>
                <div class="flex items-center space-x-4 text-sm">
                    <span class="text-primary-foreground/60"><?php echo get_theme_mod('certifications_text', 'FSSC22000 | ISO22000 | HACCP | GMP Certified'); ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>