<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm */
class __TwigTemplate_e23fa414b417d4fdc775dcb3abefb2c407387fc17a18f512232202931267d545 extends Twig_Template
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
        echo "<section>
\t<div  class=\"page-header\" style=\"background-image: url(/orchisvzw/storage/app/media/F24__1030442-1.jpg)\">
\t\t<div class=\"container text-xs-center\" >
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 8
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 4,  32 => 6,  29 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
\t<div  class=\"page-header\" style=\"background-image: url(/orchisvzw/storage/app/media/F24__1030442-1.jpg)\">
\t\t<div class=\"container text-xs-center\" >
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">
\t\t\t{{ this.page.title }}</h1>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm", "");
    }
}
