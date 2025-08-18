<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/_footer.html.twig */
class __TwigTemplate_90f652584d923fd979caeaf2fbca0061 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-dark text-white text-center p-4 w-100\">

\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Nos horaires</h5>
\t\t\t<p>
\t\t\t\tLundi : Fermé
\t\t\t\t<br>
\t\t\t\tMardi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tMercredi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tJeudi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tVendredi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tSamedi : 09:00 - 20:00
\t\t\t\t<br>
\t\t\t\tDimanche : 09:00 - 20:00
\t\t\t</p>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Nous rejoindre</h5>
\t\t\t<div>
\t\t\t\t<a class=\"fs-2 text-white text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"fs-2 text-white mx-3 text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"fs-2 text-white text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-tiktok\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Où nous trouver</h5>
\t\t\t<p>
\t\t\t\t18 Rue des Chevaliers
\t\t\t\t<br>
\t\t\t\t35400 VILLEPONT
\t\t\t\t<br>
\t\t\t\t+33 (0)2 43 48 19 19
\t\t\t\t<br>
\t\t\t\tcontact@zoo-arcadia.com
\t\t\t</p>
\t\t</div>
\t</div>

\t<!-- SECTION : MENTIONS LEGALES -->
\t<section>
\t\t<hr class=\"w-75 mx-auto\">
\t\t<p>&copy; 2025 - Zoo Arcadia - Tous droits réservés - Créé par Jeanne BOUCHEND'HOMME</p>
\t\t<a class=\"text-white\" href=\"/legalInfos\">Mentions légales</a>
\t\t<a class=\"text-white ms-2\" href=\"/cookieManagement\">Gestion des cookies</a>
\t\t<a class=\"text-white ms-2\" href=\"/cgu\">CGU</a>
\t\t<a class=\"text-white ms-2\" href=\"/privacyPolicy\">Politique de confidentialité</a>
\t</section>

</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"bg-dark text-white text-center p-4 w-100\">

\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Nos horaires</h5>
\t\t\t<p>
\t\t\t\tLundi : Fermé
\t\t\t\t<br>
\t\t\t\tMardi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tMercredi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tJeudi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tVendredi : 10:00 - 19:00
\t\t\t\t<br>
\t\t\t\tSamedi : 09:00 - 20:00
\t\t\t\t<br>
\t\t\t\tDimanche : 09:00 - 20:00
\t\t\t</p>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Nous rejoindre</h5>
\t\t\t<div>
\t\t\t\t<a class=\"fs-2 text-white text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"fs-2 text-white mx-3 text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"fs-2 text-white text-decoration-none\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-tiktok\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h5 class=\"text-light\">Où nous trouver</h5>
\t\t\t<p>
\t\t\t\t18 Rue des Chevaliers
\t\t\t\t<br>
\t\t\t\t35400 VILLEPONT
\t\t\t\t<br>
\t\t\t\t+33 (0)2 43 48 19 19
\t\t\t\t<br>
\t\t\t\tcontact@zoo-arcadia.com
\t\t\t</p>
\t\t</div>
\t</div>

\t<!-- SECTION : MENTIONS LEGALES -->
\t<section>
\t\t<hr class=\"w-75 mx-auto\">
\t\t<p>&copy; 2025 - Zoo Arcadia - Tous droits réservés - Créé par Jeanne BOUCHEND'HOMME</p>
\t\t<a class=\"text-white\" href=\"/legalInfos\">Mentions légales</a>
\t\t<a class=\"text-white ms-2\" href=\"/cookieManagement\">Gestion des cookies</a>
\t\t<a class=\"text-white ms-2\" href=\"/cgu\">CGU</a>
\t\t<a class=\"text-white ms-2\" href=\"/privacyPolicy\">Politique de confidentialité</a>
\t</section>

</footer>
", "partials/_footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/partials/_footer.html.twig");
    }
}
