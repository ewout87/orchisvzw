<?php

/* C:\xampp\htdocs\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_630ceb4b377f4ddde6bddd2e5355f639b01404cad0ceb43a84ffe2e52780c5e7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">   
    <link href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/css/global.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css\"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css\"/>
    <!-- leaflet styling -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
    integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
    crossorigin=\"\"/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
     <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
   integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
   crossorigin=\"\"></script>
  </head>
  <body>

\t";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("primary-navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "\t
\t";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("secondary-navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
  ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
  <section id=\"page\" class=\"\">
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 40
        echo "  </section>
  
  ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "  
  ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("disclaimer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "  <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 53
        echo "\"></script>
    ";
        // line 54
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 55
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 56
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/anchor-js/3.2.1/anchor.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

  </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  118 => 55,  103 => 54,  100 => 53,  97 => 45,  93 => 44,  90 => 43,  86 => 42,  82 => 40,  80 => 39,  76 => 37,  72 => 36,  69 => 35,  65 => 34,  62 => 33,  58 => 32,  39 => 15,  36 => 14,  33 => 13,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">   
    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
        'assets/css/global.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css\"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css\"/>
    <!-- leaflet styling -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
    integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
    crossorigin=\"\"/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
     <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
   integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
   crossorigin=\"\"></script>
  </head>
  <body>

\t{% partial 'primary-navbar' %}
\t
\t{% partial 'secondary-navbar' %}

  {% partial 'header' %}

  <section id=\"page\" class=\"\">
    {% page %}
  </section>
  
  {% partial 'footer' %}
  
  {% partial 'disclaimer' %}
  <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/anchor-js/3.2.1/anchor.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

  </script>
  </body>
</html>", "C:\\xampp\\htdocs\\orchisvzw/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
