import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { ArrowRight, Star } from "lucide-react";
import pharmaGrade from "@/assets/pharma-grade.jpg";
import foodStrips from "@/assets/food-strips.jpg";
import bacteriological from "@/assets/bacteriological.jpg";
import foodPowder from "@/assets/food-powder.jpg";

const products = [
  {
    id: 1,
    title: "Natural Plant Extracts",
    description: "Premium seaweed, herbs, and fruit extracts for food applications",
    image: pharmaGrade,
    grade: "Natural",
    featured: true
  },
  {
    id: 2,
    title: "Functional Food Ingredients",
    description: "Bioactive compounds for nutritional and health benefits",
    image: foodStrips,
    grade: "Functional",
    featured: false
  },
  {
    id: 3,
    title: "Biotech Fermented Ingredients",
    description: "Advanced fermentation-derived ingredients for enhanced functionality",
    image: bacteriological,
    grade: "Biotech",
    featured: true
  },
  {
    id: 4,
    title: "Phytochemicals",
    description: "Concentrated bioactive compounds from plant sources",
    image: foodPowder,
    grade: "Phyto",
    featured: false
  },
  {
    id: 5,
    title: "Nutraceuticals",
    description: "Science-backed ingredients for dietary supplements",
    image: foodStrips,
    grade: "Nutri",
    featured: false
  },
  {
    id: 6,
    title: "OEM/ODM Solutions",
    description: "Custom formulation and private label manufacturing services",
    image: bacteriological,
    grade: "Custom",
    featured: true
  },
  {
    id: 7,
    title: "Bio-Extraction Products",
    description: "Sustainably extracted compounds using green technology",
    image: pharmaGrade,
    grade: "Bio",
    featured: false
  },
  {
    id: 8,
    title: "Research Ingredients",
    description: "Specialized compounds for R&D and application development",
    image: foodPowder,
    grade: "Research",
    featured: true
  }
];

const ProductsSection = () => {
  return (
    <section id="products" className="py-24 bg-gradient-section">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-20 animate-fade-in">
          <div className="inline-flex items-center space-x-2 bg-white/70 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6">
            <Star className="w-4 h-4" />
            <span>Our Products</span>
          </div>
          <h2 className="text-4xl lg:text-5xl font-playfair font-bold text-foreground mb-6 text-balance">
            Natural Food Ingredients Portfolio
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            From natural plant extracts to biotech fermented ingredients, our comprehensive product portfolio 
            serves global markets with sustainable, high-quality natural solutions.
          </p>
        </div>
        
        {/* Product Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {products.map((product, index) => (
            <Card 
              key={product.id} 
              className="group cursor-pointer hover:shadow-elevated transition-all duration-500 border-0 bg-white overflow-hidden h-full animate-fade-in"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              <CardContent className="p-0 h-full flex flex-col">
                <div className="relative aspect-square overflow-hidden">
                  {product.featured && (
                    <div className="absolute top-3 left-3 z-10 bg-primary text-primary-foreground px-2 py-1 rounded-full text-xs font-medium">
                      Featured
                    </div>
                  )}
                  <img 
                    src={product.image} 
                    alt={product.title}
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <div className="p-6 flex-grow flex flex-col">
                  <div className="mb-3">
                    <span className="inline-block bg-primary/10 text-primary px-2 py-1 rounded-lg text-xs font-medium">
                      {product.grade}
                    </span>
                  </div>
                  
                  <h3 className="text-lg font-semibold text-foreground group-hover:text-primary transition-colors mb-3 flex-grow">
                    {product.title}
                  </h3>
                  
                  <p className="text-sm text-muted-foreground leading-relaxed mb-4">
                    {product.description}
                  </p>
                  
                  <Button 
                    variant="ghost" 
                    size="sm" 
                    className="w-fit text-primary hover:text-primary-dark hover:bg-primary/5 p-0 h-auto font-medium group/btn"
                  >
                    Learn More 
                    <ArrowRight className="w-4 h-4 ml-1 group-hover/btn:translate-x-1 transition-transform" />
                  </Button>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* CTA Section */}
        <div className="bg-white rounded-3xl p-8 lg:p-12 text-center shadow-elevated">
          <h3 className="text-3xl font-playfair font-bold text-foreground mb-4">
            Need a Custom Solution?
          </h3>
          <p className="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
            Our R&D team specializes in developing customized formulations to meet your specific application requirements. 
            From concept to commercial scale, we're your trusted partner in innovation.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" className="bg-primary hover:bg-primary-dark text-primary-foreground shadow-primary">
              Contact R&D Team
              <ArrowRight className="w-5 h-5 ml-2" />
            </Button>
            <Button variant="outline" size="lg" className="border-primary/20 text-primary hover:bg-primary/5">
              Download Catalog
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ProductsSection;