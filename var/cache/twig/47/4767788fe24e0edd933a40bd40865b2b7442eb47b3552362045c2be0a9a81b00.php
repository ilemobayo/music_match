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
        $__internal_471ec404c61c5003d65923328ab62354a476ebcf01c311ac2a07dbb036ab58ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471ec404c61c5003d65923328ab62354a476ebcf01c311ac2a07dbb036ab58ff->enter($__internal_471ec404c61c5003d65923328ab62354a476ebcf01c311ac2a07dbb036ab58ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6694fe0d1a7a14a1e86f68b3205e619b16d050a3c5531db6812f8ba744ae469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6694fe0d1a7a14a1e86f68b3205e619b16d050a3c5531db6812f8ba744ae469->enter($__internal_d6694fe0d1a7a14a1e86f68b3205e619b16d050a3c5531db6812f8ba744ae469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471ec404c61c5003d65923328ab62354a476ebcf01c311ac2a07dbb036ab58ff->leave($__internal_471ec404c61c5003d65923328ab62354a476ebcf01c311ac2a07dbb036ab58ff_prof);

        
        $__internal_d6694fe0d1a7a14a1e86f68b3205e619b16d050a3c5531db6812f8ba744ae469->leave($__internal_d6694fe0d1a7a14a1e86f68b3205e619b16d050a3c5531db6812f8ba744ae469_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50705ce855a970463593848960d942b57d50d968c80da281085f04e4150b65c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50705ce855a970463593848960d942b57d50d968c80da281085f04e4150b65c0->enter($__internal_50705ce855a970463593848960d942b57d50d968c80da281085f04e4150b65c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d67d699186a2a05dc1135521e13675fa5e9cbeb8a03e24e96f941c6bb72de0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67d699186a2a05dc1135521e13675fa5e9cbeb8a03e24e96f941c6bb72de0db->enter($__internal_d67d699186a2a05dc1135521e13675fa5e9cbeb8a03e24e96f941c6bb72de0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d67d699186a2a05dc1135521e13675fa5e9cbeb8a03e24e96f941c6bb72de0db->leave($__internal_d67d699186a2a05dc1135521e13675fa5e9cbeb8a03e24e96f941c6bb72de0db_prof);

        
        $__internal_50705ce855a970463593848960d942b57d50d968c80da281085f04e4150b65c0->leave($__internal_50705ce855a970463593848960d942b57d50d968c80da281085f04e4150b65c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46d13f8982b6f8e7767c6cfdeb5b01f4829a4005c860f71f7b5c7792c3ae939b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d13f8982b6f8e7767c6cfdeb5b01f4829a4005c860f71f7b5c7792c3ae939b->enter($__internal_46d13f8982b6f8e7767c6cfdeb5b01f4829a4005c860f71f7b5c7792c3ae939b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d35ec530249af837caf1ee5b2c2a9000bcdebf27dae834c277eb5fae3b23571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d35ec530249af837caf1ee5b2c2a9000bcdebf27dae834c277eb5fae3b23571->enter($__internal_8d35ec530249af837caf1ee5b2c2a9000bcdebf27dae834c277eb5fae3b23571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8d35ec530249af837caf1ee5b2c2a9000bcdebf27dae834c277eb5fae3b23571->leave($__internal_8d35ec530249af837caf1ee5b2c2a9000bcdebf27dae834c277eb5fae3b23571_prof);

        
        $__internal_46d13f8982b6f8e7767c6cfdeb5b01f4829a4005c860f71f7b5c7792c3ae939b->leave($__internal_46d13f8982b6f8e7767c6cfdeb5b01f4829a4005c860f71f7b5c7792c3ae939b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e1624189597ba10c5b512d0e8afea17dc31361d19a4468409e8b0b57a437d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1624189597ba10c5b512d0e8afea17dc31361d19a4468409e8b0b57a437d12->enter($__internal_5e1624189597ba10c5b512d0e8afea17dc31361d19a4468409e8b0b57a437d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48bd51e5d70532ba5ee39aa5c2a87b46323e40ffe13ef61189f6d33d98bef70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bd51e5d70532ba5ee39aa5c2a87b46323e40ffe13ef61189f6d33d98bef70d->enter($__internal_48bd51e5d70532ba5ee39aa5c2a87b46323e40ffe13ef61189f6d33d98bef70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_48bd51e5d70532ba5ee39aa5c2a87b46323e40ffe13ef61189f6d33d98bef70d->leave($__internal_48bd51e5d70532ba5ee39aa5c2a87b46323e40ffe13ef61189f6d33d98bef70d_prof);

        
        $__internal_5e1624189597ba10c5b512d0e8afea17dc31361d19a4468409e8b0b57a437d12->leave($__internal_5e1624189597ba10c5b512d0e8afea17dc31361d19a4468409e8b0b57a437d12_prof);

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
