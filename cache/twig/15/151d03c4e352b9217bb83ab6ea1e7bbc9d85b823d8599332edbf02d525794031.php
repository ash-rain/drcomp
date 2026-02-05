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

/* service.html.twig */
class __TwigTemplate_c669e27686d9c549e7094b49cd5308cc8dbf15f1cf989a275011747c6ef05210 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "service.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"page-header\">
        <div class=\"container\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            // line 8
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</p>
            ";
        }
        // line 10
        echo "        </div>
    </section>

    <section class=\"page-content\">
        <div class=\"container\">
            <div class=\"about-grid\" style=\"gap: 3rem;\">
                <div>
                    ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

                    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", [])) {
            // line 20
            echo "                    <ul class=\"about-features\" style=\"margin-top: 2rem;\">
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 22
                echo "                        <li>
                            <div class=\"about-feature-icon\" style=\"background: var(--gradient-primary);\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                    <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4 style=\"color: var(--dark-text);\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "title", []), "html", null, true);
                echo "</h4>
                                <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "description", []), "html", null, true);
                echo "</p>
                            </div>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </ul>
                    ";
        }
        // line 37
        echo "                </div>

                <div>
                    <div class=\"hero-contact-card\">
                        <h3>Имате въпроси?</h3>
                        <p style=\"color: var(--light-text); margin-bottom: 1.5rem;\">Свържете се с нас за безплатна консултация</p>
                        <div class=\"contact-item\">
                            <div class=\"contact-item-icon\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                                </svg>
                            </div>
                            <div>
                                <a href=\"tel:+359899662622\">0899 662 622</a>
                            </div>
                        </div>
                        <div class=\"contact-item\">
                            <div class=\"contact-item-icon\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path>
                                    <polyline points=\"22,6 12,13 2,6\"></polyline>
                                </svg>
                            </div>
                            <div>
                                <a href=\"mailto:office@drcomp.org\">office@drcomp.org</a>
                            </div>
                        </div>
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/контакти\" class=\"btn btn-primary\" style=\"margin-top: 1.5rem; width: 100%; justify-content: center;\">
                            Свържете се с нас
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 73
        $this->loadTemplate("partials/cta-banner.html.twig", "service.html.twig", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 73,  138 => 64,  109 => 37,  105 => 35,  95 => 31,  91 => 30,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  67 => 17,  58 => 10,  52 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
    <section class=\"page-header\">
        <div class=\"container\">
            <h1>{{ page.title }}</h1>
            {% if page.header.subtitle %}
                <p>{{ page.header.subtitle }}</p>
            {% endif %}
        </div>
    </section>

    <section class=\"page-content\">
        <div class=\"container\">
            <div class=\"about-grid\" style=\"gap: 3rem;\">
                <div>
                    {{ page.content|raw }}

                    {% if page.header.features %}
                    <ul class=\"about-features\" style=\"margin-top: 2rem;\">
                        {% for feature in page.header.features %}
                        <li>
                            <div class=\"about-feature-icon\" style=\"background: var(--gradient-primary);\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                    <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4 style=\"color: var(--dark-text);\">{{ feature.title }}</h4>
                                <p>{{ feature.description }}</p>
                            </div>
                        </li>
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>

                <div>
                    <div class=\"hero-contact-card\">
                        <h3>Имате въпроси?</h3>
                        <p style=\"color: var(--light-text); margin-bottom: 1.5rem;\">Свържете се с нас за безплатна консултация</p>
                        <div class=\"contact-item\">
                            <div class=\"contact-item-icon\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                                </svg>
                            </div>
                            <div>
                                <a href=\"tel:+359899662622\">0899 662 622</a>
                            </div>
                        </div>
                        <div class=\"contact-item\">
                            <div class=\"contact-item-icon\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path>
                                    <polyline points=\"22,6 12,13 2,6\"></polyline>
                                </svg>
                            </div>
                            <div>
                                <a href=\"mailto:office@drcomp.org\">office@drcomp.org</a>
                            </div>
                        </div>
                        <a href=\"{{ base_url }}/контакти\" class=\"btn btn-primary\" style=\"margin-top: 1.5rem; width: 100%; justify-content: center;\">
                            Свържете се с нас
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {% include 'partials/cta-banner.html.twig' %}
{% endblock %}
", "service.html.twig", "/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/templates/service.html.twig");
    }
}
