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

/* home.html.twig */
class __TwigTemplate_f3ff04887fe12cb0602e9df59255eb333864532b8005c956af582b2c72be635a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <!-- Hero Section -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"hero-grid\">
                <div class=\"hero-content\">
                    <h1>Магазин и сервиз за компютри, офис техника и мобилни устройства</h1>
                    <p class=\"hero-subtitle\">Доставяме всички марки и модели IT техника, предлагани в България. Доверете се на професионалистите!</p>

                    <ul class=\"hero-features\">
                        <li>Предлагаме фирмена поддръжка</li>
                        <li>Извършваме техническа консултация</li>
                        <li>Доставяме компютърна и офис техника по поръчка</li>
                        <li>Изграждане на системи за видеонаблюдение и контрол на достъпа</li>
                    </ul>

                    <div class=\"hero-buttons\">
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/сервиз\" class=\"btn btn-primary\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                            </svg>
                            Нашите услуги
                        </a>
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/контакти\" class=\"btn btn-outline\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                            </svg>
                            Свържете се с нас
                        </a>
                    </div>
                </div>

                <div class=\"hero-contact-card\">
                    <h3>За повече информация:</h3>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:043162692\">0431 62692</a>
                        </div>
                    </div>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <rect x=\"5\" y=\"2\" width=\"14\" height=\"20\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"12\" y1=\"18\" x2=\"12.01\" y2=\"18\"></line>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:+359899662622\">0899 662 622</a>
                        </div>
                    </div>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <rect x=\"5\" y=\"2\" width=\"14\" height=\"20\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"12\" y1=\"18\" x2=\"12.01\" y2=\"18\"></line>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:+359899663633\">0899 663 633</a>
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
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                <path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path>
                            </svg>
                        </div>
                        <div>
                            <a href=\"https://www.facebook.com/drcomp.org\" target=\"_blank\" rel=\"noopener\">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class=\"services\" id=\"услуги\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h2>Нашите услуги</h2>
                <p>Предлагаме пълна гама от компютърни услуги за дома и бизнеса</p>
            </div>

            <div class=\"services-grid\">
                <!-- Service: Computer Service -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                        </svg>
                    </div>
                    <h3>Компютърен сервиз</h3>
                    <p>Компютърният сервиз на Доктор Комп покрива всички необходими дейности за поддръжката и надграждането на вашия компютър или офис техника.</p>
                    <ul>
                        <li>Диагностика и консултация</li>
                        <li>Ремонт на компютри и лаптопи</li>
                        <li>Инсталация на софтуер</li>
                        <li>Елитни марки с големи гаранции</li>
                    </ul>
                    <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/сервиз\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>

                <!-- Service: GPS Navigation -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <polygon points=\"3 11 22 2 13 21 11 13 3 11\"></polygon>
                        </svg>
                    </div>
                    <h3>GPS Навигации</h3>
                    <p>Профилактика на всички модели и марки GPS навигации. Обновяване на картите с най-актуалните версии.</p>
                    <ul>
                        <li>Обновяване на карти</li>
                        <li>Ремонт и профилактика</li>
                        <li>Продажба на GPS тракери</li>
                        <li>Инсталация на навигация</li>
                    </ul>
                    <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/gps-навигации\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>

                <!-- Service: Video Surveillance -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M23 7l-7 5 7 5V7z\"></path>
                            <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        </svg>
                    </div>
                    <h3>Видеонаблюдение</h3>
                    <p>Системите за контрол на достъпа и чекиране за работно време навлизат все повече в помощ на отчетността във фирмите.</p>
                    <ul>
                        <li>Контрол на достъпа</li>
                        <li>Видеодомофони</li>
                        <li>Камери и записващи устройства</li>
                        <li>Безплатни оферти</li>
                    </ul>
                    <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/видеонаблюдение\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!-- Features/Stats Section -->
    <section class=\"features\">
        <div class=\"container\">
            <div class=\"features-grid\">
                <div class=\"feature-item\">
                    <div class=\"feature-number\">15+</div>
                    <div class=\"feature-label\">Години опит</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">5000+</div>
                    <div class=\"feature-label\">Доволни клиенти</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">100%</div>
                    <div class=\"feature-label\">Гаранция</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">24/7</div>
                    <div class=\"feature-label\">Поддръжка</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class=\"about\">
        <div class=\"container\">
            <div class=\"about-grid\">
                <div>
                    <h2>Защо да изберете нас?</h2>
                    <p>Доктор КОМП е утвърден лидер в областта на компютърните услуги в Казанлък и региона. С над 15 години опит, ние предлагаме професионални решения за всички ваши технологични нужди.</p>

                    <ul class=\"about-features\">
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                    <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Професионален екип</h4>
                                <p>Нашите техници са сертифицирани и с богат опит в областта</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Бързо обслужване</h4>
                                <p>Стремим се да обслужим всеки клиент в най-кратки срокове</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                    <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Коректни цени</h4>
                                <p>Предлагаме конкурентни цени и прозрачно ценообразуване</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div style=\"display: flex; align-items: center; justify-content: center;\">
                    <div style=\"background: rgba(255,255,255,0.1); border-radius: 20px; padding: 3rem; text-align: center;\">
                        <svg width=\"120\" height=\"120\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"color: white; margin-bottom: 1.5rem;\">
                            <rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                            <line x1=\"8\" y1=\"21\" x2=\"16\" y2=\"21\"></line>
                            <line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"21\"></line>
                        </svg>
                        <h3 style=\"color: white; margin-bottom: 0.5rem;\">Доктор КОМП</h3>
                        <p style=\"color: rgba(255,255,255,0.8); margin: 0;\">Вашият технологичен партньор</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class=\"contact\" id=\"контакти\">
        <div class=\"container\">
            <div class=\"contact-grid\">
                <div class=\"contact-info\">
                    <h2>Свържете се с нас</h2>
                    <p>Имате въпроси или се нуждаете от консултация? Свържете се с нас по удобен за вас начин. Ще се радваме да ви помогнем!</p>

                    <div class=\"contact-details\">
                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Телефони</h4>
                                <a href=\"tel:043162692\">0431 62692</a><br>
                                <a href=\"tel:+359899662622\">0899 662 622</a><br>
                                <a href=\"tel:+359899663633\">0899 663 633</a>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path>
                                    <polyline points=\"22,6 12,13 2,6\"></polyline>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Email</h4>
                                <a href=\"mailto:office@drcomp.org\">office@drcomp.org</a>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path>
                                    <circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Адрес</h4>
                                <p>гр. Казанлък, България</p>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Работно време</h4>
                                <p>Пон-Пет: 09:00 - 18:00<br>Съб: 09:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"contact-map\">
                    <iframe
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47136.91867712992!2d25.352899!3d42.619444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9139f5f70fb69%3A0xa00a014cd0e7850!2sKazanlak!5e0!3m2!1sen!2sbg!4v1234567890123!5m2!1sen!2sbg\"
                        width=\"100%\"
                        height=\"100%\"
                        style=\"border:0;\"
                        allowfullscreen=\"\"
                        loading=\"lazy\"
                        referrerpolicy=\"no-referrer-when-downgrade\"
                        title=\"Местоположение на Доктор КОМП\">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 347
        $this->loadTemplate("partials/cta-banner.html.twig", "home.html.twig", 347)->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 347,  220 => 168,  192 => 143,  165 => 119,  69 => 26,  60 => 20,  42 => 4,  39 => 3,  29 => 1,);
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
    <!-- Hero Section -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"hero-grid\">
                <div class=\"hero-content\">
                    <h1>Магазин и сервиз за компютри, офис техника и мобилни устройства</h1>
                    <p class=\"hero-subtitle\">Доставяме всички марки и модели IT техника, предлагани в България. Доверете се на професионалистите!</p>

                    <ul class=\"hero-features\">
                        <li>Предлагаме фирмена поддръжка</li>
                        <li>Извършваме техническа консултация</li>
                        <li>Доставяме компютърна и офис техника по поръчка</li>
                        <li>Изграждане на системи за видеонаблюдение и контрол на достъпа</li>
                    </ul>

                    <div class=\"hero-buttons\">
                        <a href=\"{{ base_url }}/сервиз\" class=\"btn btn-primary\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                            </svg>
                            Нашите услуги
                        </a>
                        <a href=\"{{ base_url }}/контакти\" class=\"btn btn-outline\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                            </svg>
                            Свържете се с нас
                        </a>
                    </div>
                </div>

                <div class=\"hero-contact-card\">
                    <h3>За повече информация:</h3>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:043162692\">0431 62692</a>
                        </div>
                    </div>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <rect x=\"5\" y=\"2\" width=\"14\" height=\"20\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"12\" y1=\"18\" x2=\"12.01\" y2=\"18\"></line>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:+359899662622\">0899 662 622</a>
                        </div>
                    </div>
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <rect x=\"5\" y=\"2\" width=\"14\" height=\"20\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"12\" y1=\"18\" x2=\"12.01\" y2=\"18\"></line>
                            </svg>
                        </div>
                        <div>
                            <a href=\"tel:+359899663633\">0899 663 633</a>
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
                    <div class=\"contact-item\">
                        <div class=\"contact-item-icon\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                <path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path>
                            </svg>
                        </div>
                        <div>
                            <a href=\"https://www.facebook.com/drcomp.org\" target=\"_blank\" rel=\"noopener\">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class=\"services\" id=\"услуги\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h2>Нашите услуги</h2>
                <p>Предлагаме пълна гама от компютърни услуги за дома и бизнеса</p>
            </div>

            <div class=\"services-grid\">
                <!-- Service: Computer Service -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                        </svg>
                    </div>
                    <h3>Компютърен сервиз</h3>
                    <p>Компютърният сервиз на Доктор Комп покрива всички необходими дейности за поддръжката и надграждането на вашия компютър или офис техника.</p>
                    <ul>
                        <li>Диагностика и консултация</li>
                        <li>Ремонт на компютри и лаптопи</li>
                        <li>Инсталация на софтуер</li>
                        <li>Елитни марки с големи гаранции</li>
                    </ul>
                    <a href=\"{{ base_url }}/сервиз\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>

                <!-- Service: GPS Navigation -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <polygon points=\"3 11 22 2 13 21 11 13 3 11\"></polygon>
                        </svg>
                    </div>
                    <h3>GPS Навигации</h3>
                    <p>Профилактика на всички модели и марки GPS навигации. Обновяване на картите с най-актуалните версии.</p>
                    <ul>
                        <li>Обновяване на карти</li>
                        <li>Ремонт и профилактика</li>
                        <li>Продажба на GPS тракери</li>
                        <li>Инсталация на навигация</li>
                    </ul>
                    <a href=\"{{ base_url }}/gps-навигации\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>

                <!-- Service: Video Surveillance -->
                <article class=\"service-card\">
                    <div class=\"service-icon\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M23 7l-7 5 7 5V7z\"></path>
                            <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        </svg>
                    </div>
                    <h3>Видеонаблюдение</h3>
                    <p>Системите за контрол на достъпа и чекиране за работно време навлизат все повече в помощ на отчетността във фирмите.</p>
                    <ul>
                        <li>Контрол на достъпа</li>
                        <li>Видеодомофони</li>
                        <li>Камери и записващи устройства</li>
                        <li>Безплатни оферти</li>
                    </ul>
                    <a href=\"{{ base_url }}/видеонаблюдение\" class=\"service-link\">
                        Научете повече
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            <polyline points=\"12 5 19 12 12 19\"></polyline>
                        </svg>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!-- Features/Stats Section -->
    <section class=\"features\">
        <div class=\"container\">
            <div class=\"features-grid\">
                <div class=\"feature-item\">
                    <div class=\"feature-number\">15+</div>
                    <div class=\"feature-label\">Години опит</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">5000+</div>
                    <div class=\"feature-label\">Доволни клиенти</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">100%</div>
                    <div class=\"feature-label\">Гаранция</div>
                </div>
                <div class=\"feature-item\">
                    <div class=\"feature-number\">24/7</div>
                    <div class=\"feature-label\">Поддръжка</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class=\"about\">
        <div class=\"container\">
            <div class=\"about-grid\">
                <div>
                    <h2>Защо да изберете нас?</h2>
                    <p>Доктор КОМП е утвърден лидер в областта на компютърните услуги в Казанлък и региона. С над 15 години опит, ние предлагаме професионални решения за всички ваши технологични нужди.</p>

                    <ul class=\"about-features\">
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                    <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Професионален екип</h4>
                                <p>Нашите техници са сертифицирани и с богат опит в областта</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Бързо обслужване</h4>
                                <p>Стремим се да обслужим всеки клиент в най-кратки срокове</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"about-feature-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                    <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                </svg>
                            </div>
                            <div class=\"about-feature-text\">
                                <h4>Коректни цени</h4>
                                <p>Предлагаме конкурентни цени и прозрачно ценообразуване</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div style=\"display: flex; align-items: center; justify-content: center;\">
                    <div style=\"background: rgba(255,255,255,0.1); border-radius: 20px; padding: 3rem; text-align: center;\">
                        <svg width=\"120\" height=\"120\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"color: white; margin-bottom: 1.5rem;\">
                            <rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                            <line x1=\"8\" y1=\"21\" x2=\"16\" y2=\"21\"></line>
                            <line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"21\"></line>
                        </svg>
                        <h3 style=\"color: white; margin-bottom: 0.5rem;\">Доктор КОМП</h3>
                        <p style=\"color: rgba(255,255,255,0.8); margin: 0;\">Вашият технологичен партньор</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class=\"contact\" id=\"контакти\">
        <div class=\"container\">
            <div class=\"contact-grid\">
                <div class=\"contact-info\">
                    <h2>Свържете се с нас</h2>
                    <p>Имате въпроси или се нуждаете от консултация? Свържете се с нас по удобен за вас начин. Ще се радваме да ви помогнем!</p>

                    <div class=\"contact-details\">
                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Телефони</h4>
                                <a href=\"tel:043162692\">0431 62692</a><br>
                                <a href=\"tel:+359899662622\">0899 662 622</a><br>
                                <a href=\"tel:+359899663633\">0899 663 633</a>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path>
                                    <polyline points=\"22,6 12,13 2,6\"></polyline>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Email</h4>
                                <a href=\"mailto:office@drcomp.org\">office@drcomp.org</a>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path>
                                    <circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Адрес</h4>
                                <p>гр. Казанлък, България</p>
                            </div>
                        </div>

                        <div class=\"contact-detail-item\">
                            <div class=\"contact-detail-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                                </svg>
                            </div>
                            <div class=\"contact-detail-text\">
                                <h4>Работно време</h4>
                                <p>Пон-Пет: 09:00 - 18:00<br>Съб: 09:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"contact-map\">
                    <iframe
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47136.91867712992!2d25.352899!3d42.619444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9139f5f70fb69%3A0xa00a014cd0e7850!2sKazanlak!5e0!3m2!1sen!2sbg!4v1234567890123!5m2!1sen!2sbg\"
                        width=\"100%\"
                        height=\"100%\"
                        style=\"border:0;\"
                        allowfullscreen=\"\"
                        loading=\"lazy\"
                        referrerpolicy=\"no-referrer-when-downgrade\"
                        title=\"Местоположение на Доктор КОМП\">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    {% include 'partials/cta-banner.html.twig' %}
{% endblock %}
", "home.html.twig", "/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/templates/home.html.twig");
    }
}
