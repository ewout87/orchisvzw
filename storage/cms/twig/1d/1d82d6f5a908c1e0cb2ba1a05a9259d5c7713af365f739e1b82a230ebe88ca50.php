<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm */
class __TwigTemplate_bb2a215cce8faacf5b0ea532f773065ab6237d3e6b3dc8050787a72aa3bf5943 extends Twig_Template
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
        echo "<div class=\"natuurgebieden-carousel\">
<h2>Ontdek onze natuurgebieden</h2>
    <div class=\"carousel\">
     ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 5
            echo "     <div class=\"container\">
         ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), "count", array())) {
                // line 7
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 8
                    echo "                    <div>
                      <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\">
                         <img class=\"img-responsive\" data-src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", array())) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", array())) : (twig_get_attribute($this->env, $this->source, $context["record"], "name", array()))), "html", null, true);
                    echo "\">
                      </a>
                    </div>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "    
         ";
            }
            // line 15
            echo "             <div class=\"overlay\">
                 <h3><small>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "location", array()), "html", null, true);
            echo "</small></h3>
                 <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "</h3>
                 <button class=\"read-more-button\">Toon</button>
             </div>
                 ";
            // line 20
            if (($context["detailsPage"] ?? null)) {
                // line 21
                echo "                        <a class=\"read-more-link\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\"></a>
                ";
            }
            // line 23
            echo "
    </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  90 => 23,  84 => 21,  82 => 20,  76 => 17,  72 => 16,  69 => 15,  65 => 13,  49 => 10,  45 => 9,  42 => 8,  37 => 7,  35 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"natuurgebieden-carousel\">
<h2>Ontdek onze natuurgebieden</h2>
    <div class=\"carousel\">
     {% for record in records %}
     <div class=\"container\">
         {% if record.images.count %}
               {% for image in record.images|slice(0, 1) %}
                    <div>
                      <a href=\"{{ image.path }}\">
                         <img class=\"img-responsive\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\" title=\"{{ image.title != null ? image.title : record.name }}\">
                      </a>
                    </div>
               {% endfor %}    
         {% endif %}
             <div class=\"overlay\">
                 <h3><small>{{ record.location }}</small></h3>
                 <h3>{{ record.name }}</h3>
                 <button class=\"read-more-button\">Toon</button>
             </div>
                 {% if detailsPage %}
                        <a class=\"read-more-link\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"></a>
                {% endif %}

    </div>
   {% endfor %}
    </div>
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm", "");
    }
}
