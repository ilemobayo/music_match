<?php

/* user/profile.html.twig */
class __TwigTemplate_50a4a13ba3a2c1d00bda49b0be6c9c741f67caf4e344d539df721da3ea8285ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/profile.html.twig", 1);
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
        $__internal_18a6b471706568a64b66f2b41d5a11817f33c455daa63c5e32f8a99b7528cdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a6b471706568a64b66f2b41d5a11817f33c455daa63c5e32f8a99b7528cdb4->enter($__internal_18a6b471706568a64b66f2b41d5a11817f33c455daa63c5e32f8a99b7528cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_0e2c5c39b06b7c8bbbe76100607b8f634da78722ab0d0d2fa2cceadbd5a8343e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2c5c39b06b7c8bbbe76100607b8f634da78722ab0d0d2fa2cceadbd5a8343e->enter($__internal_0e2c5c39b06b7c8bbbe76100607b8f634da78722ab0d0d2fa2cceadbd5a8343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a6b471706568a64b66f2b41d5a11817f33c455daa63c5e32f8a99b7528cdb4->leave($__internal_18a6b471706568a64b66f2b41d5a11817f33c455daa63c5e32f8a99b7528cdb4_prof);

        
        $__internal_0e2c5c39b06b7c8bbbe76100607b8f634da78722ab0d0d2fa2cceadbd5a8343e->leave($__internal_0e2c5c39b06b7c8bbbe76100607b8f634da78722ab0d0d2fa2cceadbd5a8343e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca2f67b9c3abdf85edec99a62bbaddf8cf348f397ba7f6fd6a56f6fe9240e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca2f67b9c3abdf85edec99a62bbaddf8cf348f397ba7f6fd6a56f6fe9240e6d->enter($__internal_9ca2f67b9c3abdf85edec99a62bbaddf8cf348f397ba7f6fd6a56f6fe9240e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d21913ceadcb7fa788b79683f79bf9e8c7b78faaa19dce72866d2ef1c5284dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d21913ceadcb7fa788b79683f79bf9e8c7b78faaa19dce72866d2ef1c5284dd->enter($__internal_7d21913ceadcb7fa788b79683f79bf9e8c7b78faaa19dce72866d2ef1c5284dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_7d21913ceadcb7fa788b79683f79bf9e8c7b78faaa19dce72866d2ef1c5284dd->leave($__internal_7d21913ceadcb7fa788b79683f79bf9e8c7b78faaa19dce72866d2ef1c5284dd_prof);

        
        $__internal_9ca2f67b9c3abdf85edec99a62bbaddf8cf348f397ba7f6fd6a56f6fe9240e6d->leave($__internal_9ca2f67b9c3abdf85edec99a62bbaddf8cf348f397ba7f6fd6a56f6fe9240e6d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc8e1a51e6ae2db6413b631d35cb4173b6f96a353d41b8423af4c65ed3c83db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8e1a51e6ae2db6413b631d35cb4173b6f96a353d41b8423af4c65ed3c83db6->enter($__internal_dc8e1a51e6ae2db6413b631d35cb4173b6f96a353d41b8423af4c65ed3c83db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_062b41fa2954c2a127eb2f106627a249b4cecac38bbb471ffe9ec1df63417b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062b41fa2954c2a127eb2f106627a249b4cecac38bbb471ffe9ec1df63417b00->enter($__internal_062b41fa2954c2a127eb2f106627a249b4cecac38bbb471ffe9ec1df63417b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        
    <div>
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/vinyl-1437600_1920.jpg"), "html", null, true);
        echo "\" class=\"profile_page_photo\" alt=\"vynils\">
    </div>
        
    <div class=\"container container-top\">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class = 'glyphicon glyphicon-user' style = 'color: green'></span> Profil</h1>
        </div><br>
        <div class=\"row\">
            <ul class=\"col-sm-6\">
                <li class=\"list-group-item active\">Vos informations</li>
                <li class=\"list-group-item\">Pseudo : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Email : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Date d'enregistrement : ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "registerDate", array()), "d/m/Y"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Vos styles musicaux : ";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_join_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "tags", array()), ", ")), "html", null, true);
        echo "</li>
            </ul>
            <div class=\"col-sm-5 offset-1\">
                <img src=\"";
        // line 24
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array())) {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 27
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 28
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\">
            </div>
            ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "request", array()), "get", array(0 => "username"), "method"))) {
            // line 31
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
            echo "\">Modifier votre profil</a>
            ";
        }
        // line 33
        echo "        </div>

    </div><!-- /.container -->
";
        
        $__internal_062b41fa2954c2a127eb2f106627a249b4cecac38bbb471ffe9ec1df63417b00->leave($__internal_062b41fa2954c2a127eb2f106627a249b4cecac38bbb471ffe9ec1df63417b00_prof);

        
        $__internal_dc8e1a51e6ae2db6413b631d35cb4173b6f96a353d41b8423af4c65ed3c83db6->leave($__internal_dc8e1a51e6ae2db6413b631d35cb4173b6f96a353d41b8423af4c65ed3c83db6_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  124 => 31,  122 => 30,  118 => 28,  112 => 27,  105 => 25,  103 => 24,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'profile' %}

{% block content %}
        
    <div>
        <img src=\"{{ asset('img/vinyl-1437600_1920.jpg') }}\" class=\"profile_page_photo\" alt=\"vynils\">
    </div>
        
    <div class=\"container container-top\">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class = 'glyphicon glyphicon-user' style = 'color: green'></span> Profil</h1>
        </div><br>
        <div class=\"row\">
            <ul class=\"col-sm-6\">
                <li class=\"list-group-item active\">Vos informations</li>
                <li class=\"list-group-item\">Pseudo : {{ profile.username }}</li>
                <li class=\"list-group-item\">Email : {{ profile.email }}</li>
                <li class=\"list-group-item\">Date d'enregistrement : {{ profile.registerDate|date(\"d/m/Y\")}}</li>
                <li class=\"list-group-item\">Vos styles musicaux : {{ profile.tags|join(', ')|upper }}</li>
            </ul>
            <div class=\"col-sm-5 offset-1\">
                <img src=\"{% if profile.picture %}
                            {{ asset('photo/') }}{{ profile.picture }}
                            {% else %}
                            {{ get_gravatar(profile.email, 80, 'retro') }}
                            {% endif %}\" alt=\"Photo de profil\" style=\"height: 250px;\">
            </div>
            {% if user_manager.user.username == global.request.get('username') %}
                <a href=\"{{ path('edit', {username: profile.username}) }}\">Modifier votre profil</a>
            {% endif %}
        </div>

    </div><!-- /.container -->
{% endblock %}", "user/profile.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\profile.html.twig");
    }
}
