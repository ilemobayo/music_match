<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35844f82a2f93db8fb641b8d10ff288d0485b612f66098b403a8ba7af8a12359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_790829d2e4786e629b990aca3227af0fc1f5b003336b0412a936d88e48b44a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790829d2e4786e629b990aca3227af0fc1f5b003336b0412a936d88e48b44a7c->enter($__internal_790829d2e4786e629b990aca3227af0fc1f5b003336b0412a936d88e48b44a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ed660061f1177338400c74d5bb2d6c442b003ea02f2ed4fe614a0167c0fb152c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed660061f1177338400c74d5bb2d6c442b003ea02f2ed4fe614a0167c0fb152c->enter($__internal_ed660061f1177338400c74d5bb2d6c442b003ea02f2ed4fe614a0167c0fb152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790829d2e4786e629b990aca3227af0fc1f5b003336b0412a936d88e48b44a7c->leave($__internal_790829d2e4786e629b990aca3227af0fc1f5b003336b0412a936d88e48b44a7c_prof);

        
        $__internal_ed660061f1177338400c74d5bb2d6c442b003ea02f2ed4fe614a0167c0fb152c->leave($__internal_ed660061f1177338400c74d5bb2d6c442b003ea02f2ed4fe614a0167c0fb152c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5b6f8f34694c4343e95426096a37e6130c85ae73d72bf931daa3a790ea71ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b6f8f34694c4343e95426096a37e6130c85ae73d72bf931daa3a790ea71ac2->enter($__internal_b5b6f8f34694c4343e95426096a37e6130c85ae73d72bf931daa3a790ea71ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2da2e356869b7cb9d1c3c54e9eeaf11f9bb59d16996361b30d79f909002dacac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da2e356869b7cb9d1c3c54e9eeaf11f9bb59d16996361b30d79f909002dacac->enter($__internal_2da2e356869b7cb9d1c3c54e9eeaf11f9bb59d16996361b30d79f909002dacac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2da2e356869b7cb9d1c3c54e9eeaf11f9bb59d16996361b30d79f909002dacac->leave($__internal_2da2e356869b7cb9d1c3c54e9eeaf11f9bb59d16996361b30d79f909002dacac_prof);

        
        $__internal_b5b6f8f34694c4343e95426096a37e6130c85ae73d72bf931daa3a790ea71ac2->leave($__internal_b5b6f8f34694c4343e95426096a37e6130c85ae73d72bf931daa3a790ea71ac2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
