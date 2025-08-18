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

/* page/animal.html.twig */
class __TwigTemplate_bc4974b6048e2189b19e1407225aa916 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal.html.twig"));

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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 4, $this->source); })()), "animalName", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<!-- SECTION : HERO -->
\t";
        // line 9
        yield from $this->load("partials/_hero.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["title" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 9, $this->source); })()), "breed", [], "any", false, false, false, 9)]));
        // line 10
        yield "
\t<!-- SECTION : ANIMAL -->
\t<section class=\"container\">
\t\t<h2 class=\"text-center my-4 my-md-5\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 13, $this->source); })()), "animalName", [], "any", false, false, false, 13), "html", null, true);
        yield "</h2>
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<img class=\"rounded-5 img-fluid\" src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 16, $this->source); })()), "imageFile"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 16, $this->source); })()), "breed", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 d-flex flex-column justify-content-center ps-5 mt-4 mt-md-0\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<p class=\"animal-criteria\">Espèce :</p>
\t\t\t\t\t<p class=\"ms-2 mt-1 mt-md-0\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "breed", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<p class=\"animal-criteria\">Habitat :</p>
\t\t\t\t\t<p class=\"ms-2 mt-1 mt-md-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 25, $this->source); })()), "habitat", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t<p class=\"animal-criteria mb-1\">Détails sur l'animal :</p>
\t\t\t\t\t";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 29, $this->source); })()), "detail", [], "any", false, false, false, 29);
        yield "
\t\t\t\t</div>
\t\t\t</div>
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
        return "page/animal.html.twig";
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
        return array (  144 => 29,  137 => 25,  130 => 21,  120 => 16,  114 => 13,  109 => 10,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ animal.animalName }}
{% endblock %}

{% block body %}
\t<!-- SECTION : HERO -->
\t{% include 'partials/_hero.html.twig' with { title: animal.breed } %}

\t<!-- SECTION : ANIMAL -->
\t<section class=\"container\">
\t\t<h2 class=\"text-center my-4 my-md-5\">{{ animal.animalName }}</h2>
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<img class=\"rounded-5 img-fluid\" src=\"{{ vich_uploader_asset(animal, 'imageFile') }}\" alt=\"{{ animal.breed }}\">
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 d-flex flex-column justify-content-center ps-5 mt-4 mt-md-0\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<p class=\"animal-criteria\">Espèce :</p>
\t\t\t\t\t<p class=\"ms-2 mt-1 mt-md-0\">{{ animal.breed }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<p class=\"animal-criteria\">Habitat :</p>
\t\t\t\t\t<p class=\"ms-2 mt-1 mt-md-0\">{{ animal.habitat }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t<p class=\"animal-criteria mb-1\">Détails sur l'animal :</p>
\t\t\t\t\t{{ animal.detail|raw }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "page/animal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/page/animal.html.twig");
    }
}
