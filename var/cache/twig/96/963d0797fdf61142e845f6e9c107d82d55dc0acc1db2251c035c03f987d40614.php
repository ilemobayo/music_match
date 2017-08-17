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
        $__internal_7784bac4cb53a80efcab6629cba06303b897824d2878b80f6d237ff064f36f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7784bac4cb53a80efcab6629cba06303b897824d2878b80f6d237ff064f36f38->enter($__internal_7784bac4cb53a80efcab6629cba06303b897824d2878b80f6d237ff064f36f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_8edfa2f2a25a0c10f995d3ad8b69b6adbb5099a8f3059ec72591c441585464dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edfa2f2a25a0c10f995d3ad8b69b6adbb5099a8f3059ec72591c441585464dd->enter($__internal_8edfa2f2a25a0c10f995d3ad8b69b6adbb5099a8f3059ec72591c441585464dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7784bac4cb53a80efcab6629cba06303b897824d2878b80f6d237ff064f36f38->leave($__internal_7784bac4cb53a80efcab6629cba06303b897824d2878b80f6d237ff064f36f38_prof);

        
        $__internal_8edfa2f2a25a0c10f995d3ad8b69b6adbb5099a8f3059ec72591c441585464dd->leave($__internal_8edfa2f2a25a0c10f995d3ad8b69b6adbb5099a8f3059ec72591c441585464dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad2812b8033262485ef5b83a37f0da397869389a19624f88c8898610c9da87c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2812b8033262485ef5b83a37f0da397869389a19624f88c8898610c9da87c5->enter($__internal_ad2812b8033262485ef5b83a37f0da397869389a19624f88c8898610c9da87c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6cdbf24334dbd170ee782c2e9bfc309cb4041d6b666dbf647f62f8a52dec7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cdbf24334dbd170ee782c2e9bfc309cb4041d6b666dbf647f62f8a52dec7f0->enter($__internal_b6cdbf24334dbd170ee782c2e9bfc309cb4041d6b666dbf647f62f8a52dec7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_b6cdbf24334dbd170ee782c2e9bfc309cb4041d6b666dbf647f62f8a52dec7f0->leave($__internal_b6cdbf24334dbd170ee782c2e9bfc309cb4041d6b666dbf647f62f8a52dec7f0_prof);

        
        $__internal_ad2812b8033262485ef5b83a37f0da397869389a19624f88c8898610c9da87c5->leave($__internal_ad2812b8033262485ef5b83a37f0da397869389a19624f88c8898610c9da87c5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f51c0b80d2d81d09e7c6ebe445b3e2e37c7f7f45bca0bef484f057f87315214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f51c0b80d2d81d09e7c6ebe445b3e2e37c7f7f45bca0bef484f057f87315214->enter($__internal_7f51c0b80d2d81d09e7c6ebe445b3e2e37c7f7f45bca0bef484f057f87315214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e337b68159a15ab226be9349c7035c31ee2a9ab0a2f1e05b16a50959b9e8f999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e337b68159a15ab226be9349c7035c31ee2a9ab0a2f1e05b16a50959b9e8f999->enter($__internal_e337b68159a15ab226be9349c7035c31ee2a9ab0a2f1e05b16a50959b9e8f999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\">
            </div>
            ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "request", array()), "get", array(0 => "username"), "method"))) {
            // line 27
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
            echo "\">Modifier votre profil</a>
            ";
        }
        // line 29
        echo "        </div>

    </div><!-- /.container -->
";
        
        $__internal_e337b68159a15ab226be9349c7035c31ee2a9ab0a2f1e05b16a50959b9e8f999->leave($__internal_e337b68159a15ab226be9349c7035c31ee2a9ab0a2f1e05b16a50959b9e8f999_prof);

        
        $__internal_7f51c0b80d2d81d09e7c6ebe445b3e2e37c7f7f45bca0bef484f057f87315214->leave($__internal_7f51c0b80d2d81d09e7c6ebe445b3e2e37c7f7f45bca0bef484f057f87315214_prof);

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
        return array (  117 => 29,  111 => 27,  109 => 26,  103 => 24,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <img src=\"{{ asset('photo/') }}{{ profile.picture }}\" alt=\"Photo de profil\" style=\"height: 250px;\">
            </div>
            {% if user_manager.user.username == global.request.get('username') %}
                <a href=\"{{ path('edit', {username: profile.username}) }}\">Modifier votre profil</a>
            {% endif %}
        </div>

    </div><!-- /.container -->
{% endblock %}
", "user/profile.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\profile.html.twig");
    }
}
