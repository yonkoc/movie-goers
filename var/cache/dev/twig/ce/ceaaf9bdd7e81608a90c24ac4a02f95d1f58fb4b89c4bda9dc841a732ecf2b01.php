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

/* navbar.html.twig */
class __TwigTemplate_ef47ca1fd0c620d3fe2011e774a12cb8ecd84697f5f4557ca7391d5bb36a847c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movie_list", ["page" => 1]);
        echo "\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reviews_list", ["page" => 1]);
        echo "\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
  </nav>
  ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "  <a class=\"btn btn-outline-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Prisijungti</a>
  <a class=\"btn btn-outline-primary\" href=\"#\">Registracija</a>
  ";
        } else {
            // line 13
            echo "  <a class=\"btn btn-outline-danger\" href=\"#\">Atsijungti</a>
  ";
        }
        // line 15
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 13,  61 => 10,  59 => 9,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"{{ path('index') }}\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"{{ path('movie_list', {page: 1}) }}\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"{{ path('reviews_list', {page: 1}) }}\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
  </nav>
  {% if not app.user %}
  <a class=\"btn btn-outline-primary\" href=\"{{ path('login') }}\">Prisijungti</a>
  <a class=\"btn btn-outline-primary\" href=\"#\">Registracija</a>
  {% else %}
  <a class=\"btn btn-outline-danger\" href=\"#\">Atsijungti</a>
  {% endif %}
</div>
", "navbar.html.twig", "/var/www/html/IT_projektas/templates/navbar.html.twig");
    }
}
