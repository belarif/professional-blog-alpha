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

/* login.html.twig */
class __TwigTemplate_343d000e73852726549ed8dea626f9c4616f7b580fe94a9f22180d6bc694bcd0 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"public/css/frontoffice/login.css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"container\">
        <div id=\"error-login-message\">
            ";
        // line 13
        if (((isset($context["identificationError"]) || array_key_exists("identificationError", $context)) &&  !(null === (isset($context["identificationError"]) || array_key_exists("identificationError", $context) ? $context["identificationError"] : (function () { throw new RuntimeError('Variable "identificationError" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["identificationError"]) || array_key_exists("identificationError", $context) ? $context["identificationError"] : (function () { throw new RuntimeError('Variable "identificationError" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        // line 19
        echo "        </div>
        <div class=\"success-register-user\">
            ";
        // line 21
        if (((isset($context["successRegister"]) || array_key_exists("successRegister", $context)) &&  !(null === (isset($context["successRegister"]) || array_key_exists("successRegister", $context) ? $context["successRegister"] : (function () { throw new RuntimeError('Variable "successRegister" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["successRegister"]) || array_key_exists("successRegister", $context) ? $context["successRegister"] : (function () { throw new RuntimeError('Variable "successRegister" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        // line 27
        echo "        </div>
        <div class=\"d-flex justify-content-center\">
            <form method=\"post\" action=\"index.php?action=login\" class=\"box\">
                <h2>Se connecter</h2>
                <input type=\"email\" name=\"email\" placeholder=\"Email\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" name=\"submit\" value=\"Connexion\">
            </form>
        </div>
    </div>

";
    }

    // line 40
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <script>
        var elt = document.getElementsByClassName(\"close\");
        elt.alert('close')
    </script>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  117 => 40,  102 => 27,  95 => 23,  92 => 22,  90 => 21,  86 => 19,  79 => 15,  76 => 14,  74 => 13,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %} {% endblock title %}

{% block stylesheet %}
    <link href=\"public/css/frontoffice/login.css\" rel=\"stylesheet\">
{% endblock stylesheet %}

{% block content %}

    <div class=\"container\">
        <div id=\"error-login-message\">
            {% if identificationError is defined and identificationError is not null %}
            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                {{ identificationError }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            {% endif %}
        </div>
        <div class=\"success-register-user\">
            {% if successRegister is defined and successRegister is not null %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ successRegister }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            {% endif %}
        </div>
        <div class=\"d-flex justify-content-center\">
            <form method=\"post\" action=\"index.php?action=login\" class=\"box\">
                <h2>Se connecter</h2>
                <input type=\"email\" name=\"email\" placeholder=\"Email\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" name=\"submit\" value=\"Connexion\">
            </form>
        </div>
    </div>

{% endblock content %}

{% block script %}
    <script>
        var elt = document.getElementsByClassName(\"close\");
        elt.alert('close')
    </script>
{% endblock script %}", "login.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\login.html.twig");
    }
}
