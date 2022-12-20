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

/* partials/blog_item.html.twig */
class __TwigTemplate_4057d7688b84610a9fb182215204aea5932dbfb3c6ef1cf9c0fccec9c50ac2ba extends \Twig\Template
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
        if ( !($context["truncate"] ?? null)) {
            // line 2
            echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
            echo "/css/item.css\" />
";
        }
        // line 4
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content\">

      ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 9
            echo "      <h1 class=\"entry-title\">
        ";
            // line 10
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 11
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        ";
            }
            // line 13
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
      </h1>
      ";
        } else {
            // line 16
            echo "      <h1 class=\"entry-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a></h1>
      ";
        }
        // line 18
        echo "      ";
        if (($context["truncate"] ?? null)) {
            // line 19
            echo "
        <div class=\"meta\">
          <div><i class=\"fa fa-clock-o\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "long", [])), "html", null, true);
            echo "</div>
          <div><i class=\"fa fa-user\"></i> <span style=\"color:#E74C3C\">
            ";
            // line 23
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) {
                // line 24
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", [])) {
                    // line 25
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                        // line 26
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 28
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []), "html", null, true);
                        echo "
            ";
                    }
                    // line 30
                    echo "            ";
                } else {
                    // line 31
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                        // line 32
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 34
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
                        echo "
            ";
                    }
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
            }
            // line 38
            echo "          </span></div>
          ";
            // line 39
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                // line 40
                echo "          <div> <i class=\"fa fa-tags\"></i>
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 42
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/tag:";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "\" rel=\"tag\">";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    echo "</a>
            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "          </div>
          ";
            }
            // line 46
            echo "        </div>
      ";
        } else {
            // line 48
            echo "      <div class=\"meta1\">
        <p>
          <small>
            <span><i class=\"fa fa-clock-o\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "long", [])), "html", null, true);
            echo "</span>
            <span><i class=\"fa fa-user\"></i>
              ";
            // line 53
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) {
                // line 54
                echo "              ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", [])) {
                    // line 55
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                        // line 56
                        echo "              <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 58
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []), "html", null, true);
                        echo "
              ";
                    }
                    // line 60
                    echo "              ";
                } else {
                    // line 61
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                        // line 62
                        echo "              <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 64
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
                        echo "
              ";
                    }
                    // line 66
                    echo "              ";
                }
                // line 67
                echo "              ";
            }
            // line 68
            echo "            </span>
            ";
            // line 69
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                // line 70
                echo "            <span> <i class=\"fa fa-tags\"></i>
              ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 72
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/tag:";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "\" rel=\"tag\">";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    echo "</a>
              ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            </span>
            ";
            }
            // line 76
            echo "          </small>
        </p>
      </div>
      ";
        }
        // line 80
        echo "
      <div class=\"clear\"></div>

      <div class=\"";
        // line 83
        if (($context["truncate"] ?? null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
        ";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", [])) {
            // line 85
            echo "        <iframe src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []), "html", null, true);
            echo "?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; ";
            if ( !($context["truncate"] ?? null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 87
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) {
            // line 88
            echo "        <iframe src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; ";
            if ( !($context["truncate"] ?? null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 90
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) {
            // line 91
            echo "        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []), "html", null, true);
            echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        ";
        }
        // line 93
        echo "        ";
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))) {
            // line 94
            echo "          ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 750, 1 => 422], "method"), "html", [0 => "", 1 => "", 2 => "thumb"], "method");
            echo "
        ";
        }
        // line 96
        echo "      </div>

            ";
        // line 98
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 99
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            ";
            // line 100
            if ( !($context["truncate"] ?? null)) {
                // line 101
                echo "            ";
                $context["show_prev_next"] = true;
                // line 102
                echo "            ";
            }
            // line 103
            echo "            ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 104
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
            ";
        } elseif (        // line 105
($context["truncate"] ?? null)) {
            // line 106
            echo "            ";
            echo twig_escape_filter($this->env, Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550), "html", null, true);
            echo "
            ";
        } else {
            // line 108
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            ";
            // line 109
            $context["show_prev_next"] = true;
            // line 110
            echo "            ";
        }
        // line 111
        echo "
            <div class=\"entry-meta clearfix\">
              <div class=\"up_arrow\"></div>
              <div class=\"pull-right share-story-container\">
                <ul class=\"share-story\">
                 ";
        // line 136
        echo "                  <li>
                    <a href=\"https://www.linkedin.com/in/james-maxim-vladimirovich/\" target=\"_blank\">
                      <i class=\"fa fa-linkedin\"></i>
                    </a>
                  </li>
                </ul>
              </div>

              ";
        // line 144
        if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 145
            echo "                ";
            if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
                // line 146
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            } elseif (            // line 147
($context["truncate"] ?? null)) {
                // line 148
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            }
            // line 150
            echo "              ";
        }
        // line 151
        echo "              <div class=\"clear\"></div>
            </div>
    </div>
  </div>
</div>

