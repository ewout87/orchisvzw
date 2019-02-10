<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/primary-navbar.htm */
class __TwigTemplate_a41e06cde3300f5a12c6c01516f859802d4977493148daf81e91c003bdf3b857 extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"primary-navbar\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t    <img src=\"./storage/app/media/logo_kl.png\" />
\t\t\t</a>
\t\t\t<div class=\"nav navbar-nav pull-xs-right\">
\t\t\t<form class=\"form-inline\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
              </form>
            </ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/primary-navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"primary-navbar\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t    <img src=\"./storage/app/media/logo_kl.png\" />
\t\t\t</a>
\t\t\t<div class=\"nav navbar-nav pull-xs-right\">
\t\t\t<form class=\"form-inline\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
              </form>
            </ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/primary-navbar.htm", "");
    }
}
