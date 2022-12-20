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

/* sidebar/about.html.twig */
class __TwigTemplate_8234f634f23db76b7967539383310b68d6f82167edee5982c4de18fb7683ef00 extends \Twig\Template
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
        echo "<div class=\"authorzo\">
  <div class=\"widget widget-about\">
    <div class=\"widget-about-img\">
      <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "image", []), [], "array"), "url", []), "html", null, true);
        echo "\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "image", []), [], "array"), "url", []), "html", null, true);
        echo "\">\"
      </a>
    </div>
    ";
        // line 8
        echo $this->getAttribute(($context["module"] ?? null), "content", []);
        echo "
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "social", [])) {
            // line 10
            echo "    <div class=\"social-ul\">
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
    ";
        }
        // line 18
        echo "    <div class=\"clearfix\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  70 => 15,  59 => 13,  55 => 12,  51 => 10,  49 => 9,  45 => 8,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"authorzo\">
  <div class=\"widget widget-about\">
    <div class=\"widget-about-img\">
      <a href=\"{{ module.media.images[module.header.image].url }}\">
        <img src=\"{{ module.media.images[module.header.image].url }}\">\"
      </a>
    </div>
    {{ module.content|raw }}
    {% if module.header.social %}
    <div class=\"social-ul\">
      <ul>
        {% for item in module.header.social %}
        <li><a href=\"{{ item.url }}\" target=\"_blank\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
        {% endfor %}
      </ul>
    </div>
    {% endif %}
    <div class=\"clearfix\"></div>
  </div>
</div>
", "sidebar/about.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/sidebar/about.html.twig");
    }
}
