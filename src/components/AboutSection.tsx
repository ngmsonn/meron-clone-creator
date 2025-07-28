import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Award, Globe, Users, Factory, ArrowRight, CheckCircle } from "lucide-react";

const AboutSection = () => {
  const highlights = [
    {
      icon: Factory,
      title: "R&D Excellence",
      description: "Advanced research & development through bio-extraction and microbial fermentation",
      metric: "R&D"
    },
    {
      icon: Globe,
      title: "Global Markets",
      description: "Export to Europe, Japan, Korea, Australia, and more international markets",
      metric: "Global"
    },
    {
      icon: Award,
      title: "Quality Certified",
      description: "ISO22000, HACCP, FSSC22000 certified manufacturing facilities",
      metric: "ISO"
    },
    {
      icon: Users,
      title: "Full OEM/ODM",
      description: "Complete private label food supplement production services",
      metric: "OEM"
    }
  ];

  const certifications = [
    "FSSC22000 Certified",
    "ISO22000 Certified",
    "HACCP Certified", 
    "GMP Certified",
    "Green Technology",
    "International Standards"
  ];

  const features = [
    "Full-stack R&D and application development",
    "FSSC22000 certified manufacturing facility",
    "Bio-extraction and microbial fermentation",
    "Sustainable green technology processes",
    "OEM/ODM private label production",
    "International distribution partnerships"
  ];

  return (
    <section id="about" className="py-24 bg-background">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-20 animate-fade-in">
          <div className="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6">
            <Award className="w-4 h-4" />
            <span>About AFChem</span>
          </div>
          <h2 className="text-4xl lg:text-5xl font-playfair font-bold text-foreground mb-6 text-balance">
            Natural Food Ingredients Excellence
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Asia Food Chemical (AFChem) is a leading Vietnamese company specializing in natural food ingredients. 
            Our commitment to green technology and international food safety standards ensures reliable, sustainable supply chains.
          </p>
        </div>

        {/* Stats Cards */}
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
          {highlights.map((item, index) => {
            const IconComponent = item.icon;
            return (
              <Card key={index} className="group hover:shadow-elevated transition-all duration-500 border-0 bg-white animate-fade-in" style={{ animationDelay: `${index * 100}ms` }}>
                <CardContent className="p-8 text-center">
                  <div className="w-16 h-16 bg-gradient-to-br from-primary/10 to-primary/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <IconComponent className="w-8 h-8 text-primary" />
                  </div>
                  <div className="text-3xl font-playfair font-bold text-primary mb-2">{item.metric}</div>
                  <h3 className="font-semibold text-foreground mb-3">{item.title}</h3>
                  <p className="text-sm text-muted-foreground leading-relaxed">{item.description}</p>
                </CardContent>
              </Card>
            );
          })}
        </div>

        {/* Main Content - Alternating Layout */}
        <div className="grid lg:grid-cols-2 gap-16 items-center mb-20">
          {/* Left Column */}
          <div className="space-y-8 animate-slide-in-left">
            <div>
              <h3 className="text-3xl lg:text-4xl font-playfair font-bold text-foreground mb-6">
                Leading Natural Ingredients Innovation
              </h3>
              <p className="text-lg text-muted-foreground leading-relaxed mb-8">
                Asia Food Chemical (AFChem) specializes in developing natural food ingredients through 
                advanced bio-extraction and fermentation technologies. Based in Vietnam with facilities 
                in Hanoi, HCM, and our R&D factory in Bac Ninh, we serve international markets with sustainable solutions.
              </p>
              
              <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                {features.map((feature, index) => (
                  <div key={index} className="flex items-center space-x-3">
                    <CheckCircle className="w-5 h-5 text-primary flex-shrink-0" />
                    <span className="text-sm text-muted-foreground">{feature}</span>
                  </div>
                ))}
              </div>

              <Button size="lg" className="bg-primary hover:bg-primary-dark text-primary-foreground shadow-primary">
                Learn More About Us
                <ArrowRight className="w-5 h-5 ml-2" />
              </Button>
            </div>
          </div>

          {/* Right Column - Certifications */}
          <div className="animate-slide-in-right">
            <div className="bg-gradient-section rounded-3xl p-8 lg:p-12">
              <h4 className="text-2xl lg:text-3xl font-playfair font-bold text-foreground mb-6">
                Quality & Certifications
              </h4>
              <p className="text-muted-foreground mb-8 leading-relaxed">
                Our commitment to excellence is reflected in our comprehensive quality management system 
                and international certifications, ensuring consistent quality and safety standards.
              </p>
              
              <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                {certifications.map((cert, index) => (
                  <Badge key={index} variant="secondary" className="justify-start p-4 bg-white/50 hover:bg-white/70 transition-colors">
                    <Award className="w-4 h-4 mr-2 text-primary" />
                    {cert}
                  </Badge>
                ))}
              </div>

              <div className="bg-white/70 rounded-2xl p-6">
                <div className="grid grid-cols-2 gap-6 text-center">
                  <div>
                    <div className="text-2xl font-playfair font-bold text-primary">Global</div>
                    <div className="text-sm text-muted-foreground">Export Markets</div>
                  </div>
                  <div>
                    <div className="text-2xl font-playfair font-bold text-primary">R&D</div>
                    <div className="text-sm text-muted-foreground">Innovation Focus</div>
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

export default AboutSection;