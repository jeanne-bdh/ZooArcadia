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

/* partials/_veterinaryReportDashboard.html.twig */
class __TwigTemplate_167c1b9a3feaf8f714fdce79d88d421d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_veterinaryReportDashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_veterinaryReportDashboard.html.twig"));

        // line 1
        yield "<section class=\"table-responsive my-5 mx-md-5\">
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Animal</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t<th scope=\"col\">Nourriture</th>
\t\t\t\t<th scope=\"col\">Quantité (g)</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Observation</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 17
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "animal", [], "any", false, false, false, 18), "breed", [], "any", false, false, false, 18), "breedName", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "animal", [], "any", false, false, false, 19), "animalName", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                    <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "state", [], "any", false, false, false, 20), "stateName", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "foodType", [], "any", false, false, false, 21), "foodType", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "quantity", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "datePassage", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "observation", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return "partials/_veterinaryReportDashboard.html.twig";
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
        return array (  105 => 27,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"table-responsive my-5 mx-md-5\">
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Animal</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t<th scope=\"col\">Nourriture</th>
\t\t\t\t<th scope=\"col\">Quantité (g)</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Observation</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for report in reports %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ report.animal.breed.breedName }}</td>
\t\t\t\t\t<td>{{ report.animal.animalName }}</td>
                    <td>{{ report.state.stateName }}</td>
                    <td>{{ report.foodType.foodType }}</td>
                    <td>{{ report.quantity }}</td>
\t\t\t\t\t<td>{{ report.datePassage|date('d/m/Y') }}</td>
\t\t\t\t\t<td>{{ report.observation }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t</tbody>
\t</table>
</section>
", "partials/_veterinaryReportDashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/partials/_veterinaryReportDashboard.html.twig");
    }
}
