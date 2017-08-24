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
        $__internal_aba07b0ec14f4a0fd7dd206e78b3fd4250e23a12594970969b7208f32167462a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba07b0ec14f4a0fd7dd206e78b3fd4250e23a12594970969b7208f32167462a->enter($__internal_aba07b0ec14f4a0fd7dd206e78b3fd4250e23a12594970969b7208f32167462a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_25087d7e07b0334182ac935834eaf2a292034f6b55af7a1ac57e8ccee136a19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25087d7e07b0334182ac935834eaf2a292034f6b55af7a1ac57e8ccee136a19b->enter($__internal_25087d7e07b0334182ac935834eaf2a292034f6b55af7a1ac57e8ccee136a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba07b0ec14f4a0fd7dd206e78b3fd4250e23a12594970969b7208f32167462a->leave($__internal_aba07b0ec14f4a0fd7dd206e78b3fd4250e23a12594970969b7208f32167462a_prof);

        
        $__internal_25087d7e07b0334182ac935834eaf2a292034f6b55af7a1ac57e8ccee136a19b->leave($__internal_25087d7e07b0334182ac935834eaf2a292034f6b55af7a1ac57e8ccee136a19b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd636650fe50ef098146d18f6cc3296026b765e63797f74bcce282fcfc8859f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd636650fe50ef098146d18f6cc3296026b765e63797f74bcce282fcfc8859f4->enter($__internal_fd636650fe50ef098146d18f6cc3296026b765e63797f74bcce282fcfc8859f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_663c73636d7091e95d3270be8f7ea58f6905427c77bb02ebf0e550205f90bbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663c73636d7091e95d3270be8f7ea58f6905427c77bb02ebf0e550205f90bbaa->enter($__internal_663c73636d7091e95d3270be8f7ea58f6905427c77bb02ebf0e550205f90bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_663c73636d7091e95d3270be8f7ea58f6905427c77bb02ebf0e550205f90bbaa->leave($__internal_663c73636d7091e95d3270be8f7ea58f6905427c77bb02ebf0e550205f90bbaa_prof);

        
        $__internal_fd636650fe50ef098146d18f6cc3296026b765e63797f74bcce282fcfc8859f4->leave($__internal_fd636650fe50ef098146d18f6cc3296026b765e63797f74bcce282fcfc8859f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ce363788a664f9f6d261920dabaa63b0187eabacc0b8f334dbb22fce46a5048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce363788a664f9f6d261920dabaa63b0187eabacc0b8f334dbb22fce46a5048->enter($__internal_1ce363788a664f9f6d261920dabaa63b0187eabacc0b8f334dbb22fce46a5048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d7e6732557e37dcaf57078815a864e29f789316d6d1579c81f0ac95cf63904a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7e6732557e37dcaf57078815a864e29f789316d6d1579c81f0ac95cf63904a->enter($__internal_2d7e6732557e37dcaf57078815a864e29f789316d6d1579c81f0ac95cf63904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d7e6732557e37dcaf57078815a864e29f789316d6d1579c81f0ac95cf63904a->leave($__internal_2d7e6732557e37dcaf57078815a864e29f789316d6d1579c81f0ac95cf63904a_prof);

        
        $__internal_1ce363788a664f9f6d261920dabaa63b0187eabacc0b8f334dbb22fce46a5048->leave($__internal_1ce363788a664f9f6d261920dabaa63b0187eabacc0b8f334dbb22fce46a5048_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34e65a0a34a296cea7f29d0e92b288a8737253b9c081c7f4bac2af02851bfedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e65a0a34a296cea7f29d0e92b288a8737253b9c081c7f4bac2af02851bfedc->enter($__internal_34e65a0a34a296cea7f29d0e92b288a8737253b9c081c7f4bac2af02851bfedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2123b430bccb146441ce3b9e0b96cb2f41a77bcd2928114d82888295881a580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2123b430bccb146441ce3b9e0b96cb2f41a77bcd2928114d82888295881a580->enter($__internal_d2123b430bccb146441ce3b9e0b96cb2f41a77bcd2928114d82888295881a580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2123b430bccb146441ce3b9e0b96cb2f41a77bcd2928114d82888295881a580->leave($__internal_d2123b430bccb146441ce3b9e0b96cb2f41a77bcd2928114d82888295881a580_prof);

        
        $__internal_34e65a0a34a296cea7f29d0e92b288a8737253b9c081c7f4bac2af02851bfedc->leave($__internal_34e65a0a34a296cea7f29d0e92b288a8737253b9c081c7f4bac2af02851bfedc_prof);

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
