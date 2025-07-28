import { Button } from "@/components/ui/button";
import { Play, ArrowRight, Award, Globe } from "lucide-react";
import heroFood from "@/assets/hero-food.jpg";

const HeroSection = () => {
  return (
    <section className="relative min-h-screen flex items-center bg-gradient-to-br from-background via-accent/20 to-secondary/30 overflow-hidden">
      {/* Floating bubbles background */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        <div className="absolute top-20 left-10 w-8 h-8 bg-primary/10 rounded-full blur-md animate-float-1"></div>
        <div className="absolute top-32 right-20 w-12 h-12 bg-primary/15 rounded-full blur-lg animate-float-2"></div>
        <div className="absolute top-48 left-1/4 w-6 h-6 bg-primary/8 rounded-full blur-sm animate-float-3"></div>
        <div className="absolute top-64 right-1/3 w-10 h-10 bg-primary/12 rounded-full blur-md animate-float-1" style={{animationDelay: '2s'}}></div>
        <div className="absolute bottom-40 left-16 w-14 h-14 bg-primary/10 rounded-full blur-xl animate-float-2" style={{animationDelay: '4s'}}></div>
        <div className="absolute bottom-24 right-12 w-7 h-7 bg-primary/20 rounded-full blur-md animate-float-3" style={{animationDelay: '1s'}}></div>
        <div className="absolute top-80 left-2/3 w-9 h-9 bg-primary/8 rounded-full blur-sm animate-float-1" style={{animationDelay: '3s'}}></div>
        <div className="absolute bottom-60 right-1/4 w-11 h-11 bg-primary/15 rounded-full blur-lg animate-float-2" style={{animationDelay: '5s'}}></div>
      </div>
      
      {/* Background pattern */}
      <div className="absolute inset-0 opacity-5">
        <div className="absolute inset-0" style={{
          backgroundImage: 'radial-gradient(circle at 1px 1px, hsl(var(--primary)) 1px, transparent 0)',
          backgroundSize: '40px 40px'
        }}></div>
      </div>
      
      <div className="container mx-auto px-4 py-20 lg:py-32">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          <div className="space-y-8 animate-slide-in-left">
            {/* Badge */}
            <div className="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium">
              <Award className="w-4 h-4" />
              <span>Leading Vietnamese Natural Ingredients Company</span>
            </div>
            
            <div className="space-y-6">
              <h1 className="text-5xl lg:text-6xl font-playfair font-bold text-foreground leading-tight text-balance">
                <span className="text-primary block">Encapsulating Nature</span>
                Empowering Healthy Living
              </h1>
              
              <p className="text-xl text-muted-foreground leading-relaxed max-w-2xl">
                Asia Food Chemical (AFChem) is a leading Vietnamese company specializing in natural food ingredients. 
                We offer full-stack R&D, manufacturing, OEM/ODM, and international distribution services.
              </p>
            </div>
            
            <div className="flex flex-col sm:flex-row gap-4">
              <Button size="lg" className="bg-primary hover:bg-primary-dark text-primary-foreground px-8 py-4 text-lg font-medium shadow-primary rounded-full">
                Explore Products
                <ArrowRight className="w-5 h-5 ml-2" />
              </Button>
              
              <Button 
                variant="outline" 
                size="lg" 
                className="border-primary/30 text-primary hover:bg-primary/10 px-8 py-4 text-lg font-medium rounded-full 
                         bg-white/80 backdrop-blur-sm hover:border-primary/50 transition-all duration-300"
              >
                <Play className="w-5 h-5 mr-2" />
                Watch Video
              </Button>
            </div>
            
            {/* Stats */}
            <div className="grid grid-cols-2 gap-8 pt-8 border-t border-border/10">
              <div className="text-center lg:text-left">
                <div className="text-3xl font-playfair font-bold text-primary">ISO</div>
                <div className="text-sm text-muted-foreground">Certified Quality</div>
              </div>
              <div className="text-center lg:text-left">
                <div className="text-3xl font-playfair font-bold text-primary">Global</div>
                <div className="text-sm text-muted-foreground">Export Markets</div>
              </div>
            </div>
          </div>
          
          <div className="relative animate-slide-in-right">
            <div className="relative">
              {/* Floating elements */}
              <div className="absolute -top-6 -left-6 w-24 h-24 bg-primary/10 rounded-full blur-2xl"></div>
              <div className="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary/20 rounded-full blur-2xl"></div>
              
              <div className="relative rounded-3xl overflow-hidden shadow-elevated bg-white p-4">
                <img 
                  src={heroFood} 
                  alt="AFChem natural food ingredients and R&D facility" 
                  className="w-full h-auto object-cover rounded-2xl transform hover:scale-105 transition-transform duration-700"
                />
              </div>
              
              {/* Certification badge */}
              <div className="absolute -bottom-4 -left-4 bg-white rounded-2xl p-4 shadow-card">
                <div className="flex items-center space-x-3">
                  <div className="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                    <Globe className="w-5 h-5 text-primary" />
                  </div>
                  <div>
                    <div className="font-semibold text-sm text-foreground">FSSC22000</div>
                    <div className="text-xs text-muted-foreground">Certified Manufacturing</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;