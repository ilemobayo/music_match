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
        $__internal_db1685ee52b0c07b6a5bca2346e1366b9db9e0cf19dbe76fd760b3587ce78af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1685ee52b0c07b6a5bca2346e1366b9db9e0cf19dbe76fd760b3587ce78af1->enter($__internal_db1685ee52b0c07b6a5bca2346e1366b9db9e0cf19dbe76fd760b3587ce78af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_493f8d3b4f5459aa83d9c9839db5c407e2ca3ac75d78bc443600def7c39ccbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493f8d3b4f5459aa83d9c9839db5c407e2ca3ac75d78bc443600def7c39ccbfc->enter($__internal_493f8d3b4f5459aa83d9c9839db5c407e2ca3ac75d78bc443600def7c39ccbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1685ee52b0c07b6a5bca2346e1366b9db9e0cf19dbe76fd760b3587ce78af1->leave($__internal_db1685ee52b0c07b6a5bca2346e1366b9db9e0cf19dbe76fd760b3587ce78af1_prof);

        
        $__internal_493f8d3b4f5459aa83d9c9839db5c407e2ca3ac75d78bc443600def7c39ccbfc->leave($__internal_493f8d3b4f5459aa83d9c9839db5c407e2ca3ac75d78bc443600def7c39ccbfc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8954c4a07b12b40aa4cf81b7c1c5716aaec2f4f974aa9d24e62892319edfcf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8954c4a07b12b40aa4cf81b7c1c5716aaec2f4f974aa9d24e62892319edfcf05->enter($__internal_8954c4a07b12b40aa4cf81b7c1c5716aaec2f4f974aa9d24e62892319edfcf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_daa183205608c45e93bbb32f13faf67db3fcf99b6c2eb40f8448a37cd92c89d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa183205608c45e93bbb32f13faf67db3fcf99b6c2eb40f8448a37cd92c89d0->enter($__internal_daa183205608c45e93bbb32f13faf67db3fcf99b6c2eb40f8448a37cd92c89d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_daa183205608c45e93bbb32f13faf67db3fcf99b6c2eb40f8448a37cd92c89d0->leave($__internal_daa183205608c45e93bbb32f13faf67db3fcf99b6c2eb40f8448a37cd92c89d0_prof);

        
        $__internal_8954c4a07b12b40aa4cf81b7c1c5716aaec2f4f974aa9d24e62892319edfcf05->leave($__internal_8954c4a07b12b40aa4cf81b7c1c5716aaec2f4f974aa9d24e62892319edfcf05_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02c52b8a91cce53f67d382e00bf9ca21e6b4fb66981fed7de7156d4f437ebed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c52b8a91cce53f67d382e00bf9ca21e6b4fb66981fed7de7156d4f437ebed5->enter($__internal_02c52b8a91cce53f67d382e00bf9ca21e6b4fb66981fed7de7156d4f437ebed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6156a529ffdef35fc21c8e5e24937f8f9b468997120e2c4926b52262bc17c8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6156a529ffdef35fc21c8e5e24937f8f9b468997120e2c4926b52262bc17c8c0->enter($__internal_6156a529ffdef35fc21c8e5e24937f8f9b468997120e2c4926b52262bc17c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6156a529ffdef35fc21c8e5e24937f8f9b468997120e2c4926b52262bc17c8c0->leave($__internal_6156a529ffdef35fc21c8e5e24937f8f9b468997120e2c4926b52262bc17c8c0_prof);

        
        $__internal_02c52b8a91cce53f67d382e00bf9ca21e6b4fb66981fed7de7156d4f437ebed5->leave($__internal_02c52b8a91cce53f67d382e00bf9ca21e6b4fb66981fed7de7156d4f437ebed5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81e9fbc1cfcacee71f536e1b06164c21d5977fb22d905940d90e44bc578cb116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e9fbc1cfcacee71f536e1b06164c21d5977fb22d905940d90e44bc578cb116->enter($__internal_81e9fbc1cfcacee71f536e1b06164c21d5977fb22d905940d90e44bc578cb116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6a98f4c5e17a4cde5858a7b28a2cb94b4158df9e89b433e3e68a03a20c6bd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a98f4c5e17a4cde5858a7b28a2cb94b4158df9e89b433e3e68a03a20c6bd55->enter($__internal_c6a98f4c5e17a4cde5858a7b28a2cb94b4158df9e89b433e3e68a03a20c6bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6a98f4c5e17a4cde5858a7b28a2cb94b4158df9e89b433e3e68a03a20c6bd55->leave($__internal_c6a98f4c5e17a4cde5858a7b28a2cb94b4158df9e89b433e3e68a03a20c6bd55_prof);

        
        $__internal_81e9fbc1cfcacee71f536e1b06164c21d5977fb22d905940d90e44bc578cb116->leave($__internal_81e9fbc1cfcacee71f536e1b06164c21d5977fb22d905940d90e44bc578cb116_prof);

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
