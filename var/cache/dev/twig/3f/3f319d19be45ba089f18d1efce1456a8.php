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

/* habitat/habitatDetails.html.twig */
class __TwigTemplate_2616ac555ade298bbb874b99c7382bfe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/habitatDetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/habitatDetails.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 4, $this->source); })()), "habitatName", [], "any", false, false, false, 4), "html", null, true);
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
        yield from $this->load("partials/_hero.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["title" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 9, $this->source); })()), "habitatName", [], "any", false, false, false, 9)]));
        // line 10
        yield "
\t<!-- SECTION : HABITAT DETAILS -->
\t<section class=\"container\">
\t\t<div class=\"text-dark text-center m-4 p-md-4\">
\t\t\t";
        // line 14
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 14, $this->source); })()), "habitatDescription", [], "any", false, false, false, 14);
        yield "
\t\t</div>
\t\t<div class=\"row my-5 mx-3\">
\t\t\t<img class=\"col rounded-5\" src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 17, $this->source); })()), "imageFile"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 17, $this->source); })()), "habitatName", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
\t\t</div>
\t\t<p class=\"fs-2 ms-3\">Nos animaux :</p>
\t\t<div class=\"row mx-4 mb-5 g-5\">
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 21, $this->source); })()), "animals", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 22
            yield "\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t<a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t<img class=\"img-animal object-fit-cover rounded-circle\" src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["animal"], "imageFile"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "breed", [], "any", false, false, false, 24), "html", null, true);
            yield "\">
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"fs-4 ms-2\" href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "breed", [], "any", false, false, false, 26), "html", null, true);
            yield "</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "\t\t</div>
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
        return "habitat/habitatDetails.html.twig";
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
        return array (  159 => 29,  148 => 26,  141 => 24,  137 => 23,  134 => 22,  130 => 21,  121 => 17,  115 => 14,  109 => 10,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ habitat.habitatName }}
{% endblock %}

{% block body %}
\t<!-- SECTION : HERO -->
\t{% include 'partials/_hero.html.twig' with { title: habitat.habitatName } %}

\t<!-- SECTION : HABITAT DETAILS -->
\t<section class=\"container\">
\t\t<div class=\"text-dark text-center m-4 p-md-4\">
\t\t\t{{ habitat.habitatDescription|raw }}
\t\t</div>
\t\t<div class=\"row my-5 mx-3\">
\t\t\t<img class=\"col rounded-5\" src=\"{{ vich_uploader_asset(habitat, 'imageFile') }}\" alt=\"{{ habitat.habitatName }}\">
\t\t</div>
\t\t<p class=\"fs-2 ms-3\">Nos animaux :</p>
\t\t<div class=\"row mx-4 mb-5 g-5\">
\t\t\t{% for animal in habitat.animals %}
\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t<a href=\"{{ path('app_animal', {'id': animal.id}) }}\">
\t\t\t\t\t\t<img class=\"img-animal object-fit-cover rounded-circle\" src=\"{{ vich_uploader_asset(animal, 'imageFile') }}\" alt=\"{{ animal.breed }}\">
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"fs-4 ms-2\" href=\"{{ path('app_animal', {'id': animal.id}) }}\">{{ animal.breed }}</a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>
{% endblock %}
", "habitat/habitatDetails.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/habitat/habitatDetails.html.twig");
    }
}
