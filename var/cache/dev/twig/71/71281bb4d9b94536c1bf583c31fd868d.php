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

/* veterinary/veterinaryReport.html.twig */
class __TwigTemplate_203ac8ae7de081d0147d40c424c226ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/veterinaryReport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/veterinaryReport.html.twig"));

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

        yield "Comptes rendus vétérinaires";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<!-- SECTION : HERO -->
\t";
        // line 8
        yield from $this->load("partials/_hero.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["title" => "Saisie des comptes rendus vétérinaires"]));
        // line 9
        yield "
\t<!-- SECTION : INPUT FOOD CONSO -->
\t<section class=\"container\">

\t\t";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 m-md-5"]]);
        yield "

\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "breed", [], "any", false, false, false, 16), 'label');
        yield "
\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "breed", [], "any", false, false, false, 17), 'widget');
        yield "
\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "breed", [], "any", false, false, false, 18), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "animal", [], "any", false, false, false, 21), 'label');
        yield "
\t\t\t";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "animal", [], "any", false, false, false, 22), 'widget');
        yield "
\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "animal", [], "any", false, false, false, 23), 'errors');
        yield "
\t\t</div>
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "state", [], "any", false, false, false, 26), 'label');
        yield "
\t\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "state", [], "any", false, false, false, 27), 'widget');
        yield "
\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "state", [], "any", false, false, false, 28), 'errors');
        yield "
\t\t</div>
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "foodType", [], "any", false, false, false, 31), 'label');
        yield "
\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "foodType", [], "any", false, false, false, 32), 'widget');
        yield "
\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "foodType", [], "any", false, false, false, 33), 'errors');
        yield "
\t\t</div>
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "quantity", [], "any", false, false, false, 36), 'label');
        yield "
\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "quantity", [], "any", false, false, false, 37), 'widget');
        yield "
\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "quantity", [], "any", false, false, false, 38), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "datePassage", [], "any", false, false, false, 41), 'label');
        yield "
\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "datePassage", [], "any", false, false, false, 42), 'widget');
        yield "
\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "datePassage", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "observation", [], "any", false, false, false, 46), 'label');
        yield "
\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "observation", [], "any", false, false, false, 47), 'widget');
        yield "
\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "observation", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-black mt-3\" id=\"btn-food-conso\">Soumettre</button>
\t\t</div>

\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
\t\t";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
\t</section>

\t<!-- SECTION : VETERINARY REPORT LIST -->
\t";
        // line 65
        yield from $this->load("partials/_veterinaryReportDashboard.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "
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
        return "veterinary/veterinaryReport.html.twig";
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
        return array (  248 => 66,  246 => 65,  239 => 61,  236 => 60,  227 => 57,  224 => 56,  220 => 55,  210 => 48,  206 => 47,  202 => 46,  196 => 43,  192 => 42,  188 => 41,  182 => 38,  178 => 37,  174 => 36,  168 => 33,  164 => 32,  160 => 31,  154 => 28,  150 => 27,  146 => 26,  140 => 23,  136 => 22,  132 => 21,  126 => 18,  122 => 17,  118 => 16,  112 => 13,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comptes rendus vétérinaires{% endblock %}

{% block body %}

<!-- SECTION : HERO -->
\t{% include 'partials/_hero.html.twig' with { title: 'Saisie des comptes rendus vétérinaires' } %}

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
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.state) }}
\t\t\t{{ form_widget(form.state) }}
\t\t\t{{ form_errors(form.state) }}
\t\t</div>
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.foodType) }}
\t\t\t{{ form_widget(form.foodType) }}
\t\t\t{{ form_errors(form.foodType) }}
\t\t</div>
        <div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.quantity) }}
\t\t\t{{ form_widget(form.quantity) }}
\t\t\t{{ form_errors(form.quantity) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.datePassage) }}
\t\t\t{{ form_widget(form.datePassage) }}
\t\t\t{{ form_errors(form.datePassage) }}
\t\t</div>
\t\t<div class=\"col-12 col-md-6 col-lg-4 mb-3\">
\t\t\t{{ form_label(form.observation) }}
\t\t\t{{ form_widget(form.observation) }}
\t\t\t{{ form_errors(form.observation) }}
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

\t<!-- SECTION : VETERINARY REPORT LIST -->
\t{% include 'partials/_veterinaryReportDashboard.html.twig' %}

{% endblock %}", "veterinary/veterinaryReport.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/veterinary/veterinaryReport.html.twig");
    }
}
