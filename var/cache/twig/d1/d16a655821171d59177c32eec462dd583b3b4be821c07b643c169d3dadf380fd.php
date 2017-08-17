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
        $__internal_2ff1533ea6a22ec4b07879c015a2481cd85fe05e5c601a339dd9378611c8a0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff1533ea6a22ec4b07879c015a2481cd85fe05e5c601a339dd9378611c8a0b4->enter($__internal_2ff1533ea6a22ec4b07879c015a2481cd85fe05e5c601a339dd9378611c8a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_efec598563ca3571dc8b847a3766e8144a14a60f706af8fa876dbea91a2c0c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efec598563ca3571dc8b847a3766e8144a14a60f706af8fa876dbea91a2c0c3f->enter($__internal_efec598563ca3571dc8b847a3766e8144a14a60f706af8fa876dbea91a2c0c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff1533ea6a22ec4b07879c015a2481cd85fe05e5c601a339dd9378611c8a0b4->leave($__internal_2ff1533ea6a22ec4b07879c015a2481cd85fe05e5c601a339dd9378611c8a0b4_prof);

        
        $__internal_efec598563ca3571dc8b847a3766e8144a14a60f706af8fa876dbea91a2c0c3f->leave($__internal_efec598563ca3571dc8b847a3766e8144a14a60f706af8fa876dbea91a2c0c3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_154f3e3ea4bd12204f14f53ad53e757df1e30374831eeed430cf467676cfc135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154f3e3ea4bd12204f14f53ad53e757df1e30374831eeed430cf467676cfc135->enter($__internal_154f3e3ea4bd12204f14f53ad53e757df1e30374831eeed430cf467676cfc135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33df760a3c94ede92d82a38b276e2eb27ffe4faa128959b97b80276ce4ae8e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33df760a3c94ede92d82a38b276e2eb27ffe4faa128959b97b80276ce4ae8e31->enter($__internal_33df760a3c94ede92d82a38b276e2eb27ffe4faa128959b97b80276ce4ae8e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_33df760a3c94ede92d82a38b276e2eb27ffe4faa128959b97b80276ce4ae8e31->leave($__internal_33df760a3c94ede92d82a38b276e2eb27ffe4faa128959b97b80276ce4ae8e31_prof);

        
        $__internal_154f3e3ea4bd12204f14f53ad53e757df1e30374831eeed430cf467676cfc135->leave($__internal_154f3e3ea4bd12204f14f53ad53e757df1e30374831eeed430cf467676cfc135_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_972e8746eaf646e91e48b4916d2270085015e73d75bcd436a6cf71b34e13db0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972e8746eaf646e91e48b4916d2270085015e73d75bcd436a6cf71b34e13db0c->enter($__internal_972e8746eaf646e91e48b4916d2270085015e73d75bcd436a6cf71b34e13db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9f7869712f359be0c294cc1dc7f5b1350c7e68f73548021d336670baa8426530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7869712f359be0c294cc1dc7f5b1350c7e68f73548021d336670baa8426530->enter($__internal_9f7869712f359be0c294cc1dc7f5b1350c7e68f73548021d336670baa8426530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_9f7869712f359be0c294cc1dc7f5b1350c7e68f73548021d336670baa8426530->leave($__internal_9f7869712f359be0c294cc1dc7f5b1350c7e68f73548021d336670baa8426530_prof);

        
        $__internal_972e8746eaf646e91e48b4916d2270085015e73d75bcd436a6cf71b34e13db0c->leave($__internal_972e8746eaf646e91e48b4916d2270085015e73d75bcd436a6cf71b34e13db0c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_11dc19359a16b1d17645266ba5f42cc909bf06d6bb996bebc492577ca264a2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11dc19359a16b1d17645266ba5f42cc909bf06d6bb996bebc492577ca264a2a1->enter($__internal_11dc19359a16b1d17645266ba5f42cc909bf06d6bb996bebc492577ca264a2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_03a9e0e903c4e5fb779e2dc4aab31213ca554d7504b2a911e8892c1acabe1b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a9e0e903c4e5fb779e2dc4aab31213ca554d7504b2a911e8892c1acabe1b7e->enter($__internal_03a9e0e903c4e5fb779e2dc4aab31213ca554d7504b2a911e8892c1acabe1b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\" alt=\"Profile Picture\" style=\"height: 250px;\"><br><br>
                </div>
            </div>
        </div>
    </div>
    
    
";
        
        $__internal_03a9e0e903c4e5fb779e2dc4aab31213ca554d7504b2a911e8892c1acabe1b7e->leave($__internal_03a9e0e903c4e5fb779e2dc4aab31213ca554d7504b2a911e8892c1acabe1b7e_prof);

        
        $__internal_11dc19359a16b1d17645266ba5f42cc909bf06d6bb996bebc492577ca264a2a1->leave($__internal_11dc19359a16b1d17645266ba5f42cc909bf06d6bb996bebc492577ca264a2a1_prof);

    }

    // line 81
    public function block_script($context, array $blocks = array())
    {
        $__internal_9c5ba1b63c277b3c91fc4db26713810982fadafa86c8bf646caede998c3541a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5ba1b63c277b3c91fc4db26713810982fadafa86c8bf646caede998c3541a2->enter($__internal_9c5ba1b63c277b3c91fc4db26713810982fadafa86c8bf646caede998c3541a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_0e2d518099e51dc7d064dfec8a0bef1c25680ad3e6184691ac3c057c9eac2602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2d518099e51dc7d064dfec8a0bef1c25680ad3e6184691ac3c057c9eac2602->enter($__internal_0e2d518099e51dc7d064dfec8a0bef1c25680ad3e6184691ac3c057c9eac2602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_0e2d518099e51dc7d064dfec8a0bef1c25680ad3e6184691ac3c057c9eac2602->leave($__internal_0e2d518099e51dc7d064dfec8a0bef1c25680ad3e6184691ac3c057c9eac2602_prof);

        
        $__internal_9c5ba1b63c277b3c91fc4db26713810982fadafa86c8bf646caede998c3541a2->leave($__internal_9c5ba1b63c277b3c91fc4db26713810982fadafa86c8bf646caede998c3541a2_prof);

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
                    <img src=\"{{ asset('photo/') }}{{ profile.picture }}\" alt=\"Profile Picture\" style=\"height: 250px;\"><br><br>
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
