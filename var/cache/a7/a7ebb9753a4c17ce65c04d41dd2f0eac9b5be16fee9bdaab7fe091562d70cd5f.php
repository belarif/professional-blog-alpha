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
class __TwigTemplate_f724558b684bd33405a11e296df4c851546822849c5ce1f176f26b085b1d4095 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Accueil ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!-- Masthead-->
<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Avatar Image-->
        <img class=\"masthead-avatar mb-5\" src=\"public/assets/img/avataaars.svg\" alt=\"...\" />
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading text-uppercase mb-0\">Start Bootstrap</h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Graphic Artist - Web Designer - Illustrator</p>
    </div>
</header>

<!-- About Section-->
<section class=\"page-section bg-primary text-white mb-0\" id=\"about\">
    <div class=\"container\">
        <!-- About Section Heading-->
        <h2 class=\"page-section-heading text-center text-uppercase text-white\">About</h2>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- About Section Content-->
        <div class=\"row\">
            <div class=\"col-lg-4 ms-auto\"><p class=\"lead\">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
            <div class=\"col-lg-4 me-auto\"><p class=\"lead\">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
        </div>
        <!-- About Section Button-->
        <div class=\"text-center mt-4\">
            <a class=\"btn btn-xl btn-outline-light\" href=\"https://startbootstrap.com/theme/freelancer/\">
                <i class=\"fas fa-download me-2\"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class=\"page-section\" id=\"contact\">
    <div class=\"container\">
        <!-- Contact Section Heading-->
        <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">Contact Me</h2>
        <!-- Icon Divider-->
        <div class=\"divider-custom\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Contact Section Form-->
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8 col-xl-7\">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                    <!-- Name input-->
                    <div class=\"form-floating mb-3\">
                        <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Enter your name...\" data-sb-validations=\"required\" />
                        <label for=\"name\">Full name</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class=\"form-floating mb-3\">
                        <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"name@example.com\" data-sb-validations=\"required,email\" />
                        <label for=\"email\">Email address</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class=\"form-floating mb-3\">
                        <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"(123) 456-7890\" data-sb-validations=\"required\" />
                        <label for=\"phone\">Phone number</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class=\"form-floating mb-3\">
                        <textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Enter your message here...\" style=\"height: 10rem\" data-sb-validations=\"required\"></textarea>
                        <label for=\"message\">Message</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3\">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <button class=\"btn btn-primary btn-xl disabled\" id=\"submitButton\" type=\"submit\">Send</button>
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

    public function getDebugInfo()
    {
        return array (  62 => 5,  58 => 4,  51 => 2,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "H:\\wamp64\\www\\professional-blog\\view\\home.html.twig");
    }
}
