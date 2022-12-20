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

/* error.html.twig */
class __TwigTemplate_43126bca3b0f54244e372c1df2dc865f2b969aa8a06e7bf29960f6bd694e5122 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "error.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content  single\">
      <h1 class=\"entry-title\">Error ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
      ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      <div class=\"clear\"></div>
    </div>
  </div>
</div>
";
        // line 14
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "error.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  49 => 8,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
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
      <h1 class=\"entry-title\">Error {{ page.header.http_response_code }}</h1>
      {{ page.content|raw }}
      <div class=\"clear\"></div>
    </div>
  </div>
</div>
{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "error.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/error.html.twig");
    }
}
