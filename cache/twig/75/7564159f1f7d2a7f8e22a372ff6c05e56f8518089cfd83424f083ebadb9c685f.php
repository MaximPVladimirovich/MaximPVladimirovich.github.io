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

/* partials/blog_sidebar_footer.html.twig */
class __TwigTemplate_e7297699425fb35219672bd26073ecf42e3d4fad32a1f584973a533487cb45f7 extends \Twig\Template
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
        echo "</div>
</div>
</div>

<div class=\"span3\" id=\"side-bar\">
";
        // line 6
        $this->loadTemplate("partials/sidebar.html.twig", "partials/blog_sidebar_footer.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("</div>
</div>
</div>

<div class=\"span3\" id=\"side-bar\">
{% include 'partials/sidebar.html.twig' %}
</div>
", "partials/blog_sidebar_footer.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/blog_sidebar_footer.html.twig");
    }
}
