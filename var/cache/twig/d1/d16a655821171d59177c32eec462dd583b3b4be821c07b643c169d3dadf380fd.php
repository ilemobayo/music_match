<?php

/* user/edit.html.twig */
class __TwigTemplate_69106aa599147405754611f90e3221bd4f1a10b27f223b506a7d41c31797a7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ef1e75a9979e54988c0e679f855f7be894d308b8f33de3501c690f5ed50937b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef1e75a9979e54988c0e679f855f7be894d308b8f33de3501c690f5ed50937b->enter($__internal_0ef1e75a9979e54988c0e679f855f7be894d308b8f33de3501c690f5ed50937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_33612c74468f5d11d773fcfccceb62de42f2137950b852cef46eb444263786ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33612c74468f5d11d773fcfccceb62de42f2137950b852cef46eb444263786ec->enter($__internal_33612c74468f5d11d773fcfccceb62de42f2137950b852cef46eb444263786ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef1e75a9979e54988c0e679f855f7be894d308b8f33de3501c690f5ed50937b->leave($__internal_0ef1e75a9979e54988c0e679f855f7be894d308b8f33de3501c690f5ed50937b_prof);

        
        $__internal_33612c74468f5d11d773fcfccceb62de42f2137950b852cef46eb444263786ec->leave($__internal_33612c74468f5d11d773fcfccceb62de42f2137950b852cef46eb444263786ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56b9fca738e757940a3dcf0bc23e2516f6f2df89c275b06f11ff539c4361262a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b9fca738e757940a3dcf0bc23e2516f6f2df89c275b06f11ff539c4361262a->enter($__internal_56b9fca738e757940a3dcf0bc23e2516f6f2df89c275b06f11ff539c4361262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79b37e4497f8e3fc67ed46d86ca967efac8af71999abcc362544459a586b53e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b37e4497f8e3fc67ed46d86ca967efac8af71999abcc362544459a586b53e7->enter($__internal_79b37e4497f8e3fc67ed46d86ca967efac8af71999abcc362544459a586b53e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_79b37e4497f8e3fc67ed46d86ca967efac8af71999abcc362544459a586b53e7->leave($__internal_79b37e4497f8e3fc67ed46d86ca967efac8af71999abcc362544459a586b53e7_prof);

        
        $__internal_56b9fca738e757940a3dcf0bc23e2516f6f2df89c275b06f11ff539c4361262a->leave($__internal_56b9fca738e757940a3dcf0bc23e2516f6f2df89c275b06f11ff539c4361262a_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_67008b59ea53c70c07c604a2f12955fb4d5a66b7c1266c725dd54d63ded13ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67008b59ea53c70c07c604a2f12955fb4d5a66b7c1266c725dd54d63ded13ef6->enter($__internal_67008b59ea53c70c07c604a2f12955fb4d5a66b7c1266c725dd54d63ded13ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f5ee46d84cc71f6777520b2a986dc361334cb16e0bc5cebf348a3cc02d39b495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ee46d84cc71f6777520b2a986dc361334cb16e0bc5cebf348a3cc02d39b495->enter($__internal_f5ee46d84cc71f6777520b2a986dc361334cb16e0bc5cebf348a3cc02d39b495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_f5ee46d84cc71f6777520b2a986dc361334cb16e0bc5cebf348a3cc02d39b495->leave($__internal_f5ee46d84cc71f6777520b2a986dc361334cb16e0bc5cebf348a3cc02d39b495_prof);

        
        $__internal_67008b59ea53c70c07c604a2f12955fb4d5a66b7c1266c725dd54d63ded13ef6->leave($__internal_67008b59ea53c70c07c604a2f12955fb4d5a66b7c1266c725dd54d63ded13ef6_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5ae2a01d781b292262078cc0ee90cb7929aa2f13b4d28beccfb4080547c90ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ae2a01d781b292262078cc0ee90cb7929aa2f13b4d28beccfb4080547c90ee->enter($__internal_e5ae2a01d781b292262078cc0ee90cb7929aa2f13b4d28beccfb4080547c90ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a8bc4cbee65420d634b50f458c808ccd6be9575bfbd1050a6242bdc0cfcb7f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bc4cbee65420d634b50f458c808ccd6be9575bfbd1050a6242bdc0cfcb7f24->enter($__internal_a8bc4cbee65420d634b50f458c808ccd6be9575bfbd1050a6242bdc0cfcb7f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    
    <div>
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/vinyl-1437600_1920.jpg"), "html", null, true);
        echo "\" class=\"profile_page_photo\" alt=\"vynils\">
    </div>
    
    <div class=\"container container-top \">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class = 'glyphicon glyphicon-user' style = 'color: green'></span> Modifier votre profil</h1>
        </div><br>
        <div class='row'>
            <div class='col-sm-5'>
                <form method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label>Pseudo</label>
                        <input class=\"form-control\" type =\"text\" name=\"pseudo\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label>Mot de passe</label>
                        <input class=\"form-control\" type =\"text\" name=\"mdp\" value=\"\">
                    </div>

                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type =\"text\" name=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label>Changer de photo</label>
                        <input class=\"form-control\" type=\"file\" name=\"picture\" value=\"\">
                    </div>

                    <div class=\"form-group\">
                        <label>Les styles que vous recherchez</label>
";
        // line 46
        echo "                        <select name=\"tags[]\" class=\"form-control\" id=\"tagsForm\" multiple=\"multiple\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 48
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" 
                                ";
            // line 49
            if (twig_in_filter($context["tag"], $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "tags", array()))) {
                // line 50
                echo "                                    selected
                                ";
            }
            // line 52
            echo "                                >";
            echo twig_escape_filter($this->env, twig_replace_filter($context["tag"], array("-" => " ")), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </select>
                    </div>


                    <div class=\"form-group\">
                        <input type =\"submit\" class=\"btn btn-primary\" value=\"Valider vos modifications\">
                    </div>

                <ul>
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
        echo "\">Annuler et retourner vers votre profil</a></li>
                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete");
        echo "\">Désinscription</a></li>
                </ul>

                </form>
            </div>
                
            <div class='col-sm-4 offset-2'>
                <div class=\"form-group\">
                    <img src=\"";
        // line 72
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array())) {
            // line 73
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 75
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 76
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
";
        
        $__internal_a8bc4cbee65420d634b50f458c808ccd6be9575bfbd1050a6242bdc0cfcb7f24->leave($__internal_a8bc4cbee65420d634b50f458c808ccd6be9575bfbd1050a6242bdc0cfcb7f24_prof);

        
        $__internal_e5ae2a01d781b292262078cc0ee90cb7929aa2f13b4d28beccfb4080547c90ee->leave($__internal_e5ae2a01d781b292262078cc0ee90cb7929aa2f13b4d28beccfb4080547c90ee_prof);

    }

    // line 85
    public function block_script($context, array $blocks = array())
    {
        $__internal_5518f477317581ea367466838c25796dfa3b102337ab5083db881d3492c60da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5518f477317581ea367466838c25796dfa3b102337ab5083db881d3492c60da8->enter($__internal_5518f477317581ea367466838c25796dfa3b102337ab5083db881d3492c60da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_878cdb783f2f28ba4b8bec248310ae2bb7e78ad18c6096b3c9f603d86e192c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878cdb783f2f28ba4b8bec248310ae2bb7e78ad18c6096b3c9f603d86e192c45->enter($__internal_878cdb783f2f28ba4b8bec248310ae2bb7e78ad18c6096b3c9f603d86e192c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 86
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$('#tagsForm').select2();
        }); 
    </script>
";
        
        $__internal_878cdb783f2f28ba4b8bec248310ae2bb7e78ad18c6096b3c9f603d86e192c45->leave($__internal_878cdb783f2f28ba4b8bec248310ae2bb7e78ad18c6096b3c9f603d86e192c45_prof);

        
        $__internal_5518f477317581ea367466838c25796dfa3b102337ab5083db881d3492c60da8->leave($__internal_5518f477317581ea367466838c25796dfa3b102337ab5083db881d3492c60da8_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 86,  223 => 85,  206 => 76,  200 => 75,  193 => 73,  191 => 72,  180 => 64,  176 => 63,  165 => 54,  156 => 52,  152 => 50,  150 => 49,  145 => 48,  141 => 47,  138 => 46,  125 => 35,  112 => 25,  97 => 13,  93 => 11,  84 => 10,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block stylesheet %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}
    
{% block content %}
    
    <div>
        <img src=\"{{ asset('img/vinyl-1437600_1920.jpg') }}\" class=\"profile_page_photo\" alt=\"vynils\">
    </div>
    
    <div class=\"container container-top \">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class = 'glyphicon glyphicon-user' style = 'color: green'></span> Modifier votre profil</h1>
        </div><br>
        <div class='row'>
            <div class='col-sm-5'>
                <form method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label>Pseudo</label>
                        <input class=\"form-control\" type =\"text\" name=\"pseudo\" value=\"{{profile.username}}\">
                    </div>

                    <div class=\"form-group\">
                        <label>Mot de passe</label>
                        <input class=\"form-control\" type =\"text\" name=\"mdp\" value=\"\">
                    </div>

                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type =\"text\" name=\"email\" value=\"{{profile.email}}\">
                    </div>

                    <div class=\"form-group\">
                        <label>Changer de photo</label>
                        <input class=\"form-control\" type=\"file\" name=\"picture\" value=\"\">
                    </div>

                    <div class=\"form-group\">
                        <label>Les styles que vous recherchez</label>
{#                        <input class=\"form-control\" id=\"tagsForm\" type=\"text\" name=\"tags\" value=\"{{ profile.tags|join(', ') }}\">#}
                        <select name=\"tags[]\" class=\"form-control\" id=\"tagsForm\" multiple=\"multiple\">
                            {% for tag in tags.genres %}
                                <option value=\"{{tag}}\" 
                                {% if tag in profile.tags %}
                                    selected
                                {% endif %}
                                >{{tag|replace({'-' : ' '})}}</option>
                            {% endfor %}
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <input type =\"submit\" class=\"btn btn-primary\" value=\"Valider vos modifications\">
                    </div>

                <ul>
                    <li><a href=\"{{ path('display', {username: profile.username}) }}\">Annuler et retourner vers votre profil</a></li>
                    <li><a href=\"{{ path('user_delete') }}\">Désinscription</a></li>
                </ul>

                </form>
            </div>
                
            <div class='col-sm-4 offset-2'>
                <div class=\"form-group\">
                    <img src=\"{% if profile.picture %}
                            {{ asset('photo/') }}{{ profile.picture }}
                            {% else %}
                            {{ get_gravatar(profile.email, 80, 'retro') }}
                            {% endif %}\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$('#tagsForm').select2();
        }); 
    </script>
{% endblock %}", "user/edit.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\edit.html.twig");
    }
}
