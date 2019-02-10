<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_1247ba4bc487866c7dd36824b2ca96d5dd2817b6b4d9c044a243f230ac03ff23 extends Twig_Template
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
    <div class=\"page-description\">
        <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Natuurcentrum</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("natuurcentrum"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "        </div>
        <div class=\"col-md-6 \">
            <div id=\"leafmap\"></div>
            ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("LeafletMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Contactinformatie</h2>
        </div>
    </div>
        ";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contactinformatie"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 25
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  61 => 24,  52 => 17,  48 => 16,  43 => 13,  39 => 12,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-b-3\">
    <div class=\"page-description\">
        <p>{{ this.page.description }}</p>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Natuurcentrum</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {% content 'natuurcentrum' %}
        </div>
        <div class=\"col-md-6 \">
            <div id=\"leafmap\"></div>
            {% component 'LeafletMap' %}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Contactinformatie</h2>
        </div>
    </div>
        {% content 'contactinformatie' %}

</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
