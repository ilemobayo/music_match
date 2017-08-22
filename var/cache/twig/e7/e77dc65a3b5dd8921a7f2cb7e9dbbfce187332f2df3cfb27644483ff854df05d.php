<?php

/* user/register.html.twig */
class __TwigTemplate_579ef2dcebcb419f1441e8d8f68bd5116bb06a710ff3da0bf688e88ea14497ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de7443961c246085639f2b3a15f416843aedbca9f93812e84945ff3bdacf845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de7443961c246085639f2b3a15f416843aedbca9f93812e84945ff3bdacf845->enter($__internal_2de7443961c246085639f2b3a15f416843aedbca9f93812e84945ff3bdacf845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_8b9871fec6f45c5a9d9c708899e538ac1075d84d2c75f086e9b87219f91698b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9871fec6f45c5a9d9c708899e538ac1075d84d2c75f086e9b87219f91698b7->enter($__internal_8b9871fec6f45c5a9d9c708899e538ac1075d84d2c75f086e9b87219f91698b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de7443961c246085639f2b3a15f416843aedbca9f93812e84945ff3bdacf845->leave($__internal_2de7443961c246085639f2b3a15f416843aedbca9f93812e84945ff3bdacf845_prof);

        
        $__internal_8b9871fec6f45c5a9d9c708899e538ac1075d84d2c75f086e9b87219f91698b7->leave($__internal_8b9871fec6f45c5a9d9c708899e538ac1075d84d2c75f086e9b87219f91698b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b583b6732265cfabbcf127b6148fcbdb8e927feee22974a66b2e6a0ab37cc992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b583b6732265cfabbcf127b6148fcbdb8e927feee22974a66b2e6a0ab37cc992->enter($__internal_b583b6732265cfabbcf127b6148fcbdb8e927feee22974a66b2e6a0ab37cc992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a05a54dc3a65bef161f29586e57c02c30820ac49e22a6825d3de5a10cdde503f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05a54dc3a65bef161f29586e57c02c30820ac49e22a6825d3de5a10cdde503f->enter($__internal_a05a54dc3a65bef161f29586e57c02c30820ac49e22a6825d3de5a10cdde503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_a05a54dc3a65bef161f29586e57c02c30820ac49e22a6825d3de5a10cdde503f->leave($__internal_a05a54dc3a65bef161f29586e57c02c30820ac49e22a6825d3de5a10cdde503f_prof);

        
        $__internal_b583b6732265cfabbcf127b6148fcbdb8e927feee22974a66b2e6a0ab37cc992->leave($__internal_b583b6732265cfabbcf127b6148fcbdb8e927feee22974a66b2e6a0ab37cc992_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f09a8d480e79c6a6686c50d433bf807c2ab72bf7426aa4ff32a3a6fa5197a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f09a8d480e79c6a6686c50d433bf807c2ab72bf7426aa4ff32a3a6fa5197a43->enter($__internal_5f09a8d480e79c6a6686c50d433bf807c2ab72bf7426aa4ff32a3a6fa5197a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1fe6552527d71c34d1726882d963c935b0e1993be700dd332396ca386e09d22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe6552527d71c34d1726882d963c935b0e1993be700dd332396ca386e09d22e->enter($__internal_1fe6552527d71c34d1726882d963c935b0e1993be700dd332396ca386e09d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header\" style=\"background-image:url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/music-cassette.jpg"), "html", null, true);
        echo "'); text-align:center;\">
            <div class=\"filter\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 offset-lg-4 col-sm-6 offset-sm-3\">
                            <div class=\"card card-register\" style=\"background:transparent;\">\t\t\t\t\t\t
                                <h2 class=\"title\" style=\"font-weight:bold;color:red;\">Welcome</h2>

                                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 19
        echo "
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "username", array()), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 25
        echo "
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "email", array()), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 31
        echo "
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "password", array()), 'errors');
        echo "
                                </div>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        // line 36
        echo "
                                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"footer register-footer text-center\">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i>by us @ WebForce3</h6>
                    </div>
                </div>
        </div>
    </div>
";
        
        $__internal_1fe6552527d71c34d1726882d963c935b0e1993be700dd332396ca386e09d22e->leave($__internal_1fe6552527d71c34d1726882d963c935b0e1993be700dd332396ca386e09d22e_prof);

        
        $__internal_5f09a8d480e79c6a6686c50d433bf807c2ab72bf7426aa4ff32a3a6fa5197a43->leave($__internal_5f09a8d480e79c6a6686c50d433bf807c2ab72bf7426aa4ff32a3a6fa5197a43_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  121 => 36,  119 => 34,  114 => 32,  111 => 31,  109 => 29,  103 => 26,  100 => 25,  98 => 23,  92 => 20,  89 => 19,  87 => 17,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title 'Inscription' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header\" style=\"background-image:url('{{ asset('img/music-cassette.jpg') }}'); text-align:center;\">
            <div class=\"filter\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 offset-lg-4 col-sm-6 offset-sm-3\">
                            <div class=\"card card-register\" style=\"background:transparent;\">\t\t\t\t\t\t
                                <h2 class=\"title\" style=\"font-weight:bold;color:red;\">Welcome</h2>

                                {{ form_start(registerForm) }}
                                <div class=\"form-group\">
                                    {{ form_widget(registerForm.username, {'attr': {
                                        'class' : 'form-control'
                                    }}) }}
                                    {{ form_errors(registerForm.username) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_widget(registerForm.email, {'attr': {
                                        'class' : 'form-control'
                                    }}) }}
                                    {{ form_errors(registerForm.email) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_widget(registerForm.password, {'attr': {
                                        'class' : 'form-control'
                                    }}) }}
                                    {{ form_errors(registerForm.password) }}
                                </div>
                                {{ form_widget(registerForm.submit, {'attr': {
                                        'class' : 'btn btn-primary'
                                    }}) }}
                                {{ form_end(registerForm) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"footer register-footer text-center\">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i>by us @ WebForce3</h6>
                    </div>
                </div>
        </div>
    </div>
{% endblock %}
", "user/register.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\register.html.twig");
    }
}
