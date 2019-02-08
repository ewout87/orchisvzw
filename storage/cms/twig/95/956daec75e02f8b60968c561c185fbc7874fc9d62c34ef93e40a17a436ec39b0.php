<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/reserves.htm */
class __TwigTemplate_12a771edb70959ea8c37706204bc33b50c19c800d238d929e3402d969f59196b extends Twig_Template
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
<div class=\"page-description\">
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
    <hr>
</div>

   <div id=\"map\"></div>
    



<div class=\"row\">
   ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "      <div class=\"col-md-4\">
         <div class=\"teaser\">
         ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), "count", array())) {
                // line 17
                echo "            <div id=\"post-list-featured-images-top\">
               ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 19
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\">
                     <img class=\"img-responsive\" data-src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", array())) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", array()) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", array())) : (twig_get_attribute($this->env, $this->source, $context["record"], "name", array()))), "html", null, true);
                    echo "\">
                  </a>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </div>
         ";
            }
            // line 25
            echo "
        <div class=\"teaser-content\">
             <h3 class=\"post-list-title p-name\" itemprop=\"headline\">
                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "
             </h3>
             <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", array()), "html", null, true);
            echo "</p>
             <button class=\"read-more-button\">Lees meer</button>
             ";
            // line 32
            if (($context["detailsPage"] ?? null)) {
                // line 33
                echo "                    <a class=\"read-more-link\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\"></a>
                ";
            }
            // line 35
            echo "         </div>
         </div>
      </div>
   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "      <div class=\"no-post-message\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "<div class=\"row\">
<div class=\"container\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/reserves.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  113 => 39,  105 => 35,  99 => 33,  97 => 32,  92 => 30,  87 => 28,  82 => 25,  78 => 23,  63 => 20,  58 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  40 => 13,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
<div class=\"page-description\">
    <p>{{ this.page.description }}</p>
    <hr>
</div>

   <div id=\"map\"></div>
    



<div class=\"row\">
   {% for record in records %}
      <div class=\"col-md-4\">
         <div class=\"teaser\">
         {% if record.images.count %}
            <div id=\"post-list-featured-images-top\">
               {% for image in record.images|slice(0, 1) %}
                  <a href=\"{{ image.path }}\">
                     <img class=\"img-responsive\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\" title=\"{{ image.title != null ? image.title : record.name }}\">
                  </a>
               {% endfor %}
            </div>
         {% endif %}

        <div class=\"teaser-content\">
             <h3 class=\"post-list-title p-name\" itemprop=\"headline\">
                {{ record.name }}
             </h3>
             <p>{{ post.summary }}</p>
             <button class=\"read-more-button\">Lees meer</button>
             {% if detailsPage %}
                    <a class=\"read-more-link\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"></a>
                {% endif %}
         </div>
         </div>
      </div>
   {% else %}
      <div class=\"no-post-message\">{{ noPostsMessage }}</div>
   {% endfor %}
<div class=\"row\">
<div class=\"container\">", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/reserves.htm", "");
    }
}
