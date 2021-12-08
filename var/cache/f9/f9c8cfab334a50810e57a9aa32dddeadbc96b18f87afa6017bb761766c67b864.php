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

/* listUsers.html.twig */
class __TwigTemplate_cda75f806d34aba1f3aa93a6b3acaeca8c9d6637355ffea4f97148dc247b3b26 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "listUsers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des utilisateurs  ";
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
        <h4 class=\"mt-4\">Gestion des utilisateurs</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des utilisateurs</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des utilisateurs
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Rôles</th>
                        <th>Date de création</th>
                        <!--<th>Activation compte (non/oui)</th>-->
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) || array_key_exists("listUsers", $context) ? $context["listUsers"] : (function () { throw new RuntimeError('Variable "listUsers" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 39), 1)) {
                echo " administrateur ";
            } else {
                echo " visiteur ";
            }
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 40), "d/m/Y \\à h:m:s"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"index.php?action=dashboard/readUser&id=";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">Afficher</a>
                            <a href=\"index.php?action=dashboard/editUser&id=";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">modifier</a>
                            <a href=\"javascript:void(0)\" onclick=\"deleteUser(";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo ")\">supprimer</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
";
    }

    // line 56
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    function deleteUser(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer l'utilisateur ?\")){
            window.location.href = \"index.php?action=dashboard/deleteUser&id=\" + id;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deleteUser = deleteUser;
";
    }

    public function getTemplateName()
    {
        return "listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  155 => 56,  145 => 48,  135 => 44,  131 => 43,  127 => 42,  122 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  99 => 35,  95 => 34,  67 => 8,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Liste des utilisateurs  {% endblock title %}

{% block stylesheet %} {% endblock stylesheet %}

{% block content %}
<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\">Gestion des utilisateurs</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des utilisateurs</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des utilisateurs
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Rôles</th>
                        <th>Date de création</th>
                        <!--<th>Activation compte (non/oui)</th>-->
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in listUsers %}
                    <tr>
                        <td>{{ user.lastName }}</td>
                        <td>{{ user.firstName }}</td>
                        <td>{{ user.email }}</td>
                        <td>{% if user.role == 1 %} administrateur {% else %} visiteur {% endif %}</td>
                        <td>{{ user.createdAt|date(\"d/m/Y \\\\à h:m:s\") }}</td>
                        <td>
                            <a href=\"index.php?action=dashboard/readUser&id={{ user.id }}\">Afficher</a>
                            <a href=\"index.php?action=dashboard/editUser&id={{ user.id }}\">modifier</a>
                            <a href=\"javascript:void(0)\" onclick=\"deleteUser({{ user.id }})\">supprimer</a>
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
    function deleteUser(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer l'utilisateur ?\")){
            window.location.href = \"index.php?action=dashboard/deleteUser&id=\" + id;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deleteUser = deleteUser;
{% endblock %}", "listUsers.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\listUsers.html.twig");
    }
}
