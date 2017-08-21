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
        $__internal_ae9e7572646df76eadc0c8a626717ef15047a88e9806ed3b27c1b57ba723975c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9e7572646df76eadc0c8a626717ef15047a88e9806ed3b27c1b57ba723975c->enter($__internal_ae9e7572646df76eadc0c8a626717ef15047a88e9806ed3b27c1b57ba723975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_27c9398c3eb26ed64929c8820eb7363b280e894ca0862062d489b84158c65dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c9398c3eb26ed64929c8820eb7363b280e894ca0862062d489b84158c65dd4->enter($__internal_27c9398c3eb26ed64929c8820eb7363b280e894ca0862062d489b84158c65dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9e7572646df76eadc0c8a626717ef15047a88e9806ed3b27c1b57ba723975c->leave($__internal_ae9e7572646df76eadc0c8a626717ef15047a88e9806ed3b27c1b57ba723975c_prof);

        
        $__internal_27c9398c3eb26ed64929c8820eb7363b280e894ca0862062d489b84158c65dd4->leave($__internal_27c9398c3eb26ed64929c8820eb7363b280e894ca0862062d489b84158c65dd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4286254b3f0f8dc9a518078229f84f3ff8977e340c48487b81f845628a8a5b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4286254b3f0f8dc9a518078229f84f3ff8977e340c48487b81f845628a8a5b2f->enter($__internal_4286254b3f0f8dc9a518078229f84f3ff8977e340c48487b81f845628a8a5b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8daace7811f1efd69a2b55ae30bb0790e993b307fe60c7faae830dc5e5e00962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8daace7811f1efd69a2b55ae30bb0790e993b307fe60c7faae830dc5e5e00962->enter($__internal_8daace7811f1efd69a2b55ae30bb0790e993b307fe60c7faae830dc5e5e00962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_8daace7811f1efd69a2b55ae30bb0790e993b307fe60c7faae830dc5e5e00962->leave($__internal_8daace7811f1efd69a2b55ae30bb0790e993b307fe60c7faae830dc5e5e00962_prof);

        
        $__internal_4286254b3f0f8dc9a518078229f84f3ff8977e340c48487b81f845628a8a5b2f->leave($__internal_4286254b3f0f8dc9a518078229f84f3ff8977e340c48487b81f845628a8a5b2f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a4283eb73734e4d2bcb1d12ebedd6f73bb3ee5178cc1207322951e734e69744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4283eb73734e4d2bcb1d12ebedd6f73bb3ee5178cc1207322951e734e69744->enter($__internal_9a4283eb73734e4d2bcb1d12ebedd6f73bb3ee5178cc1207322951e734e69744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_98885bb80c67c5e4890ecd4054485a6962e64ec8463cc5fa45b7128f3c00f333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98885bb80c67c5e4890ecd4054485a6962e64ec8463cc5fa45b7128f3c00f333->enter($__internal_98885bb80c67c5e4890ecd4054485a6962e64ec8463cc5fa45b7128f3c00f333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                <ul>
                    <li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
            echo "\">Modifier votre profil</a></li>
                    <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete");
            echo "\">Désinscription</a></li>
                </ul>
            ";
        }
        // line 36
        echo "        </div>

    </div><!-- /.container -->
";
        
        $__internal_98885bb80c67c5e4890ecd4054485a6962e64ec8463cc5fa45b7128f3c00f333->leave($__internal_98885bb80c67c5e4890ecd4054485a6962e64ec8463cc5fa45b7128f3c00f333_prof);

        
        $__internal_9a4283eb73734e4d2bcb1d12ebedd6f73bb3ee5178cc1207322951e734e69744->leave($__internal_9a4283eb73734e4d2bcb1d12ebedd6f73bb3ee5178cc1207322951e734e69744_prof);

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
        return array (  137 => 36,  131 => 33,  127 => 32,  124 => 31,  122 => 30,  118 => 28,  112 => 27,  105 => 25,  103 => 24,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <ul>
                    <li><a href=\"{{ path('edit', {username: profile.username}) }}\">Modifier votre profil</a></li>
                    <li><a href=\"{{ path('user_delete') }}\">Désinscription</a></li>
                </ul>
            {% endif %}
        </div>

    </div><!-- /.container -->
{% endblock %}", "user/profile.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\profile.html.twig");
    }
}
