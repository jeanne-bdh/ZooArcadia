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

/* partials/_animalFoodDashboard.html.twig */
class __TwigTemplate_3c09c249a9ee4cec47e574ac846e99ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_animalFoodDashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_animalFoodDashboard.html.twig"));

        // line 1
        yield "<section class=\"table-responsive my-5 mx-md-5\">
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Animal</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t<th scope=\"col\">Nourriture</th>
\t\t\t\t<th scope=\"col\">Quantité (g)</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 16
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["food"], "animal", [], "any", false, false, false, 17), "breed", [], "any", false, false, false, 17), "breedName", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["food"], "animal", [], "any", false, false, false, 18), "animalName", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["food"], "dateFood", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["food"], "time", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["food"], "foodType", [], "any", false, false, false, 21), "foodType", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['food'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
\t\t</tbody>
\t</table>
</section>
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
        return "partials/_animalFoodDashboard.html.twig";
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
        return array (  100 => 25,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"table-responsive my-5 mx-md-5\">
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Animal</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Heure</th>
\t\t\t\t<th scope=\"col\">Nourriture</th>
\t\t\t\t<th scope=\"col\">Quantité (g)</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for food in foods %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ food.animal.breed.breedName }}</td>
\t\t\t\t\t<td>{{ food.animal.animalName }}</td>
\t\t\t\t\t<td>{{ food.dateFood|date('d/m/Y') }}</td>
\t\t\t\t\t<td>{{ food.time|date('H:i') }}</td>
\t\t\t\t\t<td>{{ food.foodType.foodType }}</td>
\t\t\t\t\t<td>{{ food.quantity }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t</tbody>
\t</table>
</section>
", "partials/_animalFoodDashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/partials/_animalFoodDashboard.html.twig");
    }
}
