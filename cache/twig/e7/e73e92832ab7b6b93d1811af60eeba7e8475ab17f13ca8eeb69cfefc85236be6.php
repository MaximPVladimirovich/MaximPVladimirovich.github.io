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

/* partials/footer.html.twig */
class __TwigTemplate_dbf1162c738347fef40c806683c179b748e6f546c883c7fac48bd3a9995e9d5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"site-footer\" id=\"colophon\" role=\"contentinfo\">
  <footer class=\"footer\" id=\"footer\">
    <div class=\"container1 clearfix\">
      <div class=\"go-top\">
        <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
      </div>
      <p></p>
      <div id=\"mycontent\">
        ";
        // line 9
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 10
            echo "        ";
            echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
            echo "
        ";
        }
        // line 12
        echo "      </div>
      <p></p>
    </div>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer\" id=\"colophon\" role=\"contentinfo\">
  <footer class=\"footer\" id=\"footer\">
    <div class=\"container1 clearfix\">
      <div class=\"go-top\">
        <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
      </div>
      <p></p>
      <div id=\"mycontent\">
        {% if site.copyright %}
        {{ site.copyright|raw }}
        {% endif %}
      </div>
      <p></p>
    </div>
  </footer>
</div>
", "partials/footer.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/footer.html.twig");
    }
}
