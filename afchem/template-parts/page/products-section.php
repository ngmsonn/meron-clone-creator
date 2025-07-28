<?php
/**
 * Products section template part
 */
?>

<section id="products" class="py-20 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
                Our Products
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-6">
                Premium Natural Ingredients
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                From food powders to pharmaceutical-grade extracts, we deliver high-quality natural ingredients 
                that meet international standards and exceed customer expectations.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Query products custom post type
            $products = new WP_Query(array(
                'post_type' => 'products',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ));
            
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
            ?>
                <div class="bg-background rounded-xl p-6 shadow-card hover:shadow-elevated transition-all duration-300 group">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-6 overflow-hidden rounded-lg">
                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-foreground group-hover:text-primary transition-colors">
                            <?php the_title(); ?>
                        </h3>
                        
                        <p class="text-muted-foreground">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>
                        
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:text-primary/80 transition-colors font-medium">
                            Learn More
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback content if no products are found
            ?>
                <div class="bg-background rounded-xl p-6 shadow-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-powder.jpg" alt="Food Powder" class="w-full h-48 object-cover rounded-lg mb-6" />
                    <h3 class="text-xl font-semibold text-foreground mb-4">Natural Food Powders</h3>
                    <p class="text-muted-foreground mb-4">Premium quality food-grade powders for various applications in the food and beverage industry.</p>
                    <a href="#" class="inline-flex items-center text-primary hover:text-primary/80 transition-colors font-medium">
                        Learn More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="bg-background rounded-xl p-6 shadow-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pharma-grade.jpg" alt="Pharmaceutical Grade" class="w-full h-48 object-cover rounded-lg mb-6" />
                    <h3 class="text-xl font-semibold text-foreground mb-4">Pharmaceutical Grade Extracts</h3>
                    <p class="text-muted-foreground mb-4">High-purity extracts meeting pharmaceutical standards for nutraceutical applications.</p>
                    <a href="#" class="inline-flex items-center text-primary hover:text-primary/80 transition-colors font-medium">
                        Learn More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="bg-background rounded-xl p-6 shadow-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bacteriological.jpg" alt="Bacteriological Testing" class="w-full h-48 object-cover rounded-lg mb-6" />
                    <h3 class="text-xl font-semibold text-foreground mb-4">Quality Testing Services</h3>
                    <p class="text-muted-foreground mb-4">Comprehensive bacteriological and chemical testing to ensure product safety and quality.</p>
                    <a href="#" class="inline-flex items-center text-primary hover:text-primary/80 transition-colors font-medium">
                        Learn More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="text-center mt-12">
            <a href="<?php echo get_post_type_archive_link('products'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors text-lg font-medium">
                View All Products
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>