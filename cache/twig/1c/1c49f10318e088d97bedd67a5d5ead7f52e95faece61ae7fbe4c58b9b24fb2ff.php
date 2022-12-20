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

/* partials/taxonomylist.html.twig */
class __TwigTemplate_82f1e114e5aebe818bf2897d0f029540447cc8044faa670e968449cbd1383aa4 extends \Twig\Template
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
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"widget-content list-label-widget-content\">
  <ul>
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"), 0, 5));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "    <li>
      ";
                // line 8
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", [0 => ($context["taxonomy"] ?? null)], "method") == $context["tax"])) ? ("active") : (""));
                // line 9
                echo "      <a class=\"";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($context["taxonomy"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["tax"], "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tax"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  50 => 9,  48 => 8,  45 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
<div class=\"widget-content list-label-widget-content\">
  <ul>
    {% for tax,value in taxlist[taxonomy]|slice(0, 5) %}
    <li>
      {% set active = uri.param(taxonomy) == tax ? 'active' : '' %}
      <a class=\"{{ active }}\" href=\"{{ base_url_absolute }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
    </li>
    {% endfor %}
  </ul>
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/taxonomylist.html.twig");
    }
}
