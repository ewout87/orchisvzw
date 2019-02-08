<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/secondary-navbar.htm */
class __TwigTemplate_9a28e4c8ed3e4524dd70d9a4c98e9678101834bf49159b4abc502e2bddbafa30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"navbar\" class=\"secondary-navbar\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "activities")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("activities");
        echo "\">Activiteiten</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "opinions")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opinions");
        echo "\">Opinies</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 11
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Over ons</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 14
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 17
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "reserves")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reserves");
        echo "\">Natuurgebieden</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "membership")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("membership");
        echo "\">Wordt lid</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/secondary-navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  74 => 20,  69 => 18,  65 => 17,  60 => 15,  56 => 14,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"secondary-navbar\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'activities' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'activities'|page }}\">Activiteiten</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'opinions' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'opinions'|page }}\">Opinies</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">Over ons</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'reserves' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'reserves'|page }}\">Natuurgebieden</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'membership' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'membership'|page }}\">Wordt lid</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/secondary-navbar.htm", "");
    }
}
