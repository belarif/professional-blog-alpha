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

/* home.html.twig */
class __TwigTemplate_351bbad4755f70c42ac84df7eabff5d41edc7fad617d552683e2a21d694f2b1f extends Template
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
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Accueil ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
            <img class=\"masthead-avatar mb-5\" src=\"public/assets/img/logo/logo.jpg\" alt=\"logo\" />
            <h1 class=\"masthead-heading text-uppercase mb-0\">BELARIF Hocine</h1>

            <div class=\"divider-custom divider-light\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <p class=\"masthead-subheading font-weight-light mb-0\">Hocine est disponible pour vos projets Php, Symfony et Wordpress</p>
        </div>
    </header>

    <!-- About Section-->
    <section class=\"page-section bg-primary text-white mb-0\" id=\"about\">
        <div class=\"container\">
            <h2 class=\"page-section-heading text-center text-uppercase text-white\">Mon cv</h2>
            <div class=\"divider-custom divider-light\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <div class=\"text-center mt-4\">
                <a class=\"btn btn-xl btn-outline-light\" href=\"public/assets/cv.pdf\" download=\"cv-hocine-belarif.pdf\">
                    <i class=\"fas fa-download me-2\"></i>
                    Téléchargement
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section-->
    <section class=\"page-section\" id=\"contact\">
        <div class=\"container\">
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">Contactez-moi</h2>
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                    ";
        // line 50
        if (((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context)) &&  !(null === (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 50, $this->source); })())))) {
            // line 51
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    ";
        }
        // line 56
        echo "                    ";
        if (((isset($context["successSendMessage"]) || array_key_exists("successSendMessage", $context)) &&  !(null === (isset($context["successSendMessage"]) || array_key_exists("successSendMessage", $context) ? $context["successSendMessage"] : (function () { throw new RuntimeError('Variable "successSendMessage" does not exist.', 56, $this->source); })())))) {
            // line 57
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["successSendMessage"]) || array_key_exists("successSendMessage", $context) ? $context["successSendMessage"] : (function () { throw new RuntimeError('Variable "successSendMessage" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        // line 62
        echo "                    <form method=\"post\" action=\"index.php?action=sendMessage\">
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"lastName\" type=\"text\" name=\"lastName\" required/>
                            <label for=\"lastName\">Nom</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"firstName\" type=\"text\" name=\"firstName\" required/>
                            <label for=\"firstName\">Prénom</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required/>
                            <label for=\"email\">Email</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"subject\" type=\"text\" name=\"subject\" required/>
                            <label for=\"subject\">Objet</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\" id=\"message\" type=\"text\" style=\"height: 10rem\" name=\"message\" required></textarea>
                            <label for=\"message\">Message</label>
                        </div>
                        <button class=\"btn btn-primary btn-xl\" type=\"submit\" name=\"submit\">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  122 => 58,  119 => 57,  116 => 56,  109 => 52,  106 => 51,  104 => 50,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %} Accueil {% endblock %}

{% block content %}

    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
            <img class=\"masthead-avatar mb-5\" src=\"public/assets/img/logo/logo.jpg\" alt=\"logo\" />
            <h1 class=\"masthead-heading text-uppercase mb-0\">BELARIF Hocine</h1>

            <div class=\"divider-custom divider-light\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <p class=\"masthead-subheading font-weight-light mb-0\">Hocine est disponible pour vos projets Php, Symfony et Wordpress</p>
        </div>
    </header>

    <!-- About Section-->
    <section class=\"page-section bg-primary text-white mb-0\" id=\"about\">
        <div class=\"container\">
            <h2 class=\"page-section-heading text-center text-uppercase text-white\">Mon cv</h2>
            <div class=\"divider-custom divider-light\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <div class=\"text-center mt-4\">
                <a class=\"btn btn-xl btn-outline-light\" href=\"public/assets/cv.pdf\" download=\"cv-hocine-belarif.pdf\">
                    <i class=\"fas fa-download me-2\"></i>
                    Téléchargement
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section-->
    <section class=\"page-section\" id=\"contact\">
        <div class=\"container\">
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">Contactez-moi</h2>
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                    {% if errorMessage is defined and errorMessage is not null %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{ errorMessage }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    {% endif %}
                    {% if successSendMessage is defined and successSendMessage is not null %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ successSendMessage }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endif %}
                    <form method=\"post\" action=\"index.php?action=sendMessage\">
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"lastName\" type=\"text\" name=\"lastName\" required/>
                            <label for=\"lastName\">Nom</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"firstName\" type=\"text\" name=\"firstName\" required/>
                            <label for=\"firstName\">Prénom</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required/>
                            <label for=\"email\">Email</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\" id=\"subject\" type=\"text\" name=\"subject\" required/>
                            <label for=\"subject\">Objet</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\" id=\"message\" type=\"text\" style=\"height: 10rem\" name=\"message\" required></textarea>
                            <label for=\"message\">Message</label>
                        </div>
                        <button class=\"btn btn-primary btn-xl\" type=\"submit\" name=\"submit\">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "home.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\home.html.twig");
    }
}
