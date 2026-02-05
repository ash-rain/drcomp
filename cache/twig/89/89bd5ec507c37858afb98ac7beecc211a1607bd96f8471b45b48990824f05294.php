<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* error.html.twig */
class __TwigTemplate_a6a8a05d4209855d161b396c100f2e9f4a5db5617d8eb40a75dda839bb37e33b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"page-header\" style=\"min-height: 60vh; display: flex; align-items: center;\">
        <div class=\"container\" style=\"text-align: center;\">
            <h1 style=\"font-size: 8rem; margin-bottom: 1rem;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
            <h2 style=\"color: rgba(255,255,255,0.9);\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>
            <p style=\"color: rgba(255,255,255,0.8); margin-bottom: 2rem;\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path>
                    <polyline points=\"9 22 9 12 15 12 15 22\"></polyline>
                </svg>
                Към началната страница
            </a>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <section class=\"page-header\" style=\"min-height: 60vh; display: flex; align-items: center;\">
        <div class=\"container\" style=\"text-align: center;\">
            <h1 style=\"font-size: 8rem; margin-bottom: 1rem;\">{{ page.header.http_response_code }}</h1>
            <h2 style=\"color: rgba(255,255,255,0.9);\">{{ page.title }}</h2>
            <p style=\"color: rgba(255,255,255,0.8); margin-bottom: 2rem;\">{{ page.content|raw }}</p>
            <a href=\"{{ base_url }}\" class=\"btn btn-primary\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path>
                    <polyline points=\"9 22 9 12 15 12 15 22\"></polyline>
                </svg>
                Към началната страница
            </a>
        </div>
    </section>
{% endblock %}
", "error.html.twig", "/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/templates/error.html.twig");
    }
}
