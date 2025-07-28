import { Badge, Shield, Award, CheckCircle, Star, Globe } from "lucide-react";

const CertificationsSection = () => {
  const certifications = [
    {
      icon: Shield,
      title: "FSSC22000",
      description: "Food Safety System Certification",
      year: "2024"
    },
    {
      icon: Badge,
      title: "ISO22000",
      description: "Food Safety Management",
      year: "2024"
    },
    {
      icon: Award,
      title: "HACCP Certified",
      description: "Hazard Analysis Critical Control",
      year: "2024"
    },
    {
      icon: CheckCircle,
      title: "GMP Certified",
      description: "Good Manufacturing Practice",
      year: "2024"
    },
    {
      icon: Star,
      title: "Green Technology",
      description: "Sustainable Production",
      year: "2024"
    },
    {
      icon: Globe,
      title: "International Standards",
      description: "Global Quality Compliance",
      year: "2024"
    }
  ];

  return (
    <section className="py-24 bg-gradient-section">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-playfair font-bold text-foreground mb-6">
            Trusted <span className="text-primary">Certifications</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Our commitment to quality and safety is backed by internationally recognized 
            certifications and rigorous testing standards.
          </p>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
          {certifications.map((cert, index) => {
            const IconComponent = cert.icon;
            return (
              <div
                key={index}
                className="group relative bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center 
                         shadow-card hover:shadow-elevated transition-all duration-300 
                         border border-white/50 hover:border-primary/20 hover:-translate-y-1"
              >
                <div className="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4 
                              group-hover:bg-primary/20 transition-colors duration-300">
                  <IconComponent className="w-8 h-8 text-primary" />
                </div>
                <h3 className="font-semibold text-foreground mb-2 text-sm">{cert.title}</h3>
                <p className="text-xs text-muted-foreground mb-2">{cert.description}</p>
                <span className="text-xs text-primary font-medium">{cert.year}</span>
              </div>
            );
          })}
        </div>

        <div className="mt-16 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/60 backdrop-blur-sm 
                         text-primary px-6 py-3 rounded-full text-sm font-medium border border-white/50">
            <CheckCircle className="w-4 h-4" />
            <span>All products meet international quality standards</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CertificationsSection;