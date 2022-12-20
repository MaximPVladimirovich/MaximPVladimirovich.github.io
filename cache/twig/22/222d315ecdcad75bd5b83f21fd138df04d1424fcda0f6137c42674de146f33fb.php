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

/* partials/header.html.twig */
class __TwigTemplate_03a15b051904c7c8fb211e393101bc09a1e317c2d1f8d945459febdfb784a7fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"masthead\" role=\"banner\" class=\"affix-top\">
  <div class=\"container\">
    <div class=\"navbar navbar-inverse\">
      <div class=\"navbar-inner\">
        <div class=\"btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/bmenu.png\"></div>
        <div class=\"header section\" id=\"header\"><div class=\"widget Header\" id=\"Header1\">
          <div id=\"header-inner\">
            ";
        // line 8
        if ($this->getAttribute(($context["site"] ?? null), "title", [])) {
            // line 9
            echo "              <div class=\"titlewrapper\">
                <h1 class=\"title\">
                  <a href='";
            // line 11
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "' style='display: block'>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "</a>
                </h1>
              </div>
            ";
        }
        // line 15
        echo "          </div>
        </div></div>
        <div class=\"nav-collapse collapse\">
          ";
        // line 18
        $this->displayBlock('navigation', $context, $blocks);
        // line 21
        echo "        </div>
      </div>
    </div>
  </div>
  <div class=\"clear\"></div>
</div>
";
    }

    // line 18
    public function block_navigation($context, array $blocks = [])
    {
        // line 19
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 19)->display($context);
        // line 20
        echo "          ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  78 => 19,  75 => 18,  65 => 21,  63 => 18,  58 => 15,  49 => 11,  45 => 9,  43 => 8,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"masthead\" role=\"banner\" class=\"affix-top\">
  <div class=\"container\">
    <div class=\"navbar navbar-inverse\">
      <div class=\"navbar-inner\">
        <div class=\"btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\"><img src=\"{{ theme_url }}/images/bmenu.png\"></div>
        <div class=\"header section\" id=\"header\"><div class=\"widget Header\" id=\"Header1\">
          <div id=\"header-inner\">
            {% if site.title  %}
              <div class=\"titlewrapper\">
                <h1 class=\"title\">
                  <a href='{{ base_url_absolute }}' style='display: block'>{{ site.title }}</a>
                </h1>
              </div>
            {% endif %}
          </div>
        </div></div>
        <div class=\"nav-collapse collapse\">
          {% block navigation %}
              {% include 'partials/navigation.html.twig' %}
          {% endblock %}
        </div>
      </div>
    </div>
  </div>
  <div class=\"clear\"></div>
</div>
", "partials/header.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/header.html.twig");
    }
}
