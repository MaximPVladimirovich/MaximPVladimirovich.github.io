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

/* item.html.twig */
class __TwigTemplate_63f11f1bcc6189c769de0e1bfcfebc851238a3b7deb977bfe275b656d0c5a5af extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1122162938")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set base_url = page.parent.url %}
{% set feed_url = base_url %}
{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
      {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
    </div>
  </div>
</div>

<div class=\"span3\" id=\"side-bar\">
  {% include 'partials/sidebar.html.twig' %}
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_63f11f1bcc6189c769de0e1bfcfebc851238a3b7deb977bfe275b656d0c5a5af___1122162938 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
      ";
        // line 17
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 17)->display(twig_array_merge($context, ["truncate" => false, "big_header" => true]));
        // line 18
        echo "    </div>
  </div>
</div>

<div class=\"span3\" id=\"side-bar\">
  ";
        // line 23
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 23)->display($context);
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 24,  140 => 23,  133 => 18,  131 => 17,  126 => 14,  123 => 13,  118 => 1,  115 => 10,  113 => 9,  110 => 6,  108 => 5,  106 => 4,  104 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set base_url = page.parent.url %}
{% set feed_url = base_url %}
{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
      {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
    </div>
  </div>
</div>

<div class=\"span3\" id=\"side-bar\">
  {% include 'partials/sidebar.html.twig' %}
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/item.html.twig");
    }
}
