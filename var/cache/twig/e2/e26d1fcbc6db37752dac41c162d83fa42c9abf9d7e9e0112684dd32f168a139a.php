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
        $__internal_7fcad956a83d3d538b472ae4c7d8eafb079440e709fab91db21f3783232b674f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcad956a83d3d538b472ae4c7d8eafb079440e709fab91db21f3783232b674f->enter($__internal_7fcad956a83d3d538b472ae4c7d8eafb079440e709fab91db21f3783232b674f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3190392ff37492e97586b727d61d257e2a8b2e566250d4dfaead12ed8a173052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3190392ff37492e97586b727d61d257e2a8b2e566250d4dfaead12ed8a173052->enter($__internal_3190392ff37492e97586b727d61d257e2a8b2e566250d4dfaead12ed8a173052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fcad956a83d3d538b472ae4c7d8eafb079440e709fab91db21f3783232b674f->leave($__internal_7fcad956a83d3d538b472ae4c7d8eafb079440e709fab91db21f3783232b674f_prof);

        
        $__internal_3190392ff37492e97586b727d61d257e2a8b2e566250d4dfaead12ed8a173052->leave($__internal_3190392ff37492e97586b727d61d257e2a8b2e566250d4dfaead12ed8a173052_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57299a4c3f5334c036e1071900771e2866f26b23e50a87e6dd57ae4996abc0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57299a4c3f5334c036e1071900771e2866f26b23e50a87e6dd57ae4996abc0e7->enter($__internal_57299a4c3f5334c036e1071900771e2866f26b23e50a87e6dd57ae4996abc0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_068b2fd739d243bd42ef3c1ee1191a25d9383ac8363e013b1b8c338c74b07006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068b2fd739d243bd42ef3c1ee1191a25d9383ac8363e013b1b8c338c74b07006->enter($__internal_068b2fd739d243bd42ef3c1ee1191a25d9383ac8363e013b1b8c338c74b07006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_068b2fd739d243bd42ef3c1ee1191a25d9383ac8363e013b1b8c338c74b07006->leave($__internal_068b2fd739d243bd42ef3c1ee1191a25d9383ac8363e013b1b8c338c74b07006_prof);

        
        $__internal_57299a4c3f5334c036e1071900771e2866f26b23e50a87e6dd57ae4996abc0e7->leave($__internal_57299a4c3f5334c036e1071900771e2866f26b23e50a87e6dd57ae4996abc0e7_prof);

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
