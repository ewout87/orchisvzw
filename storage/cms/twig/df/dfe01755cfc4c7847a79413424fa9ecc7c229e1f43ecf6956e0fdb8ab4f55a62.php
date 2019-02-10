<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/opinion.htm */
class __TwigTemplate_4870d48cebe2d6f7456ca4146fa7bf19d5a53c0bad278aa8be542017c1454a9b extends Twig_Template
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
        if (($context["post"] ?? null)) {
            // line 3
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 5
            echo "    <h2>Opinie niet gevonden</h2>
";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/opinion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 5,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-b-3\">
{% if post %}
    {% component 'blogPost' %}
{% else %}
    <h2>Opinie niet gevonden</h2>
{% endif %}
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/opinion.htm", "");
    }
}
