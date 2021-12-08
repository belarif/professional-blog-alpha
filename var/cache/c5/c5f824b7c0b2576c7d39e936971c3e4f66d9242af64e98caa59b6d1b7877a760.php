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

/* register.html.twig */
class __TwigTemplate_986015546e7d0c7f8f237ec9a4fdb88afaf5fe584fed62ad59807292c2de6965 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " S'inscrire ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"public/css/frontoffice/register.css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"container\">
        <div id=\"error-addUser-message\">
            ";
        // line 12
        if (((isset($context["registerError"]) || array_key_exists("registerError", $context)) &&  !(null === (isset($context["registerError"]) || array_key_exists("registerError", $context) ? $context["registerError"] : (function () { throw new RuntimeError('Variable "registerError" does not exist.', 12, $this->source); })())))) {
            // line 13
            echo "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["registerError"]) || array_key_exists("registerError", $context) ? $context["registerError"] : (function () { throw new RuntimeError('Variable "registerError" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        // line 18
        echo "        </div>
        <div id=\"success-addUser-message\">
            ";
        // line 20
        if (((isset($context["successMessage"]) || array_key_exists("successMessage", $context)) &&  !(null === (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 20, $this->source); })())))) {
            // line 21
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        // line 26
        echo "        </div>
        <div class=\"d-flex justify-content-center\">
            <form method=\"post\" action=\"index.php?action=register\" class=\"box\">
                <h2>S'inscrire</h2>
                <input type=\"text\" name=\"lastName\" placeholder=\"Nom\">
                <input type=\"text\" name=\"firstName\" placeholder=\"Prénom\">
                <input type=\"email\" name=\"email\" placeholder=\"Email\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" name=\"submit\" value=\"Envoyer\">
                <p>Vous avez déjà un compte ? <a href=\"index.php?action=login\"> connectez-vous</a></p>
            </form>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  93 => 22,  90 => 21,  88 => 20,  84 => 18,  77 => 14,  74 => 13,  72 => 12,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %} S'inscrire {% endblock title%}

{% block stylesheet %}
    <link href=\"public/css/frontoffice/register.css\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div class=\"container\">
        <div id=\"error-addUser-message\">
            {% if registerError is defined and registerError is not null %}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    {{ registerError }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endif %}
        </div>
        <div id=\"success-addUser-message\">
            {% if successMessage is defined and successMessage is not null %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ successMessage }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endif %}
        </div>
        <div class=\"d-flex justify-content-center\">
            <form method=\"post\" action=\"index.php?action=register\" class=\"box\">
                <h2>S'inscrire</h2>
                <input type=\"text\" name=\"lastName\" placeholder=\"Nom\">
                <input type=\"text\" name=\"firstName\" placeholder=\"Prénom\">
                <input type=\"email\" name=\"email\" placeholder=\"Email\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" name=\"submit\" value=\"Envoyer\">
                <p>Vous avez déjà un compte ? <a href=\"index.php?action=login\"> connectez-vous</a></p>
            </form>
        </div>

    </div>
{% endblock content %}

", "register.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\register.html.twig");
    }
}
