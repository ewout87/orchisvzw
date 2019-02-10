<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/membership.htm */
class __TwigTemplate_3d7fa8fc4e148ef362b247e71dec3ecea63d108e952b5a6e8252c31b71ed322a extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("lidmaatschap.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/membership.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-b-3\">
    {% content 'lidmaatschap.htm' %}
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/membership.htm", "");
    }
}
