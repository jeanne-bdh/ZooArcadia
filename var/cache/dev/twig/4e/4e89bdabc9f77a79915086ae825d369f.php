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

/* security/login.html.twig */
class __TwigTemplate_14bef218e5ef0b66b6157baff8ba817f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Se connecter
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
        yield "\t<!-- SECTION : HERO -->
\t<section class=\"hero d-flex justify-content-center align-items-center\">
\t\t<h1>Bienvenue sur votre
\t\t\t<br>
\t\t\tespace de connexion</h1>
\t</section>

\t<!-- SECTION : LOGIN FORM -->
\t<section class=\"container-back bg-primary py-5 mx-auto\">
\t\t<div class=\"bg-tertiary w-75 mx-auto rounded-3 p-4 p-md-5 border border-dark\">
\t\t\t<h4 class=\"text-center text-dark\">CONNEXION</h4>

\t\t\t<form method=\"post\">
\t\t\t\t";
        // line 20
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "\t\t\t\t\t<div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            yield "</div>
\t\t\t\t";
        }
        // line 23
        yield "
\t\t\t\t";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            yield ",
\t\t\t\t\t\t<a href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        yield "
\t\t\t\t<div class=\"my-4\">
\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email :</label>
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 34
        yield (((array_key_exists("last_username", $context) &&  !(null === $context["last_username"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["last_username"], "html", null, true)) : (""));
        yield "\" name=\"email\" class=\"form-control\" id=\"username\" autocomplete=\"email\" required autofocus></input>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tVeuillez entrer une adresse e-mail valide
\t\t\t\t</div>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tL'adresse e-mail est valide
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mb-4\">
\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe :</label>
\t\t\t\t<input type=\"password\" name=\"_password\" class=\"form-control\" id=\"password\" autocomplete=\"off\" required></input>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tLe mot de passe doit contenir au moins 8 caractères comprenant une lettre majuscule, une minuscule, un chiffre et un caractère spécial
\t\t\t</div>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tLe mot de passe est valide
\t\t\t</div>
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-black\" id=\"btn-validCo\">Se connecter</button>
\t\t</div>
\t</form>

</div></section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  163 => 46,  148 => 34,  143 => 31,  137 => 28,  133 => 27,  129 => 25,  127 => 24,  124 => 23,  118 => 21,  116 => 20,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Se connecter
{% endblock %}

{% block body %}
\t<!-- SECTION : HERO -->
\t<section class=\"hero d-flex justify-content-center align-items-center\">
\t\t<h1>Bienvenue sur votre
\t\t\t<br>
\t\t\tespace de connexion</h1>
\t</section>

\t<!-- SECTION : LOGIN FORM -->
\t<section class=\"container-back bg-primary py-5 mx-auto\">
\t\t<div class=\"bg-tertiary w-75 mx-auto rounded-3 p-4 p-md-5 border border-dark\">
\t\t\t<h4 class=\"text-center text-dark\">CONNEXION</h4>

\t\t\t<form method=\"post\">
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"my-4\">
\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email :</label>
\t\t\t\t\t<input type=\"email\" value=\"{{ last_username ?? '' }}\" name=\"email\" class=\"form-control\" id=\"username\" autocomplete=\"email\" required autofocus></input>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tVeuillez entrer une adresse e-mail valide
\t\t\t\t</div>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tL'adresse e-mail est valide
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mb-4\">
\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe :</label>
\t\t\t\t<input type=\"password\" name=\"_password\" class=\"form-control\" id=\"password\" autocomplete=\"off\" required></input>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tLe mot de passe doit contenir au moins 8 caractères comprenant une lettre majuscule, une minuscule, un chiffre et un caractère spécial
\t\t\t</div>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tLe mot de passe est valide
\t\t\t</div>
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-black\" id=\"btn-validCo\">Se connecter</button>
\t\t</div>
\t</form>

</div></section>{% endblock %}
", "security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/security/login.html.twig");
    }
}
