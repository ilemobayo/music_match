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
        $__internal_7e83f8c1fd2d8e6e2de21eebcddaa71248a27d582d464e6e0cc650070e2acebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e83f8c1fd2d8e6e2de21eebcddaa71248a27d582d464e6e0cc650070e2acebe->enter($__internal_7e83f8c1fd2d8e6e2de21eebcddaa71248a27d582d464e6e0cc650070e2acebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_f9e46531428ad0e39b09ebde5a4d78276b62d2cd462e677f4af5da4ba7b3bd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e46531428ad0e39b09ebde5a4d78276b62d2cd462e677f4af5da4ba7b3bd30->enter($__internal_f9e46531428ad0e39b09ebde5a4d78276b62d2cd462e677f4af5da4ba7b3bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e83f8c1fd2d8e6e2de21eebcddaa71248a27d582d464e6e0cc650070e2acebe->leave($__internal_7e83f8c1fd2d8e6e2de21eebcddaa71248a27d582d464e6e0cc650070e2acebe_prof);

        
        $__internal_f9e46531428ad0e39b09ebde5a4d78276b62d2cd462e677f4af5da4ba7b3bd30->leave($__internal_f9e46531428ad0e39b09ebde5a4d78276b62d2cd462e677f4af5da4ba7b3bd30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba4e215e7978796a71cc8aa491dac84a245881f5c0b3e94001f5e39f9e81874a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4e215e7978796a71cc8aa491dac84a245881f5c0b3e94001f5e39f9e81874a->enter($__internal_ba4e215e7978796a71cc8aa491dac84a245881f5c0b3e94001f5e39f9e81874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23aaedbc0ee061bed59d34a4aa9a3dbd8b37f66345db7984cdb8b5ea555746f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23aaedbc0ee061bed59d34a4aa9a3dbd8b37f66345db7984cdb8b5ea555746f6->enter($__internal_23aaedbc0ee061bed59d34a4aa9a3dbd8b37f66345db7984cdb8b5ea555746f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_23aaedbc0ee061bed59d34a4aa9a3dbd8b37f66345db7984cdb8b5ea555746f6->leave($__internal_23aaedbc0ee061bed59d34a4aa9a3dbd8b37f66345db7984cdb8b5ea555746f6_prof);

        
        $__internal_ba4e215e7978796a71cc8aa491dac84a245881f5c0b3e94001f5e39f9e81874a->leave($__internal_ba4e215e7978796a71cc8aa491dac84a245881f5c0b3e94001f5e39f9e81874a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_35d3fa8dbf2160a5f3097f0548dee78f0099ca118cd05727be38a502d697ca08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3fa8dbf2160a5f3097f0548dee78f0099ca118cd05727be38a502d697ca08->enter($__internal_35d3fa8dbf2160a5f3097f0548dee78f0099ca118cd05727be38a502d697ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87e5233699a1bba3de0967c8d96b3fae5c245f08f8f834526b4e94187e41a965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e5233699a1bba3de0967c8d96b3fae5c245f08f8f834526b4e94187e41a965->enter($__internal_87e5233699a1bba3de0967c8d96b3fae5c245f08f8f834526b4e94187e41a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_87e5233699a1bba3de0967c8d96b3fae5c245f08f8f834526b4e94187e41a965->leave($__internal_87e5233699a1bba3de0967c8d96b3fae5c245f08f8f834526b4e94187e41a965_prof);

        
        $__internal_35d3fa8dbf2160a5f3097f0548dee78f0099ca118cd05727be38a502d697ca08->leave($__internal_35d3fa8dbf2160a5f3097f0548dee78f0099ca118cd05727be38a502d697ca08_prof);

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
