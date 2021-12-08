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

/* post.html.twig */
class __TwigTemplate_38e9281c582e9dc509724d2402b7f2da2f94f2d570fab9502eddcfa6d53ac054 extends Template
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
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("template.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
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
        echo "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <article>
                <header class=\"mb-4\">
                    <h2 class=\"fw-bolder mb-1\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                    <p class=\"mb-2\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "chapo", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                </header>
                <div class=\"text-muted fst-italic mb-2\">Posté le ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "lastUpdate", [], "any", false, false, false, 18), "html", null, true);
        echo " <span>par : </span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "lastnameAdmin", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "firstnameAdmin", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
                <section class=\"mb-5\">
                    <p class=\"fs-5 mb-4\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                </section>
            </article>
            <section class=\"mb-5\">
                <div class=\"card bg-light\">
                    <div class=\"card-body\">
                        ";
        // line 26
        if (((isset($context["logged_user"]) || array_key_exists("logged_user", $context)) &&  !(null === (isset($context["logged_user"]) || array_key_exists("logged_user", $context) ? $context["logged_user"] : (function () { throw new RuntimeError('Variable "logged_user" does not exist.', 26, $this->source); })())))) {
            // line 27
            echo "                            ";
            if (((isset($context["successComment"]) || array_key_exists("successComment", $context)) &&  !(null === (isset($context["successComment"]) || array_key_exists("successComment", $context) ? $context["successComment"] : (function () { throw new RuntimeError('Variable "successComment" does not exist.', 27, $this->source); })())))) {
                // line 28
                echo "                                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                    ";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["successComment"]) || array_key_exists("successComment", $context) ? $context["successComment"] : (function () { throw new RuntimeError('Variable "successComment" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            // line 33
            echo "                            <form class=\"mb-4\" method=\"post\" action=\"index.php?action=post&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"laisser un commentaire\" name=\"content\" required></textarea>
                                <div class=\"d-flex justify-content-end mt-2\">
                                    <input type=\"submit\" value=\"Commenter\" name=\"submit\">
                                </div>
                            </form>
                        ";
        } else {
            // line 40
            echo "                            <p>Pour commenter la publication, vous devez vous authentifier :
                                <a class=\"btn btn-primary\" href=\"index.php?action=login\" role=\"button\">se connecter</a>
                            </p>
                        ";
        }
        // line 44
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 45
            echo "                            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "isEnabled", [], "any", false, false, false, 45), 1)) {
                // line 46
                echo "                                <div class=\"d-flex mb-4\">
                                    <div class=\"flex-shrink-0\"><img class=\"rounded-circle\" src=\"https://dummyimage.com/50x50/ced4da/6c757d.jpg\" alt=\"...\" /></div>
                                    <div class=\"ms-3\">
                                        <div class=\"fw-bold\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "lastnameVisitor", [], "any", false, false, false, 49), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "firstnameVisitor", [], "any", false, false, false, 49), "html", null, true);
                echo "</div>
                                        ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 50), "html", null, true);
                echo "
                                    </div>
                                </div>
                            ";
            }
            // line 54
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
";
    }

    // line 63
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 64,  179 => 63,  169 => 55,  163 => 54,  156 => 50,  150 => 49,  145 => 46,  142 => 45,  137 => 44,  131 => 40,  120 => 33,  113 => 29,  110 => 28,  107 => 27,  105 => 26,  96 => 20,  87 => 18,  82 => 16,  78 => 15,  71 => 10,  67 => 9,  62 => 6,  58 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %} {{ post.title }} {% endblock title %}

{% block stylesheet %}
    <link href=\"public/css/frontoffice/blogs.css\" rel=\"stylesheet\" />
{% endblock stylesheet %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <article>
                <header class=\"mb-4\">
                    <h2 class=\"fw-bolder mb-1\">{{ post.title }}</h2>
                    <p class=\"mb-2\">{{ post.chapo }}</p>
                </header>
                <div class=\"text-muted fst-italic mb-2\">Posté le {{ post.lastUpdate }} <span>par : </span>{{ post.lastnameAdmin }} {{ post.firstnameAdmin }}</div>
                <section class=\"mb-5\">
                    <p class=\"fs-5 mb-4\">{{ post.content }}</p>
                </section>
            </article>
            <section class=\"mb-5\">
                <div class=\"card bg-light\">
                    <div class=\"card-body\">
                        {% if logged_user is defined and logged_user is not null %}
                            {% if successComment is defined and successComment is not null %}
                                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                    {{ successComment }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endif %}
                            <form class=\"mb-4\" method=\"post\" action=\"index.php?action=post&id={{ post.id }}\">
                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"laisser un commentaire\" name=\"content\" required></textarea>
                                <div class=\"d-flex justify-content-end mt-2\">
                                    <input type=\"submit\" value=\"Commenter\" name=\"submit\">
                                </div>
                            </form>
                        {% else %}
                            <p>Pour commenter la publication, vous devez vous authentifier :
                                <a class=\"btn btn-primary\" href=\"index.php?action=login\" role=\"button\">se connecter</a>
                            </p>
                        {% endif %}
                        {% for comment in comments %}
                            {% if comment.isEnabled == 1 %}
                                <div class=\"d-flex mb-4\">
                                    <div class=\"flex-shrink-0\"><img class=\"rounded-circle\" src=\"https://dummyimage.com/50x50/ced4da/6c757d.jpg\" alt=\"...\" /></div>
                                    <div class=\"ms-3\">
                                        <div class=\"fw-bold\">{{ comment.lastnameVisitor }} {{ comment.firstnameVisitor }}</div>
                                        {{ comment.content }}
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock content %}

{% block script %}

{% endblock script %}", "post.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\post.html.twig");
    }
}
