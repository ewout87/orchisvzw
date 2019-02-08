<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/showcase.htm */
class __TwigTemplate_5846204fece74683b503a6fb0373b981a406e12a78755d74d23d4676f49e291f extends Twig_Template
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
        echo "<div class=\"container m-b-3 showcase\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "count", array())) {
                // line 6
                echo "                
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 8
                    echo "                    <div class=\"teaser overlay\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "); max-width: 100%\">
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "                 ";
            } else {
                echo "  
                    <div class=\"teaser\">
                 ";
            }
            // line 13
            echo "                        <div class=\"teaser-content\">
                                <h3><i class=\"fas fa-binoculars\"></i></h3>
                                <h3>Opinie</h3>
                                <strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</strong>
                                <button class=\"read-more-button\">lees meer</button>
                            <a class=\"read-more-link\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\"></a>
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3><i class=\"fas fa-binoculars\"></i></h3>
                    <h3>Scholen waar naartoe?</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reserves");
        echo "\"></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3><i class=\"fas fa-gavel\"></i><h3>
                    <h3>Ruimtelijke ordening</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opinions");
        echo "\"></a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3>Plant een boom</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reserves");
        echo "\"></a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/showcase.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  102 => 41,  87 => 29,  78 => 22,  68 => 18,  63 => 16,  58 => 13,  51 => 10,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-b-3 showcase\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            {% for post in posts %}
                {% if post.featured_images.count %}
                
                    {% for image in post.featured_images %}
                    <div class=\"teaser overlay\" style=\"background-image: url({{ image.path }}); max-width: 100%\">
                    {% endfor %}
                 {% else %}  
                    <div class=\"teaser\">
                 {% endif %}
                        <div class=\"teaser-content\">
                                <h3><i class=\"fas fa-binoculars\"></i></h3>
                                <h3>Opinie</h3>
                                <strong>{{post.title}}</strong>
                                <button class=\"read-more-button\">lees meer</button>
                            <a class=\"read-more-link\" href=\"{{ post.url }}\"></a>
                        </div>
                    </div>
            {% endfor %}
        </div>
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3><i class=\"fas fa-binoculars\"></i></h3>
                    <h3>Scholen waar naartoe?</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"{{ 'reserves'|page }}\"></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3><i class=\"fas fa-gavel\"></i><h3>
                    <h3>Ruimtelijke ordening</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"{{ 'opinions'|page }}\"></a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"teaser\">
                <div class=\"teaser-content\">
                    <h3>Plant een boom</h3>
                    <button class=\"read-more-button\">lees meer</button>
                    <a class=\"read-more-link\" href=\"{{ 'reserves'|page }}\"></a>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/partials/showcase.htm", "");
    }
}
