<?php
/**
 * About section template part
 */
?>

<section id="about" class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <div class="inline-flex items-center px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium">
                        About AFChem
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground">
                        Pioneering Natural Solutions for Global Health
                    </h2>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        Since our founding, Asia Food Chemical has been at the forefront of natural ingredient innovation, 
                        combining traditional Vietnamese knowledge with cutting-edge scientific research.
                    </p>
                </div>
                
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-foreground">R&D Excellence</h3>
                        <p class="text-muted-foreground">State-of-the-art research facility in Bac Ninh with advanced extraction and analysis capabilities.</p>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-foreground">Quality Assurance</h3>
                        <p class="text-muted-foreground">FSSC22000, ISO22000, HACCP, and GMP certified manufacturing processes.</p>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#certifications" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors">
                        View Certifications
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 border border-border text-foreground rounded-lg hover:bg-muted transition-colors">
                        Get in Touch
                    </a>
                </div>
            </div>
            
            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pharma-grade.jpg" alt="Pharma Grade" class="w-full h-48 object-cover rounded-lg shadow-card" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-powder.jpg" alt="Food Powder" class="w-full h-32 object-cover rounded-lg shadow-card" />
                    </div>
                    <div class="space-y-4 pt-8">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bacteriological.jpg" alt="Bacteriological" class="w-full h-32 object-cover rounded-lg shadow-card" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-strips.jpg" alt="Food Strips" class="w-full h-48 object-cover rounded-lg shadow-card" />
                    </div>
                </div>
                
                <!-- Stats overlay -->
                <div class="absolute -bottom-6 -left-6 bg-white rounded-xl p-6 shadow-elevated">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-2xl font-bold text-primary">15+</div>
                            <div class="text-xs text-muted-foreground">Years Experience</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-primary">100+</div>
                            <div class="text-xs text-muted-foreground">Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>