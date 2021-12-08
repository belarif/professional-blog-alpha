<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* posts.html.twig */
class __TwigTemplate_ac210cb13a63856a9c7b20a92fa0b2027e2887eb9cde071521975aefe7f5b8e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Blog ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"public/css/frontoffice/blogs.css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<!-- Page content-->
<div class=\"container\">
    <div class=\"row\">
        <!-- Blog entries-->
        <div class=\"col-lg-12\">
            <div class=\"row\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPosts"]) || array_key_exists("listPosts", $context) ? $context["listPosts"] : (function () { throw new RuntimeError('Variable "listPosts" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                    ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "published", [], "any", false, false, false, 17), 1)) {
                // line 18
                echo "                    <div class=\"col-lg-6\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <div class=\"small text-muted\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "lastUpdate", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
                                <h2 class=\"card-title h4\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h2>
                                <p class=\"card-text\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "chapo", [], "any", false, false, false, 23), "html", null, true);
                echo "....</p>
                                <a class=\"btn btn-primary\" href=\"index.php?action=post&id=";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">Lire plus →</a>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
            <!-- Pagination-->
            <!--<nav aria-label=\"Pagination\">
                <hr class=\"my-0\" />
                <ul class=\"pagination justify-content-center my-4\">
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Newer</a></li>
                    <li class=\"page-item active\" aria-current=\"page\"><a class=\"page-link\" href=\"#!\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">2</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">3</a></li>
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#!\">...</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">15</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">Older</a></li>
                </ul>
            </nav>-->
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  108 => 29,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  83 => 18,  80 => 17,  76 => 16,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %} Blog {% endblock title %}

{% block stylesheet %}
    <link href=\"public/css/frontoffice/blogs.css\" rel=\"stylesheet\" />
{% endblock stylesheet %}

{% block content %}
<!-- Page content-->
<div class=\"container\">
    <div class=\"row\">
        <!-- Blog entries-->
        <div class=\"col-lg-12\">
            <div class=\"row\">
                {% for post in listPosts %}
                    {% if post.published == 1 %}
                    <div class=\"col-lg-6\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <div class=\"small text-muted\">{{ post.lastUpdate }}</div>
                                <h2 class=\"card-title h4\">{{ post.title }}</h2>
                                <p class=\"card-text\">{{ post.chapo }}....</p>
                                <a class=\"btn btn-primary\" href=\"index.php?action=post&id={{ post.id }}\">Lire plus →</a>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                {% endfor %}
            </div>
            <!-- Pagination-->
            <!--<nav aria-label=\"Pagination\">
                <hr class=\"my-0\" />
                <ul class=\"pagination justify-content-center my-4\">
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Newer</a></li>
                    <li class=\"page-item active\" aria-current=\"page\"><a class=\"page-link\" href=\"#!\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">2</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">3</a></li>
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#!\">...</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">15</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#!\">Older</a></li>
                </ul>
            </nav>-->
        </div>
    </div>
</div>
{% endblock %}
", "posts.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\posts.html.twig");
    }
}
