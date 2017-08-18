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
        $__internal_ef429a8daf3a3b57f921a44173f0b19d6d7dbd85698676fb48c344e49942c05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef429a8daf3a3b57f921a44173f0b19d6d7dbd85698676fb48c344e49942c05d->enter($__internal_ef429a8daf3a3b57f921a44173f0b19d6d7dbd85698676fb48c344e49942c05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_11fbeb5053b270c1ca55048656a1f4ffa83af53f67482112366bc159e3aed39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fbeb5053b270c1ca55048656a1f4ffa83af53f67482112366bc159e3aed39c->enter($__internal_11fbeb5053b270c1ca55048656a1f4ffa83af53f67482112366bc159e3aed39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef429a8daf3a3b57f921a44173f0b19d6d7dbd85698676fb48c344e49942c05d->leave($__internal_ef429a8daf3a3b57f921a44173f0b19d6d7dbd85698676fb48c344e49942c05d_prof);

        
        $__internal_11fbeb5053b270c1ca55048656a1f4ffa83af53f67482112366bc159e3aed39c->leave($__internal_11fbeb5053b270c1ca55048656a1f4ffa83af53f67482112366bc159e3aed39c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c1efef84f307ea13046b813291b43440cd8d2c21dc2b6693b63e3ea9f176a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1efef84f307ea13046b813291b43440cd8d2c21dc2b6693b63e3ea9f176a23->enter($__internal_4c1efef84f307ea13046b813291b43440cd8d2c21dc2b6693b63e3ea9f176a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_820287ca47e9f9cacc5137df42014e4ce3fd9d087b892efab5f92112d0ac3ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820287ca47e9f9cacc5137df42014e4ce3fd9d087b892efab5f92112d0ac3ec8->enter($__internal_820287ca47e9f9cacc5137df42014e4ce3fd9d087b892efab5f92112d0ac3ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_820287ca47e9f9cacc5137df42014e4ce3fd9d087b892efab5f92112d0ac3ec8->leave($__internal_820287ca47e9f9cacc5137df42014e4ce3fd9d087b892efab5f92112d0ac3ec8_prof);

        
        $__internal_4c1efef84f307ea13046b813291b43440cd8d2c21dc2b6693b63e3ea9f176a23->leave($__internal_4c1efef84f307ea13046b813291b43440cd8d2c21dc2b6693b63e3ea9f176a23_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a01251c8ddc05c2f7c030d82ad52b2b5193709ddcde0f3fb49beb308967785e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01251c8ddc05c2f7c030d82ad52b2b5193709ddcde0f3fb49beb308967785e7->enter($__internal_a01251c8ddc05c2f7c030d82ad52b2b5193709ddcde0f3fb49beb308967785e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ddf4122aaaa8ceaaaf26acf7074840a537db7266771670722e0ef2e8e624428f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf4122aaaa8ceaaaf26acf7074840a537db7266771670722e0ef2e8e624428f->enter($__internal_ddf4122aaaa8ceaaaf26acf7074840a537db7266771670722e0ef2e8e624428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_ddf4122aaaa8ceaaaf26acf7074840a537db7266771670722e0ef2e8e624428f->leave($__internal_ddf4122aaaa8ceaaaf26acf7074840a537db7266771670722e0ef2e8e624428f_prof);

        
        $__internal_a01251c8ddc05c2f7c030d82ad52b2b5193709ddcde0f3fb49beb308967785e7->leave($__internal_a01251c8ddc05c2f7c030d82ad52b2b5193709ddcde0f3fb49beb308967785e7_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5db685893be4b0feacb60cff4189f6b0cf20ab292d10f0d7e8694359c9fb3b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db685893be4b0feacb60cff4189f6b0cf20ab292d10f0d7e8694359c9fb3b29->enter($__internal_5db685893be4b0feacb60cff4189f6b0cf20ab292d10f0d7e8694359c9fb3b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_685ffe595bd33c8dd190bf62cc26d02d2aba989434026370748786b1174747b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685ffe595bd33c8dd190bf62cc26d02d2aba989434026370748786b1174747b3->enter($__internal_685ffe595bd33c8dd190bf62cc26d02d2aba989434026370748786b1174747b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                                >
                                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_replace_filter($context["tag"], array("-" => " ")), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </select>
                    </div>


                    <div class=\"form-group\">
                        <input type =\"submit\" class=\"btn btn-primary\" value=\"Valider vos modifications\">
                    </div>


                <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
        echo "\">Annuler et retourner vers votre profil</a>

                </form>
            </div>
                
            <div class='col-sm-4 offset-2'>
                <div class=\"form-group\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
        echo "\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
";
        
        $__internal_685ffe595bd33c8dd190bf62cc26d02d2aba989434026370748786b1174747b3->leave($__internal_685ffe595bd33c8dd190bf62cc26d02d2aba989434026370748786b1174747b3_prof);

        
        $__internal_5db685893be4b0feacb60cff4189f6b0cf20ab292d10f0d7e8694359c9fb3b29->leave($__internal_5db685893be4b0feacb60cff4189f6b0cf20ab292d10f0d7e8694359c9fb3b29_prof);

    }

    // line 81
    public function block_script($context, array $blocks = array())
    {
        $__internal_682e1dbbe2972dbc31d9d8f9128c527ba42851f52f6a633472f4bc8851808531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682e1dbbe2972dbc31d9d8f9128c527ba42851f52f6a633472f4bc8851808531->enter($__internal_682e1dbbe2972dbc31d9d8f9128c527ba42851f52f6a633472f4bc8851808531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_9efb6d580b0fd9fe3d081980abc064e8ce7280b942dd9e8bc2b69d88c441e8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efb6d580b0fd9fe3d081980abc064e8ce7280b942dd9e8bc2b69d88c441e8e8->enter($__internal_9efb6d580b0fd9fe3d081980abc064e8ce7280b942dd9e8bc2b69d88c441e8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 82
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
        
        $__internal_9efb6d580b0fd9fe3d081980abc064e8ce7280b942dd9e8bc2b69d88c441e8e8->leave($__internal_9efb6d580b0fd9fe3d081980abc064e8ce7280b942dd9e8bc2b69d88c441e8e8_prof);

        
        $__internal_682e1dbbe2972dbc31d9d8f9128c527ba42851f52f6a633472f4bc8851808531->leave($__internal_682e1dbbe2972dbc31d9d8f9128c527ba42851f52f6a633472f4bc8851808531_prof);

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
        return array (  217 => 82,  208 => 81,  189 => 72,  179 => 65,  168 => 56,  159 => 53,  156 => 52,  152 => 50,  150 => 49,  145 => 48,  141 => 47,  138 => 46,  125 => 35,  112 => 25,  97 => 13,  93 => 11,  84 => 10,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
                                >
                                    {{tag|replace({'-' : ' '})}}
                                </option>
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
                    <img src=\"{{ asset('photo/') }}{{ profile.picture }}\" alt=\"Photo de profil\" style=\"height: 250px;\"><br><br>
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
{% endblock %}
", "user/edit.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\edit.html.twig");
    }
}
