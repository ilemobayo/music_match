<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0c650379497b91813404ee5c63b28e410a7e5ca7decda54ffa8adc4b81e7ad88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b715e2556db6a2b197e9b9f1a9c8884db748db2a22f7e92f382eeb4ebcee7118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b715e2556db6a2b197e9b9f1a9c8884db748db2a22f7e92f382eeb4ebcee7118->enter($__internal_b715e2556db6a2b197e9b9f1a9c8884db748db2a22f7e92f382eeb4ebcee7118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7139afafd10bb7d776b748000263240e120274c9030aac1fc7530d9678ac3cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7139afafd10bb7d776b748000263240e120274c9030aac1fc7530d9678ac3cfb->enter($__internal_7139afafd10bb7d776b748000263240e120274c9030aac1fc7530d9678ac3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b715e2556db6a2b197e9b9f1a9c8884db748db2a22f7e92f382eeb4ebcee7118->leave($__internal_b715e2556db6a2b197e9b9f1a9c8884db748db2a22f7e92f382eeb4ebcee7118_prof);

        
        $__internal_7139afafd10bb7d776b748000263240e120274c9030aac1fc7530d9678ac3cfb->leave($__internal_7139afafd10bb7d776b748000263240e120274c9030aac1fc7530d9678ac3cfb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
