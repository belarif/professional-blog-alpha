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

/* editPost.html.twig */
class __TwigTemplate_c2c4c202d958f8c85378749cd11702e5c0734729feca2ae9412c2c3dd0225488 extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "editPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Modifier la publication ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"public/css/backoffice/editPost.css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\"> Gestion des publications </h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">modifier la publication</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"me-1\"></i>
                Modifier la publication
            </div>
            <div class=\"card-body\">
                <form method=\"post\" action=\"index.php?action=dashboard/updatePost\">
                    <div class=\"mb-3 row visually-hidden\">
                        <label for=\"id\" class=\"col-sm-2 col-form-label\"></label>
                        <div class=\"col-sm-10\">
                            <input id=\"id\" class=\"form-control\" type=\"hidden\" name=\"id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"title\" class=\"col-sm-2 col-form-label\">Titre<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"user_id\" class=\"col-sm-2 col-form-label\">Author<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-select\" aria-label=\".form-select-lg example\" id=\"user_id\" name=\"user_id\" required>
                                <option selected>-- sélectionner un utilisateur --</option>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "                                    ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 42), "1")) {
                // line 43
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" name=\"user_id\"
                                            ";
                // line 44
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "user_id", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 44), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 44), "html", null, true);
                echo "
                                    </option>
                                    ";
            }
            // line 47
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"chapo\" class=\"col-sm-2 col-form-label\">Chapô<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <input id=\"chapo\" class=\"form-control\" type=\"text\" name=\"chapo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 54, $this->source); })()), "chapo", [], "any", false, false, false, 54), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"content\" class=\"col-sm-2 col-form-label\">Contenu<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"content\" class=\"form-control\" name=\"content\" required>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 60, $this->source); })()), "content", [], "any", false, false, false, 60), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"published\" class=\"col-sm-2 col-form-label\">Publiée<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"published\" id=\"flexRadioDefault1\" ";
        // line 67
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 67, $this->source); })()), "published", [], "any", false, false, false, 67), 1)) {
            echo " checked ";
        }
        echo " value=\"1\" required>
                                <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                    oui
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"published\" id=\"flexRadioDefault2\" ";
        // line 73
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 73, $this->source); })()), "published", [], "any", false, false, false, 73), 0)) {
            echo " checked ";
        }
        echo " value=\"0\" required>
                                <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                    non
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <div class=\"justify-content-between\">
                            <a class=\"btn btn-primary\" href=\"index.php?action=dashboard/listPosts\" role=\"button\">Retour liste</a>
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Mettre à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "editPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  164 => 67,  154 => 60,  145 => 54,  137 => 48,  131 => 47,  119 => 44,  114 => 43,  111 => 42,  107 => 41,  96 => 33,  87 => 27,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Modifier la publication {% endblock title %}

{% block stylesheet %}
    <link href=\"public/css/backoffice/editPost.css\" rel=\"stylesheet\" />
{% endblock stylesheet %}

{% block content %}
<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\"> Gestion des publications </h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">modifier la publication</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"me-1\"></i>
                Modifier la publication
            </div>
            <div class=\"card-body\">
                <form method=\"post\" action=\"index.php?action=dashboard/updatePost\">
                    <div class=\"mb-3 row visually-hidden\">
                        <label for=\"id\" class=\"col-sm-2 col-form-label\"></label>
                        <div class=\"col-sm-10\">
                            <input id=\"id\" class=\"form-control\" type=\"hidden\" name=\"id\" value=\"{{ post.id }}\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"title\" class=\"col-sm-2 col-form-label\">Titre<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"{{ post.title }}\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"user_id\" class=\"col-sm-2 col-form-label\">Author<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-select\" aria-label=\".form-select-lg example\" id=\"user_id\" name=\"user_id\" required>
                                <option selected>-- sélectionner un utilisateur --</option>
                                {% for user in users %}
                                    {% if user.role == '1' %}
                                    <option value=\"{{ user.id }}\" name=\"user_id\"
                                            {% if post.user_id == user.id %} selected {% endif %}>{{ user.lastName }} {{ user.firstName }}
                                    </option>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"chapo\" class=\"col-sm-2 col-form-label\">Chapô<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <input id=\"chapo\" class=\"form-control\" type=\"text\" name=\"chapo\" value=\"{{ post.chapo }}\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"content\" class=\"col-sm-2 col-form-label\">Contenu<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"content\" class=\"form-control\" name=\"content\" required>{{ post.content }}</textarea>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"published\" class=\"col-sm-2 col-form-label\">Publiée<span>*</span></label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"published\" id=\"flexRadioDefault1\" {% if post.published == 1 %} checked {% endif %} value=\"1\" required>
                                <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                    oui
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"published\" id=\"flexRadioDefault2\" {% if post.published == 0 %} checked {% endif %} value=\"0\" required>
                                <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                    non
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <div class=\"justify-content-between\">
                            <a class=\"btn btn-primary\" href=\"index.php?action=dashboard/listPosts\" role=\"button\">Retour liste</a>
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Mettre à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
{% endblock content %}", "editPost.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\editPost.html.twig");
    }
}
