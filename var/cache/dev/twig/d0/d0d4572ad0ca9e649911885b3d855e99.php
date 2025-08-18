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

/* employee/animalFood.html.twig */
class __TwigTemplate_c9680bc02ce475aa603082afb79fa536 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/animalFood.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/animalFood.html.twig"));

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

        yield "Nourrir les animaux
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
\t";
        // line 9
        yield from $this->load("partials/_hero.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["title" => "Saisie de la consommation de nourriture"]));
        // line 10
        yield "
\t<!-- SECTION : INPUT FOOD CONSO -->
\t<section class=\"container\">

\t\t";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 m-md-5"]]);
        yield "

\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "breed", [], "any", false, false, false, 17), 'label');
        yield "
\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "breed", [], "any", false, false, false, 18), 'widget');
        yield "
\t\t\t";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "breed", [], "any", false, false, false, 19), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "animal", [], "any", false, false, false, 23), 'label');
        yield "
\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "animal", [], "any", false, false, false, 24), 'widget');
        yield "
\t\t\t";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "animal", [], "any", false, false, false, 25), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateFood", [], "any", false, false, false, 28), 'label');
        yield "
\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dateFood", [], "any", false, false, false, 29), 'widget');
        yield "
\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateFood", [], "any", false, false, false, 30), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "time", [], "any", false, false, false, 33), 'label');
        yield "
\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "time", [], "any", false, false, false, 34), 'widget');
        yield "
\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "time", [], "any", false, false, false, 35), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "foodType", [], "any", false, false, false, 38), 'label');
        yield "
\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "foodType", [], "any", false, false, false, 39), 'widget');
        yield "
\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "foodType", [], "any", false, false, false, 40), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "quantity", [], "any", false, false, false, 43), 'label');
        yield "
\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "quantity", [], "any", false, false, false, 44), 'widget');
        yield "
\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "quantity", [], "any", false, false, false, 45), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-black mt-3\" id=\"btn-food-conso\">Soumettre</button>
\t\t</div>

\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", ["success"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            yield "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
\t\t";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
\t</section>

\t<!-- SECTION : FOOD CONSO LIST -->
\t";
        // line 62
        yield from $this->load("partials/_animalFoodDashboard.html.twig", 62)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/animalFood.html.twig";
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
        return array (  234 => 62,  227 => 58,  224 => 57,  215 => 54,  212 => 53,  208 => 52,  198 => 45,  194 => 44,  190 => 43,  184 => 40,  180 => 39,  176 => 38,  170 => 35,  166 => 34,  162 => 33,  156 => 30,  152 => 29,  148 => 28,  142 => 25,  138 => 24,  134 => 23,  127 => 19,  123 => 18,  119 => 17,  113 => 14,  107 => 10,  105 => 9,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nourrir les animaux
{% endblock %}

{% block body %}

\t<!-- SECTION : HERO -->
\t{% include 'partials/_hero.html.twig' with { title: 'Saisie de la consommation de nourriture' } %}

\t<!-- SECTION : INPUT FOOD CONSO -->
\t<section class=\"container\">

\t\t{{ form_start(form, { 'attr': { 'class': 'row g-3 m-md-5' } }) }}

\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.breed) }}
\t\t\t{{ form_widget(form.breed) }}
\t\t\t{{ form_errors(form.breed) }}
\t\t</div>

\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.animal) }}
\t\t\t{{ form_widget(form.animal) }}
\t\t\t{{ form_errors(form.animal) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.dateFood) }}
\t\t\t{{ form_widget(form.dateFood) }}
\t\t\t{{ form_errors(form.dateFood) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.time) }}
\t\t\t{{ form_widget(form.time) }}
\t\t\t{{ form_errors(form.time) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.foodType) }}
\t\t\t{{ form_widget(form.foodType) }}
\t\t\t{{ form_errors(form.foodType) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.quantity) }}
\t\t\t{{ form_widget(form.quantity) }}
\t\t\t{{ form_errors(form.quantity) }}
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-black mt-3\" id=\"btn-food-conso\">Soumettre</button>
\t\t</div>

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{{ form_end(form) }}
\t</section>

\t<!-- SECTION : FOOD CONSO LIST -->
\t{% include 'partials/_animalFoodDashboard.html.twig' %}
{% endblock %}
", "employee/animalFood.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/employee/animalFood.html.twig");
    }
}
