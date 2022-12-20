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

/* partials/blog_sidebar_header.html.twig */
class __TwigTemplate_7286896bfc8bda96213656711d54ef9321c145fe2158354153521592fd046ef2 extends \Twig\Template
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
        echo "<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_header.html.twig";
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
        return new Source("<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
", "partials/blog_sidebar_header.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/blog_sidebar_header.html.twig");
    }
}
