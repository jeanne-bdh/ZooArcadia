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

/* page/index.html.twig */
class __TwigTemplate_f92efb185ab566d0ca8d2ff94774641b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Zoo Arcadia
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
\t<!-- SECTION : HERO -->
\t<section class=\"hero d-flex justify-content-center align-items-center\">
\t\t<p class=\"text-white text-center mx-auto px-3\">
\t\t\tBienvenue au Zoo Arcadia !
\t\t\t<br>
\t\t\tNiché au cœur de la forêt de Brocéliande depuis 1960, notre zoo vous invite à une
\t\t\t<br>
\t\t\taventure exceptionnelle au milieu de la nature.
\t\t\t<br>
\t\t\tBien plus qu'un simple parc animalier : c'est un voyage au pays de la biodiversité.
\t\t</p>
\t</section>

\t<!-- SECTION : PRESENTATION DU ZOO -->
\t<section class=\"container px-3 py-lg-5 my-4 d-flex flex-row\">
\t\t<div class=\"d-flex flex-column justify-content-center align-items-center me-2\">
\t\t\t<p class=\"mx-lg-5 px-lg-5\">
\t\t\t\tVenez rencontrer une incroyable diversité d'animaux venant des 4 coins du monde.
\t\t\t</p>
\t\t\t<img class=\"w-50 rounded-circle\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/presentation-loutre.jpg"), "html", null, true);
        yield "\" alt=\"Présentation Loutre\">
\t\t</div>
\t\t<div class=\"d-flex flex-column justify-content-center align-items-center ms-2\">
\t\t\t<img class=\"w-50 rounded-circle\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/presentation-singe.jpg"), "html", null, true);
        yield "\" alt=\"Présentation Singe\">
\t\t\t<p class=\"mx-lg-5 px-lg-5 mt-3\">
\t\t\t\tNos équipes veillent quotidiennement au bien-être de chaque animal, garantissant des conditions de vie respectueuses de leurs besoins naturels.
\t\t\t</p>
\t\t</div>
\t</section>

\t<!-- SECTION : NOS HABITATS -->
\t<section class=\"container-habitats bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos habitats</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 46
            yield "\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t<a class=\"img-habitat-home d-flex justify-content-center\" href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t<img class=\"w-75\" src=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["habitat"], "imageFile"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "habitatName", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
\t\t\t\t\t\t<p class=\"view-habitat\">Visitez</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t<h4 class=\"text-black mt-1 mb-4\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "habitatName", [], "any", false, false, false, 52), "html", null, true);
            yield "</h4>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "\t\t</div>
\t</section>

\t<!-- SECTION : NOS SERVICES -->
\t<section class=\"container-services bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos services</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t<div class=\"row\">

\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 70
            yield "\t\t\t\t\t<div class=\"col-4 text-center text-dark\">
\t\t\t\t\t\t<img class=\"w-25\" src=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["service"], "iconFile"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "serviceName", [], "any", false, false, false, 71), "html", null, true);
            yield "\">
\t\t\t\t\t\t<p>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "serviceName", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- SECTION : NOS ANIMAUX -->
\t<section class=\"pb-5 bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos animaux</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t<div id=\"carouselHome\" class=\"carousel slide\">
\t\t\t\t<div class=\"carousel-inner rounded-5\">

\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 92
            yield "\t\t\t\t\t\t<div class=\"carousel-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["animal"], "imageFile"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "animalName", [], "any", false, false, false, 93), "html", null, true);
            yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselHome\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselHome\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- SECTION : AVIS -->
