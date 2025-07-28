import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { 
  Utensils, 
  Pill, 
  Beaker, 
  Sparkles, 
  Beef, 
  IceCream,
  TestTube,
  Leaf,
  ArrowRight,
  Target,
  Factory,
  Globe
} from "lucide-react";

const ApplicationsSection = () => {
  const applications = [
    {
      icon: Beaker,
      title: "R&D – Research & Application",
      description: "Developing natural ingredients through bio-extraction and microbial fermentation",
      examples: ["Bio-extraction", "Fermentation", "Product Development", "Innovation"],
      color: "from-purple-50 to-purple-100"
    },
    {
      icon: Factory,
      title: "Food Manufacturing",
      description: "Factory certified by FSSC22000, ISO22000, GMP, and HACCP standards",
      examples: ["FSSC22000", "ISO22000", "GMP Certified", "HACCP"],
      color: "from-blue-50 to-blue-100"
    },
    {
      icon: Utensils,
      title: "OEM/ODM Solutions",
      description: "Full-package service for private label food supplement production",
      examples: ["Private Label", "Custom Formulation", "Full-Package", "White Label"],
      color: "from-green-50 to-green-100"
    },
    {
      icon: Globe,
      title: "International Trading",
      description: "Exclusive distributor partnerships and representation services",
      examples: ["Distributor Partnerships", "Exclusive Rights", "Trading", "Representation"],
      color: "from-orange-50 to-orange-100"
    },
    {
      icon: Target,
      title: "Global Market Expansion",
      description: "Export to Europe, Japan, Korea, Australia, and expanding markets",
      examples: ["Europe", "Japan", "Korea", "Australia"],
      color: "from-teal-50 to-teal-100"
    },
    {
      icon: Leaf,
      title: "Sustainable Solutions",
      description: "Green technology and environmentally friendly production processes",
      examples: ["Green Technology", "Sustainability", "Eco-Friendly", "Natural"],
      color: "from-emerald-50 to-emerald-100"
    },
    {
      icon: TestTube,
      title: "Quality Assurance",
      description: "International food safety standards and rigorous testing protocols",
      examples: ["Quality Testing", "Safety Standards", "Certification", "Compliance"],
      color: "from-pink-50 to-pink-100"
    },
    {
      icon: Sparkles,
      title: "Innovation Hub",
      description: "Cutting-edge research facility in Bac Ninh for product development",
      examples: ["R&D Facility", "Innovation", "Product Development", "Research"],
      color: "from-indigo-50 to-indigo-100"
    }
  ];

  return (
    <section id="applications" className="py-24 bg-background">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-20 animate-fade-in">
          <div className="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6">
            <Target className="w-4 h-4" />
            <span>Applications</span>
          </div>
          <h2 className="text-4xl lg:text-5xl font-playfair font-bold text-foreground mb-6 text-balance">
            Our Core Services
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            AFChem provides comprehensive services from R&D to manufacturing and global distribution, 
            ensuring sustainable supply chains with international quality standards.
          </p>
        </div>

        {/* Applications Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {applications.map((app, index) => {
            const IconComponent = app.icon;
            return (
              <Card 
                key={index} 
                className="group hover:shadow-elevated transition-all duration-500 border-0 bg-white h-full overflow-hidden animate-fade-in"
                style={{ animationDelay: `${index * 100}ms` }}
              >
                <CardContent className="p-6 h-full flex flex-col">
                  <div className={`w-16 h-16 bg-gradient-to-br ${app.color} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300`}>
                    <IconComponent className="w-8 h-8 text-primary" />
                  </div>
                  
                  <h3 className="text-xl font-semibold text-foreground mb-3 group-hover:text-primary transition-colors">
                    {app.title}
                  </h3>
                  
                  <p className="text-muted-foreground mb-6 flex-grow leading-relaxed">
                    {app.description}
                  </p>
                  
                  <div className="space-y-2">
                    <div className="text-sm font-medium text-foreground mb-3">Key Applications:</div>
                    <div className="flex flex-wrap gap-2">
                      {app.examples.map((example, idx) => (
                        <span key={idx} className="text-xs bg-primary/5 text-primary px-3 py-1 rounded-full border border-primary/10">
                          {example}
                        </span>
                      ))}
                    </div>
                  </div>
                </CardContent>
              </Card>
            );
          })}
        </div>

        {/* CTA Section */}
        <div className="bg-gradient-primary rounded-3xl p-8 lg:p-12 text-center text-white shadow-elevated">
          <h3 className="text-3xl font-playfair font-bold mb-4">
            Partner with AFChem
          </h3>
          <p className="text-white/90 mb-8 max-w-2xl mx-auto text-lg leading-relaxed">
            From full-stack R&D to OEM/ODM manufacturing, AFChem offers comprehensive solutions for natural food ingredients. 
            Contact us to explore partnership opportunities and custom development services.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button variant="secondary" size="lg" className="bg-white text-primary hover:bg-white/90 shadow-lg">
              Contact R&D Team
              <ArrowRight className="w-5 h-5 ml-2" />
            </Button>
            <Button variant="outline" size="lg" className="border-white/30 text-white hover:bg-white/10">
              Technical Resources
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ApplicationsSection;