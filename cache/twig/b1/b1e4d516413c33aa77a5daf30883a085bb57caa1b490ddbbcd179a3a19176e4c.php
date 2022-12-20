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

/* partials/sidebar.html.twig */
class __TwigTemplate_8ab65b2ff0e359cfcbd5f6269ed0f75fe0b99e82fdfd45b75d95285df77126a3 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "sidebar"], "order" => ["by" => "default", "dir" => "asc"]]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 3
                if ($this->getAttribute($this->getAttribute($context["module"], "header", []), "surround", [])) {
                    // line 4
                    $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "partials/sidebar.html.twig", 4)->display($context);
                }
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<div class=\"sidebar section\" id=\"sidebar\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "sidebar"], "order" => ["by" => "default", "dir" => "asc"]]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 11
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 12
                if ( !$this->getAttribute($this->getAttribute($context["module"], "header", []), "surround", [])) {
                    // line 13
                    $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "partials/sidebar.html.twig", 13)->display($context);
                }
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 19
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">SimpleSearch</h2>
  <div class=\"widget-content simplesearch\">
    ";
            // line 22
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 22)->display($context);
            // line 23
            echo "  </div>
</div>
";
        }
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 27
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Random Article</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
  </div>
</div>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 35
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Popular Tags</h2>
  <div class=\"widget-content\">
    ";
            // line 38
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 38)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 39
            echo "  </div>
</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 44
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Archives</h2>
  <div class=\"widget-content\">
    ";
            // line 47
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 47)->display($context);
            // line 48
            echo "  </div>
</div>
";
        }
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 52
            echo "<div class=\"widget HTML syndicate\">
  <h2 class=\"title\">Syndicate</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
  </div>
</div>
";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 60,  181 => 56,  177 => 55,  172 => 52,  170 => 51,  165 => 48,  163 => 47,  158 => 44,  156 => 43,  153 => 42,  148 => 39,  146 => 38,  141 => 35,  139 => 34,  132 => 30,  127 => 27,  125 => 26,  120 => 23,  118 => 22,  113 => 19,  111 => 18,  108 => 17,  92 => 13,  90 => 12,  88 => 11,  71 => 10,  67 => 8,  51 => 4,  49 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
{% if module.template %}
{% if module.header.surround %}
{% include 'sidebar/' ~ module.template ~ '.html.twig' %}
{% endif %}
{% endif %}
{% endfor %}

<div class=\"sidebar section\" id=\"sidebar\">
{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
{% if module.template %}
{% if not module.header.surround %}
{% include 'sidebar/' ~ module.template ~ '.html.twig' %}
{% endif %}
{% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">SimpleSearch</h2>
  <div class=\"widget-content simplesearch\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
  </div>
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Random Article</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
  </div>
</div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Popular Tags</h2>
  <div class=\"widget-content\">
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
  </div>
</div>
{% endif %}

{% if config.plugins.archives.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Archives</h2>
  <div class=\"widget-content\">
    {% include 'partials/archives.html.twig' %}
  </div>
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"widget HTML syndicate\">
  <h2 class=\"title\">Syndicate</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
  </div>
</div>
{% endif %}
</div>
", "partials/sidebar.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/sidebar.html.twig");
    }
}