";
        // line 157
        if (($context["show_prev_next"] ?? null)) {
            // line 158
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
  ";
            // line 159
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 160
                echo "  <span id=\"blog-pager-newer-link\">
    <a class=\"blog-pager-newer-link\" href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
  </span>
  ";
            }
            // line 164
            echo "
  ";
            // line 165
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 166
                echo "  <span id=\"blog-pager-older-link\">
    <a class=\"blog-pager-older-link\" href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
  </span>
  ";
            }
            // line 170
            echo "  <a class=\"home-link\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "\">Home</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 170,  484 => 167,  481 => 166,  479 => 165,  476 => 164,  470 => 161,  467 => 160,  465 => 159,  462 => 158,  460 => 157,  452 => 151,  449 => 150,  443 => 148,  441 => 147,  436 => 146,  433 => 145,  431 => 144,  421 => 136,  414 => 111,  411 => 110,  409 => 109,  404 => 108,  398 => 106,  396 => 105,  391 => 104,  388 => 103,  385 => 102,  382 => 101,  380 => 100,  375 => 99,  373 => 98,  369 => 96,  363 => 94,  360 => 93,  354 => 91,  351 => 90,  341 => 88,  338 => 87,  328 => 85,  326 => 84,  313 => 83,  308 => 80,  302 => 76,  298 => 74,  274 => 72,  257 => 71,  254 => 70,  252 => 69,  249 => 68,  246 => 67,  243 => 66,  237 => 64,  229 => 62,  226 => 61,  223 => 60,  217 => 58,  209 => 56,  206 => 55,  203 => 54,  201 => 53,  196 => 51,  191 => 48,  187 => 46,  183 => 44,  159 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  131 => 37,  128 => 36,  122 => 34,  114 => 32,  111 => 31,  108 => 30,  102 => 28,  94 => 26,  91 => 25,  88 => 24,  86 => 23,  81 => 21,  77 => 19,  74 => 18,  66 => 16,  57 => 13,  51 => 11,  49 => 10,  46 => 9,  44 => 8,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not truncate %}
<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ theme_url }}/css/item.css\" />
{% endif %}
<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content\">

      {% if page.header.link %}
      <h1 class=\"entry-title\">
        {% if page.header.continue_link is not same as(false) %}
          <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
        {% endif %}
          <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
      </h1>
      {% else %}
      <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
      {% endif %}
      {% if truncate %}

        <div class=\"meta\">
          <div><i class=\"fa fa-clock-o\"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</div>
          <div><i class=\"fa fa-user\"></i> <span style=\"color:#E74C3C\">
            {% if page.header.author.name or site.author.name %}
            {% if page.header.author.name %}
            {% if page.header.author.url %}
            <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
            {% else %}
            {{ page.header.author.name }}
            {% endif %}
            {% else %}
            {% if site.author.url %}
            <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
            {% else %}
            {{ site.author.name }}
            {% endif %}
            {% endif %}
            {% endif %}
          </span></div>
          {% if page.taxonomy.tag %}
          <div> <i class=\"fa fa-tags\"></i>
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </div>
          {% endif %}
        </div>
      {% else %}
      <div class=\"meta1\">
        <p>
          <small>
            <span><i class=\"fa fa-clock-o\"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</span>
            <span><i class=\"fa fa-user\"></i>
              {% if page.header.author.name or site.author.name %}
              {% if page.header.author.name %}
              {% if page.header.author.url %}
              <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
              {% else %}
              {{ page.header.author.name }}
              {% endif %}
              {% else %}
              {% if site.author.url %}
              <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
              {% else %}
              {{ site.author.name }}
              {% endif %}
              {% endif %}
              {% endif %}
            </span>
            {% if page.taxonomy.tag %}
            <span> <i class=\"fa fa-tags\"></i>
              {% for tag in page.taxonomy.tag %}
              <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
              {% endfor %}
            </span>
            {% endif %}
          </small>
        </p>
      </div>
      {% endif %}

      <div class=\"clear\"></div>

      <div class=\"{% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
        {% if page.header.youtube %}
        <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.vimeo %}
        <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.soundcloud %}
        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        {% endif %}
        {% if page.media.images|first %}
          {{ page.media.images|first.cropZoom(750,422).html('','', 'thumb')|raw }}
        {% endif %}
      </div>

            {% if page.header.continue_link is same as(false) %}
            {{ page.content|raw }}
            {% if not truncate %}
            {% set show_prev_next = true %}
            {% endif %}
            {% elseif truncate and page.summary != page.content %}
            {{ page.summary|raw }}
            {% elseif truncate %}
            {{ page.content|truncate(550) }}
            {% else %}
            {{ page.content|raw }}
            {% set show_prev_next = true %}
            {% endif %}

            <div class=\"entry-meta clearfix\">
              <div class=\"up_arrow\"></div>
              <div class=\"pull-right share-story-container\">
                <ul class=\"share-story\">
                 {# <li>
                    <a href=\"http://www.facebook.com/share.php?u={{ page.url(true) }}\" target=\"_blank\">
                      <i class=\"fa fa-facebook\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\">
                      <i class=\"fa fa-twitter\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://digg.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\">
                      <i class=\"fa fa-digg\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\">
                      <i class=\"fa fa-reddit\"></i>
                    </a>
                  </li>#}
                  <li>
                    <a href=\"https://www.linkedin.com/in/james-maxim-vladimirovich/\" target=\"_blank\">
                      <i class=\"fa fa-linkedin\"></i>
                    </a>
                  </li>
                </ul>
              </div>

              {% if page.header.continue_link is not same as(false) %}
                {% if truncate and page.summary != page.content %}
                  <div class=\"pull-left\"><a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a></div>
                {% elseif truncate %}
                  <div class=\"pull-left\"><a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a></div>
                {% endif %}
              {% endif %}
              <div class=\"clear\"></div>
            </div>
    </div>
  </div>
</div>

{% if show_prev_next %}
<div class=\"blog-pager\" id=\"blog-pager\">
  {% if not page.isFirst %}
  <span id=\"blog-pager-newer-link\">
    <a class=\"blog-pager-newer-link\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
  </span>
  {% endif %}

  {% if not page.isLast %}
  <span id=\"blog-pager-older-link\">
    <a class=\"blog-pager-older-link\" href=\"{{ page.prevSibling.url }}\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
  </span>
  {% endif %}
  <a class=\"home-link\" href=\"{{ base_url_absolute }}\">Home</a>
</div>
{% endif %}
", "partials/blog_item.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/partials/blog_item.html.twig");
    }
}
