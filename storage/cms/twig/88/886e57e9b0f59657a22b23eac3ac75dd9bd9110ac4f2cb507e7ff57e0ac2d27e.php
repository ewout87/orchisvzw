<?php

/* C:\xampp\htdocs\orchisvzw/plugins/redmarlin/leafletmap/components/leafletmap/default.htm */
class __TwigTemplate_dcadeab37f764a344bb375e14febf795b9b3a0ea5249ea65cefffcca95f684f4 extends Twig_Template
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
        echo "<script src=\"/plugins/redmarlin/leafletmap/assets/js/leaflet.js\"></script>

<script>
  \tvar map = L.map('leafmap', { scrollWheelZoom: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "scrollProtection"), "method"), "html", null, true);
        echo " })
  \t\t.setView([";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "coords"), "method"), "html", null, true);
        echo "], ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "zoom"), "method"), "html", null, true);
        echo ");
  \tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  \t\tattribution: 'Map data &copy; <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://mapbox.com\">Mapbox</a>',
  \t\tmaxZoom: 18
  \t}).addTo(map);
\tmap.once('focus', function() { map.scrollWheelZoom.enable(); });
/*\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "scrollProtection"), "method")) {
            // line 12
            echo "\t\tmap.dragging.disable();
\t\tmap.touchZoom.disable();
\t\tmap.doubleClickZoom.disable();
\t\tmap.scrollWheelZoom.disable();
\t\tmap.keyboard.disable();
\t\tmap.zoomControl = false;
\t";
        } else {
            // line 19
            echo "\t\tmap.dragging.enable();
\t\tmap.touchZoom.enable();
\t\tmap.doubleClickZoom.enable();
\t\tmap.scrollWheelZoom.enable();
\t\tmap.keyboard.enable();
\t\tmap.zoomControl = true;
\t";
        }
        // line 25
        echo " */
\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "markerCoords"), "method")) {
            // line 27
            echo "\t  \tvar marker = L.marker([";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "markerCoords"), "method"), "html", null, true);
            echo "]).addTo(map);
\t\tmarker.bindPopup(\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "markerText"), "method"), "html", null, true);
            echo "\");
\t";
        }
        // line 30
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/plugins/redmarlin/leafletmap/components/leafletmap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  73 => 28,  68 => 27,  66 => 26,  63 => 25,  54 => 19,  45 => 12,  43 => 11,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"/plugins/redmarlin/leafletmap/assets/js/leaflet.js\"></script>

<script>
  \tvar map = L.map('leafmap', { scrollWheelZoom: {{ __SELF__.property('scrollProtection') }} })
  \t\t.setView([{{ __SELF__.property('coords') }}], {{ __SELF__.property('zoom') }});
  \tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  \t\tattribution: 'Map data &copy; <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://mapbox.com\">Mapbox</a>',
  \t\tmaxZoom: 18
  \t}).addTo(map);
\tmap.once('focus', function() { map.scrollWheelZoom.enable(); });
/*\t{% if __SELF__.property('scrollProtection') %}
\t\tmap.dragging.disable();
\t\tmap.touchZoom.disable();
\t\tmap.doubleClickZoom.disable();
\t\tmap.scrollWheelZoom.disable();
\t\tmap.keyboard.disable();
\t\tmap.zoomControl = false;
\t{% else %}
\t\tmap.dragging.enable();
\t\tmap.touchZoom.enable();
\t\tmap.doubleClickZoom.enable();
\t\tmap.scrollWheelZoom.enable();
\t\tmap.keyboard.enable();
\t\tmap.zoomControl = true;
\t{% endif %} */
\t{% if __SELF__.property('markerCoords') %}
\t  \tvar marker = L.marker([{{ __SELF__.property('markerCoords') }}]).addTo(map);
\t\tmarker.bindPopup(\"{{ __SELF__.property('markerText') }}\");
\t{% endif %}
</script>
", "C:\\xampp\\htdocs\\orchisvzw/plugins/redmarlin/leafletmap/components/leafletmap/default.htm", "");
    }
}
