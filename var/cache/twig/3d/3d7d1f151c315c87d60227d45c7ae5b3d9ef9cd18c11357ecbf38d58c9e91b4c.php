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
        $__internal_e18e5a1af3a22721a15ad4c69db023174fae007c0d773df821dbfb7354504ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18e5a1af3a22721a15ad4c69db023174fae007c0d773df821dbfb7354504ced->enter($__internal_e18e5a1af3a22721a15ad4c69db023174fae007c0d773df821dbfb7354504ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b130d0b938f1767899044170919864ff54d06b4ca56db3bf32f226d019235af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b130d0b938f1767899044170919864ff54d06b4ca56db3bf32f226d019235af->enter($__internal_0b130d0b938f1767899044170919864ff54d06b4ca56db3bf32f226d019235af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18e5a1af3a22721a15ad4c69db023174fae007c0d773df821dbfb7354504ced->leave($__internal_e18e5a1af3a22721a15ad4c69db023174fae007c0d773df821dbfb7354504ced_prof);

        
        $__internal_0b130d0b938f1767899044170919864ff54d06b4ca56db3bf32f226d019235af->leave($__internal_0b130d0b938f1767899044170919864ff54d06b4ca56db3bf32f226d019235af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48d82ec389ebd282430b5e3d0f21dd8de0575b05b831fb3e551f915fcb02d4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d82ec389ebd282430b5e3d0f21dd8de0575b05b831fb3e551f915fcb02d4f9->enter($__internal_48d82ec389ebd282430b5e3d0f21dd8de0575b05b831fb3e551f915fcb02d4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a52d369ecc28d4bd32820ce4908cbb88e58dd8198b547bdf59d978496e765cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52d369ecc28d4bd32820ce4908cbb88e58dd8198b547bdf59d978496e765cf0->enter($__internal_a52d369ecc28d4bd32820ce4908cbb88e58dd8198b547bdf59d978496e765cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a52d369ecc28d4bd32820ce4908cbb88e58dd8198b547bdf59d978496e765cf0->leave($__internal_a52d369ecc28d4bd32820ce4908cbb88e58dd8198b547bdf59d978496e765cf0_prof);

        
        $__internal_48d82ec389ebd282430b5e3d0f21dd8de0575b05b831fb3e551f915fcb02d4f9->leave($__internal_48d82ec389ebd282430b5e3d0f21dd8de0575b05b831fb3e551f915fcb02d4f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67ed82a8383bb32c3e4333ae11eff24333e0526801d1549fbfae39bfcf849f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ed82a8383bb32c3e4333ae11eff24333e0526801d1549fbfae39bfcf849f43->enter($__internal_67ed82a8383bb32c3e4333ae11eff24333e0526801d1549fbfae39bfcf849f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2044c174c1b0d7ddbc22ab42f4eacb72130b6af8b186e8fb1d57b75c871739c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2044c174c1b0d7ddbc22ab42f4eacb72130b6af8b186e8fb1d57b75c871739c6->enter($__internal_2044c174c1b0d7ddbc22ab42f4eacb72130b6af8b186e8fb1d57b75c871739c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2044c174c1b0d7ddbc22ab42f4eacb72130b6af8b186e8fb1d57b75c871739c6->leave($__internal_2044c174c1b0d7ddbc22ab42f4eacb72130b6af8b186e8fb1d57b75c871739c6_prof);

        
        $__internal_67ed82a8383bb32c3e4333ae11eff24333e0526801d1549fbfae39bfcf849f43->leave($__internal_67ed82a8383bb32c3e4333ae11eff24333e0526801d1549fbfae39bfcf849f43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c8f9ad66d5bb0ba757f474495df6f92ebe8b71af77e9a3b8708d7c2901fe61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8f9ad66d5bb0ba757f474495df6f92ebe8b71af77e9a3b8708d7c2901fe61d->enter($__internal_3c8f9ad66d5bb0ba757f474495df6f92ebe8b71af77e9a3b8708d7c2901fe61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8e4d0b035ce5fd6fb5a7a28f07ed0e74a1f7b7ec77cead87a720e13e5f64d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e4d0b035ce5fd6fb5a7a28f07ed0e74a1f7b7ec77cead87a720e13e5f64d9b->enter($__internal_d8e4d0b035ce5fd6fb5a7a28f07ed0e74a1f7b7ec77cead87a720e13e5f64d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8e4d0b035ce5fd6fb5a7a28f07ed0e74a1f7b7ec77cead87a720e13e5f64d9b->leave($__internal_d8e4d0b035ce5fd6fb5a7a28f07ed0e74a1f7b7ec77cead87a720e13e5f64d9b_prof);

        
        $__internal_3c8f9ad66d5bb0ba757f474495df6f92ebe8b71af77e9a3b8708d7c2901fe61d->leave($__internal_3c8f9ad66d5bb0ba757f474495df6f92ebe8b71af77e9a3b8708d7c2901fe61d_prof);

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
