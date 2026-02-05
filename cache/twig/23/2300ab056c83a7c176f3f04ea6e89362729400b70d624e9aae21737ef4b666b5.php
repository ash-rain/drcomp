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

/* partials/header.html.twig */
class __TwigTemplate_850f110b42229f00e981fc292db7fd7a653cc0e98724a10a634722cd0c61db3b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <nav class=\"nav\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" class=\"logo\">
                <div class=\"logo-icon\">
                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        <line x1=\"8\" y1=\"21\" x2=\"16\" y2=\"21\"></line>
                        <line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"21\"></line>
                    </svg>
                </div>
                <span>Доктор КОМП</span>
            </a>

            <ul class=\"nav-menu\" id=\"nav-menu\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo ((($this->getAttribute(($context["page"] ?? null), "active", []) == $context["item"])) ? ("active") : (""));
            echo "\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "menu", []), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <li>
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/контакти\" class=\"nav-cta\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 5px; vertical-align: middle;\">
                            <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                        </svg>
                        Обадете се
                    </a>
                </li>
            </ul>

            <div class=\"mobile-toggle\" id=\"mobile-toggle\" aria-label=\"Toggle navigation\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  73 => 23,  63 => 19,  57 => 18,  54 => 17,  50 => 16,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <nav class=\"nav\">
            <a href=\"{{ base_url }}\" class=\"logo\">
                <div class=\"logo-icon\">
                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        <line x1=\"8\" y1=\"21\" x2=\"16\" y2=\"21\"></line>
                        <line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"21\"></line>
                    </svg>
                </div>
                <span>Доктор КОМП</span>
            </a>

            <ul class=\"nav-menu\" id=\"nav-menu\">
                {% for item in pages.children.visible %}
                    <li>
                        <a href=\"{{ item.url }}\" class=\"{{ page.active == item ? 'active' : '' }}\">
                            {{ item.menu }}
                        </a>
                    </li>
                {% endfor %}
                <li>
                    <a href=\"{{ base_url }}/контакти\" class=\"nav-cta\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 5px; vertical-align: middle;\">
                            <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                        </svg>
                        Обадете се
                    </a>
                </li>
            </ul>

            <div class=\"mobile-toggle\" id=\"mobile-toggle\" aria-label=\"Toggle navigation\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>
", "partials/header.html.twig", "/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/templates/partials/header.html.twig");
    }
}