\t<section class=\"text-center py-5 bg-secondary\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"mx-2 mx-md-4\">Avis de nos visiteurs</h2>
\t\t\t<div class=\"row my-4 mx-1\">
\t\t\t\t<div class=\"col-6 col-md-3\">
\t\t\t\t\t<h6 class=\"text-light\">Gérard D.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Très très agréable comme zoo nous étions étonné que ce zoo soit aussi propre.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    Superbe découverte.”
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-md-3 d-none d-md-block\">
\t\t\t\t\t<h6 class=\"text-light\">Luke L.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Je suis allé dans ce zoo avec un enfant en bas âge en pensant y passer un bon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    moment. En réalité,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    j’y ai
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pensé un excellent moment !”</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-md-3 d-none d-md-block\">
\t\t\t\t\t<h6 class=\"text-light\">Laëtitia S.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Les explications du soigneur et de notre guide se sont révélées très utiles.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    L'activité est très
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    bien
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    organisée. Je recommande.”</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"link-form-review col-6 col-md-3 d-flex flex-column justify-content-evenly\">
\t\t\t\t\t<a href=\"/form-review\">
\t\t\t\t\t\t<svg version=\"1.1\" viewbox=\"0 0 1640.2342 1754.6284\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g transform=\"translate(1203.2 335.4)\">
\t\t\t\t\t\t\t\t<path d=\"m176.77 1129.9c-2e-5 40.186-11.601 96.026-33.526 132.45-21.925 36.421-44.691 71.332-89.98 92.823-90.834 43.102-275.63 64.046-392.44 64.046s-319.57-7.3692-402.17-64.201c-41.298-28.416-69.938-49.261-81.034-98.315-19.733-37.653-28.111-79.394-28.111-119.58s12.296-77.721 43.723-105.34c33.341-29.301 95.054-37.612 127.33-80.466 50.632-40.972 36.77-95.63 59.894-180.44 41.172-77.592 131.5-149.16 263.03-124.31 125.68-17.849 197.95 17.476 254.95 68.975 55.198 58.718 39.459 140.52 67.813 190.04 45.417 38.813 85.296 77.33 153.99 91.539 47.669 32.645 56.523 92.603 56.523 132.79z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-471.2 16.389c4.2962 40.115 13.202 59.471 26.214 87.554 12.393 24.617 26.798 40.752 27.536 102.96-5.1834 54.248-21.712 82.483-53.587 104.41-30.827 18.516-66.518 31.506-129.94 36.66-28.665-1.3152-64.083-16.591-91.95-35.217-28.653-17.316-50.541-39.032-71.273-69.21-30.552-62.804-30.033-87.738-26.443-157.34 5.2064-28.357 10.134-47.98 18.588-72.451 4.0955-11.855 9.835-23.411 16.406-38.734 6.5707-15.323 17.248-32.434 30.413-52.852 17.077-21.03 24.445-30.25 44.836-50.382-4.8002-62.376 29.002-132.95 36.937-153.83 17.806-30.91 23.993-47.139 35.307-53.34 6.0746 10.077 19.376 23.876 17.403 44.207 2.6779 11.805-14.569 38.669-15.333 55.108 0.0261 20.154 4.1843 43.454 8.4451 66.892 48.098-3.6763 78.074-12.65 114.27 15.973 25.021 32.242 28.825 68.787 25.632 99.151 0.47547 30.626-17.575 47.997-13.467 70.453z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-292.66 16.389c-4.2962 40.115-13.202 59.471-26.214 87.554-12.393 24.617-26.798 40.752-27.536 102.96 5.1833 54.248 21.712 82.483 53.587 104.41 30.827 18.516 66.518 31.506 129.94 36.66 28.665-1.3152 64.083-16.591 91.95-35.217 28.653-17.316 50.541-39.032 71.273-69.21 30.552-62.804 30.033-87.738 26.443-157.34-5.2064-28.357-10.134-47.98-18.588-72.451-4.0955-11.855-9.835-23.411-16.406-38.734-6.5707-15.323-17.248-32.434-30.413-52.852-17.077-21.03-24.445-30.25-44.836-50.382 4.8002-62.376-29.002-132.95-36.937-153.83-17.806-30.91-23.993-47.139-35.307-53.34-6.0746 10.077-19.376 23.876-17.403 44.207-2.6779 11.805 14.569 38.669 15.333 55.108-0.0261 20.154-4.1843 43.454-8.4451 66.892-48.098-3.6763-78.074-12.65-114.27 15.973-25.021 32.242-28.825 68.787-25.632 99.151-0.4755 30.626 17.575 47.997 13.467 70.453z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-919.16 476.97c21.17 34.344 37.55 47.97 61.398 67.7 21.795 16.869 41.748 25.218 69.231 81.027 18.709 51.182 15.967 83.785-3.3426 117.31-19.833 29.997-46.437 57.104-101.44 89.096-26.432 11.171-64.975 12.657-98.149 7.8634-33.319-3.2722-62.43-13.43-94.146-31.723-54.643-43.498-64.922-66.219-91.69-130.57-7.5268-27.831-11.54-47.661-14.461-73.386-1.4153-12.462-1.2184-25.364-1.8953-42.022s1.5807-36.701 4.6577-60.8c6.3422-26.337 9.0159-37.833 18.737-64.788-31.222-54.213-31.146-132.47-32.989-154.73 2.7412-35.567 1.3267-52.877 8.863-63.35 9.8252 6.4736 27.776 13.19 34.761 32.386 7.5054 9.4972 3.524 41.172 9.9224 56.334 8.712 18.174 22.509 37.405 36.457 56.716 41.814-24.052 64.993-45.071 110-34.851 36.476 18.306 55.663 49.64 65.872 78.414 13.632 27.429 4.834 50.885 18.221 69.375z\"/>
\t\t\t\t\t\t\t\t<path d=\"m150.17 510.31c-16.564 36.787-31.05 52.412-52.154 75.052-19.437 19.539-38.147 30.391-58.203 89.279-11.952 53.168-5.0289 85.144 18.443 115.9 23.535 27.189 53.414 50.639 112.08 75.27 27.652 7.6688 66.064 4.1716 98.344-4.8597 32.619-7.5418 60.176-21.369 89.269-43.599 48.577-50.181 55.841-74.039 74.086-141.31 3.8749-28.569 5.2969-48.751 4.8763-74.638-0.20369-12.541-2.0627-25.309-3.5397-41.916-1.4771-16.607-6.3006-36.191-12.46-59.691-9.6857-25.299-13.82-36.354-26.935-61.831 23.97-57.787 13.803-135.38 12.76-157.69-7.3051-34.916-8.135-52.264-16.959-61.678-8.9083 7.6866-25.843 16.662-30.294 36.598-6.2179 10.386 1.815 41.282-2.5746 57.144-6.2955 19.146-17.497 39.996-28.839 60.944-44.566-18.459-70.263-36.313-113.57-20.375-33.811 22.857-48.796 56.404-55.209 86.254-9.9808 28.958 1.7685 51.083-9.1224 71.146z\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a id=\"link-review\" href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review");
        yield "\">
