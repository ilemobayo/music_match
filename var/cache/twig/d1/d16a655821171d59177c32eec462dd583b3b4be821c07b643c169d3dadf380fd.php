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
        $__internal_ba0efe7a87f39637ebdc13c47ef6a0546961297b667163172343edc8bda4c61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0efe7a87f39637ebdc13c47ef6a0546961297b667163172343edc8bda4c61f->enter($__internal_ba0efe7a87f39637ebdc13c47ef6a0546961297b667163172343edc8bda4c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_0775a4ff5df3920d8045fdbae48b8cf6945ca4353b41eefdcc438420a3e21c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0775a4ff5df3920d8045fdbae48b8cf6945ca4353b41eefdcc438420a3e21c23->enter($__internal_0775a4ff5df3920d8045fdbae48b8cf6945ca4353b41eefdcc438420a3e21c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0efe7a87f39637ebdc13c47ef6a0546961297b667163172343edc8bda4c61f->leave($__internal_ba0efe7a87f39637ebdc13c47ef6a0546961297b667163172343edc8bda4c61f_prof);

        
        $__internal_0775a4ff5df3920d8045fdbae48b8cf6945ca4353b41eefdcc438420a3e21c23->leave($__internal_0775a4ff5df3920d8045fdbae48b8cf6945ca4353b41eefdcc438420a3e21c23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0d5f6f017490fa1bc38c3cf9d0b76e622258130e8b4f78d4c9b3c7bb75850f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0d5f6f017490fa1bc38c3cf9d0b76e622258130e8b4f78d4c9b3c7bb75850f->enter($__internal_7c0d5f6f017490fa1bc38c3cf9d0b76e622258130e8b4f78d4c9b3c7bb75850f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f498feca9f7761e23c09be7b9df727617934ac182430cd005eda1b014bfbc03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f498feca9f7761e23c09be7b9df727617934ac182430cd005eda1b014bfbc03c->enter($__internal_f498feca9f7761e23c09be7b9df727617934ac182430cd005eda1b014bfbc03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_f498feca9f7761e23c09be7b9df727617934ac182430cd005eda1b014bfbc03c->leave($__internal_f498feca9f7761e23c09be7b9df727617934ac182430cd005eda1b014bfbc03c_prof);

        
        $__internal_7c0d5f6f017490fa1bc38c3cf9d0b76e622258130e8b4f78d4c9b3c7bb75850f->leave($__internal_7c0d5f6f017490fa1bc38c3cf9d0b76e622258130e8b4f78d4c9b3c7bb75850f_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9ca02ee047a1366fc360f86b9e8496bf13b74c5cc8e76d0d2b67243e06aaacc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca02ee047a1366fc360f86b9e8496bf13b74c5cc8e76d0d2b67243e06aaacc2->enter($__internal_9ca02ee047a1366fc360f86b9e8496bf13b74c5cc8e76d0d2b67243e06aaacc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f9f87833536045c7da76ed3d4811c4f2189e5a477f5023426d56e4b429a77abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f87833536045c7da76ed3d4811c4f2189e5a477f5023426d56e4b429a77abf->enter($__internal_f9f87833536045c7da76ed3d4811c4f2189e5a477f5023426d56e4b429a77abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_f9f87833536045c7da76ed3d4811c4f2189e5a477f5023426d56e4b429a77abf->leave($__internal_f9f87833536045c7da76ed3d4811c4f2189e5a477f5023426d56e4b429a77abf_prof);

        
        $__internal_9ca02ee047a1366fc360f86b9e8496bf13b74c5cc8e76d0d2b67243e06aaacc2->leave($__internal_9ca02ee047a1366fc360f86b9e8496bf13b74c5cc8e76d0d2b67243e06aaacc2_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_647b910bd849d6e786bed079ab36fc71f193ec456e38347bc0e8bfe6f87a5203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647b910bd849d6e786bed079ab36fc71f193ec456e38347bc0e8bfe6f87a5203->enter($__internal_647b910bd849d6e786bed079ab36fc71f193ec456e38347bc0e8bfe6f87a5203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1feae62d64049209031d4daeda86be1b4e81e60a4cf8f94eb8d492def52e5931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feae62d64049209031d4daeda86be1b4e81e60a4cf8f94eb8d492def52e5931->enter($__internal_1feae62d64049209031d4daeda86be1b4e81e60a4cf8f94eb8d492def52e5931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1feae62d64049209031d4daeda86be1b4e81e60a4cf8f94eb8d492def52e5931->leave($__internal_1feae62d64049209031d4daeda86be1b4e81e60a4cf8f94eb8d492def52e5931_prof);

        
        $__internal_647b910bd849d6e786bed079ab36fc71f193ec456e38347bc0e8bfe6f87a5203->leave($__internal_647b910bd849d6e786bed079ab36fc71f193ec456e38347bc0e8bfe6f87a5203_prof);

    }

    // line 85
    public function block_script($context, array $blocks = array())
    {
        $__internal_ce5db4b366bd94d2c62aa2422ac25e3787148eb8790907611553542197eafa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5db4b366bd94d2c62aa2422ac25e3787148eb8790907611553542197eafa63->enter($__internal_ce5db4b366bd94d2c62aa2422ac25e3787148eb8790907611553542197eafa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_9b21664f5ec5915e452fce7203a1d098fd38e16b3d7244117f4433930c3f5591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b21664f5ec5915e452fce7203a1d098fd38e16b3d7244117f4433930c3f5591->enter($__internal_9b21664f5ec5915e452fce7203a1d098fd38e16b3d7244117f4433930c3f5591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_9b21664f5ec5915e452fce7203a1d098fd38e16b3d7244117f4433930c3f5591->leave($__internal_9b21664f5ec5915e452fce7203a1d098fd38e16b3d7244117f4433930c3f5591_prof);

        
        $__internal_ce5db4b366bd94d2c62aa2422ac25e3787148eb8790907611553542197eafa63->leave($__internal_ce5db4b366bd94d2c62aa2422ac25e3787148eb8790907611553542197eafa63_prof);

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
