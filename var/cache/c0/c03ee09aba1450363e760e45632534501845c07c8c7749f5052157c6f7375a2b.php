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

/* listComments.html.twig */
class __TwigTemplate_3a6848be695e24f5b14b1711146a4bfc7558dd55d9dcb47b4b200942fb964355 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "listComments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des commentaires  ";
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
        <h4 class=\"mt-4\">Gestion des commentaires</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des commentaires</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des commentaires
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                        <tr>
                            <th>Commentaire</th>
                            <th>Titre de la publication</th>
                            <th>Commentateur</th>
                            <th>Date</th>
                            <th>Valider (non/oui)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listComments"]) || array_key_exists("listComments", $context) ? $context["listComments"] : (function () { throw new RuntimeError('Variable "listComments" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 34
            echo "                        <tr>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "postTitle", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "lastnameVisitor", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "firstnameVisitor", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 38), "d/m/Y \\à h:m:s"), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"form-check form-switch\">
                                    ";
            // line 41
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "isEnabled", [], "any", false, false, false, 41), 1)) {
                // line 42
                echo "                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" checked>
                                        <label for=\"flexSwitchCheckDefault\"></label>
                                    ";
            } else {
                // line 45
                echo "                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                        <label for=\"flexSwitchCheckDefault\"></label>
                                    ";
            }
            // line 48
            echo "                                </div>
                            </td>
                            <td>
                                <a href=\"index.php?action=dashboard/editComment&id=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">Modifier</a>
                                <a href=\"index.php?action=dashboard/readComment&id=";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">Afficher</a>
                                <a href=\"javascript:void(0)\" onclick=\"deleteComment(";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo ")\">supprimer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
";
    }

    // line 65
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "    function deleteComment(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer le commentaire ?\")){
            window.location.href = \"index.php?action=dashboard/deleteComment&id=\" + id;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deleteComment = deleteComment;
";
    }

    public function getTemplateName()
    {
        return "listComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  166 => 65,  156 => 57,  146 => 53,  142 => 52,  138 => 51,  133 => 48,  128 => 45,  123 => 42,  121 => 41,  115 => 38,  109 => 37,  105 => 36,  101 => 35,  98 => 34,  94 => 33,  67 => 8,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Liste des commentaires  {% endblock title %}

{% block stylesheet %} {% endblock stylesheet %}

{% block content %}
<main>
    <div class=\"container-fluid px-4\">
        <h4 class=\"mt-4\">Gestion des commentaires</h4>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">liste des commentaires</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Liste des commentaires
            </div>
            <div class=\"card-body\">
                <table id=\"datatablesSimple\">
                    <thead>
                        <tr>
                            <th>Commentaire</th>
                            <th>Titre de la publication</th>
                            <th>Commentateur</th>
                            <th>Date</th>
                            <th>Valider (non/oui)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for comment in listComments %}
                        <tr>
                            <td>{{ comment.content }}</td>
                            <td>{{ comment.postTitle }}</td>
                            <td>{{ comment.lastnameVisitor }} {{ comment.firstnameVisitor }}</td>
                            <td>{{ comment.createdAt|date(\"d/m/Y \\\\à h:m:s\") }}</td>
                            <td>
                                <div class=\"form-check form-switch\">
                                    {% if comment.isEnabled == 1 %}
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" checked>
                                        <label for=\"flexSwitchCheckDefault\"></label>
                                    {% else %}
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                        <label for=\"flexSwitchCheckDefault\"></label>
                                    {%  endif %}
                                </div>
                            </td>
                            <td>
                                <a href=\"index.php?action=dashboard/editComment&id={{ comment.id }}\">Modifier</a>
                                <a href=\"index.php?action=dashboard/readComment&id={{ comment.id }}\">Afficher</a>
                                <a href=\"javascript:void(0)\" onclick=\"deleteComment({{ comment.id }})\">supprimer</a>
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
    function deleteComment(id)
    {
        if(confirm(\"Êtes vous sûr de vouloir supprimer le commentaire ?\")){
            window.location.href = \"index.php?action=dashboard/deleteComment&id=\" + id;
        }
        else {
            alert(\"Vous avez annulé la suppression\");
        }
    }
    window.deleteComment = deleteComment;
{% endblock %}", "listComments.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\listComments.html.twig");
    }
}
