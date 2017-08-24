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
        $__internal_b62d908e8a9e7baef5d0ce9d647e1c82a7f29243f85540dbdead056ebb56783f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62d908e8a9e7baef5d0ce9d647e1c82a7f29243f85540dbdead056ebb56783f->enter($__internal_b62d908e8a9e7baef5d0ce9d647e1c82a7f29243f85540dbdead056ebb56783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_5e1c65efedcb6fa8eb7a8df33f4650606e5c620ea708293499265bd40060c92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1c65efedcb6fa8eb7a8df33f4650606e5c620ea708293499265bd40060c92d->enter($__internal_5e1c65efedcb6fa8eb7a8df33f4650606e5c620ea708293499265bd40060c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62d908e8a9e7baef5d0ce9d647e1c82a7f29243f85540dbdead056ebb56783f->leave($__internal_b62d908e8a9e7baef5d0ce9d647e1c82a7f29243f85540dbdead056ebb56783f_prof);

        
        $__internal_5e1c65efedcb6fa8eb7a8df33f4650606e5c620ea708293499265bd40060c92d->leave($__internal_5e1c65efedcb6fa8eb7a8df33f4650606e5c620ea708293499265bd40060c92d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce2b8c7f8b5ff08fd3015db8ccd134775575edd55e57e72e8c0f923489190d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2b8c7f8b5ff08fd3015db8ccd134775575edd55e57e72e8c0f923489190d9d->enter($__internal_ce2b8c7f8b5ff08fd3015db8ccd134775575edd55e57e72e8c0f923489190d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a915fcb645f051bbb14684ccfb7b6ce92f62132545467d22aac3f461192280a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a915fcb645f051bbb14684ccfb7b6ce92f62132545467d22aac3f461192280a7->enter($__internal_a915fcb645f051bbb14684ccfb7b6ce92f62132545467d22aac3f461192280a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "profile";
        
        $__internal_a915fcb645f051bbb14684ccfb7b6ce92f62132545467d22aac3f461192280a7->leave($__internal_a915fcb645f051bbb14684ccfb7b6ce92f62132545467d22aac3f461192280a7_prof);

        
        $__internal_ce2b8c7f8b5ff08fd3015db8ccd134775575edd55e57e72e8c0f923489190d9d->leave($__internal_ce2b8c7f8b5ff08fd3015db8ccd134775575edd55e57e72e8c0f923489190d9d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e332b2d8047c480fdee9c4f3519df785672d291ba66fae3bdcf047c21a115c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e332b2d8047c480fdee9c4f3519df785672d291ba66fae3bdcf047c21a115c6->enter($__internal_8e332b2d8047c480fdee9c4f3519df785672d291ba66fae3bdcf047c21a115c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_71e7f804464212e7d86cd2366a4ef989f6df8c752d72dc7b0a5e04f7a177a43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e7f804464212e7d86cd2366a4ef989f6df8c752d72dc7b0a5e04f7a177a43b->enter($__internal_71e7f804464212e7d86cd2366a4ef989f6df8c752d72dc7b0a5e04f7a177a43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        
    <div>
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/vinyl-1437600_1920.jpg"), "html", null, true);
        echo "\" class=\"profile_page_photo img-repsonsive\" alt=\"vynils\">
    </div>
        
    <div class=\"container container-top\">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class ='fat applepie'>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()), "html", null, true);
        echo "</span> </h1>
        </div><br>
        <div class=\"row infos\">
            <ul class=\"col-sm-6\">
                <li class=\"list-group profile\"><span class=\"fat\">Vos informations</span></li><br>   
                <li class=\"list-group profile\"><span class=\"fat\">Email : </span><span class=\"profile\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), "html", null, true);
        echo "</span></li><br>
                <li class=\"list-group profile\"><span class=\"fat\">Date d'enregistrement : </span><span class=\"profile\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "registerDate", array()), "d/m/Y"), "html", null, true);
        echo "</span></li><br>
                <li class=\"list-group profile\"><span class=\"fat\">Vos styles musicaux : </span> <span class=\"badge badge-primary\">";
        // line 20
        echo twig_join_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "tags", array()), "</span>&nbsp<span class=\"badge badge-primary\">");
        echo "</span></li>
            </ul>
            <div class=\"col-sm-5 offset-1\">
                <img src=\"";
        // line 23
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array())) {
            // line 24
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 27
        echo "\" alt=\"Photo de profil\" style=\"height: 250px; width: 100%;\">
            </div>
            ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "request", array()), "get", array(0 => "username"), "method"))) {
            // line 30
            echo "                <ul>
                    <li><button class=\"btn btn-success fat\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("username" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "username", array()))), "html", null, true);
            echo "\">Modifier votre profil</a></button></li>
                    <li><button class=\"btn btn-danger fat\"><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete");
            echo "\">Désinscription</a></button></li>
                </ul>
            ";
        }
        // line 35
        echo "            
            ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "request", array()), "get", array(0 => "username"), "method"))) {
            // line 37
            echo "            <div class=\"tab-content following\">
                <div class=\"tab-pane active\" id=\"recommendations\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 offset-md-0\">
                            <ul class=\"list-unstyled follows\">
                                ";
            // line 42
            if ((isset($context["tracks"]) ? $context["tracks"] : $this->getContext($context, "tracks"))) {
                // line 43
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracks"]) ? $context["tracks"] : $this->getContext($context, "tracks")), "tracks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                    // line 44
                    echo "                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-1 col-xs-1 offset-md-0 image text-center\" >
                                                    <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                    echo "\">
                                                        <img src=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                    echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                    </a>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 mt-3 text-center playbutton\">
                                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                    <audio >
                                                        <source src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                    echo "\" type=\"audio/mp3\">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class=\"col-md-6 col-xs-4 track\">
                                                    <h6><a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                    echo "</a><br/>
                                                        <small>
                                                            Artiste : 
                                                            ";
                    // line 62
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
                        // line 63
                        echo "                                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                        echo "\" class=\"link-music\">
                                                                    ";
                        // line 64
                        if ($this->getAttribute($context["loop"], "last", array())) {
                            // line 65
                            echo "                                                                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                            echo "
                                                                    ";
                        } else {
                            // line 67
                            echo "                                                                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                            echo ",
                                                                    ";
                        }
                        // line 69
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
                    // line 71
                    echo "                                                        </small><br/>
                                                        <small>
                                                            Album : <a href=\"";
                    // line 73
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
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                    echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 library\">
                                                    <div class=\"mt-3\">
                                                        <button class=\"addToLibrary\" data-id=\"";
                    // line 84
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
                // line 91
                echo "                                ";
            }
            // line 92
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 98
        echo "        </div>

    </div><!-- /.container -->
";
        
        $__internal_71e7f804464212e7d86cd2366a4ef989f6df8c752d72dc7b0a5e04f7a177a43b->leave($__internal_71e7f804464212e7d86cd2366a4ef989f6df8c752d72dc7b0a5e04f7a177a43b_prof);

        
        $__internal_8e332b2d8047c480fdee9c4f3519df785672d291ba66fae3bdcf047c21a115c6->leave($__internal_8e332b2d8047c480fdee9c4f3519df785672d291ba66fae3bdcf047c21a115c6_prof);

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
        return array (  287 => 98,  279 => 92,  276 => 91,  263 => 84,  255 => 79,  244 => 73,  240 => 71,  225 => 69,  219 => 67,  213 => 65,  211 => 64,  206 => 63,  189 => 62,  181 => 59,  173 => 54,  164 => 48,  160 => 47,  155 => 44,  150 => 43,  148 => 42,  141 => 37,  139 => 36,  136 => 35,  130 => 32,  126 => 31,  123 => 30,  121 => 29,  117 => 27,  111 => 26,  104 => 24,  102 => 23,  96 => 20,  92 => 19,  88 => 18,  80 => 13,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <img src=\"{{ asset('img/vinyl-1437600_1920.jpg') }}\" class=\"profile_page_photo img-repsonsive\" alt=\"vynils\">
    </div>
        
    <div class=\"container container-top\">
        <div class=\"starter-template\">
            <h1 id=\"profil\"><span class ='fat applepie'>{{ profile.username }}</span> </h1>
        </div><br>
        <div class=\"row infos\">
            <ul class=\"col-sm-6\">
                <li class=\"list-group profile\"><span class=\"fat\">Vos informations</span></li><br>   
                <li class=\"list-group profile\"><span class=\"fat\">Email : </span><span class=\"profile\">{{ profile.email }}</span></li><br>
                <li class=\"list-group profile\"><span class=\"fat\">Date d'enregistrement : </span><span class=\"profile\"> {{ profile.registerDate|date(\"d/m/Y\")}}</span></li><br>
                <li class=\"list-group profile\"><span class=\"fat\">Vos styles musicaux : </span> <span class=\"badge badge-primary\">{{ profile.tags|join('</span>&nbsp<span class=\"badge badge-primary\">')|raw }}</span></li>
            </ul>
            <div class=\"col-sm-5 offset-1\">
                <img src=\"{% if profile.picture %}
                            {{ asset('photo/') }}{{ profile.picture }}
                            {% else %}
                            {{ get_gravatar(profile.email, 80, 'retro') }}
                            {% endif %}\" alt=\"Photo de profil\" style=\"height: 250px; width: 100%;\">
            </div>
            {% if user_manager.user.username == global.request.get('username') %}
                <ul>
                    <li><button class=\"btn btn-success fat\"><a href=\"{{ path('edit', {username: profile.username}) }}\">Modifier votre profil</a></button></li>
                    <li><button class=\"btn btn-danger fat\"><a href=\"{{ path('user_delete') }}\">Désinscription</a></button></li>
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