\t\t\t\t\t\t<p>Donner votre avis</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"/all-reviews\">
\t\t\t\t<button class=\"btn btn-black\">Plus d'avis</button>
\t\t\t</a>
\t\t</div>
\t</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  352 => 168,  278 => 96,  259 => 93,  252 => 92,  235 => 91,  217 => 75,  208 => 72,  202 => 71,  199 => 70,  195 => 69,  180 => 56,  170 => 52,  166 => 51,  158 => 48,  154 => 47,  151 => 46,  147 => 45,  129 => 30,  123 => 27,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Zoo Arcadia
{% endblock %}

{% block body %}

\t<!-- SECTION : HERO -->
\t<section class=\"hero d-flex justify-content-center align-items-center\">
\t\t<p class=\"text-white text-center mx-auto px-3\">
\t\t\tBienvenue au Zoo Arcadia !
\t\t\t<br>
\t\t\tNiché au cœur de la forêt de Brocéliande depuis 1960, notre zoo vous invite à une
\t\t\t<br>
\t\t\taventure exceptionnelle au milieu de la nature.
\t\t\t<br>
\t\t\tBien plus qu'un simple parc animalier : c'est un voyage au pays de la biodiversité.
\t\t</p>
\t</section>

\t<!-- SECTION : PRESENTATION DU ZOO -->
\t<section class=\"container px-3 py-lg-5 my-4 d-flex flex-row\">
\t\t<div class=\"d-flex flex-column justify-content-center align-items-center me-2\">
\t\t\t<p class=\"mx-lg-5 px-lg-5\">
\t\t\t\tVenez rencontrer une incroyable diversité d'animaux venant des 4 coins du monde.
\t\t\t</p>
\t\t\t<img class=\"w-50 rounded-circle\" src=\"{{ asset('images/home/presentation-loutre.jpg') }}\" alt=\"Présentation Loutre\">
\t\t</div>
\t\t<div class=\"d-flex flex-column justify-content-center align-items-center ms-2\">
\t\t\t<img class=\"w-50 rounded-circle\" src=\"{{ asset('images/home/presentation-singe.jpg') }}\" alt=\"Présentation Singe\">
\t\t\t<p class=\"mx-lg-5 px-lg-5 mt-3\">
\t\t\t\tNos équipes veillent quotidiennement au bien-être de chaque animal, garantissant des conditions de vie respectueuses de leurs besoins naturels.
\t\t\t</p>
\t\t</div>
\t</section>

\t<!-- SECTION : NOS HABITATS -->
\t<section class=\"container-habitats bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos habitats</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t{% for habitat in habitats  %}
\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t<a class=\"img-habitat-home d-flex justify-content-center\" href=\"{{ path('app_habitat_details', {'id': habitat.id}) }}\">
\t\t\t\t\t\t<img class=\"w-75\" src=\"{{ vich_uploader_asset(habitat, 'imageFile') }}\" alt=\"{{ habitat.habitatName }}\">
\t\t\t\t\t\t<p class=\"view-habitat\">Visitez</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_habitat_details', {'id': habitat.id}) }}\">
\t\t\t\t\t\t<h4 class=\"text-black mt-1 mb-4\">{{ habitat.habitatName }}</h4>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>

