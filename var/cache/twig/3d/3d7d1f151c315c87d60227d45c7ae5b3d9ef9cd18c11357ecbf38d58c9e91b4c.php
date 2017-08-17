<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b3e44fbbbafa3fffaf5d4a92ed14ada4350f8a26c38a976b5f91276403c1474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dac219d7d76dc4ed9458a07bebbfc51cb02be8dee4b4dc4f3a601262bc5d874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dac219d7d76dc4ed9458a07bebbfc51cb02be8dee4b4dc4f3a601262bc5d874->enter($__internal_4dac219d7d76dc4ed9458a07bebbfc51cb02be8dee4b4dc4f3a601262bc5d874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd686157add2d206974714452d5a8772bfa6fe259652ac074fefc57960d5cf8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd686157add2d206974714452d5a8772bfa6fe259652ac074fefc57960d5cf8d->enter($__internal_fd686157add2d206974714452d5a8772bfa6fe259652ac074fefc57960d5cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dac219d7d76dc4ed9458a07bebbfc51cb02be8dee4b4dc4f3a601262bc5d874->leave($__internal_4dac219d7d76dc4ed9458a07bebbfc51cb02be8dee4b4dc4f3a601262bc5d874_prof);

        
        $__internal_fd686157add2d206974714452d5a8772bfa6fe259652ac074fefc57960d5cf8d->leave($__internal_fd686157add2d206974714452d5a8772bfa6fe259652ac074fefc57960d5cf8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_003ed933e78378cceb264a4b5096ab60694e3bd748d033b8e54c6a54904ce2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003ed933e78378cceb264a4b5096ab60694e3bd748d033b8e54c6a54904ce2cf->enter($__internal_003ed933e78378cceb264a4b5096ab60694e3bd748d033b8e54c6a54904ce2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9a88b35283b13dd49eeaf5abf7b5b65e9e530104461f69fe2e6134bce0b8d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a88b35283b13dd49eeaf5abf7b5b65e9e530104461f69fe2e6134bce0b8d7f->enter($__internal_c9a88b35283b13dd49eeaf5abf7b5b65e9e530104461f69fe2e6134bce0b8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a88b35283b13dd49eeaf5abf7b5b65e9e530104461f69fe2e6134bce0b8d7f->leave($__internal_c9a88b35283b13dd49eeaf5abf7b5b65e9e530104461f69fe2e6134bce0b8d7f_prof);

        
        $__internal_003ed933e78378cceb264a4b5096ab60694e3bd748d033b8e54c6a54904ce2cf->leave($__internal_003ed933e78378cceb264a4b5096ab60694e3bd748d033b8e54c6a54904ce2cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa7f73b06cabe1cb128cb4efa4fdf929185ed283d5240886e4259e3c1fc42833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7f73b06cabe1cb128cb4efa4fdf929185ed283d5240886e4259e3c1fc42833->enter($__internal_aa7f73b06cabe1cb128cb4efa4fdf929185ed283d5240886e4259e3c1fc42833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce59c7bc31d7ea78b8a82dff5accdb9511e7fc1f5f6bc8c6f93bcaf799ee70f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce59c7bc31d7ea78b8a82dff5accdb9511e7fc1f5f6bc8c6f93bcaf799ee70f5->enter($__internal_ce59c7bc31d7ea78b8a82dff5accdb9511e7fc1f5f6bc8c6f93bcaf799ee70f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce59c7bc31d7ea78b8a82dff5accdb9511e7fc1f5f6bc8c6f93bcaf799ee70f5->leave($__internal_ce59c7bc31d7ea78b8a82dff5accdb9511e7fc1f5f6bc8c6f93bcaf799ee70f5_prof);

        
        $__internal_aa7f73b06cabe1cb128cb4efa4fdf929185ed283d5240886e4259e3c1fc42833->leave($__internal_aa7f73b06cabe1cb128cb4efa4fdf929185ed283d5240886e4259e3c1fc42833_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9fb87dd566d591c7a7f756ea75cd2873e987eec870a1e2681260c43eb159ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fb87dd566d591c7a7f756ea75cd2873e987eec870a1e2681260c43eb159ff4->enter($__internal_d9fb87dd566d591c7a7f756ea75cd2873e987eec870a1e2681260c43eb159ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33a66a5e2573db1eab78c8b38caac1b90c4202c699ed02c9178d2d239cbba668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a66a5e2573db1eab78c8b38caac1b90c4202c699ed02c9178d2d239cbba668->enter($__internal_33a66a5e2573db1eab78c8b38caac1b90c4202c699ed02c9178d2d239cbba668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33a66a5e2573db1eab78c8b38caac1b90c4202c699ed02c9178d2d239cbba668->leave($__internal_33a66a5e2573db1eab78c8b38caac1b90c4202c699ed02c9178d2d239cbba668_prof);

        
        $__internal_d9fb87dd566d591c7a7f756ea75cd2873e987eec870a1e2681260c43eb159ff4->leave($__internal_d9fb87dd566d591c7a7f756ea75cd2873e987eec870a1e2681260c43eb159ff4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
