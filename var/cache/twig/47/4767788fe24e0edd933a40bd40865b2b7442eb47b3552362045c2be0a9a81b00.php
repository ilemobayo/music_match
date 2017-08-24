<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c35148ab702d04019d5d20712f02241ac5362e8093632b6fa215c8466d3738f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a9c6ec1f8fa1bbfbf75624ddb9ae3ea8f47cc57d87c9b7df245a9f5195b8d857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c6ec1f8fa1bbfbf75624ddb9ae3ea8f47cc57d87c9b7df245a9f5195b8d857->enter($__internal_a9c6ec1f8fa1bbfbf75624ddb9ae3ea8f47cc57d87c9b7df245a9f5195b8d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e39e9e53d15a1032345d8488144c235700b60b2b6c36e21e422576bd9e72364b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39e9e53d15a1032345d8488144c235700b60b2b6c36e21e422576bd9e72364b->enter($__internal_e39e9e53d15a1032345d8488144c235700b60b2b6c36e21e422576bd9e72364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c6ec1f8fa1bbfbf75624ddb9ae3ea8f47cc57d87c9b7df245a9f5195b8d857->leave($__internal_a9c6ec1f8fa1bbfbf75624ddb9ae3ea8f47cc57d87c9b7df245a9f5195b8d857_prof);

        
        $__internal_e39e9e53d15a1032345d8488144c235700b60b2b6c36e21e422576bd9e72364b->leave($__internal_e39e9e53d15a1032345d8488144c235700b60b2b6c36e21e422576bd9e72364b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b06bb1acedeaeb3da81886cae6f0982373bd2002eb6353340355a735bbce7a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06bb1acedeaeb3da81886cae6f0982373bd2002eb6353340355a735bbce7a66->enter($__internal_b06bb1acedeaeb3da81886cae6f0982373bd2002eb6353340355a735bbce7a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5e6e5f68dc1707c87d26dbb93969894ebf12d2fdfe9101a48ac1a32f4728465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e6e5f68dc1707c87d26dbb93969894ebf12d2fdfe9101a48ac1a32f4728465->enter($__internal_b5e6e5f68dc1707c87d26dbb93969894ebf12d2fdfe9101a48ac1a32f4728465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b5e6e5f68dc1707c87d26dbb93969894ebf12d2fdfe9101a48ac1a32f4728465->leave($__internal_b5e6e5f68dc1707c87d26dbb93969894ebf12d2fdfe9101a48ac1a32f4728465_prof);

        
        $__internal_b06bb1acedeaeb3da81886cae6f0982373bd2002eb6353340355a735bbce7a66->leave($__internal_b06bb1acedeaeb3da81886cae6f0982373bd2002eb6353340355a735bbce7a66_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_932250451fe971a7c32ea61797f0909a7fe7b3711619eec758a3b77f6bb26aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932250451fe971a7c32ea61797f0909a7fe7b3711619eec758a3b77f6bb26aac->enter($__internal_932250451fe971a7c32ea61797f0909a7fe7b3711619eec758a3b77f6bb26aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3fd46719843ad61c2c1a814e8ddff6922fba1003daf0fa3f978374741750362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fd46719843ad61c2c1a814e8ddff6922fba1003daf0fa3f978374741750362->enter($__internal_c3fd46719843ad61c2c1a814e8ddff6922fba1003daf0fa3f978374741750362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c3fd46719843ad61c2c1a814e8ddff6922fba1003daf0fa3f978374741750362->leave($__internal_c3fd46719843ad61c2c1a814e8ddff6922fba1003daf0fa3f978374741750362_prof);

        
        $__internal_932250451fe971a7c32ea61797f0909a7fe7b3711619eec758a3b77f6bb26aac->leave($__internal_932250451fe971a7c32ea61797f0909a7fe7b3711619eec758a3b77f6bb26aac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a82e13519732893665de0b43416171ab434908cc762391d6f1f12f038de32dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82e13519732893665de0b43416171ab434908cc762391d6f1f12f038de32dfb->enter($__internal_a82e13519732893665de0b43416171ab434908cc762391d6f1f12f038de32dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65250a1888d63d6bd7aa80124b9806d26988a1e32e02e62ddfdd8163b6b809cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65250a1888d63d6bd7aa80124b9806d26988a1e32e02e62ddfdd8163b6b809cb->enter($__internal_65250a1888d63d6bd7aa80124b9806d26988a1e32e02e62ddfdd8163b6b809cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_65250a1888d63d6bd7aa80124b9806d26988a1e32e02e62ddfdd8163b6b809cb->leave($__internal_65250a1888d63d6bd7aa80124b9806d26988a1e32e02e62ddfdd8163b6b809cb_prof);

        
        $__internal_a82e13519732893665de0b43416171ab434908cc762391d6f1f12f038de32dfb->leave($__internal_a82e13519732893665de0b43416171ab434908cc762391d6f1f12f038de32dfb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
