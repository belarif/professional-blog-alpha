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

/* editComment.html.twig */
class __TwigTemplate_e8b12e3d3a6cf21a99565db0b8b64b1f6c77fb6af24447722771b38866c15988 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "editComment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Validation du commentaire ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main>
        <div class=\"container-fluid px-4\">
            <h4 class=\"mt-4\"> Gestion des commentaires </h4>
            <ol class=\"breadcrumb mb-4\">
                <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
                <li class=\"breadcrumb-item active\"> validation du commentaire</li>
            </ol>
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"me-1\"></i>
                    Validation du commentaire
                </div>
                <div class=\"card-body\">
                    <form method=\"post\" action=\"index.php?action=dashboard/updateComment\">
                        <div class=\"mb-3 row visually-hidden\">
                            <label for=\"id\" class=\"col-sm-2 col-form-label\"></label>
                            <div class=\"col-sm-10\">
                                <input id=\"id\" class=\"form-control\" type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label for=\"isEnabled\" class=\"col-sm-2 col-form-label\">Valider<span>*</span></label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"isEnabled\" id=\"flexRadioDefault1\" ";
        // line 30
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 30, $this->source); })()), "isEnabled", [], "any", false, false, false, 30), 1)) {
            echo " checked ";
        }
        echo " value=\"1\" required>
                                    <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                        oui
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"isEnabled\" id=\"flexRadioDefault2\" ";
        // line 36
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 36, $this->source); })()), "isEnabled", [], "any", false, false, false, 36), 0)) {
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
                                <a class=\"btn btn-primary\" href=\"index.php?action=dashboard/listComments\" role=\"button\">Retour liste</a>
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Valider</button>
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
        return "editComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  87 => 30,  77 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Validation du commentaire {% endblock title %}

{% block content %}
    <main>
        <div class=\"container-fluid px-4\">
            <h4 class=\"mt-4\"> Gestion des commentaires </h4>
            <ol class=\"breadcrumb mb-4\">
                <li class=\"breadcrumb-item\"><a href=\"index.php?action=dashboard\">Tableau de bord</a></li>
                <li class=\"breadcrumb-item active\"> validation du commentaire</li>
            </ol>
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"me-1\"></i>
                    Validation du commentaire
                </div>
                <div class=\"card-body\">
                    <form method=\"post\" action=\"index.php?action=dashboard/updateComment\">
                        <div class=\"mb-3 row visually-hidden\">
                            <label for=\"id\" class=\"col-sm-2 col-form-label\"></label>
                            <div class=\"col-sm-10\">
                                <input id=\"id\" class=\"form-control\" type=\"hidden\" name=\"id\" value=\"{{ comment.id }}\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label for=\"isEnabled\" class=\"col-sm-2 col-form-label\">Valider<span>*</span></label>
                            <div class=\"col-sm-10\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"isEnabled\" id=\"flexRadioDefault1\" {% if comment.isEnabled == 1 %} checked {% endif %} value=\"1\" required>
                                    <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                        oui
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"isEnabled\" id=\"flexRadioDefault2\" {% if comment.isEnabled == 0 %} checked {% endif %} value=\"0\" required>
                                    <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                        non
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-end\">
                            <div class=\"justify-content-between\">
                                <a class=\"btn btn-primary\" href=\"index.php?action=dashboard/listComments\" role=\"button\">Retour liste</a>
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
{% endblock content %}", "editComment.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\editComment.html.twig");
    }
}
