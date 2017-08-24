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
        $__internal_f3a5a66b05fa4ea6a977e78300874b5231c063046032536c7c57043749c5b343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a5a66b05fa4ea6a977e78300874b5231c063046032536c7c57043749c5b343->enter($__internal_f3a5a66b05fa4ea6a977e78300874b5231c063046032536c7c57043749c5b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_830774d9c038e595093afeb1c1d1fb8f1d7e1e4d36740fbd598797befa4e518b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830774d9c038e595093afeb1c1d1fb8f1d7e1e4d36740fbd598797befa4e518b->enter($__internal_830774d9c038e595093afeb1c1d1fb8f1d7e1e4d36740fbd598797befa4e518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a5a66b05fa4ea6a977e78300874b5231c063046032536c7c57043749c5b343->leave($__internal_f3a5a66b05fa4ea6a977e78300874b5231c063046032536c7c57043749c5b343_prof);

        
        $__internal_830774d9c038e595093afeb1c1d1fb8f1d7e1e4d36740fbd598797befa4e518b->leave($__internal_830774d9c038e595093afeb1c1d1fb8f1d7e1e4d36740fbd598797befa4e518b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c09e81e3a638222180d419c0f01f18006c995f3f03550376bfade05badb20756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09e81e3a638222180d419c0f01f18006c995f3f03550376bfade05badb20756->enter($__internal_c09e81e3a638222180d419c0f01f18006c995f3f03550376bfade05badb20756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3963f7a44a46971388f5083e1ef23e701e14d3cfd4df6929d28f5ca61af86d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3963f7a44a46971388f5083e1ef23e701e14d3cfd4df6929d28f5ca61af86d44->enter($__internal_3963f7a44a46971388f5083e1ef23e701e14d3cfd4df6929d28f5ca61af86d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3963f7a44a46971388f5083e1ef23e701e14d3cfd4df6929d28f5ca61af86d44->leave($__internal_3963f7a44a46971388f5083e1ef23e701e14d3cfd4df6929d28f5ca61af86d44_prof);

        
        $__internal_c09e81e3a638222180d419c0f01f18006c995f3f03550376bfade05badb20756->leave($__internal_c09e81e3a638222180d419c0f01f18006c995f3f03550376bfade05badb20756_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29deec38552af12cba19882d9f2e3706b025956e9a0b89ace94a3e3392a5bd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29deec38552af12cba19882d9f2e3706b025956e9a0b89ace94a3e3392a5bd14->enter($__internal_29deec38552af12cba19882d9f2e3706b025956e9a0b89ace94a3e3392a5bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_970dde76ef7f46b2649e9947ef5e77d634428f1170f1478dd29e2d12f920345e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970dde76ef7f46b2649e9947ef5e77d634428f1170f1478dd29e2d12f920345e->enter($__internal_970dde76ef7f46b2649e9947ef5e77d634428f1170f1478dd29e2d12f920345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_970dde76ef7f46b2649e9947ef5e77d634428f1170f1478dd29e2d12f920345e->leave($__internal_970dde76ef7f46b2649e9947ef5e77d634428f1170f1478dd29e2d12f920345e_prof);

        
        $__internal_29deec38552af12cba19882d9f2e3706b025956e9a0b89ace94a3e3392a5bd14->leave($__internal_29deec38552af12cba19882d9f2e3706b025956e9a0b89ace94a3e3392a5bd14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cf7529633228a7e0d1d7e0797727823bc35089ead1e4fde82ecfb3f52aa9cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf7529633228a7e0d1d7e0797727823bc35089ead1e4fde82ecfb3f52aa9cf6->enter($__internal_0cf7529633228a7e0d1d7e0797727823bc35089ead1e4fde82ecfb3f52aa9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24dad58d0ebe83f9fa7c1ca038eb3b4fa5931fdf960972666eb451161794b2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dad58d0ebe83f9fa7c1ca038eb3b4fa5931fdf960972666eb451161794b2a2->enter($__internal_24dad58d0ebe83f9fa7c1ca038eb3b4fa5931fdf960972666eb451161794b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_24dad58d0ebe83f9fa7c1ca038eb3b4fa5931fdf960972666eb451161794b2a2->leave($__internal_24dad58d0ebe83f9fa7c1ca038eb3b4fa5931fdf960972666eb451161794b2a2_prof);

        
        $__internal_0cf7529633228a7e0d1d7e0797727823bc35089ead1e4fde82ecfb3f52aa9cf6->leave($__internal_0cf7529633228a7e0d1d7e0797727823bc35089ead1e4fde82ecfb3f52aa9cf6_prof);

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
