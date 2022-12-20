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

/* partials/comments.html.twig */
class __TwigTemplate_b65975228a1b78b29395df1e317dd4002bdff46e2daac4fe71948a24e57476c5 extends \Twig\Template
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
        if (($context["enable_comments_plugin"] ?? null)) {
            // line 2
            echo "    ";
            $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
            // line 3
            echo "
    <h3>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_COMMENTS.ADD_COMMENT"), "html", null, true);
            echo "</h3>

    <form name=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "name", []), "html", null, true);
            echo "\"
          action=\"";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", []))) : ($this->getAttribute(($context["page"] ?? null), "url", []))), "html", null, true);
            echo "\"
          method=\"";
            // line 8
            echo twig_escape_filter($this->env, _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "method", [])), "POST"), "html", null, true);
            echo "\">

        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 11
                echo "            ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 12
                echo "            ";
                if ($this->getAttribute($context["field"], "evaluateDefault", [])) {
                    // line 13
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->evaluateStringFunc($context, $this->getAttribute($context["field"], "evaluateDefault", []));
                    // line 14
                    echo "            ";
                }
                // line 15
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", []))) {
                    // line 16
                    echo "                ";
                    if (($this->getAttribute($context["field"], "name", []) == "name")) {
                        // line 17
                        echo "                    <input type=\"hidden\" name=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", []), "html", null, true);
                        echo "\">
                ";
                    } elseif (($this->getAttribute(                    // line 18
$context["field"], "name", []) == "email")) {
                        // line 19
                        echo "                    <input type=\"hidden\" name=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "email", []), "html", null, true);
                        echo "\">
                ";
                    } else {
                        // line 21
                        echo "                    <div>
                        ";
                        // line 22
                        $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "partials/comments.html.twig", 22)->display($context);
                        // line 23
                        echo "                    </div>
                ";
                    }
                    // line 25
                    echo "            ";
                } else {
                    // line 26
                    echo "                <div>
                    ";
                    // line 27
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "partials/comments.html.twig", 27)->display($context);
                    // line 28
                    echo "                </div>
            ";
                }
                // line 30
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/comments.html.twig", 31)->display($context);
            // line 32
            echo "
        <div class=\"buttons\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 35
                echo "            <button class=\"button\" type=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit"), "html", null, true);
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </div>

        ";
            // line 39
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    <div class=\"alert\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "message", []), "html", null, true);
            echo "</div>

    ";
            // line 44
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []))) {
                // line 45
                echo "
        <h3>";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_COMMENTS.COMMENTS"), "html", null, true);
                echo "</h3>

        <table>
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse(($context["comments"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 50
                    echo "            <tr>
                <td>
                    ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", []), "html", null, true);
                    echo "
                    <br />
                    ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_COMMENTS.WRITTEN_ON"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", []));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_COMMENTS.BY"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", []), "html", null, true);
                    echo "
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        </table>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 58,  204 => 54,  199 => 52,  195 => 50,  191 => 49,  185 => 46,  182 => 45,  180 => 44,  175 => 42,  169 => 39,  165 => 37,  154 => 35,  150 => 34,  146 => 32,  143 => 31,  129 => 30,  125 => 28,  123 => 27,  120 => 26,  117 => 25,  113 => 23,  111 => 22,  108 => 21,  100 => 19,  98 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  56 => 10,  51 => 8,  47 => 7,  43 => 6,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if enable_comments_plugin %}
    {% set scope = scope ?: 'data.' %}

    <h3>{{'PLUGIN_COMMENTS.ADD_COMMENT'|t}}</h3>

    <form name=\"{{ grav.config.plugins.comments.form.name }}\"
          action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
          method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">

        {% for field in grav.config.plugins.comments.form.fields %}
            {% set value = form.value(field.name) %}
            {% if field.evaluateDefault %}
                {% set value = evaluate(field.evaluateDefault) %}
            {% endif %}
            {% if config.plugins.login.enabled and grav.user.authenticated %}
                {% if field.name == 'name' %}
                    <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{grav.user.fullname}}\">
                {% elseif field.name == 'email' %}
                    <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{grav.user.email}}\">
                {% else %}
                    <div>
                        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                    </div>
                {% endif %}
            {% else %}
                <div>
                    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                </div>
            {% endif %}
        {% endfor %}
        {% include \"forms/fields/formname/formname.html.twig\" %}

        <div class=\"buttons\">
        {% for button in grav.config.plugins.comments.form.buttons %}
            <button class=\"button\" type=\"{{ button.type|default('submit') }}\">{{ button.value|t|default('Submit') }}</button>
        {% endfor %}
        </div>

        {{ nonce_field('form', 'form-nonce')|raw }}
    </form>

    <div class=\"alert\">{{ form.message }}</div>

    {% if grav.twig.comments|length %}

        <h3>{{'PLUGIN_COMMENTS.COMMENTS'|t}}</h3>

        <table>
            {% for comment in comments|array_reverse %}
            <tr>
                <td>
                    {{comment.text}}
                    <br />
                    {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}} {{'PLUGIN_COMMENTS.BY'|t}} {{comment.author}}
                </td>
            </tr>
            {% endfor %}
        </table>
    {% endif %}
{% endif %}
", "partials/comments.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/plugins/comments/templates/partials/comments.html.twig");
    }
}
