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

/* partials/base.html.twig */
class __TwigTemplate_1ed9945c785197655c7bc531b273f127c2e49e43d72f7cccad9910b3a69033a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []), "html", null, true))) : (print ("bg")));
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- SEO Meta Tags -->
    <title>";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, ((Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", [])), 160)) ? (Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", [])), 160)) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, ((twig_join_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []), ", ")) ? (twig_join_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []), ", ")) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "keywords", []))), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"index, follow\">

    <!-- Open Graph / Social Media -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ((Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", [])), 160)) ? (Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", [])), 160)) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []))), "html", null, true);
        echo "\">
    <meta property=\"og:locale\" content=\"bg_BG\">
    <meta property=\"og:site_name\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\">

    <!-- Canonical URL -->
    <link rel=\"canonical\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/svg+xml\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.svg"), "html", null, true);
        echo "\">

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/style.css"), "html", null, true);
        echo "\">

    ";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
    <!-- Schema.org Structured Data -->
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"LocalBusiness\",
        \"name\": \"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\",
        \"description\": \"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []), "html", null, true);
        echo "\",
        \"url\": \"";
        // line 46
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\",
        \"telephone\": \"+359899662622\",
        \"email\": \"office@drcomp.org\",
        \"address\": {
            \"@type\": \"PostalAddress\",
            \"addressLocality\": \"Казанлък\",
            \"addressCountry\": \"BG\"
        },
        \"geo\": {
            \"@type\": \"GeoCoordinates\",
            \"latitude\": \"42.6194\",
            \"longitude\": \"25.3986\"
        },
        \"openingHours\": \"Mo-Fr 09:00-18:00, Sa 09:00-14:00\",
        \"priceRange\": \"\$\$\",
        \"sameAs\": [
            \"https://www.facebook.com/drcomp.org\"
        ]
    }
    </script>
</head>
<body class=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
    ";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
    <main id=\"main-content\">
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "    </main>

    ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "
    <!-- Theme JavaScript -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "</body>
</html>
";
    }

    // line 37
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 68
    public function block_header($context, array $blocks = [])
    {
        // line 69
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "    ";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
    }

    // line 76
    public function block_footer($context, array $blocks = [])
    {
        // line 77
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "    ";
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 83,  218 => 78,  215 => 77,  212 => 76,  207 => 73,  203 => 70,  200 => 69,  197 => 68,  192 => 37,  186 => 84,  184 => 83,  179 => 81,  175 => 79,  173 => 76,  169 => 74,  167 => 73,  163 => 71,  161 => 68,  157 => 67,  133 => 46,  129 => 45,  125 => 44,  117 => 38,  115 => 37,  110 => 35,  99 => 27,  93 => 24,  87 => 21,  82 => 19,  76 => 18,  72 => 17,  64 => 12,  60 => 11,  56 => 10,  48 => 9,  38 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: 'bg' }}\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- SEO Meta Tags -->
    <title>{% if page.title %}{{ page.title }} | {% endif %}{{ site.title }}</title>
    <meta name=\"description\" content=\"{{ page.summary|striptags|truncate(160) ?: site.metadata.description }}\">
    <meta name=\"keywords\" content=\"{{ page.taxonomy.tag|join(', ') ?: site.metadata.keywords }}\">
    <meta name=\"author\" content=\"{{ site.author.name }}\">
    <meta name=\"robots\" content=\"index, follow\">

    <!-- Open Graph / Social Media -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ page.url(true) }}\">
    <meta property=\"og:title\" content=\"{{ page.title }} | {{ site.title }}\">
    <meta property=\"og:description\" content=\"{{ page.summary|striptags|truncate(160) ?: site.metadata.description }}\">
    <meta property=\"og:locale\" content=\"bg_BG\">
    <meta property=\"og:site_name\" content=\"{{ site.title }}\">

    <!-- Canonical URL -->
    <link rel=\"canonical\" href=\"{{ page.url(true) }}\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/svg+xml\" href=\"{{ url('theme://images/favicon.svg') }}\">

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ url('theme://css/style.css') }}\">

    {% block stylesheets %}{% endblock %}

    <!-- Schema.org Structured Data -->
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"LocalBusiness\",
        \"name\": \"{{ site.title }}\",
        \"description\": \"{{ site.metadata.description }}\",
        \"url\": \"{{ base_url_absolute }}\",
        \"telephone\": \"+359899662622\",
        \"email\": \"office@drcomp.org\",
        \"address\": {
            \"@type\": \"PostalAddress\",
            \"addressLocality\": \"Казанлък\",
            \"addressCountry\": \"BG\"
        },
        \"geo\": {
            \"@type\": \"GeoCoordinates\",
            \"latitude\": \"42.6194\",
            \"longitude\": \"25.3986\"
        },
        \"openingHours\": \"Mo-Fr 09:00-18:00, Sa 09:00-14:00\",
        \"priceRange\": \"\$\$\",
        \"sameAs\": [
            \"https://www.facebook.com/drcomp.org\"
        ]
    }
    </script>
</head>
<body class=\"{{ page.header.body_classes }}\">
    {% block header %}
        {% include 'partials/header.html.twig' %}
    {% endblock %}

    <main id=\"main-content\">
        {% block content %}{% endblock %}
    </main>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    <!-- Theme JavaScript -->
    <script src=\"{{ url('theme://js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/templates/partials/base.html.twig");
    }
}
