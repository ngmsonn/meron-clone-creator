import { Button } from "@/components/ui/button";
import { Mail, Phone, MapPin, Globe } from "lucide-react";
import meronLogo from "@/assets/meron-logo.png";

const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground">
      <div className="container mx-auto px-4 py-16">
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div className="lg:col-span-1">
            <div className="flex items-center space-x-3 mb-6">
              <img src={meronLogo} alt="AFChem - Asia Food Chemical" className="h-10 w-auto" />
              <div className="text-sm font-medium">
                Asia Food
                <br />
                Chemical
              </div>
            </div>
            <p className="text-primary-foreground/80 mb-6 text-sm">
              Leading Vietnamese company specializing in natural food ingredients. Full-stack R&D, 
              manufacturing, OEM/ODM, and international distribution services.
            </p>
            <div className="space-y-2">
              <div className="flex items-center space-x-2 text-sm">
                <MapPin className="w-4 h-4" />
                <span>Hanoi (HQ), HCM Branch, R&D Factory in Bac Ninh</span>
              </div>
              <div className="flex items-center space-x-2 text-sm">
                <Phone className="w-4 h-4" />
                <span>+84 989 111 222</span>
              </div>
              <div className="flex items-center space-x-2 text-sm">
                <Mail className="w-4 h-4" />
                <span>contact@asia-foodchem.com</span>
              </div>
            </div>
          </div>

          {/* Products */}
          <div>
            <h3 className="font-semibold mb-4">Products</h3>
            <ul className="space-y-2 text-sm text-primary-foreground/80">
              <li><a href="#" className="hover:text-white transition-colors">Natural Plant Extracts</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Functional Food Ingredients</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Biotech Fermented Ingredients</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Phytochemicals</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Nutraceuticals</a></li>
              <li><a href="#" className="hover:text-white transition-colors">OEM/ODM Solutions</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Bio-Extraction Products</a></li>
            </ul>
          </div>

          {/* Services */}
          <div>
            <h3 className="font-semibold mb-4">Services</h3>
            <ul className="space-y-2 text-sm text-primary-foreground/80">
              <li><a href="#" className="hover:text-white transition-colors">R&D Solutions</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Food Manufacturing</a></li>
              <li><a href="#" className="hover:text-white transition-colors">OEM/ODM Solutions</a></li>
              <li><a href="#" className="hover:text-white transition-colors">International Trading</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Global Market Expansion</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Quality Assurance</a></li>
            </ul>
          </div>

          {/* Company Links */}
          <div>
            <h3 className="font-semibold mb-4">Company</h3>
            <ul className="space-y-2 text-sm text-primary-foreground/80">
              <li><a href="#about" className="hover:text-white transition-colors">About Us</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Quality & Certifications</a></li>
              <li><a href="#" className="hover:text-white transition-colors">News & Updates</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Careers</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Blog</a></li>
              <li><a href="#contact" className="hover:text-white transition-colors">Contact Us</a></li>
            </ul>
            
            <div className="mt-6">
              <h4 className="font-medium mb-3">Latest News</h4>
              <ul className="space-y-2 text-sm text-primary-foreground/80">
                <li><a href="#" className="hover:text-white transition-colors">Top Trends in Natural Food Ingredients for 2025</a></li>
                <li><a href="#" className="hover:text-white transition-colors">How Bio-fermentation is Changing Functional Food</a></li>
                <li><a href="#" className="hover:text-white transition-colors">OEM in Vietnam: Why Brands Choose AFChem</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div className="border-t border-white/20 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div className="text-sm text-primary-foreground/80">
              © 2024 Asia Food Chemical Joint Stock Company (AFChem). All rights reserved.
            </div>
            <div className="flex items-center space-x-4 text-sm">
              <span className="text-primary-foreground/60">FSSC22000 | ISO22000 | HACCP | GMP Certified</span>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;