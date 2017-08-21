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
        $__internal_84566f4a62fc034d2371ecb417cd9e6d6a9e4a547b74bab3fa6b3ae410aa83cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84566f4a62fc034d2371ecb417cd9e6d6a9e4a547b74bab3fa6b3ae410aa83cd->enter($__internal_84566f4a62fc034d2371ecb417cd9e6d6a9e4a547b74bab3fa6b3ae410aa83cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_d7bf312b63346e57d2b02ea71d6ddaeec76417eb1af93a0537c182ce0c2fe449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bf312b63346e57d2b02ea71d6ddaeec76417eb1af93a0537c182ce0c2fe449->enter($__internal_d7bf312b63346e57d2b02ea71d6ddaeec76417eb1af93a0537c182ce0c2fe449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84566f4a62fc034d2371ecb417cd9e6d6a9e4a547b74bab3fa6b3ae410aa83cd->leave($__internal_84566f4a62fc034d2371ecb417cd9e6d6a9e4a547b74bab3fa6b3ae410aa83cd_prof);

        
        $__internal_d7bf312b63346e57d2b02ea71d6ddaeec76417eb1af93a0537c182ce0c2fe449->leave($__internal_d7bf312b63346e57d2b02ea71d6ddaeec76417eb1af93a0537c182ce0c2fe449_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d50cfa3394b7fea69addae2649f794329bd63d005f4755d1b901f5e4c9dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d50cfa3394b7fea69addae2649f794329bd63d005f4755d1b901f5e4c9dd52->enter($__internal_22d50cfa3394b7fea69addae2649f794329bd63d005f4755d1b901f5e4c9dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fc96d6e9b304716d29457f629367fe0b3ae776c6d9060f289fb41a98b0e23fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc96d6e9b304716d29457f629367fe0b3ae776c6d9060f289fb41a98b0e23fc->enter($__internal_9fc96d6e9b304716d29457f629367fe0b3ae776c6d9060f289fb41a98b0e23fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_9fc96d6e9b304716d29457f629367fe0b3ae776c6d9060f289fb41a98b0e23fc->leave($__internal_9fc96d6e9b304716d29457f629367fe0b3ae776c6d9060f289fb41a98b0e23fc_prof);

        
        $__internal_22d50cfa3394b7fea69addae2649f794329bd63d005f4755d1b901f5e4c9dd52->leave($__internal_22d50cfa3394b7fea69addae2649f794329bd63d005f4755d1b901f5e4c9dd52_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3784e80d42c9009fbc8992c211bc903390576d6c909270b13718fcb2f48d2235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3784e80d42c9009fbc8992c211bc903390576d6c909270b13718fcb2f48d2235->enter($__internal_3784e80d42c9009fbc8992c211bc903390576d6c909270b13718fcb2f48d2235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_780044b37f1f132da9e564ee66238751c6b626d384caea0febfa334d6bef517a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780044b37f1f132da9e564ee66238751c6b626d384caea0febfa334d6bef517a->enter($__internal_780044b37f1f132da9e564ee66238751c6b626d384caea0febfa334d6bef517a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_780044b37f1f132da9e564ee66238751c6b626d384caea0febfa334d6bef517a->leave($__internal_780044b37f1f132da9e564ee66238751c6b626d384caea0febfa334d6bef517a_prof);

        
        $__internal_3784e80d42c9009fbc8992c211bc903390576d6c909270b13718fcb2f48d2235->leave($__internal_3784e80d42c9009fbc8992c211bc903390576d6c909270b13718fcb2f48d2235_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8fe7a9d98e291a6baf8558d6485082f2895bec6a2b54623e1db52249092a4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fe7a9d98e291a6baf8558d6485082f2895bec6a2b54623e1db52249092a4d2->enter($__internal_f8fe7a9d98e291a6baf8558d6485082f2895bec6a2b54623e1db52249092a4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3238eb9b23dbdde9906d579db146ba31ee7c525b10456472cfed4e1c4d7b9d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3238eb9b23dbdde9906d579db146ba31ee7c525b10456472cfed4e1c4d7b9d1f->enter($__internal_3238eb9b23dbdde9906d579db146ba31ee7c525b10456472cfed4e1c4d7b9d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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


                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
        echo "\">Annuler et retourner vers votre profil</a>

                </form>
            </div>
                
            <div class='col-sm-4 offset-2'>
                <div class=\"form-group\">
                    <img src=\"";
        // line 70
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array())) {
            // line 71
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 73
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 74
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
";
        
        $__internal_3238eb9b23dbdde9906d579db146ba31ee7c525b10456472cfed4e1c4d7b9d1f->leave($__internal_3238eb9b23dbdde9906d579db146ba31ee7c525b10456472cfed4e1c4d7b9d1f_prof);

        
        $__internal_f8fe7a9d98e291a6baf8558d6485082f2895bec6a2b54623e1db52249092a4d2->leave($__internal_f8fe7a9d98e291a6baf8558d6485082f2895bec6a2b54623e1db52249092a4d2_prof);

    }

    // line 83
    public function block_script($context, array $blocks = array())
    {
        $__internal_5a831bc768eccb84b978399770ba16103b614684377fb1d4bc00fdc7d5119f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a831bc768eccb84b978399770ba16103b614684377fb1d4bc00fdc7d5119f93->enter($__internal_5a831bc768eccb84b978399770ba16103b614684377fb1d4bc00fdc7d5119f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_8f9d850b02be306ccda90acb2f8c6a152a915aa7c3f88a57f147e5a0c3787336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9d850b02be306ccda90acb2f8c6a152a915aa7c3f88a57f147e5a0c3787336->enter($__internal_8f9d850b02be306ccda90acb2f8c6a152a915aa7c3f88a57f147e5a0c3787336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 84
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
        
        $__internal_8f9d850b02be306ccda90acb2f8c6a152a915aa7c3f88a57f147e5a0c3787336->leave($__internal_8f9d850b02be306ccda90acb2f8c6a152a915aa7c3f88a57f147e5a0c3787336_prof);

        
        $__internal_5a831bc768eccb84b978399770ba16103b614684377fb1d4bc00fdc7d5119f93->leave($__internal_5a831bc768eccb84b978399770ba16103b614684377fb1d4bc00fdc7d5119f93_prof);

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
        return array (  227 => 84,  218 => 83,  201 => 74,  195 => 73,  188 => 71,  186 => 70,  176 => 63,  165 => 54,  156 => 52,  152 => 50,  150 => 49,  145 => 48,  141 => 47,  138 => 46,  125 => 35,  112 => 25,  97 => 13,  93 => 11,  84 => 10,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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


                <a href=\"{{ path('display', {username: profile.username}) }}\">Annuler et retourner vers votre profil</a>

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
