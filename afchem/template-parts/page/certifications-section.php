<?php
/**
 * Certifications section template part
 */
?>

<section id="certifications" class="py-20 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
                Quality Assurance
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-6">
                International Certifications
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                Our commitment to quality is demonstrated through rigorous international certifications, 
                ensuring the highest standards in food safety, quality management, and good manufacturing practices.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <?php
            // Query certifications custom post type
            $certifications = new WP_Query(array(
                'post_type' => 'certifications',
                'posts_per_page' => 4,
                'post_status' => 'publish'
            ));
            
            if ($certifications->have_posts()) :
                while ($certifications->have_posts()) : $certifications->the_post();
            ?>
                <div class="bg-background rounded-xl p-6 shadow-card text-center hover:shadow-elevated transition-all duration-300 group">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-4">
                            <?php the_post_thumbnail('medium', array('class' => 'w-16 h-16 mx-auto object-contain')); ?>
                        </div>
                    <?php else : ?>
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    <?php endif; ?>
                    
                    <h3 class="text-lg font-semibold text-foreground mb-2 group-hover:text-primary transition-colors">
                        <?php the_title(); ?>
                    </h3>
                    
                    <p class="text-sm text-muted-foreground">
                        <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                    </p>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback content if no certifications are found
            ?>
                <div class="bg-background rounded-xl p-6 shadow-card text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">FSSC22000</h3>
                    <p class="text-sm text-muted-foreground">Food Safety System Certification</p>
                </div>
                
                <div class="bg-background rounded-xl p-6 shadow-card text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">ISO22000</h3>
                    <p class="text-sm text-muted-foreground">Food Safety Management Systems</p>
                </div>
                
                <div class="bg-background rounded-xl p-6 shadow-card text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">HACCP</h3>
                    <p class="text-sm text-muted-foreground">Hazard Analysis Critical Control Points</p>
                </div>
                
                <div class="bg-background rounded-xl p-6 shadow-card text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">GMP</h3>
                    <p class="text-sm text-muted-foreground">Good Manufacturing Practice</p>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Quality commitment section -->
        <div class="bg-background rounded-2xl p-8 lg:p-12 shadow-card">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div class="space-y-6">
                    <h3 class="text-2xl lg:text-3xl font-bold text-foreground">
                        Our Quality Commitment
                    </h3>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        At AFChem, quality isn't just a standard—it's our foundation. Every product undergoes 
                        rigorous testing and quality control measures to ensure safety, efficacy, and consistency.
                    </p>
                    
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-foreground font-medium">100% Natural</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-foreground font-medium">Lab Tested</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-foreground font-medium">Certified Safe</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-foreground font-medium">Traceable</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/bacteriological.jpg" 
                        alt="Quality Testing" 
                        class="w-full h-auto rounded-xl shadow-card"
                    />
                </div>
            </div>
        </div>
    </div>
</section>