\t<!-- SECTION : NOS SERVICES -->
\t<section class=\"container-services bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos services</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t<div class=\"row\">

\t\t\t\t{% for service in services  %}
\t\t\t\t\t<div class=\"col-4 text-center text-dark\">
\t\t\t\t\t\t<img class=\"w-25\" src=\"{{ vich_uploader_asset(service, 'iconFile') }}\" alt=\"{{ service.serviceName }}\">
\t\t\t\t\t\t<p>{{ service.serviceName }}</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- SECTION : NOS ANIMAUX -->
\t<section class=\"pb-5 bg-primary\">
\t\t<div class=\"container\">
\t\t\t<div class=\"py-4 d-flex justify-content-center\">
\t\t\t\t<hr class=\"line-h2\">
\t\t\t\t<h2 class=\"mx-2 mx-md-4\">Nos animaux</h2>
\t\t\t\t<hr class=\"line-h2\">
\t\t\t</div>
\t\t\t<div id=\"carouselHome\" class=\"carousel slide\">
\t\t\t\t<div class=\"carousel-inner rounded-5\">

\t\t\t\t\t{% for animal in animals %}
\t\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(animal, 'imageFile') }}\" alt=\"{{ animal.animalName }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselHome\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselHome\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- SECTION : AVIS -->
\t<section class=\"text-center py-5 bg-secondary\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"mx-2 mx-md-4\">Avis de nos visiteurs</h2>
\t\t\t<div class=\"row my-4 mx-1\">
\t\t\t\t<div class=\"col-6 col-md-3\">
\t\t\t\t\t<h6 class=\"text-light\">Gérard D.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Très très agréable comme zoo nous étions étonné que ce zoo soit aussi propre.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    Superbe découverte.”
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-md-3 d-none d-md-block\">
\t\t\t\t\t<h6 class=\"text-light\">Luke L.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Je suis allé dans ce zoo avec un enfant en bas âge en pensant y passer un bon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    moment. En réalité,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    j’y ai
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pensé un excellent moment !”</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-md-3 d-none d-md-block\">
\t\t\t\t\t<h6 class=\"text-light\">Laëtitia S.</h6>
\t\t\t\t\t<div class=\"star-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t\t<i class=\"bi bi-star-fill\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-white\">“Les explications du soigneur et de notre guide se sont révélées très utiles.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    L'activité est très
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    bien
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    organisée. Je recommande.”</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"link-form-review col-6 col-md-3 d-flex flex-column justify-content-evenly\">
\t\t\t\t\t<a href=\"/form-review\">
\t\t\t\t\t\t<svg version=\"1.1\" viewbox=\"0 0 1640.2342 1754.6284\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<g transform=\"translate(1203.2 335.4)\">
\t\t\t\t\t\t\t\t<path d=\"m176.77 1129.9c-2e-5 40.186-11.601 96.026-33.526 132.45-21.925 36.421-44.691 71.332-89.98 92.823-90.834 43.102-275.63 64.046-392.44 64.046s-319.57-7.3692-402.17-64.201c-41.298-28.416-69.938-49.261-81.034-98.315-19.733-37.653-28.111-79.394-28.111-119.58s12.296-77.721 43.723-105.34c33.341-29.301 95.054-37.612 127.33-80.466 50.632-40.972 36.77-95.63 59.894-180.44 41.172-77.592 131.5-149.16 263.03-124.31 125.68-17.849 197.95 17.476 254.95 68.975 55.198 58.718 39.459 140.52 67.813 190.04 45.417 38.813 85.296 77.33 153.99 91.539 47.669 32.645 56.523 92.603 56.523 132.79z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-471.2 16.389c4.2962 40.115 13.202 59.471 26.214 87.554 12.393 24.617 26.798 40.752 27.536 102.96-5.1834 54.248-21.712 82.483-53.587 104.41-30.827 18.516-66.518 31.506-129.94 36.66-28.665-1.3152-64.083-16.591-91.95-35.217-28.653-17.316-50.541-39.032-71.273-69.21-30.552-62.804-30.033-87.738-26.443-157.34 5.2064-28.357 10.134-47.98 18.588-72.451 4.0955-11.855 9.835-23.411 16.406-38.734 6.5707-15.323 17.248-32.434 30.413-52.852 17.077-21.03 24.445-30.25 44.836-50.382-4.8002-62.376 29.002-132.95 36.937-153.83 17.806-30.91 23.993-47.139 35.307-53.34 6.0746 10.077 19.376 23.876 17.403 44.207 2.6779 11.805-14.569 38.669-15.333 55.108 0.0261 20.154 4.1843 43.454 8.4451 66.892 48.098-3.6763 78.074-12.65 114.27 15.973 25.021 32.242 28.825 68.787 25.632 99.151 0.47547 30.626-17.575 47.997-13.467 70.453z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-292.66 16.389c-4.2962 40.115-13.202 59.471-26.214 87.554-12.393 24.617-26.798 40.752-27.536 102.96 5.1833 54.248 21.712 82.483 53.587 104.41 30.827 18.516 66.518 31.506 129.94 36.66 28.665-1.3152 64.083-16.591 91.95-35.217 28.653-17.316 50.541-39.032 71.273-69.21 30.552-62.804 30.033-87.738 26.443-157.34-5.2064-28.357-10.134-47.98-18.588-72.451-4.0955-11.855-9.835-23.411-16.406-38.734-6.5707-15.323-17.248-32.434-30.413-52.852-17.077-21.03-24.445-30.25-44.836-50.382 4.8002-62.376-29.002-132.95-36.937-153.83-17.806-30.91-23.993-47.139-35.307-53.34-6.0746 10.077-19.376 23.876-17.403 44.207-2.6779 11.805 14.569 38.669 15.333 55.108-0.0261 20.154-4.1843 43.454-8.4451 66.892-48.098-3.6763-78.074-12.65-114.27 15.973-25.021 32.242-28.825 68.787-25.632 99.151-0.4755 30.626 17.575 47.997 13.467 70.453z\"/>
\t\t\t\t\t\t\t\t<path d=\"m-919.16 476.97c21.17 34.344 37.55 47.97 61.398 67.7 21.795 16.869 41.748 25.218 69.231 81.027 18.709 51.182 15.967 83.785-3.3426 117.31-19.833 29.997-46.437 57.104-101.44 89.096-26.432 11.171-64.975 12.657-98.149 7.8634-33.319-3.2722-62.43-13.43-94.146-31.723-54.643-43.498-64.922-66.219-91.69-130.57-7.5268-27.831-11.54-47.661-14.461-73.386-1.4153-12.462-1.2184-25.364-1.8953-42.022s1.5807-36.701 4.6577-60.8c6.3422-26.337 9.0159-37.833 18.737-64.788-31.222-54.213-31.146-132.47-32.989-154.73 2.7412-35.567 1.3267-52.877 8.863-63.35 9.8252 6.4736 27.776 13.19 34.761 32.386 7.5054 9.4972 3.524 41.172 9.9224 56.334 8.712 18.174 22.509 37.405 36.457 56.716 41.814-24.052 64.993-45.071 110-34.851 36.476 18.306 55.663 49.64 65.872 78.414 13.632 27.429 4.834 50.885 18.221 69.375z\"/>
\t\t\t\t\t\t\t\t<path d=\"m150.17 510.31c-16.564 36.787-31.05 52.412-52.154 75.052-19.437 19.539-38.147 30.391-58.203 89.279-11.952 53.168-5.0289 85.144 18.443 115.9 23.535 27.189 53.414 50.639 112.08 75.27 27.652 7.6688 66.064 4.1716 98.344-4.8597 32.619-7.5418 60.176-21.369 89.269-43.599 48.577-50.181 55.841-74.039 74.086-141.31 3.8749-28.569 5.2969-48.751 4.8763-74.638-0.20369-12.541-2.0627-25.309-3.5397-41.916-1.4771-16.607-6.3006-36.191-12.46-59.691-9.6857-25.299-13.82-36.354-26.935-61.831 23.97-57.787 13.803-135.38 12.76-157.69-7.3051-34.916-8.135-52.264-16.959-61.678-8.9083 7.6866-25.843 16.662-30.294 36.598-6.2179 10.386 1.815 41.282-2.5746 57.144-6.2955 19.146-17.497 39.996-28.839 60.944-44.566-18.459-70.263-36.313-113.57-20.375-33.811 22.857-48.796 56.404-55.209 86.254-9.9808 28.958 1.7685 51.083-9.1224 71.146z\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a id=\"link-review\" href=\"{{ path('app_review') }}\">
\t\t\t\t\t\t<p>Donner votre avis</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"/all-reviews\">
\t\t\t\t<button class=\"btn btn-black\">Plus d'avis</button>
\t\t\t</a>
\t\t</div>
\t</section>

{% endblock %}
", "page/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/page/index.html.twig");
    }
}
