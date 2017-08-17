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
        $__internal_a4060cb4cb452a7301540c44082e994c04572dc8829bfaf5285332a2e7d72bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4060cb4cb452a7301540c44082e994c04572dc8829bfaf5285332a2e7d72bba->enter($__internal_a4060cb4cb452a7301540c44082e994c04572dc8829bfaf5285332a2e7d72bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eb3106c3846400da6b7928a70bf3e562ad29a4ff300fbf2ed108de0d56299b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3106c3846400da6b7928a70bf3e562ad29a4ff300fbf2ed108de0d56299b34->enter($__internal_eb3106c3846400da6b7928a70bf3e562ad29a4ff300fbf2ed108de0d56299b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4060cb4cb452a7301540c44082e994c04572dc8829bfaf5285332a2e7d72bba->leave($__internal_a4060cb4cb452a7301540c44082e994c04572dc8829bfaf5285332a2e7d72bba_prof);

        
        $__internal_eb3106c3846400da6b7928a70bf3e562ad29a4ff300fbf2ed108de0d56299b34->leave($__internal_eb3106c3846400da6b7928a70bf3e562ad29a4ff300fbf2ed108de0d56299b34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b6bf9251ede3419e1bdcfb52da63ad0b5eceb74654ef9fd2196b1ba220b2cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6bf9251ede3419e1bdcfb52da63ad0b5eceb74654ef9fd2196b1ba220b2cbd->enter($__internal_7b6bf9251ede3419e1bdcfb52da63ad0b5eceb74654ef9fd2196b1ba220b2cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c860636f92c7b7abe2d17f871729b24cab7584a949ffc8b5691f76202b1ee780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c860636f92c7b7abe2d17f871729b24cab7584a949ffc8b5691f76202b1ee780->enter($__internal_c860636f92c7b7abe2d17f871729b24cab7584a949ffc8b5691f76202b1ee780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c860636f92c7b7abe2d17f871729b24cab7584a949ffc8b5691f76202b1ee780->leave($__internal_c860636f92c7b7abe2d17f871729b24cab7584a949ffc8b5691f76202b1ee780_prof);

        
        $__internal_7b6bf9251ede3419e1bdcfb52da63ad0b5eceb74654ef9fd2196b1ba220b2cbd->leave($__internal_7b6bf9251ede3419e1bdcfb52da63ad0b5eceb74654ef9fd2196b1ba220b2cbd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d203561ef3e72ebd8b34973997325dfa80aeb8d709e9fa4c966f6525912e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d203561ef3e72ebd8b34973997325dfa80aeb8d709e9fa4c966f6525912e3f8->enter($__internal_8d203561ef3e72ebd8b34973997325dfa80aeb8d709e9fa4c966f6525912e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e01ba62f3a5e81135594c1132ecf687fdb80b04307b477697a7186d500f3ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e01ba62f3a5e81135594c1132ecf687fdb80b04307b477697a7186d500f3ccb->enter($__internal_2e01ba62f3a5e81135594c1132ecf687fdb80b04307b477697a7186d500f3ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2e01ba62f3a5e81135594c1132ecf687fdb80b04307b477697a7186d500f3ccb->leave($__internal_2e01ba62f3a5e81135594c1132ecf687fdb80b04307b477697a7186d500f3ccb_prof);

        
        $__internal_8d203561ef3e72ebd8b34973997325dfa80aeb8d709e9fa4c966f6525912e3f8->leave($__internal_8d203561ef3e72ebd8b34973997325dfa80aeb8d709e9fa4c966f6525912e3f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f0a96c987532210c32bfccc2dabf134ae7e785870a74d11e38aa51249f8f550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0a96c987532210c32bfccc2dabf134ae7e785870a74d11e38aa51249f8f550->enter($__internal_6f0a96c987532210c32bfccc2dabf134ae7e785870a74d11e38aa51249f8f550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3aa550dc9c1ed0c83fd9257cb41f6246e46d2f7059d208e86a82c44457802cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3aa550dc9c1ed0c83fd9257cb41f6246e46d2f7059d208e86a82c44457802cc->enter($__internal_d3aa550dc9c1ed0c83fd9257cb41f6246e46d2f7059d208e86a82c44457802cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d3aa550dc9c1ed0c83fd9257cb41f6246e46d2f7059d208e86a82c44457802cc->leave($__internal_d3aa550dc9c1ed0c83fd9257cb41f6246e46d2f7059d208e86a82c44457802cc_prof);

        
        $__internal_6f0a96c987532210c32bfccc2dabf134ae7e785870a74d11e38aa51249f8f550->leave($__internal_6f0a96c987532210c32bfccc2dabf134ae7e785870a74d11e38aa51249f8f550_prof);

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
