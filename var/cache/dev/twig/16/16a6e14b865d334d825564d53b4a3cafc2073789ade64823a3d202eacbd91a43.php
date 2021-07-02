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

/* components/_navbar.html.twig */
class __TwigTemplate_8554f9c32a1d284a088ac2daa52a58e5fe62e31403460cffd109706b529ec885 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand\" href=\"#\">BetterIndeed</a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\"></a>
              <a class=\"nav-link\" href=\"#\">Lancer la recherche</a>
              <a class=\"nav-link\" href=\"#\">Avis sur les entreprises</a>
              <a class=\"nav-link\" href=\"#\">Consulter les salaires</a>
                <a class=\"nav-link\" href=\"#\">Télécharger votre CV</a>
              <a class=\"nav-link\" href=\"#\">Connexion</a>
              <a class=\"nav-link\" href=\"#\">Entreprises/Publier une annonce</a>
              </div>
            </div>
          </div>
        </div>
      </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand\" href=\"#\">BetterIndeed</a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\"></a>
              <a class=\"nav-link\" href=\"#\">Lancer la recherche</a>
              <a class=\"nav-link\" href=\"#\">Avis sur les entreprises</a>
              <a class=\"nav-link\" href=\"#\">Consulter les salaires</a>
                <a class=\"nav-link\" href=\"#\">Télécharger votre CV</a>
              <a class=\"nav-link\" href=\"#\">Connexion</a>
              <a class=\"nav-link\" href=\"#\">Entreprises/Publier une annonce</a>
              </div>
            </div>
          </div>
        </div>
      </nav>", "components/_navbar.html.twig", "C:\\wamp64\\www\\symfony\\indeed_copie\\templates\\components\\_navbar.html.twig");
    }
}
