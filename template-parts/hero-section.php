<?php
/**
 * Hero Section Template Part
 * Static: Layout, animations, styling
 * Dynamic: Headlines, description, buttons, stats, images
 */
?>

<section class="relative min-h-screen flex items-center bg-gradient-to-br from-background via-accent/20 to-secondary/30 overflow-hidden">
    <!-- Floating bubbles background (Static) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-8 h-8 bg-primary/10 rounded-full blur-md animate-float-1"></div>
        <div class="absolute top-32 right-20 w-12 h-12 bg-primary/15 rounded-full blur-lg animate-float-2"></div>
        <div class="absolute top-48 left-1/4 w-6 h-6 bg-primary/8 rounded-full blur-sm animate-float-3"></div>
        <div class="absolute top-64 right-1/3 w-10 h-10 bg-primary/12 rounded-full blur-md animate-float-1" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 left-16 w-14 h-14 bg-primary/10 rounded-full blur-xl animate-float-2" style="animation-delay: 4s;"></div>
        <div class="absolute bottom-24 right-12 w-7 h-7 bg-primary/20 rounded-full blur-md animate-float-3" style="animation-delay: 1s;"></div>
        <div class="absolute top-80 left-2/3 w-9 h-9 bg-primary/8 rounded-full blur-sm animate-float-1" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-60 right-1/4 w-11 h-11 bg-primary/15 rounded-full blur-lg animate-float-2" style="animation-delay: 5s;"></div>
    </div>
    
    <!-- Background pattern (Static) -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, hsl(var(--primary)) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8 animate-slide-in-left">
                <!-- Badge (Dynamic) -->
                <div class="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span><?php echo get_theme_mod('hero_badge_text', 'Leading Vietnamese Natural Ingredients Company'); ?></span>
                </div>
                
                <div class="space-y-6">
                    <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-foreground leading-tight text-balance">
                        <span class="text-primary block"><?php echo get_theme_mod('hero_title_highlight', 'Encapsulating Nature'); ?></span>
                        <?php echo get_theme_mod('hero_title_main', 'Empowering Healthy Living'); ?>
                    </h1>
                    
                    <p class="text-xl text-muted-foreground leading-relaxed max-w-2xl">
                        <?php echo get_theme_mod('hero_description', 'Asia Food Chemical (AFChem) is a leading Vietnamese company specializing in natural food ingredients. We offer full-stack R&D, manufacturing, OEM/ODM, and international distribution services.'); ?>
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo get_theme_mod('hero_cta_link', '#products'); ?>" class="bg-primary hover:bg-primary-dark text-primary-foreground px-8 py-4 text-lg font-medium shadow-primary rounded-full inline-flex items-center justify-center">
                        <?php echo get_theme_mod('hero_cta_text', 'Explore Products'); ?>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    
                    <a href="<?php echo get_theme_mod('hero_video_link', '#'); ?>" class="border-primary/30 text-primary hover:bg-primary/10 px-8 py-4 text-lg font-medium rounded-full bg-white/80 backdrop-blur-sm hover:border-primary/50 transition-all duration-300 inline-flex items-center justify-center border">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="10,8 16,12 10,16 10,8"></polygon>
                        </svg>
                        <?php echo get_theme_mod('hero_video_text', 'Watch Video'); ?>
                    </a>
                </div>
                
                <!-- Stats (Dynamic) -->
                <div class="grid grid-cols-2 gap-8 pt-8 border-t border-border/10">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-playfair font-bold text-primary"><?php echo get_theme_mod('hero_stat1_value', 'ISO'); ?></div>
                        <div class="text-sm text-muted-foreground"><?php echo get_theme_mod('hero_stat1_label', 'Certified Quality'); ?></div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-playfair font-bold text-primary"><?php echo get_theme_mod('hero_stat2_value', 'Global'); ?></div>
                        <div class="text-sm text-muted-foreground"><?php echo get_theme_mod('hero_stat2_label', 'Export Markets'); ?></div>
                    </div>
                </div>
            </div>
            
            <div class="relative animate-slide-in-right">
                <div class="relative">
                    <!-- Floating elements (Static) -->
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary/10 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary/20 rounded-full blur-2xl"></div>
                    
                    <div class="relative rounded-3xl overflow-hidden shadow-elevated bg-white p-4">
                        <?php 
                        $hero_image = get_theme_mod('hero_image');
                        if ($hero_image) : ?>
                            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo get_theme_mod('hero_image_alt', 'AFChem natural food ingredients and R&D facility'); ?>" class="w-full h-auto object-cover rounded-2xl transform hover:scale-105 transition-transform duration-700" />
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero-food.jpg" alt="AFChem natural food ingredients and R&D facility" class="w-full h-auto object-cover rounded-2xl transform hover:scale-105 transition-transform duration-700" />
                        <?php endif; ?>
                    </div>
                    
                    <!-- Certification badge (Dynamic) -->
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl p-4 shadow-card">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-sm text-foreground"><?php echo get_theme_mod('hero_cert_title', 'FSSC22000'); ?></div>
                                <div class="text-xs text-muted-foreground"><?php echo get_theme_mod('hero_cert_subtitle', 'Certified Manufacturing'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>