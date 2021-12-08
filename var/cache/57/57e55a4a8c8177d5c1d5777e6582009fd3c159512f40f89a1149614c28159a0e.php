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

/* template.html.twig */
class __TwigTemplate_272e1ce725632dc0b64ebc94ff23f6797751d5e3c06f0841d31d50cae6a5e551 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"public/assets/img/favicon/favicon.ico\" />
        <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"public/css/frontoffice/styles.css\" rel=\"stylesheet\" />
        ";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 15
        echo "    </head>

    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"></a>
                <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=home\">ACCUEIL</a></li>
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=listPosts\">BLOG</a></li>
                        ";
        // line 30
        if (((isset($context["logged_user"]) || array_key_exists("logged_user", $context)) &&  !(null === (isset($context["logged_user"]) || array_key_exists("logged_user", $context) ? $context["logged_user"] : (function () { throw new RuntimeError('Variable "logged_user" does not exist.', 30, $this->source); })())))) {
            // line 31
            echo "                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=logout\">DECONNEXION</a></li>
                        ";
        } else {
            // line 33
            echo "                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=register\">S'INSCRIRE</a></li>
                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=login\">SE CONNECTER</a></li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"content\">
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        </div>

        <!-- Footer-->
        <footer class=\"footer text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Footer Location-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">Adresse</h4>
                        <p class=\"lead mb-0\">
                            15 rue de la rotonde
                            <br />
                            75000 PARIS
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">me suivre</h4>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a>
                    </div>
                    <!-- Footer admin login-->
                    <div class=\"col-lg-4\">
                        <h5 class=\"link\"><a href=\"index.php?action=dashboard\">Espace d'administration</a></h5>
                        <h5 class=\"link\"><a href=\"index.php?action=listPosts\">Blog</a></h5>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class=\"copyright py-4 text-center text-white\">
            <div class=\"container\"><small>Copyright &copy; Blog professionnel 2021</small></div>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"public/js/frontoffice/scripts.js\"></script>
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        <script>
            ";
        // line 84
        $this->displayBlock('script', $context, $blocks);
        // line 85
        echo "        </script>
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 14
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  ";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
            ";
    }

    // line 84
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 84,  167 => 43,  163 => 42,  156 => 14,  149 => 8,  142 => 85,  140 => 84,  99 => 45,  97 => 42,  89 => 36,  84 => 33,  80 => 31,  78 => 30,  61 => 15,  59 => 14,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title> {% block title %} {% endblock title %} </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"public/assets/img/favicon/favicon.ico\" />
        <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"public/css/frontoffice/styles.css\" rel=\"stylesheet\" />
        {% block stylesheet %}  {% endblock stylesheet %}
    </head>

    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"></a>
                <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=home\">ACCUEIL</a></li>
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=listPosts\">BLOG</a></li>
                        {% if logged_user is defined and logged_user is not null %}
                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=logout\">DECONNEXION</a></li>
                        {% else %}
                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=register\">S'INSCRIRE</a></li>
                            <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"index.php?action=login\">SE CONNECTER</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"content\">
            {% block content %}

            {% endblock content %}
        </div>

        <!-- Footer-->
        <footer class=\"footer text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Footer Location-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">Adresse</h4>
                        <p class=\"lead mb-0\">
                            15 rue de la rotonde
                            <br />
                            75000 PARIS
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">me suivre</h4>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a>
                    </div>
                    <!-- Footer admin login-->
                    <div class=\"col-lg-4\">
                        <h5 class=\"link\"><a href=\"index.php?action=dashboard\">Espace d'administration</a></h5>
                        <h5 class=\"link\"><a href=\"index.php?action=listPosts\">Blog</a></h5>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class=\"copyright py-4 text-center text-white\">
            <div class=\"container\"><small>Copyright &copy; Blog professionnel 2021</small></div>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"public/js/frontoffice/scripts.js\"></script>
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        <script>
            {% block script %} {% endblock script %}
        </script>
    </body>
</html>
", "template.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\frontoffice\\template.html.twig");
    }
}
