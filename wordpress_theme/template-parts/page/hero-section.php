<?php
/**
 * Hero section template part
 */
?>

<section class="bg-gradient-section py-20 lg:py-32 relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary/5 rounded-full animate-float-1"></div>
        <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-primary/10 rounded-full animate-float-2"></div>
        <div class="absolute top-1/2 right-1/4 w-32 h-32 bg-primary/5 rounded-full animate-float-3"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-slide-in-left">
                <div class="inline-flex items-center px-4 py-2 bg-primary/10 border border-primary/20 rounded-full text-sm font-medium text-primary">
                    ✨ <?php echo get_theme_mod('hero_badge_text', 'Leading Vietnamese Natural Ingredients Company'); ?>
                </div>
                
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
                        <span class="text-primary"><?php echo get_theme_mod('hero_title_highlight', 'Encapsulating Nature'); ?></span>
                        <br />
                        <span class="text-foreground"><?php echo get_theme_mod('hero_title_main', 'Empowering Healthy Living'); ?></span>
                    </h1>
                    
                    <p class="text-lg text-muted-foreground leading-relaxed max-w-2xl">
                        <?php echo get_theme_mod('hero_description', 'Asia Food Chemical (AFChem) is a leading Vietnamese company specializing in natural food ingredients. We offer full-stack R&D, manufacturing, OEM/ODM, and international distribution services.'); ?>
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#products" class="inline-flex items-center justify-center px-8 py-4 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-all duration-300 shadow-primary text-lg font-medium">
                        Explore Products
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#about" class="inline-flex items-center justify-center px-8 py-4 border border-primary/20 text-primary rounded-lg hover:bg-primary/5 transition-colors text-lg font-medium">
                        Learn More
                    </a>
                </div>
            </div>
            
            <div class="relative animate-slide-in-right">
                <div class="relative bg-gradient-glass backdrop-blur-sm rounded-2xl p-8 shadow-elevated">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-food.jpg" 
                        alt="Natural Food Ingredients" 
                        class="w-full h-auto rounded-xl shadow-card"
                    />
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-xl p-4 shadow-elevated animate-float-1">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-sm">100% Natural</div>
                                <div class="text-xs text-muted-foreground">Certified Quality</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>