<?php
/**
 * Applications section template part
 */
?>

<section id="applications" class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
                Applications
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-6">
                Versatile Solutions Across Industries
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                Our natural ingredients serve diverse industries, from food and beverage to pharmaceuticals and cosmetics, 
                providing innovative solutions for modern health and wellness needs.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            // Query applications custom post type
            $applications = new WP_Query(array(
                'post_type' => 'applications',
                'posts_per_page' => 4,
                'post_status' => 'publish'
            ));
            
            if ($applications->have_posts()) :
                while ($applications->have_posts()) : $applications->the_post();
            ?>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'w-8 h-8 object-cover rounded')); ?>
                        <?php else : ?>
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        <?php endif; ?>
                    </div>
                    
                    <h3 class="text-xl font-semibold text-foreground mb-4 group-hover:text-primary transition-colors">
                        <?php the_title(); ?>
                    </h3>
                    
                    <p class="text-muted-foreground">
                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                    </p>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback content if no applications are found
            ?>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 3H5a2 2 0 00-2 2v1m2 0h4m0 0V3a2 2 0 114 0v3m-4 0a2 2 0 00-2 2v1m2-3h4m-4 0h.01M9 16a2 2 0 11-4 0 2 2 0 014 0zm9 0a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-4">Food & Beverage</h3>
                    <p class="text-muted-foreground">Natural ingredients for functional foods, beverages, and nutritional supplements.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-4">Pharmaceuticals</h3>
                    <p class="text-muted-foreground">High-purity extracts for nutraceuticals and pharmaceutical applications.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-4">Cosmetics</h3>
                    <p class="text-muted-foreground">Natural ingredients for skincare and personal care products.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-4">Health Supplements</h3>
                    <p class="text-muted-foreground">Premium ingredients for dietary supplements and wellness products.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>