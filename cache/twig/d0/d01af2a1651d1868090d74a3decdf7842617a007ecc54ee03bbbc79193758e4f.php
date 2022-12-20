<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_a3237468b278043f227d3763ae0f6cb760197225d871edb7eeead16c256c719c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 50
        echo "</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "    <div class=\"clear\"></div>
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "  </div>

    ";
        // line 74
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
    </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\" />
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "google_translate_token", []), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        ";
        // line 40
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 41
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        $this->displayBlock('assets', $context, $blocks);
        // line 48
        echo "
    ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/widget.css"], "method");
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/content.css", 1 => 101], "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/sidebar.css", 1 => 100], "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/lightbox.css"], "method");
        // line 23
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 24
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie.css"], "method");
            // line 25
            echo "            ";
        }
        // line 26
        echo "        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scripts.js"], "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/video.js"], "method");
        // line 32
        echo "        ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 44
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 45
        echo "          ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
          ";
        // line 46
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 57
    public function block_header($context, array $blocks = [])
    {
        // line 58
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "    ";
    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        // line 62
        echo "    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </div>
    </div>
    ";
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
    }

    // line 69
    public function block_footer($context, array $blocks = [])
    {
        // line 70
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 71,  262 => 70,  259 => 69,  254 => 64,  248 => 65,  246 => 64,  242 => 62,  239 => 61,  235 => 59,  232 => 58,  229 => 57,  222 => 46,  217 => 45,  214 => 44,  205 => 32,  202 => 31,  199 => 30,  196 => 29,  193 => 28,  189 => 26,  186 => 25,  183 => 24,  180 => 23,  177 => 22,  174 => 21,  171 => 20,  168 => 19,  165 => 18,  162 => 17,  157 => 48,  155 => 44,  152 => 43,  148 => 41,  146 => 40,  137 => 33,  135 => 28,  132 => 27,  130 => 17,  126 => 16,  117 => 10,  114 => 9,  112 => 8,  104 => 7,  101 => 6,  98 => 5,  89 => 74,  85 => 72,  83 => 69,  80 => 68,  78 => 61,  75 => 60,  73 => 57,  64 => 50,  62 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/content.css', 101) %}
            {% do assets.addCss('theme://css/sidebar.css', 100) %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.add('theme://js/scripts.js') %}
            {% do assets.add('theme://js/video.js') %}
        {% endblock %}

        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        {% endif %}

        {% block assets deferred %}
          {{ assets.css()|raw }}
          {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head %}
</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    {% block header %}
      {% include 'partials/header.html.twig' %}
    {% endblock %}
    <div class=\"clear\"></div>
    {% block body %}
    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      {% block content %}{% endblock %}
    </div>
    </div>
    {% endblock %}

    {% block footer %}
      {% include 'partials/footer.html.twig' %}
    {% endblock %}
  </div>

    {{ assets.js('bottom')|raw }} 
    </body>
</html>
", "partials/base.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/base.html.twig");
    }
}
