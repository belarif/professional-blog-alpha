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

/* dashboard.html.twig */
class __TwigTemplate_18aad3853dbeb73a25916574916ad712a574cc2ba9ccf5e64e45aa7e0f223598 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Tableau de bord ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"public/css/backoffice/dashboard.css\" rel=\"stylesheet\"/>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"d-flex justify-content-center\">
        <div class=\"dashboard-content\">
            <p class=\"\"><b>Bienvenue dans votre espace d'administration</b></p>
            <p>Sur cette espace, vous pouvez gérer :</p>

            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">- Vos publications</li>
                <li class=\"list-group-item\">- Les commentaires</li>
                <li class=\"list-group-item\">- Les utilisateurs</li>
            </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Tableau de bord {% endblock title %}

{% block stylesheet %}
    <link href=\"public/css/backoffice/dashboard.css\" rel=\"stylesheet\"/>
{% endblock stylesheet %}

{% block content %}

    <div class=\"d-flex justify-content-center\">
        <div class=\"dashboard-content\">
            <p class=\"\"><b>Bienvenue dans votre espace d'administration</b></p>
            <p>Sur cette espace, vous pouvez gérer :</p>

            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">- Vos publications</li>
                <li class=\"list-group-item\">- Les commentaires</li>
                <li class=\"list-group-item\">- Les utilisateurs</li>
            </ul>
        </div>
    </div>

{% endblock content %}", "dashboard.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\dashboard.html.twig");
    }
}
