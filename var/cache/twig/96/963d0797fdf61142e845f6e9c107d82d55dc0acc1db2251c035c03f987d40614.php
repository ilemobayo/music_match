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
        $__internal_9b5ce6f187dee2df74824c4bef57ea2aee35db4eb912aaaf9995b90f82f9389a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5ce6f187dee2df74824c4bef57ea2aee35db4eb912aaaf9995b90f82f9389a->enter($__internal_9b5ce6f187dee2df74824c4bef57ea2aee35db4eb912aaaf9995b90f82f9389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_e8bfb04da2603c25f97a86f427893e9897b3ecfcf5a278f4f377ac73bdfb9a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bfb04da2603c25f97a86f427893e9897b3ecfcf5a278f4f377ac73bdfb9a67->enter($__internal_e8bfb04da2603c25f97a86f427893e9897b3ecfcf5a278f4f377ac73bdfb9a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5ce6f187dee2df74824c4bef57ea2aee35db4eb912aaaf9995b90f82f9389a->leave($__internal_9b5ce6f187dee2df74824c4bef57ea2aee35db4eb912aaaf9995b90f82f9389a_prof);

        
        $__internal_e8bfb04da2603c25f97a86f427893e9897b3ecfcf5a278f4f377ac73bdfb9a67->leave($__internal_e8bfb04da2603c25f97a86f427893e9897b3ecfcf5a278f4f377ac73bdfb9a67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d3aa2d1308def88915b87e962f89d76c4e183a5ccc4ea6d039b1098c4bb875e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3aa2d1308def88915b87e962f89d76c4e183a5ccc4ea6d039b1098c4bb875e->enter($__internal_3d3aa2d1308def88915b87e962f89d76c4e183a5ccc4ea6d039b1098c4bb875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0304072f3d9af2ee7564592dced5096ac5e0f6429b50ba76cfb8e88abb7615d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0304072f3d9af2ee7564592dced5096ac5e0f6429b50ba76cfb8e88abb7615d3->enter($__internal_0304072f3d9af2ee7564592dced5096ac5e0f6429b50ba76cfb8e88abb7615d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_0304072f3d9af2ee7564592dced5096ac5e0f6429b50ba76cfb8e88abb7615d3->leave($__internal_0304072f3d9af2ee7564592dced5096ac5e0f6429b50ba76cfb8e88abb7615d3_prof);

        
        $__internal_3d3aa2d1308def88915b87e962f89d76c4e183a5ccc4ea6d039b1098c4bb875e->leave($__internal_3d3aa2d1308def88915b87e962f89d76c4e183a5ccc4ea6d039b1098c4bb875e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_26aaa06a333dadf523470d5266fe8c032af7a9f2b4ee4adc7b1036353142aec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aaa06a333dadf523470d5266fe8c032af7a9f2b4ee4adc7b1036353142aec9->enter($__internal_26aaa06a333dadf523470d5266fe8c032af7a9f2b4ee4adc7b1036353142aec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c53af8cd5affc51b3c6c49e632823729ec6aa1ebef183cc9de2a828e5ccd682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c53af8cd5affc51b3c6c49e632823729ec6aa1ebef183cc9de2a828e5ccd682->enter($__internal_6c53af8cd5affc51b3c6c49e632823729ec6aa1ebef183cc9de2a828e5ccd682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <li class=\"list-group-item\">Vos styles musicaux : <span class=\"badge badge-primary\">";
        // line 21
        echo twig_join_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "tags", array()), "</span>&nbsp<span class=\"badge badge-primary\">");
        echo "</span></li>
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
        echo "            
            ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "request", array()), "get", array(0 => "username"), "method"))) {
            // line 38
            echo "            <div class=\"tab-content following\">
                <div class=\"tab-pane active\" id=\"recommendations\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 offset-md-0\">
                            <ul class=\"list-unstyled follows\">
                                ";
            // line 43
            if ((isset($context["tracks"]) ? $context["tracks"] : $this->getContext($context, "tracks"))) {
                // line 44
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracks"]) ? $context["tracks"] : $this->getContext($context, "tracks")), "tracks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                    // line 45
                    echo "                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-1 col-xs-1 offset-md-0 image text-center\" >
                                                    <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                    echo "\">
                                                        <img src=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                    echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                    </a>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 mt-3 text-center playbutton\">
                                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                    <audio >
                                                        <source src=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                    echo "\" type=\"audio/mp3\">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class=\"col-md-6 col-xs-4 track\">
                                                    <h6><a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                    echo "</a><br/>
                                                        <small>
                                                            Artiste : 
                                                            ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["track"], "artists", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                        // line 64
                        echo "                                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                        echo "\" class=\"link-music\">
                                                                    ";
                        // line 65
                        if ($this->getAttribute($context["loop"], "last", array())) {
                            // line 66
                            echo "                                                                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                            echo "
                                                                    ";
                        } else {
                            // line 68
                            echo "                                                                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                            echo ",
                                                                    ";
                        }
                        // line 70
                        echo "                                                                </a>
                                                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                                        </small><br/>
                                                        <small>
                                                            Album : <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "album", array()), "name", array()), "html", null, true);
                    echo "</a>
                                                        </small><br/>
                                                    </h6>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 offset-1 lien_spotify\">
                                                    <div class=\"py-3\" >
                                                        <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                    echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 library\">
                                                    <div class=\"mt-3\">
                                                        <button class=\"addToLibrary\" data-id=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <hr />
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                                ";
            }
            // line 93
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 99
        echo "        </div>

    </div><!-- /.container -->
