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

/* partials/_header.html.twig */
class __TwigTemplate_0490dfee0debd06cd16ff80f1607ea68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "<header>
\t<nav class=\"navbar navbar-expand-lg bg-dark fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"logo-zoo\">
\t\t\t\t<a href=\"/\"><img class=\"logo\" src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/header/logo-arcadia.svg"), "html", null, true);
        yield "\" alt=\"Logo Arcadia : un rhinocéros dans un soleil levant\"></a>
\t\t\t</div>
\t\t\t<div class=\"name-zoo\">
\t\t\t\t<a class=\"navbar-brand mx-auto ms-lg-4 text-light\" href=\"/\">ZOO ARCADIA</a>
\t\t\t</div>
\t\t\t<button class=\"navbar-toggler border-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<svg
\t\t\t\t\txmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 128 512\">
\t\t\t\t\t<!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
\t\t\t\t\t<path d=\"M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto text-end\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service");
        yield "\">Nos services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat");
        yield "\">Nos habitats</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"/contact\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "\t\t\t\t\t\t\t";
            $context["roles"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "roles", [], "any", false, false, false, 34);
            // line 35
            yield "\t\t\t\t\t\t\t";
            if (CoreExtension::inFilter("ROLE_ADMIN", (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 35, $this->source); })()))) {
                // line 36
                yield "\t\t\t\t\t\t\t\t";
                $context["session_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                // line 37
                yield "\t\t\t\t\t\t\t";
            } elseif (CoreExtension::inFilter("ROLE_EMPLOYEE", (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 37, $this->source); })()))) {
                // line 38
                yield "\t\t\t\t\t\t\t\t";
                $context["session_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee");
                // line 39
                yield "\t\t\t\t\t\t\t";
            } elseif (CoreExtension::inFilter("ROLE_VETERINARY", (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 39, $this->source); })()))) {
                // line 40
                yield "\t\t\t\t\t\t\t\t";
                $context["session_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary");
                // line 41
                yield "\t\t\t\t\t\t\t";
            }
            // line 42
            yield "
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["session_path"]) || array_key_exists("session_path", $context) ? $context["session_path"] : (function () { throw new RuntimeError('Variable "session_path" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "\">Bonjour
\t\t\t\t\t\t\t\t";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "firstName", [], "any", false, false, false, 44), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-light mx-lg-3 fs-6\" id=\"btn-logout\">Déconnexion</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 49
            yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-light mx-lg-3 fs-6\" href=\"/login\" id=\"btn-login\">Connexion</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 55
        yield "\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</li>
\t\t</div>
\t</div>
</nav></header>
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
        return "partials/_header.html.twig";
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
        return array (  149 => 55,  141 => 50,  138 => 49,  131 => 45,  127 => 44,  123 => 43,  120 => 42,  117 => 41,  114 => 40,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  94 => 33,  84 => 26,  78 => 23,  72 => 20,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
\t<nav class=\"navbar navbar-expand-lg bg-dark fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"logo-zoo\">
\t\t\t\t<a href=\"/\"><img class=\"logo\" src=\"{{ asset('images/header/logo-arcadia.svg') }}\" alt=\"Logo Arcadia : un rhinocéros dans un soleil levant\"></a>
\t\t\t</div>
\t\t\t<div class=\"name-zoo\">
\t\t\t\t<a class=\"navbar-brand mx-auto ms-lg-4 text-light\" href=\"/\">ZOO ARCADIA</a>
\t\t\t</div>
\t\t\t<button class=\"navbar-toggler border-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<svg
\t\t\t\t\txmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 128 512\">
\t\t\t\t\t<!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
\t\t\t\t\t<path d=\"M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto text-end\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"{{ path('app_service') }}\">Nos services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"{{ path('app_habitat') }}\">Nos habitats</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-light mx-2 fs-6\" href=\"/contact\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% set roles = app.user.roles %}
\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in roles %}
\t\t\t\t\t\t\t\t{% set session_path = path('admin') %}
\t\t\t\t\t\t\t{% elseif 'ROLE_EMPLOYEE' in roles %}
\t\t\t\t\t\t\t\t{% set session_path = path('app_employee') %}
\t\t\t\t\t\t\t{% elseif 'ROLE_VETERINARY' in roles %}
\t\t\t\t\t\t\t\t{% set session_path = path('app_veterinary') %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<a href=\"{{ session_path }}\">Bonjour
\t\t\t\t\t\t\t\t{{ app.user.firstName }}</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-light mx-lg-3 fs-6\" id=\"btn-logout\">Déconnexion</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-light mx-lg-3 fs-6\" href=\"/login\" id=\"btn-login\">Connexion</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</li>
\t\t</div>
\t</div>
</nav></header>
", "partials/_header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ZooArcadia/templates/partials/_header.html.twig");
    }
}
