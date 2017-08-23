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
        $__internal_89859f9340c3d3c3aedd961d69674df6594b32ce641000f5b04a5b5bd0b33b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89859f9340c3d3c3aedd961d69674df6594b32ce641000f5b04a5b5bd0b33b03->enter($__internal_89859f9340c3d3c3aedd961d69674df6594b32ce641000f5b04a5b5bd0b33b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f35c10baa4213f729ba9c95516d21410b6993686a6cb165df36d89dad3aea07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35c10baa4213f729ba9c95516d21410b6993686a6cb165df36d89dad3aea07e->enter($__internal_f35c10baa4213f729ba9c95516d21410b6993686a6cb165df36d89dad3aea07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89859f9340c3d3c3aedd961d69674df6594b32ce641000f5b04a5b5bd0b33b03->leave($__internal_89859f9340c3d3c3aedd961d69674df6594b32ce641000f5b04a5b5bd0b33b03_prof);

        
        $__internal_f35c10baa4213f729ba9c95516d21410b6993686a6cb165df36d89dad3aea07e->leave($__internal_f35c10baa4213f729ba9c95516d21410b6993686a6cb165df36d89dad3aea07e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30f6e2b5c00feb5c76aaf18bf7556b8f848f1f56a67e43a3db4029614499664c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f6e2b5c00feb5c76aaf18bf7556b8f848f1f56a67e43a3db4029614499664c->enter($__internal_30f6e2b5c00feb5c76aaf18bf7556b8f848f1f56a67e43a3db4029614499664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8da4658f7f2734bef66c8bb187d71151315ac844a45c4c5565430a5f59252b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da4658f7f2734bef66c8bb187d71151315ac844a45c4c5565430a5f59252b82->enter($__internal_8da4658f7f2734bef66c8bb187d71151315ac844a45c4c5565430a5f59252b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8da4658f7f2734bef66c8bb187d71151315ac844a45c4c5565430a5f59252b82->leave($__internal_8da4658f7f2734bef66c8bb187d71151315ac844a45c4c5565430a5f59252b82_prof);

        
        $__internal_30f6e2b5c00feb5c76aaf18bf7556b8f848f1f56a67e43a3db4029614499664c->leave($__internal_30f6e2b5c00feb5c76aaf18bf7556b8f848f1f56a67e43a3db4029614499664c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_333cc6dca0ed4213cb5e09e298a2a609f7d0d4857816484067886898fb5c12a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333cc6dca0ed4213cb5e09e298a2a609f7d0d4857816484067886898fb5c12a2->enter($__internal_333cc6dca0ed4213cb5e09e298a2a609f7d0d4857816484067886898fb5c12a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31abfcf9184b1ab2360793bb50767052fae2f8515164dcabd5022e8cdfb2869c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31abfcf9184b1ab2360793bb50767052fae2f8515164dcabd5022e8cdfb2869c->enter($__internal_31abfcf9184b1ab2360793bb50767052fae2f8515164dcabd5022e8cdfb2869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31abfcf9184b1ab2360793bb50767052fae2f8515164dcabd5022e8cdfb2869c->leave($__internal_31abfcf9184b1ab2360793bb50767052fae2f8515164dcabd5022e8cdfb2869c_prof);

        
        $__internal_333cc6dca0ed4213cb5e09e298a2a609f7d0d4857816484067886898fb5c12a2->leave($__internal_333cc6dca0ed4213cb5e09e298a2a609f7d0d4857816484067886898fb5c12a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35f5c1c225df5a2996b034ffd446c88fdbff1ee220e450d549c18d1fa8c47e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f5c1c225df5a2996b034ffd446c88fdbff1ee220e450d549c18d1fa8c47e86->enter($__internal_35f5c1c225df5a2996b034ffd446c88fdbff1ee220e450d549c18d1fa8c47e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d6308971e1fd914fe68a865a117b23362a0e6718cd3c078f1d8d15d86fb86d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6308971e1fd914fe68a865a117b23362a0e6718cd3c078f1d8d15d86fb86d6->enter($__internal_9d6308971e1fd914fe68a865a117b23362a0e6718cd3c078f1d8d15d86fb86d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d6308971e1fd914fe68a865a117b23362a0e6718cd3c078f1d8d15d86fb86d6->leave($__internal_9d6308971e1fd914fe68a865a117b23362a0e6718cd3c078f1d8d15d86fb86d6_prof);

        
        $__internal_35f5c1c225df5a2996b034ffd446c88fdbff1ee220e450d549c18d1fa8c47e86->leave($__internal_35f5c1c225df5a2996b034ffd446c88fdbff1ee220e450d549c18d1fa8c47e86_prof);

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
