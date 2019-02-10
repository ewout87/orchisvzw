<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/activiteiten.htm */
class __TwigTemplate_efd5a63f97b60fa212e99f61de23f737744db863003df7967e269e88dc87bf83 extends Twig_Template
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
        echo "<div class=\"activiteiten container m-b-3\">
    <div class=\"row\" >
    <h2>Duik de natuur in!</h2>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 5
            echo "        <div class=\"col-md-4\">
                <h3 class=\"title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", array()), "html", null, true);
            echo "</h3>
                    <p class=\"time\"><i class=\"far fa-calendar-alt\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "start_at", array()), "D d M, H:i"), "html", null, true);
            echo "</p>
                    ";
            // line 8
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["event"], "address", array()))) {
                // line 9
                echo "                    <p class=\"location\"><i class=\"fas fa-map-marker-alt\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "address", array()), "html", null, true);
                echo "</p>
                    ";
            }
            // line 11
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "url", array()), "html", null, true);
            echo "\">Lees meer ></a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/activiteiten.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"activiteiten container m-b-3\">
    <div class=\"row\" >
    <h2>Duik de natuur in!</h2>
        {% for event in events %}
        <div class=\"col-md-4\">
                <h3 class=\"title\">{{event.name}}</h3>
                    <p class=\"time\"><i class=\"far fa-calendar-alt\"></i> {{event.start_at | date('D d M, H:i')}}</p>
                    {% if event.address is not empty %}
                    <p class=\"location\"><i class=\"fas fa-map-marker-alt\"></i> {{event.address}}</p>
                    {% endif %}
                    <a href=\"{{ event.url }}\">Lees meer ></a>
        </div>
        {% endfor %}
    </div>
    </div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/activiteiten.htm", "");
    }
}
