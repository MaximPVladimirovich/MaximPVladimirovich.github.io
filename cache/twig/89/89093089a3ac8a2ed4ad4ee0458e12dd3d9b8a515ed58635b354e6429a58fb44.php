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

/* form.html.twig */
class __TwigTemplate_131c16917e6f06195d96eecfea10f3cda049d8e2767f393c5d6b77439633ed32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "form.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content  single\">
      <h1 class=\"entry-title single\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h1>
      ";
        // line 9
        echo ($context["content"] ?? null);
        echo "
      ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "enabled", [])) {
            // line 11
            echo "      ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 11)->display($context);
            // line 12
            echo "      ";
        }
        // line 13
        echo "      <div class=\"clear\"></div>
    </div>
  </div>
</div>

";
        // line 18
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "form.html.twig", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  65 => 13,  62 => 12,  59 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{% include 'partials/blog_sidebar_header.html.twig' %}
<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content  single\">
      <h1 class=\"entry-title single\">{{ page.header.title }}</h1>
      {{ content|raw }}
      {% if config.plugins.form.enabled %}
      {% include \"forms/form.html.twig\" %}
      {% endif  %}
      <div class=\"clear\"></div>
    </div>
  </div>
</div>

{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "form.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/form.html.twig");
    }
}
