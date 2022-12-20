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

/* partials/relatedpages.html.twig */
class __TwigTemplate_4efce0ade9729f014365b10c2dc5863d082d54e8fbe455898bb99de80d6481f4 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 2
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 3
            if (($context["related"] ?? null)) {
                // line 4
                echo "  <div class=\"item-img\">
    ";
                // line 5
                if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", []))) {
                    // line 6
                    echo "    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                    echo "\">
      ";
                    // line 7
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", [])), "forceResize", [0 => 230, 1 => 160], "method"), "html", []);
                    echo "
    </a>
    ";
                } else {
                    // line 10
                    echo "    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                    echo "\">
      <img src='' title=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                    echo "\" style=\"width:222px;height:154px;\">
    </a>
    ";
                }
                // line 14
                echo "</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  63 => 11,  56 => 10,  50 => 7,  43 => 6,  41 => 5,  38 => 4,  36 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for related_path, score in related_pages %}
{% set related = grav['pages'].get(related_path) %}
{% if related %}
  <div class=\"item-img\">
    {% if related.media.images|first %}
    <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">
      {{ related.media.images|first.forceResize(230,160).html|raw }}
    </a>
    {% else %}
    <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">
      <img src='' title=\"{{ related.title }}\" alt=\"{{ related.title }}\" style=\"width:222px;height:154px;\">
    </a>
    {% endif %}
</div>
{% endif %}
{% endfor %}
", "partials/relatedpages.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/relatedpages.html.twig");
    }
}
