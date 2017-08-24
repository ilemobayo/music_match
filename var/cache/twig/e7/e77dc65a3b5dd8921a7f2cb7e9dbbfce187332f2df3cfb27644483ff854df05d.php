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
        $__internal_4cf058811bef49f1660effe8c7d4584ac404c151d4510973a9a702f9bd2474a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf058811bef49f1660effe8c7d4584ac404c151d4510973a9a702f9bd2474a6->enter($__internal_4cf058811bef49f1660effe8c7d4584ac404c151d4510973a9a702f9bd2474a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_710f933f30bd605a92a602c6bc79fdba2fbaf7930446fe7728e6da65dfc7ec9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710f933f30bd605a92a602c6bc79fdba2fbaf7930446fe7728e6da65dfc7ec9a->enter($__internal_710f933f30bd605a92a602c6bc79fdba2fbaf7930446fe7728e6da65dfc7ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf058811bef49f1660effe8c7d4584ac404c151d4510973a9a702f9bd2474a6->leave($__internal_4cf058811bef49f1660effe8c7d4584ac404c151d4510973a9a702f9bd2474a6_prof);

        
        $__internal_710f933f30bd605a92a602c6bc79fdba2fbaf7930446fe7728e6da65dfc7ec9a->leave($__internal_710f933f30bd605a92a602c6bc79fdba2fbaf7930446fe7728e6da65dfc7ec9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4556faa886ea33e7221123c8a146d82fc70ee2c5d33362bac804b2e6c94bc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4556faa886ea33e7221123c8a146d82fc70ee2c5d33362bac804b2e6c94bc27->enter($__internal_e4556faa886ea33e7221123c8a146d82fc70ee2c5d33362bac804b2e6c94bc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df94f3c36162909056023b2d55af79f5f534ae9d1c47875e5dbbea3605c8276f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df94f3c36162909056023b2d55af79f5f534ae9d1c47875e5dbbea3605c8276f->enter($__internal_df94f3c36162909056023b2d55af79f5f534ae9d1c47875e5dbbea3605c8276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_df94f3c36162909056023b2d55af79f5f534ae9d1c47875e5dbbea3605c8276f->leave($__internal_df94f3c36162909056023b2d55af79f5f534ae9d1c47875e5dbbea3605c8276f_prof);

        
        $__internal_e4556faa886ea33e7221123c8a146d82fc70ee2c5d33362bac804b2e6c94bc27->leave($__internal_e4556faa886ea33e7221123c8a146d82fc70ee2c5d33362bac804b2e6c94bc27_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1140938defa68753b23412afa4cb6d071d637fef1100d0bd673add627a01c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1140938defa68753b23412afa4cb6d071d637fef1100d0bd673add627a01c4a->enter($__internal_a1140938defa68753b23412afa4cb6d071d637fef1100d0bd673add627a01c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f8dd354c3397957673f8f1c880e0d1aa6606d1df19ef4fe57bd9bda0ad81391e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8dd354c3397957673f8f1c880e0d1aa6606d1df19ef4fe57bd9bda0ad81391e->enter($__internal_f8dd354c3397957673f8f1c880e0d1aa6606d1df19ef4fe57bd9bda0ad81391e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f8dd354c3397957673f8f1c880e0d1aa6606d1df19ef4fe57bd9bda0ad81391e->leave($__internal_f8dd354c3397957673f8f1c880e0d1aa6606d1df19ef4fe57bd9bda0ad81391e_prof);

        
        $__internal_a1140938defa68753b23412afa4cb6d071d637fef1100d0bd673add627a01c4a->leave($__internal_a1140938defa68753b23412afa4cb6d071d637fef1100d0bd673add627a01c4a_prof);

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
