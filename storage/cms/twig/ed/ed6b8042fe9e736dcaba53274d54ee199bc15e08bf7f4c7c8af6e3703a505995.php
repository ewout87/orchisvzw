<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/about.htm */
class __TwigTemplate_df180855275b69ad4e7634c65dbed881c83ff090b7955d8a6045479268b357b0 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <img src=\"./storage/app/media/ontstaan.jpg\" />
        </div>
        <div class=\"col-md-8\">
            ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("ontstaan.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "        </div>
    </div> 
    <div class=\"row\">
        <div class=\"col-md-8 \">
            ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("doelstelling.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "            ";
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("werkingsgebied.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "        </div>
        <div class=\"col-md-4\">
            <a href=\"./storage/app/media/werkingsgebied_wolken.jpg\" data-toggle=\"lightbox\" data-gallery=\"example-gallery\">
            <img src=\"./storage/app/media/werkingsgebied_wolken.jpg\" />
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  45 => 13,  41 => 12,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <img src=\"./storage/app/media/ontstaan.jpg\" />
        </div>
        <div class=\"col-md-8\">
            {% content 'ontstaan.htm' %}
        </div>
    </div> 
    <div class=\"row\">
        <div class=\"col-md-8 \">
            {% content 'doelstelling.htm' %}
            {% content 'werkingsgebied.htm' %}
        </div>
        <div class=\"col-md-4\">
            <a href=\"./storage/app/media/werkingsgebied_wolken.jpg\" data-toggle=\"lightbox\" data-gallery=\"example-gallery\">
            <img src=\"./storage/app/media/werkingsgebied_wolken.jpg\" />
            </a>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/about.htm", "");
    }
}
