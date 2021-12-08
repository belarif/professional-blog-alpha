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

/* layout.html.twig */
class __TwigTemplate_8891453b8e11d80ba06ff242bdfe697cb938de2f09f1666a64ac793db7b8d1f6 extends Template
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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title> ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"public/assets/img/favicon/favicon.ico\" />
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />
        <link href=\"public/css/backoffice/styles.css\" rel=\"stylesheet\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
        ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "    </head>

    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.php?action=home\" target=\"_blank\">Aller vers le site</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <div class=\"\">
                <a href=\"index.php?action=logout\" class=\"btn btn-dark btn-lg\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">
                    ";
        // line 27
        if ((isset($context["logged_user"]) || array_key_exists("logged_user", $context) ? $context["logged_user"] : (function () { throw new RuntimeError('Variable "logged_user" does not exist.', 27, $this->source); })())) {
            echo " Déconnexion ";
        }
        // line 28
        echo "                </a>
            </div>
            <!-- Navbar-->
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePosts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Gestion des publications
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePosts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listPosts\">Liste des publications</a>
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/addPost\">Créer</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseComments\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-comments\"></i></div>
                                Gestion des commentaires
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseComments\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listComments\">Liste des commentaires</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUsers\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-users\"></i></div>
                                Gestion des utilisateurs
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseUsers\" aria-labelledby=\"headingThree\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listUsers\">Liste des utilisateurs</a>
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/addUser\">Créer</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Connecté(e) en tant que : ";
        // line 72
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["logged_user"]) || array_key_exists("logged_user", $context) ? $context["logged_user"] : (function () { throw new RuntimeError('Variable "logged_user" does not exist.', 72, $this->source); })())), "html", null, true);
        echo "</div>
                    </div>
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <div class=\"content\">
                    ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "                </div>
            </div>
        </div>
        <script>
            ";
        // line 85
        $this->displayBlock('javascript', $context, $blocks);
        // line 86
        echo "        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"public/js/backoffice/scripts.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>
        <script src=\"public/js/backoffice/datatables-simple-demo.js\"></script>

    </body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "
                    ";
    }

    // line 85
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 85,  174 => 79,  170 => 78,  166 => 16,  162 => 15,  155 => 10,  143 => 86,  141 => 85,  135 => 81,  133 => 78,  124 => 72,  78 => 28,  74 => 27,  62 => 17,  60 => 15,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title> {% block title %} {% endblock title %} </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"public/assets/img/favicon/favicon.ico\" />
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />
        <link href=\"public/css/backoffice/styles.css\" rel=\"stylesheet\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
        {% block stylesheet %}
        {% endblock stylesheet %}
    </head>

    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.php?action=home\" target=\"_blank\">Aller vers le site</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <div class=\"\">
                <a href=\"index.php?action=logout\" class=\"btn btn-dark btn-lg\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">
                    {% if logged_user %} Déconnexion {% endif %}
                </a>
            </div>
            <!-- Navbar-->
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePosts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Gestion des publications
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePosts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listPosts\">Liste des publications</a>
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/addPost\">Créer</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseComments\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-comments\"></i></div>
                                Gestion des commentaires
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseComments\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listComments\">Liste des commentaires</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUsers\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-users\"></i></div>
                                Gestion des utilisateurs
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseUsers\" aria-labelledby=\"headingThree\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/listUsers\">Liste des utilisateurs</a>
                                    <a class=\"nav-link\" href=\"index.php?action=dashboard/addUser\">Créer</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Connecté(e) en tant que : {{ logged_user | upper }}</div>
                    </div>
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <div class=\"content\">
                    {% block content %}

                    {% endblock content %}
                </div>
            </div>
        </div>
        <script>
            {% block javascript %} {% endblock javascript %}
        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"public/js/backoffice/scripts.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>
        <script src=\"public/js/backoffice/datatables-simple-demo.js\"></script>

    </body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\professional-blog\\view\\backoffice\\layout.html.twig");
    }
}
