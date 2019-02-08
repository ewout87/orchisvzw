<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/natuurgebied.htm */
class __TwigTemplate_6e6973b5607b12f6640787ed8491e957a85abc414ac6ac9268aa1fc7b0cf8936 extends Twig_Template
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
        echo "<div class=\"container m-b-3\">
";
        // line 2
        if (($context["record"] ?? null)) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
            echo "</h2>
            <h2><small>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "location", array()), "html", null, true);
            echo " </small></h2>
             <br>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div>";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description_html", array());
            echo "</div>
        </div>
        <div class=\"col-md-6\">
            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", array()), "count", array())) {
                // line 16
                echo "                   ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 17
                    echo "                        <div class=\"col-md-4\">
                          <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\" data-toggle=\"lightbox\" data-gallery=\"example-gallery\">
                             <img class=\"img-responsive\" data-src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", array())) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", array())) : (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()))), "html", null, true);
                    echo "\">
                          </a>
                        </div>
                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    
             ";
            }
            // line 24
            echo "        </div>
    </div>
    ";
        } else {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/natuurgebied.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  90 => 27,  85 => 24,  81 => 22,  65 => 19,  61 => 18,  58 => 17,  53 => 16,  51 => 15,  45 => 12,  36 => 6,  32 => 5,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-b-3\">
{% if record %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>{{ record.name }}</h2>
            <h2><small>{{ record.location}} </small></h2>
             <br>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div>{{ record.description_html|raw }}</div>
        </div>
        <div class=\"col-md-6\">
            {% if record.images.count %}
                   {% for image in record.images %}
                        <div class=\"col-md-4\">
                          <a href=\"{{ image.path }}\" data-toggle=\"lightbox\" data-gallery=\"example-gallery\">
                             <img class=\"img-responsive\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\" title=\"{{ image.title != null ? image.title : record.name }}\">
                          </a>
                        </div>
                   {% endfor %}    
             {% endif %}
        </div>
    </div>
    {% else %}
    {{ notFoundMessage }}
    {% endif %}
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/natuurgebied.htm", "");
    }
}
