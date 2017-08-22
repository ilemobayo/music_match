<?php

/* album/artist.html.twig */
class __TwigTemplate_634ed68d4ac4f4e3a2cfdc6b65cd2c763f6c32a0711986f58cc395b580f98288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "album/artist.html.twig", 1);
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
        $__internal_ce0748491002ac6192ca488914ef6da8b4e0538411c487ced339a9f1f258dc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0748491002ac6192ca488914ef6da8b4e0538411c487ced339a9f1f258dc75->enter($__internal_ce0748491002ac6192ca488914ef6da8b4e0538411c487ced339a9f1f258dc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/artist.html.twig"));

        $__internal_564416925ea0d4e282b33ac8591d884e7e56ae482e902c0c40244f406988df0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564416925ea0d4e282b33ac8591d884e7e56ae482e902c0c40244f406988df0f->enter($__internal_564416925ea0d4e282b33ac8591d884e7e56ae482e902c0c40244f406988df0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/artist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0748491002ac6192ca488914ef6da8b4e0538411c487ced339a9f1f258dc75->leave($__internal_ce0748491002ac6192ca488914ef6da8b4e0538411c487ced339a9f1f258dc75_prof);

        
        $__internal_564416925ea0d4e282b33ac8591d884e7e56ae482e902c0c40244f406988df0f->leave($__internal_564416925ea0d4e282b33ac8591d884e7e56ae482e902c0c40244f406988df0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d40f8fd29f31d9d086f177e7a461e3024cc4411dbf2f284a037065517ede7bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40f8fd29f31d9d086f177e7a461e3024cc4411dbf2f284a037065517ede7bc6->enter($__internal_d40f8fd29f31d9d086f177e7a461e3024cc4411dbf2f284a037065517ede7bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8aea6dbe93dd491d3955fac64b56cf80bbc3e22ae0975a450163614e0e79f1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aea6dbe93dd491d3955fac64b56cf80bbc3e22ae0975a450163614e0e79f1a7->enter($__internal_8aea6dbe93dd491d3955fac64b56cf80bbc3e22ae0975a450163614e0e79f1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name", array()), "html", null, true);
        
        $__internal_8aea6dbe93dd491d3955fac64b56cf80bbc3e22ae0975a450163614e0e79f1a7->leave($__internal_8aea6dbe93dd491d3955fac64b56cf80bbc3e22ae0975a450163614e0e79f1a7_prof);

        
        $__internal_d40f8fd29f31d9d086f177e7a461e3024cc4411dbf2f284a037065517ede7bc6->leave($__internal_d40f8fd29f31d9d086f177e7a461e3024cc4411dbf2f284a037065517ede7bc6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3cf18aac9157d795bd86a8052b368d6de68f220d6f814dad97108f4f0168b1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf18aac9157d795bd86a8052b368d6de68f220d6f814dad97108f4f0168b1b3->enter($__internal_3cf18aac9157d795bd86a8052b368d6de68f220d6f814dad97108f4f0168b1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_122cbe4d915f6c28c331853657d69f31bc6132b4b0574b0a3414747e7c9cd41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122cbe4d915f6c28c331853657d69f31bc6132b4b0574b0a3414747e7c9cd41a->enter($__internal_122cbe4d915f6c28c331853657d69f31bc6132b4b0574b0a3414747e7c9cd41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"wrapper\">
    <div class=\"page-header page-header-xs\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
        echo "')\">
        <div class=\"filter\">
        </div>
    </div>
    <div class=\"section profile-content\">
        <div class=\"container\">
            <div class=\"owner\">
                <div class=\"name\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
        echo "\" class='rounded-circle profil' width='150' height='150'>
                    <h4 class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name", array()), "html", null, true);
        echo "<br /></h4>
                    ";
        // line 18
        echo "                    <p>
                        Genres : </br>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 21
            echo "                            <span class=\"badge badge-pill badge-success\">";
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </p>
                    <p>Followers : <span class=\"fa fa-star-o\"></span> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "followers", array()), "total", array()), "html", null, true);
        echo "</p>
                </div>
            </div>


            <br/>
            <div class=\"nav-tabs-navigation\">
                <div class=\"nav-tabs-wrapper\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#top\" role=\"tab\">Top Titres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#listAlbum\" role=\"tab\">Albums</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#relatedArtists\" role=\"tab\">Artistes associées</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div class=\"tab-pane active following\" id=\"top\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                            <ul class=\"list-unstyled follows\">
                                ";
        // line 51
        if ((isset($context["topArtistTrack"]) ? $context["topArtistTrack"] : $this->getContext($context, "topArtistTrack"))) {
            // line 52
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topArtistTrack"]) ? $context["topArtistTrack"] : $this->getContext($context, "topArtistTrack")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 53
                echo "                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-1 offset-md-0\">
                                                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" >
                                                        <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                    </a>
                                                </div>
                                                <div class=\"col-md-1 mt-3 text-center\">
                                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                    <audio >
                                                        <source src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class=\"col-md-7 col-xs-4\">
                                                    <h6><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                        <small>
                                                            Artiste :
                                                            ";
                // line 71
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
                    // line 72
                    echo "                                                                ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 73
                        echo "                                                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                ";
                    } else {
                        // line 75
                        echo "                                                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                ";
                    }
                    // line 77
                    echo "                                                            ";
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
                // line 78
                echo "                                                        </small><br/>
                                                        <small>
                                                            Album : <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "album", array()), "name", array()), "html", null, true);
                echo "</a>
                                                        </small><br/>
                                                    </h6>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 offset-1\">
                                                    <div class=\"py-3\" >
                                                        <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 \">
                                                    <div class=\"mt-3\" >
                                                        <button class=\"addToLibrary\" data-id=\"";
                // line 91
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
            // line 98
            echo "                                ";
        }
        // line 99
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <!-- list album -->
                <div class=\"tab-pane \" id=\"listAlbum\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                        ";
        // line 107
        if ((isset($context["albumArtist"]) ? $context["albumArtist"] : $this->getContext($context, "albumArtist"))) {
            // line 108
            echo "                            <div class=\"row\">
                                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["albumArtist"]) ? $context["albumArtist"] : $this->getContext($context, "albumArtist")), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 110
                echo "                                    <div class=\"col-sm-3\">
                                        <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                            <img src=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["album"], "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                                            <p><strong>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "name", array()), "html", null, true);
                echo "</strong></p>
                                        </a>
                                    </div>
                                    ";
                // line 116
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 117
                    echo "                                        </div><div class=\"row\">
                                    ";
                }
                // line 119
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                            </div>
                        ";
        }
        // line 122
        echo "                        </div>
                    </div>
                </div>
                <!-- list artiste associé -->
                <div class=\"tab-pane \" id=\"relatedArtists\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                            ";
        // line 129
        if ((isset($context["relatedArtists"]) ? $context["relatedArtists"] : $this->getContext($context, "relatedArtists"))) {
            // line 130
            echo "                                <div class=\"row\">
                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatedArtists"]) ? $context["relatedArtists"] : $this->getContext($context, "relatedArtists")), "artists", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["relatedArtist"]) {
                // line 132
                echo "                                    <div class=\"col-sm-3\">
                                        <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["relatedArtist"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                            ";
                // line 134
                if ($this->getAttribute($context["relatedArtist"], "images", array())) {
                    // line 135
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["relatedArtist"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                    echo "\" alt=\"\"  height=\"200\" width=\"100%\">
                                            ";
                } else {
                    // line 137
                    echo "                                                <img src=\"http://www.juicenothing.com/images/scapart/kanye-west-yeezus-v2.jpg\" alt=\"\"  height=\"200\" width=\"100%\">
                                            ";
                }
                // line 139
                echo "                                            <p class=\"mt-1\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["relatedArtist"], "name", array()), "html", null, true);
                echo "</strong></pclass>
                                            <p><small>follower : <span class=\"fa fa-star-o\"></span> ";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relatedArtist"], "followers", array()), "total", array()), "html", null, true);
                echo "</small></p>
                                        </a>
                                    </div>
                                    ";
                // line 143
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 144
                    echo "                                        </div><div class=\"row\">
                                    ";
                }
                // line 146
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedArtist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                </div>
                            ";
        }
        // line 149
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_122cbe4d915f6c28c331853657d69f31bc6132b4b0574b0a3414747e7c9cd41a->leave($__internal_122cbe4d915f6c28c331853657d69f31bc6132b4b0574b0a3414747e7c9cd41a_prof);

        
        $__internal_3cf18aac9157d795bd86a8052b368d6de68f220d6f814dad97108f4f0168b1b3->leave($__internal_3cf18aac9157d795bd86a8052b368d6de68f220d6f814dad97108f4f0168b1b3_prof);

    }

    public function getTemplateName()
    {
        return "album/artist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 149,  420 => 147,  406 => 146,  402 => 144,  400 => 143,  394 => 140,  389 => 139,  385 => 137,  379 => 135,  377 => 134,  373 => 133,  370 => 132,  353 => 131,  350 => 130,  348 => 129,  339 => 122,  335 => 120,  321 => 119,  317 => 117,  315 => 116,  309 => 113,  305 => 112,  301 => 111,  298 => 110,  281 => 109,  278 => 108,  276 => 107,  266 => 99,  263 => 98,  250 => 91,  242 => 86,  231 => 80,  227 => 78,  213 => 77,  207 => 75,  201 => 73,  198 => 72,  181 => 71,  173 => 68,  165 => 63,  156 => 57,  152 => 56,  147 => 53,  142 => 52,  140 => 51,  110 => 24,  107 => 23,  98 => 21,  94 => 20,  90 => 18,  86 => 16,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title artist.name %}

{% block content %}
<div class=\"wrapper\">
    <div class=\"page-header page-header-xs\" style=\"background-image: url('{{ artist.images[0].url }}')\">
        <div class=\"filter\">
        </div>
    </div>
    <div class=\"section profile-content\">
        <div class=\"container\">
            <div class=\"owner\">
                <div class=\"name\">
                    <img src=\"{{ artist.images[1].url }}\" class='rounded-circle profil' width='150' height='150'>
                    <h4 class=\"title\">{{ artist.name }}<br /></h4>
                    {# <h6 class=\"description\">Music Producer</h6> #}
                    <p>
                        Genres : </br>
                        {% for genre in artist.genres %}
                            <span class=\"badge badge-pill badge-success\">{{ genre }}</span>
                        {% endfor %}
                    </p>
                    <p>Followers : <span class=\"fa fa-star-o\"></span> {{ artist.followers.total }}</p>
                </div>
            </div>


            <br/>
            <div class=\"nav-tabs-navigation\">
                <div class=\"nav-tabs-wrapper\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#top\" role=\"tab\">Top Titres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#listAlbum\" role=\"tab\">Albums</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#relatedArtists\" role=\"tab\">Artistes associées</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div class=\"tab-pane active following\" id=\"top\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                            <ul class=\"list-unstyled follows\">
                                {% if topArtistTrack %}
                                    {% for track in topArtistTrack.tracks %}
                                        <li>
                                            <div class=\"row\">
                                                <div class=\"col-md-1 offset-md-0\">
                                                    <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" >
                                                        <img src=\"{{ track.album.images[1].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                    </a>
                                                </div>
                                                <div class=\"col-md-1 mt-3 text-center\">
                                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                    <audio >
                                                        <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                                <div class=\"col-md-7 col-xs-4\">
                                                    <h6><a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.name }}</a><br/>
                                                        <small>
                                                            Artiste :
                                                            {% for artist in track.artists %}
                                                                {% if loop.last %}
                                                                    {{ artist.name }}
                                                                {% else %}
                                                                    {{ artist.name }},
                                                                {% endif %}
                                                            {% endfor %}
                                                        </small><br/>
                                                        <small>
                                                            Album : <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.album.name }}</a>
                                                        </small><br/>
                                                    </h6>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 offset-1\">
                                                    <div class=\"py-3\" >
                                                        <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-1 col-xs-2 \">
                                                    <div class=\"mt-3\" >
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
                <!-- list album -->
                <div class=\"tab-pane \" id=\"listAlbum\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                        {% if albumArtist %}
                            <div class=\"row\">
                                {% for album in albumArtist.items %}
                                    <div class=\"col-sm-3\">
                                        <a href=\"{{ path('showAlbum', {'id_album' : album.id}) }}\" class=\"link-music\">
                                            <img src=\"{{ album.images[1].url }}\" alt=\"\" class=\"img-fluid\">
                                            <p><strong>{{ album.name }}</strong></p>
                                        </a>
                                    </div>
                                    {% if loop.index is divisible by(4) %}
                                        </div><div class=\"row\">
                                    {% endif %}
                                {% endfor %}
                            </div>
                        {% endif %}
                        </div>
                    </div>
                </div>
                <!-- list artiste associé -->
                <div class=\"tab-pane \" id=\"relatedArtists\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-md-10 offset-md-1\">
                            {% if relatedArtists %}
                                <div class=\"row\">
                                {% for relatedArtist in relatedArtists.artists %}
                                    <div class=\"col-sm-3\">
                                        <a href=\"{{ path('showArtist', {'id_artist' : relatedArtist.id}) }}\" class=\"link-music\">
                                            {% if relatedArtist.images %}
                                                <img src=\"{{ relatedArtist.images[0].url }}\" alt=\"\"  height=\"200\" width=\"100%\">
                                            {% else %}
                                                <img src=\"http://www.juicenothing.com/images/scapart/kanye-west-yeezus-v2.jpg\" alt=\"\"  height=\"200\" width=\"100%\">
                                            {% endif %}
                                            <p class=\"mt-1\"><strong>{{ relatedArtist.name }}</strong></pclass>
                                            <p><small>follower : <span class=\"fa fa-star-o\"></span> {{ relatedArtist.followers.total }}</small></p>
                                        </a>
                                    </div>
                                    {% if loop.index is divisible by(4) %}
                                        </div><div class=\"row\">
                                    {% endif %}
                                {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "album/artist.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\album\\artist.html.twig");
    }
}
