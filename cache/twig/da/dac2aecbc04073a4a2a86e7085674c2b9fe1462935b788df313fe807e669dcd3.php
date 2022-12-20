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

/* default.html.twig */
class __TwigTemplate_1b970df396d1ab4a6a89fa6ca17de08190bde096e90b1a44f3d2d374e8da7d73 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "default.html.twig", 4)->display($context);
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
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      <div class=\"clear\"></div>
    </div>
  </div>
</div>
";
        // line 14
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "default.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "default.html.twig";
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
      <h1 class=\"entry-title single\">{{ page.header.title }}</h1>
      {{ page.content|raw }}
      <div class=\"clear\"></div>
    </div>
  </div>
</div>
{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "default.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/default.html.twig");
    }
}
