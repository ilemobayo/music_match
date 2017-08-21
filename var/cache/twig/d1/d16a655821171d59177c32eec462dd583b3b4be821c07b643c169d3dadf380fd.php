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
        $__internal_0e8606254871bc9ffa335a8105fa5144014c58130de6a73df72a664a4babbeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8606254871bc9ffa335a8105fa5144014c58130de6a73df72a664a4babbeb0->enter($__internal_0e8606254871bc9ffa335a8105fa5144014c58130de6a73df72a664a4babbeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_560e98b823cfc2cfd91b44d7d183f369744f2435f0c2d8840d659eed08825011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560e98b823cfc2cfd91b44d7d183f369744f2435f0c2d8840d659eed08825011->enter($__internal_560e98b823cfc2cfd91b44d7d183f369744f2435f0c2d8840d659eed08825011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8606254871bc9ffa335a8105fa5144014c58130de6a73df72a664a4babbeb0->leave($__internal_0e8606254871bc9ffa335a8105fa5144014c58130de6a73df72a664a4babbeb0_prof);

        
        $__internal_560e98b823cfc2cfd91b44d7d183f369744f2435f0c2d8840d659eed08825011->leave($__internal_560e98b823cfc2cfd91b44d7d183f369744f2435f0c2d8840d659eed08825011_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c0848394a96bc234a78b434d19774a2bcf0b15c08157ef29da2c1abf37e773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c0848394a96bc234a78b434d19774a2bcf0b15c08157ef29da2c1abf37e773->enter($__internal_80c0848394a96bc234a78b434d19774a2bcf0b15c08157ef29da2c1abf37e773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94ef77bd6e1206857b9c6a0d230adad22608046dbf8ea66637d46edd4c10d000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ef77bd6e1206857b9c6a0d230adad22608046dbf8ea66637d46edd4c10d000->enter($__internal_94ef77bd6e1206857b9c6a0d230adad22608046dbf8ea66637d46edd4c10d000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_94ef77bd6e1206857b9c6a0d230adad22608046dbf8ea66637d46edd4c10d000->leave($__internal_94ef77bd6e1206857b9c6a0d230adad22608046dbf8ea66637d46edd4c10d000_prof);

        
        $__internal_80c0848394a96bc234a78b434d19774a2bcf0b15c08157ef29da2c1abf37e773->leave($__internal_80c0848394a96bc234a78b434d19774a2bcf0b15c08157ef29da2c1abf37e773_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_64c96d40afc7774c5cc819878f7e6e37cf0a994977d67541315e7debf5e34bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c96d40afc7774c5cc819878f7e6e37cf0a994977d67541315e7debf5e34bd0->enter($__internal_64c96d40afc7774c5cc819878f7e6e37cf0a994977d67541315e7debf5e34bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8bbf0f0ee3a4b974d5f2d14e46330e6c389118d74e27eaeda8ad459b4531d60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbf0f0ee3a4b974d5f2d14e46330e6c389118d74e27eaeda8ad459b4531d60d->enter($__internal_8bbf0f0ee3a4b974d5f2d14e46330e6c389118d74e27eaeda8ad459b4531d60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_8bbf0f0ee3a4b974d5f2d14e46330e6c389118d74e27eaeda8ad459b4531d60d->leave($__internal_8bbf0f0ee3a4b974d5f2d14e46330e6c389118d74e27eaeda8ad459b4531d60d_prof);

        
        $__internal_64c96d40afc7774c5cc819878f7e6e37cf0a994977d67541315e7debf5e34bd0->leave($__internal_64c96d40afc7774c5cc819878f7e6e37cf0a994977d67541315e7debf5e34bd0_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_40057661a1ee6ce3de9cd3c2d2b503d1a7457aa3a668950db381c3c848d1baa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40057661a1ee6ce3de9cd3c2d2b503d1a7457aa3a668950db381c3c848d1baa0->enter($__internal_40057661a1ee6ce3de9cd3c2d2b503d1a7457aa3a668950db381c3c848d1baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0a0203d1971b43d619ad406116e860cdcae709c85c1a4da227a1c7db3bfa3913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0203d1971b43d619ad406116e860cdcae709c85c1a4da227a1c7db3bfa3913->enter($__internal_0a0203d1971b43d619ad406116e860cdcae709c85c1a4da227a1c7db3bfa3913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete");
        echo "\">Désinscription</a>

                </form>
            </div>
                
            <div class='col-sm-4 offset-2'>
                <div class=\"form-group\">
                    <img src=\"";
        // line 71
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array())) {
            // line 72
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 74
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 75
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
";
        
        $__internal_0a0203d1971b43d619ad406116e860cdcae709c85c1a4da227a1c7db3bfa3913->leave($__internal_0a0203d1971b43d619ad406116e860cdcae709c85c1a4da227a1c7db3bfa3913_prof);

        
        $__internal_40057661a1ee6ce3de9cd3c2d2b503d1a7457aa3a668950db381c3c848d1baa0->leave($__internal_40057661a1ee6ce3de9cd3c2d2b503d1a7457aa3a668950db381c3c848d1baa0_prof);

    }

    // line 84
    public function block_script($context, array $blocks = array())
    {
        $__internal_a8621e39905ccdbe970718fb9ff748640d0f6cf7f71078b9164019802b4571db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8621e39905ccdbe970718fb9ff748640d0f6cf7f71078b9164019802b4571db->enter($__internal_a8621e39905ccdbe970718fb9ff748640d0f6cf7f71078b9164019802b4571db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_0bc003c838dfd11f0b1ef909872d03676d689855924f12a3a41a0dee3da78e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc003c838dfd11f0b1ef909872d03676d689855924f12a3a41a0dee3da78e62->enter($__internal_0bc003c838dfd11f0b1ef909872d03676d689855924f12a3a41a0dee3da78e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 85
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
        
        $__internal_0bc003c838dfd11f0b1ef909872d03676d689855924f12a3a41a0dee3da78e62->leave($__internal_0bc003c838dfd11f0b1ef909872d03676d689855924f12a3a41a0dee3da78e62_prof);

        
        $__internal_a8621e39905ccdbe970718fb9ff748640d0f6cf7f71078b9164019802b4571db->leave($__internal_a8621e39905ccdbe970718fb9ff748640d0f6cf7f71078b9164019802b4571db_prof);

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
        return array (  231 => 85,  222 => 84,  205 => 75,  199 => 74,  192 => 72,  190 => 71,  180 => 64,  176 => 63,  165 => 54,  156 => 52,  152 => 50,  150 => 49,  145 => 48,  141 => 47,  138 => 46,  125 => 35,  112 => 25,  97 => 13,  93 => 11,  84 => 10,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
                <a href=\"{{ path('user_delete') }}\">Désinscription</a>

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
