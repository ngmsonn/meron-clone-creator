import { Button } from "@/components/ui/button";
import { Menu, X } from "lucide-react";
import { useState } from "react";
import meronLogo from "@/assets/meron-logo.png";

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const navItems = [
    { label: "Home", href: "#" },
    { label: "About Us", href: "#about" },
    { label: "Products", href: "#products" },
    { label: "Applications", href: "#applications" },
    { label: "Certifications", href: "#certifications" },
    { label: "News", href: "#news" },
    { label: "Contact", href: "#contact" }
  ];

  return (
    <header className="bg-gradient-glass shadow-glass sticky top-0 z-50 border-b border-border/20 backdrop-blur-md">
      <div className="container mx-auto px-4">
        {/* Top bar */}
        <div className="hidden lg:flex justify-end py-3 space-x-4 border-b border-border/10">
          <Button variant="outline" size="sm" className="text-xs border-primary/20 text-primary hover:bg-primary/5">
            R&D Solutions
            <br />
            <span className="text-xs opacity-75">Natural Ingredient Development</span>
          </Button>
          <Button variant="outline" size="sm" className="text-xs border-primary/20 text-primary hover:bg-primary/5">
            OEM/ODM Services
            <br />
            <span className="text-xs opacity-75">Full-Package Manufacturing</span>
          </Button>
        </div>
        
        {/* Main header */}
        <div className="flex items-center justify-between py-4">
          <div className="flex items-center space-x-3">
            <img src={meronLogo} alt="AFChem - Asia Food Chemical" className="h-10 w-auto" />
            <div className="text-foreground">
              <div className="font-playfair font-semibold text-lg leading-none">Asia Food</div>
              <div className="font-playfair font-semibold text-lg leading-none">Chemical</div>
            </div>
          </div>
          
          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center space-x-8">
            {navItems.map((item) => (
              <a 
                key={item.label}
                href={item.href} 
                className="text-sm font-medium text-foreground/80 hover:text-primary transition-colors relative group"
              >
                {item.label}
                <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
              </a>
            ))}
          </nav>

          <div className="flex items-center space-x-3">
            <Button variant="outline" size="sm" className="hidden lg:flex border-primary/20 text-primary hover:bg-primary/5">
              📧 Contact Us
            </Button>
            
            {/* Mobile menu button */}
            <Button
              variant="ghost"
              size="sm"
              className="lg:hidden"
              onClick={() => setIsMenuOpen(!isMenuOpen)}
            >
              {isMenuOpen ? <X className="w-5 h-5" /> : <Menu className="w-5 h-5" />}
            </Button>
          </div>
        </div>

        {/* Mobile Navigation */}
        {isMenuOpen && (
          <nav className="lg:hidden py-4 border-t border-border/10 animate-fade-in">
            <div className="flex flex-col space-y-3">
              {navItems.map((item) => (
                <a 
                  key={item.label}
                  href={item.href} 
                  className="text-sm font-medium text-foreground/80 hover:text-primary transition-colors py-2"
                  onClick={() => setIsMenuOpen(false)}
                >
                  {item.label}
                </a>
              ))}
              <Button variant="outline" size="sm" className="border-primary/20 text-primary hover:bg-primary/5 w-fit mt-4">
                📧 Contact Us
              </Button>
            </div>
          </nav>
        )}
      </div>
    </header>
  );
};

export default Header;