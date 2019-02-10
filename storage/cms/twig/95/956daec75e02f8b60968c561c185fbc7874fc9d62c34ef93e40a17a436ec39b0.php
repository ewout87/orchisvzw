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
        echo "<div class=\"page-description\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
</div>
   <div id=\"map\"></div>
    <script>

        var map = L.map('map')
        var i, x = '';
        var coordinates = ";
        // line 9
        echo json_encode(($context["records"] ?? null));
        echo ";
        var url = '";
        // line 10
        echo twig_escape_filter($this->env, ($context["detailsPage"] ?? null), "html", null, true);
        echo "';
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            scrollWheelZoom: false,
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors', 
            maxZoom: 18
        }).addTo(map);
        
        
        for (i in coordinates) {
            x += L.marker([coordinates[i].latitude, coordinates[i].longitude]).addTo(map)
            .bindPopup('<a href=\"' + url + '/' + coordinates[i].id + '\">' + coordinates[i].name + '</a>')
            .openPopup();
        }
        
        map.setView([50.889202, 5.526453], 11);
        
    </script>
   
<div class=\"container\">
<div class=\"row\">
   ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 32
            echo "      <div class=\"col-md-4\">
         <div class=\"teaser\">
         ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), "count", array())) {
                // line 35
                echo "            <div id=\"post-list-featured-images-top\">
               ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 37
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\">
                     <img class=\"img-responsive\" data-src=\"";
                    // line 38
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
                // line 41
                echo "            </div>
         ";
            }
            // line 43
            echo "
        <div class=\"teaser-content\">
             <h3 class=\"post-list-title p-name\" itemprop=\"headline\">
                ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "
             </h3>
             <button class=\"read-more-button\">Lees meer</button>
             ";
            // line 49
            if (($context["detailsPage"] ?? null)) {
                // line 50
                echo "                    <a class=\"read-more-link\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\"></a>
                ";
            }
            // line 52
            echo "         </div>
         </div>
      </div>
   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "      <div class=\"no-post-message\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</div>
</div>";
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
        return array (  142 => 58,  133 => 56,  125 => 52,  119 => 50,  117 => 49,  111 => 46,  106 => 43,  102 => 41,  87 => 38,  82 => 37,  78 => 36,  75 => 35,  73 => 34,  69 => 32,  64 => 31,  40 => 10,  36 => 9,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-description\">
    <p>{{ this.page.description }}</p>
</div>
   <div id=\"map\"></div>
    <script>

        var map = L.map('map')
        var i, x = '';
        var coordinates = {{ records|json_encode()|raw }};
        var url = '{{ detailsPage }}';
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            scrollWheelZoom: false,
            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors', 
            maxZoom: 18
        }).addTo(map);
        
        
        for (i in coordinates) {
            x += L.marker([coordinates[i].latitude, coordinates[i].longitude]).addTo(map)
            .bindPopup('<a href=\"' + url + '/' + coordinates[i].id + '\">' + coordinates[i].name + '</a>')
            .openPopup();
        }
        
        map.setView([50.889202, 5.526453], 11);
        
    </script>
   
<div class=\"container\">
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
</div>
</div>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/pages/reserves.htm", "");
    }
}
