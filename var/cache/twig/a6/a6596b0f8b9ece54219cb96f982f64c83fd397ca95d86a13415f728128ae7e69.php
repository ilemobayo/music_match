<?php

/* dashboard/library.html.twig */
class __TwigTemplate_87d34244843d3fb67e742237a91abbc386a8c67eee6e84b53627fa289ad81b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/library.html.twig", 1);
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
        $__internal_d7eca1e2ee57a29c4073b04c48f2d549f6f1935f9f0826ce5350baf74ebcc415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eca1e2ee57a29c4073b04c48f2d549f6f1935f9f0826ce5350baf74ebcc415->enter($__internal_d7eca1e2ee57a29c4073b04c48f2d549f6f1935f9f0826ce5350baf74ebcc415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $__internal_023788ca0afbb044226d99bd92b120a72c22324dbdb971a967d060ebbe34f16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023788ca0afbb044226d99bd92b120a72c22324dbdb971a967d060ebbe34f16a->enter($__internal_023788ca0afbb044226d99bd92b120a72c22324dbdb971a967d060ebbe34f16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7eca1e2ee57a29c4073b04c48f2d549f6f1935f9f0826ce5350baf74ebcc415->leave($__internal_d7eca1e2ee57a29c4073b04c48f2d549f6f1935f9f0826ce5350baf74ebcc415_prof);

        
        $__internal_023788ca0afbb044226d99bd92b120a72c22324dbdb971a967d060ebbe34f16a->leave($__internal_023788ca0afbb044226d99bd92b120a72c22324dbdb971a967d060ebbe34f16a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d6329a6a911b998e08ce296b8a79f9c37004aa710ed27837f572fc60c529b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6329a6a911b998e08ce296b8a79f9c37004aa710ed27837f572fc60c529b3f->enter($__internal_9d6329a6a911b998e08ce296b8a79f9c37004aa710ed27837f572fc60c529b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f82b27ef7bdf96d6c4e3744aac1314d1051108426b316ec2924a06940e5e0341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82b27ef7bdf96d6c4e3744aac1314d1051108426b316ec2924a06940e5e0341->enter($__internal_f82b27ef7bdf96d6c4e3744aac1314d1051108426b316ec2924a06940e5e0341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bibliotheque";
        
        $__internal_f82b27ef7bdf96d6c4e3744aac1314d1051108426b316ec2924a06940e5e0341->leave($__internal_f82b27ef7bdf96d6c4e3744aac1314d1051108426b316ec2924a06940e5e0341_prof);

        
        $__internal_9d6329a6a911b998e08ce296b8a79f9c37004aa710ed27837f572fc60c529b3f->leave($__internal_9d6329a6a911b998e08ce296b8a79f9c37004aa710ed27837f572fc60c529b3f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_64555fceab9037a67cd159a3a9a9bc691ef9d45ddba11205fa063d73ffd3d912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64555fceab9037a67cd159a3a9a9bc691ef9d45ddba11205fa063d73ffd3d912->enter($__internal_64555fceab9037a67cd159a3a9a9bc691ef9d45ddba11205fa063d73ffd3d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f2fc49674d95800d0fb8ecd2410f7c804bf9df860db9a182d3d1eb59b0a2bcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fc49674d95800d0fb8ecd2410f7c804bf9df860db9a182d3d1eb59b0a2bcf3->enter($__internal_f2fc49674d95800d0fb8ecd2410f7c804bf9df860db9a182d3d1eb59b0a2bcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/elvis-presley-1482026_1280.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"";
        // line 15
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array())) {
            // line 16
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 18
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 19
        echo "\" class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliothèque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 34
        if ((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser"))) {
            // line 35
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 36
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 image text-center\">
                                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 col-xs-2 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 54
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
                    // line 55
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 56
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 57
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 59
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 61
                    echo "                                                                    </a>
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
                // line 63
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "album", array()), "name", array()), "html", null, true);
                echo "</a>
                                                            </small><br/>
                                                        </h6>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
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
            // line 83
            echo "                                    ";
        } else {
            // line 84
            echo "                                        <li>
                                            <p><strong>Votre bibliothèque est vide</strong></p>
                                            <h3 class=\"text-muted\">Aucun morceau ajouté à votre bibliothèque pour le moment :(</h3>
                                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-round\">Pour en trouver, c'est par ici !</button></a>
                                        </li>
                                    ";
        }
        // line 90
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_f2fc49674d95800d0fb8ecd2410f7c804bf9df860db9a182d3d1eb59b0a2bcf3->leave($__internal_f2fc49674d95800d0fb8ecd2410f7c804bf9df860db9a182d3d1eb59b0a2bcf3_prof);

        
        $__internal_64555fceab9037a67cd159a3a9a9bc691ef9d45ddba11205fa063d73ffd3d912->leave($__internal_64555fceab9037a67cd159a3a9a9bc691ef9d45ddba11205fa063d73ffd3d912_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 90,  253 => 87,  248 => 84,  245 => 83,  232 => 76,  224 => 71,  213 => 65,  209 => 63,  194 => 61,  188 => 59,  182 => 57,  180 => 56,  175 => 55,  158 => 54,  150 => 51,  142 => 46,  133 => 40,  129 => 39,  124 => 36,  119 => 35,  117 => 34,  100 => 20,  97 => 19,  91 => 18,  84 => 16,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Bibliotheque' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('{{ asset(\"img/elvis-presley-1482026_1280.jpg\") }}'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"{% if user.picture %}
                            {{ asset('photo/') }}{{ user.picture }}
                            {% else %}
                            {{ get_gravatar(user.email, 80, 'retro') }}
                            {% endif %}\" class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">{{ user.username}}<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliothèque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if tracksUser %}
                                        {% for track in tracksUser.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 image text-center\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 col-xs-2 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
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
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                        {% endfor %}
                                    {% else %}
                                        <li>
                                            <p><strong>Votre bibliothèque est vide</strong></p>
                                            <h3 class=\"text-muted\">Aucun morceau ajouté à votre bibliothèque pour le moment :(</h3>
                                            <a href=\"{{ path('dashboardDisplay', { username : user_manager.user.username }) }}\"><button class=\"btn btn-success btn-round\">Pour en trouver, c'est par ici !</button></a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "dashboard/library.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\library.html.twig");
    }
}
