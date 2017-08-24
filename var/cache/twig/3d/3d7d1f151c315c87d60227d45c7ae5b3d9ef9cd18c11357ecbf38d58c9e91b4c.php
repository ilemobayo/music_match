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
        $__internal_af22afd59b25f40bfbac7c50a751385645e099d00cc021aa2af342ced7550553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af22afd59b25f40bfbac7c50a751385645e099d00cc021aa2af342ced7550553->enter($__internal_af22afd59b25f40bfbac7c50a751385645e099d00cc021aa2af342ced7550553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4ee6e6996925d4087e7a77401098b2849281b589c89b6ce10a3ecd3b83936c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee6e6996925d4087e7a77401098b2849281b589c89b6ce10a3ecd3b83936c35->enter($__internal_4ee6e6996925d4087e7a77401098b2849281b589c89b6ce10a3ecd3b83936c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af22afd59b25f40bfbac7c50a751385645e099d00cc021aa2af342ced7550553->leave($__internal_af22afd59b25f40bfbac7c50a751385645e099d00cc021aa2af342ced7550553_prof);

        
        $__internal_4ee6e6996925d4087e7a77401098b2849281b589c89b6ce10a3ecd3b83936c35->leave($__internal_4ee6e6996925d4087e7a77401098b2849281b589c89b6ce10a3ecd3b83936c35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfa7f9d3fb367a1cd36bfbbdede0f3f15fc252f249f6ceaf75a613ec77ae92d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa7f9d3fb367a1cd36bfbbdede0f3f15fc252f249f6ceaf75a613ec77ae92d8->enter($__internal_cfa7f9d3fb367a1cd36bfbbdede0f3f15fc252f249f6ceaf75a613ec77ae92d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f89216ed85258fedef7d883c2f689b8d21809751d446a90333e9d0929a6ae51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f89216ed85258fedef7d883c2f689b8d21809751d446a90333e9d0929a6ae51->enter($__internal_5f89216ed85258fedef7d883c2f689b8d21809751d446a90333e9d0929a6ae51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f89216ed85258fedef7d883c2f689b8d21809751d446a90333e9d0929a6ae51->leave($__internal_5f89216ed85258fedef7d883c2f689b8d21809751d446a90333e9d0929a6ae51_prof);

        
        $__internal_cfa7f9d3fb367a1cd36bfbbdede0f3f15fc252f249f6ceaf75a613ec77ae92d8->leave($__internal_cfa7f9d3fb367a1cd36bfbbdede0f3f15fc252f249f6ceaf75a613ec77ae92d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfa95b51f398bbd55e016c1e2c24cf184b427c0c8ea1a488c4a1624df563bbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa95b51f398bbd55e016c1e2c24cf184b427c0c8ea1a488c4a1624df563bbd1->enter($__internal_dfa95b51f398bbd55e016c1e2c24cf184b427c0c8ea1a488c4a1624df563bbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_360f455fd15e92075591381eb802a2ab7975bab927607f6fcda85a3075f4963d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360f455fd15e92075591381eb802a2ab7975bab927607f6fcda85a3075f4963d->enter($__internal_360f455fd15e92075591381eb802a2ab7975bab927607f6fcda85a3075f4963d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_360f455fd15e92075591381eb802a2ab7975bab927607f6fcda85a3075f4963d->leave($__internal_360f455fd15e92075591381eb802a2ab7975bab927607f6fcda85a3075f4963d_prof);

        
        $__internal_dfa95b51f398bbd55e016c1e2c24cf184b427c0c8ea1a488c4a1624df563bbd1->leave($__internal_dfa95b51f398bbd55e016c1e2c24cf184b427c0c8ea1a488c4a1624df563bbd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d18ded4a90c9b0f91a64635f677e98af2b982958e6275dbaaa7c8821da845a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18ded4a90c9b0f91a64635f677e98af2b982958e6275dbaaa7c8821da845a10->enter($__internal_d18ded4a90c9b0f91a64635f677e98af2b982958e6275dbaaa7c8821da845a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a18ba2bb5241015b1163342f4c44dbb3afd73fab2048e07e165e72d698e0071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a18ba2bb5241015b1163342f4c44dbb3afd73fab2048e07e165e72d698e0071->enter($__internal_0a18ba2bb5241015b1163342f4c44dbb3afd73fab2048e07e165e72d698e0071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a18ba2bb5241015b1163342f4c44dbb3afd73fab2048e07e165e72d698e0071->leave($__internal_0a18ba2bb5241015b1163342f4c44dbb3afd73fab2048e07e165e72d698e0071_prof);

        
        $__internal_d18ded4a90c9b0f91a64635f677e98af2b982958e6275dbaaa7c8821da845a10->leave($__internal_d18ded4a90c9b0f91a64635f677e98af2b982958e6275dbaaa7c8821da845a10_prof);

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