";
        
        $__internal_6c53af8cd5affc51b3c6c49e632823729ec6aa1ebef183cc9de2a828e5ccd682->leave($__internal_6c53af8cd5affc51b3c6c49e632823729ec6aa1ebef183cc9de2a828e5ccd682_prof);

        
        $__internal_26aaa06a333dadf523470d5266fe8c032af7a9f2b4ee4adc7b1036353142aec9->leave($__internal_26aaa06a333dadf523470d5266fe8c032af7a9f2b4ee4adc7b1036353142aec9_prof);

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
        return array (  288 => 99,  280 => 93,  277 => 92,  264 => 85,  256 => 80,  245 => 74,  241 => 72,  226 => 70,  220 => 68,  214 => 66,  212 => 65,  207 => 64,  190 => 63,  182 => 60,  174 => 55,  165 => 49,  161 => 48,  156 => 45,  151 => 44,  149 => 43,  142 => 38,  140 => 37,  137 => 36,  131 => 33,  127 => 32,  124 => 31,  122 => 30,  118 => 28,  112 => 27,  105 => 25,  103 => 24,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <li class=\"list-group-item\">Vos styles musicaux : <span class=\"badge badge-primary\">{{ profile.tags|join('</span>&nbsp<span class=\"badge badge-primary\">')|raw }}</span></li>
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
            
            {% if user_manager.user.username != global.request.get('username') %}
            <div class=\"tab-content following\">
                <div class=\"tab-pane active\" id=\"recommendations\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 offset-md-0\">
                            <ul class=\"list-unstyled follows\">
                                {% if tracks %}
                                    {% for track in tracks.tracks %}
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-1 col-xs-1 offset-md-0 image text-center\" >
                                                    <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                        <img src=\"{{ track.album.images[1].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                    </a>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 mt-3 text-center playbutton\">
                                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                    <audio >
                                                        <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class=\"col-md-6 col-xs-4 track\">
                                                    <h6><a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.name }}</a><br/>
                                                        <small>
                                                            Artiste : 
                                                            {% for artist in track.artists %}
                                                                <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                                                    {% if loop.last %}
                                                                        {{ artist.name }}
                                                                    {% else %}
                                                                        {{ artist.name }},
                                                                    {% endif %}
                                                                </a>
                                                            {% endfor %}
                                                        </small><br/>
                                                        <small>
                                                            Album : <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.album.name }}</a>
                                                        </small><br/>
                                                    </h6>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 offset-1 lien_spotify\">
                                                    <div class=\"py-3\" >
                                                        <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 library\">
                                                    <div class=\"mt-3\">
                                                        <button class=\"addToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <hr />
                                    {% endfor %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

    </div><!-- /.container -->
{% endblock %}", "user/profile.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\profile.html.twig");
    }
}
