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

/* listPosts.html.twig */
class __TwigTemplate_dc3ff72f5161514d51e80c0d848b89e5d8838b980479bbf6f17a617ae8fcc746 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "listPosts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des publications  ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\">Gestion des publications</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des publications</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des publications
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Chapô</th>
                        <th>Date de modification</th>
                        <th>Publié (non/oui)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPosts"]) || array_key_exists("listPosts", $context) ? $context["listPosts"] : (function () { throw new RuntimeError('Variable "listPosts" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "lastName", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "firstName", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "chapo", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "lastUpdate", [], "any", false, false, false, 38), "d/m/Y \\à h:m:s"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 40
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "published", [], "any", false, false, false, 40), 1)) {
                // line 41
                echo "                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                    <label for=\"flexSwitchCheckChecked\"></label>
                                </div>
                            ";
            } else {
                // line 46
                echo "                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\">
                                    <label for=\"flexSwitchCheckChecked\"></label>
                                </div>
                            ";
            }
            // line 51
            echo "                        </td>
                        <td>
                            <a href=\"index.php?action=dashboard/readPost&amp;id=";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"> Afficher</a>
                            <a href=\"index.php?action=dashboard/editPost&amp;id=";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\"> modifier</a>
                            <a href=\"javascript:void(0)\" onclick=\"deletePost(";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo ")\"> supprimer</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
";
    }

    // line 67
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    function deletePost(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer le post ?\")){
            window.location.href = \"index.php?action=dashboard/deletePost&id=\" + id ;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deletePost = deletePost;
";
    }

    public function getTemplateName()
    {
        return "listPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  168 => 67,  158 => 59,  148 => 55,  144 => 54,  140 => 53,  136 => 51,  129 => 46,  122 => 41,  120 => 40,  115 => 38,  111 => 37,  105 => 36,  101 => 35,  98 => 34,  94 => 33,  67 => 8,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Liste des publications  {% endblock title %}

{% block stylesheet %} {% endblock stylesheet %}

{% block content %}
<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\">Gestion des publications</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des publications</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des publications
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Chapô</th>
                        <th>Date de modification</th>
                        <th>Publié (non/oui)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for post in listPosts %}
                    <tr>
                        <td>{{ post.title }}</td>
                        <td>{{ post.lastName }} {{ post.firstName }}</td>
                        <td>{{ post.chapo }}</td>
                        <td>{{ post.lastUpdate|date(\"d/m/Y \\\\à h:m:s\") }}</td>
                        <td>
                            {% if post.published == 1 %}
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                    <label for=\"flexSwitchCheckChecked\"></label>
                                </div>
                            {% else %}
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\">
                                    <label for=\"flexSwitchCheckChecked\"></label>
                                </div>
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"index.php?action=dashboard/readPost&amp;id={{ post.id }}\"> Afficher</a>
                            <a href=\"index.php?action=dashboard/editPost&amp;id={{ post.id }}\"> modifier</a>
                            <a href=\"javascript:void(0)\" onclick=\"deletePost({{ post.id }})\"> supprimer</a>
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
{% endblock content %}

{% block javascript %}
    function deletePost(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer le post ?\")){
            window.location.href = \"index.php?action=dashboard/deletePost&id=\" + id ;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deletePost = deletePost;
{% endblock %}", "listPosts.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\listPosts.html.twig");
    }
}
