<?php

/* search/search.html.twig */
class __TwigTemplate_96a1194bd0a232a62c36e249ac9288bc48ace20938dd9f1b8d774848abb7b678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "search/search.html.twig", 1);
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
        $__internal_d63ccddb5e75438d8048e4c36fe07fdfffe986f4913b38d01e3b21de58dc56f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63ccddb5e75438d8048e4c36fe07fdfffe986f4913b38d01e3b21de58dc56f1->enter($__internal_d63ccddb5e75438d8048e4c36fe07fdfffe986f4913b38d01e3b21de58dc56f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_1c5c5b0792d6b301fc5e2dd3593f4e54aeb30e5e5d6aa8ab00357f5594d36633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5c5b0792d6b301fc5e2dd3593f4e54aeb30e5e5d6aa8ab00357f5594d36633->enter($__internal_1c5c5b0792d6b301fc5e2dd3593f4e54aeb30e5e5d6aa8ab00357f5594d36633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63ccddb5e75438d8048e4c36fe07fdfffe986f4913b38d01e3b21de58dc56f1->leave($__internal_d63ccddb5e75438d8048e4c36fe07fdfffe986f4913b38d01e3b21de58dc56f1_prof);

        
        $__internal_1c5c5b0792d6b301fc5e2dd3593f4e54aeb30e5e5d6aa8ab00357f5594d36633->leave($__internal_1c5c5b0792d6b301fc5e2dd3593f4e54aeb30e5e5d6aa8ab00357f5594d36633_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49b357b589ad168c460ffeb723c6f2359e19d06e1141ce2f3d6eb2c34aa1a775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b357b589ad168c460ffeb723c6f2359e19d06e1141ce2f3d6eb2c34aa1a775->enter($__internal_49b357b589ad168c460ffeb723c6f2359e19d06e1141ce2f3d6eb2c34aa1a775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a6cccfb82d975dd866b3bf4dc9109efb49dcd1e772a3ade5d5c457ac44b19f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6cccfb82d975dd866b3bf4dc9109efb49dcd1e772a3ade5d5c457ac44b19f5->enter($__internal_7a6cccfb82d975dd866b3bf4dc9109efb49dcd1e772a3ade5d5c457ac44b19f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) ? ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) : ("recherche")), "html", null, true);
        
        $__internal_7a6cccfb82d975dd866b3bf4dc9109efb49dcd1e772a3ade5d5c457ac44b19f5->leave($__internal_7a6cccfb82d975dd866b3bf4dc9109efb49dcd1e772a3ade5d5c457ac44b19f5_prof);

        
        $__internal_49b357b589ad168c460ffeb723c6f2359e19d06e1141ce2f3d6eb2c34aa1a775->leave($__internal_49b357b589ad168c460ffeb723c6f2359e19d06e1141ce2f3d6eb2c34aa1a775_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5710064f594d3df755865e8f3dcca098ad8a8612df8f1ee121fa82bf03740ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5710064f594d3df755865e8f3dcca098ad8a8612df8f1ee121fa82bf03740ae->enter($__internal_a5710064f594d3df755865e8f3dcca098ad8a8612df8f1ee121fa82bf03740ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd7c5b161a45e5ec45b70907e284ddf08f339c626719e5d74240dd13d99371ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7c5b161a45e5ec45b70907e284ddf08f339c626719e5d74240dd13d99371ba->enter($__internal_bd7c5b161a45e5ec45b70907e284ddf08f339c626719e5d74240dd13d99371ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/musician-664432.jpg"), "html", null, true);
        echo "')\">
            <div class=\"filter\">
            </div>
        </div>
        
        <div class=\"container\">
            <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
                <div class=\"form-group my-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-9 offset-sm-1\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 17
        if ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) {
            echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        }
        echo "\">
                        </div>
                        <div class=\"col-sm-1\">
                            <button type=\"submit\" class=\"btn btn-light\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <h2 class=\"pb-3\">Albums :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                ";
        // line 31
        if ((isset($context["resultAlbums"]) ? $context["resultAlbums"] : $this->getContext($context, "resultAlbums"))) {
            // line 32
            echo "                    <div class=\"row\">
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resultAlbums"]) ? $context["resultAlbums"] : $this->getContext($context, "resultAlbums")), "albums", array()), "items", array()));
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
                // line 34
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["album"], "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "name", array()), "html", null, true);
                echo "</strong></p>
                                    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["album"], "artists", array()));
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
                    // line 39
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                            ";
                    // line 40
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 41
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "</p>
                                            ";
                    } else {
                        // line 43
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",</p>
                                            ";
                    }
                    // line 45
                    echo "                                        </a>
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
                // line 47
                echo "                                    
                                </a>
                            </div>
                            ";
                // line 50
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 51
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 53
                echo "                        ";
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
            // line 54
            echo "                    </div>
                ";
        }
        // line 56
        echo "                </div>
            </div>
            <h2 class=\"pb-3\">Titres :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 61
        if ((isset($context["resultTracks"]) ? $context["resultTracks"] : $this->getContext($context, "resultTracks"))) {
            // line 62
            echo "                        <div class=\"row\">
                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resultTracks"]) ? $context["resultTracks"] : $this->getContext($context, "resultTracks")), "tracks", array()), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 64
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</strong></p>
                                    ";
                // line 68
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
                    // line 69
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                            ";
                    // line 70
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 71
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "</p>
                                            ";
                    } else {
                        // line 73
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",</p>
                                            ";
                    }
                    // line 75
                    echo "                                        </a>
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
                // line 77
                echo "
                                </a>
                            </div>
                            ";
                // line 80
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 81
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 83
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        </div>
                    ";
        }
        // line 86
        echo "                </div>
            </div>
            <h2 class=\"pb-3\">Artistes :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 91
        if ((isset($context["resultArtists"]) ? $context["resultArtists"] : $this->getContext($context, "resultArtists"))) {
            // line 92
            echo "                        <div class=\"row\">
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resultArtists"]) ? $context["resultArtists"] : $this->getContext($context, "resultArtists")), "artists", array()), "items", array()));
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
                // line 94
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 96
                if ($this->getAttribute($context["artist"], "images", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["artist"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array("", 210)), "html", null, true);
                }
                echo "\" alt=\"\" class=\"img-fluid rounded-circle\">
                                    <p class=\"text-center\"><strong>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo "</strong></p>
                                </a>
                            </div>
                            ";
                // line 100
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 101
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 103
                echo "                        ";
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
            // line 104
            echo "                        </div>
                    ";
        }
        // line 106
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bd7c5b161a45e5ec45b70907e284ddf08f339c626719e5d74240dd13d99371ba->leave($__internal_bd7c5b161a45e5ec45b70907e284ddf08f339c626719e5d74240dd13d99371ba_prof);

        
        $__internal_a5710064f594d3df755865e8f3dcca098ad8a8612df8f1ee121fa82bf03740ae->leave($__internal_a5710064f594d3df755865e8f3dcca098ad8a8612df8f1ee121fa82bf03740ae_prof);

    }

    public function getTemplateName()
    {
        return "search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 106,  417 => 104,  403 => 103,  399 => 101,  397 => 100,  391 => 97,  383 => 96,  379 => 95,  376 => 94,  359 => 93,  356 => 92,  354 => 91,  347 => 86,  343 => 84,  329 => 83,  325 => 81,  323 => 80,  318 => 77,  303 => 75,  297 => 73,  291 => 71,  289 => 70,  284 => 69,  267 => 68,  263 => 67,  259 => 66,  255 => 65,  252 => 64,  235 => 63,  232 => 62,  230 => 61,  223 => 56,  219 => 54,  205 => 53,  201 => 51,  199 => 50,  194 => 47,  179 => 45,  173 => 43,  167 => 41,  165 => 40,  160 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  128 => 34,  111 => 33,  108 => 32,  106 => 31,  87 => 17,  80 => 13,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title query ? query : 'recherche' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('{{asset('img/musician-664432.jpg')}}')\">
            <div class=\"filter\">
            </div>
        </div>
        
        <div class=\"container\">
            <form action=\"{{ path('search') }}\" method=\"get\">
                <div class=\"form-group my-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-9 offset-sm-1\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{% if query %}{{ query }}{% endif %}\">
                        </div>
                        <div class=\"col-sm-1\">
                            <button type=\"submit\" class=\"btn btn-light\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <h2 class=\"pb-3\">Albums :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                {% if resultAlbums %}
                    <div class=\"row\">
                        {% for album in resultAlbums.albums.items %}
                            <div class=\"col-sm-3\">
                                <a href=\"{{ path('showAlbum', {'id_album' : album.id}) }}\" class=\"link-music\">
                                    <img src=\"{{ album.images[1].url }}\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>{{ album.name }}</strong></p>
                                    {% for artist in album.artists %}
                                        <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                            {% if loop.last %}
                                                <p class=\"text-center\">{{ artist.name }}</p>
                                            {% else %}
                                                <p class=\"text-center\">{{ artist.name }},</p>
                                            {% endif %}
                                        </a>
                                    {% endfor %}
                                    
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
            <h2 class=\"pb-3\">Titres :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% if resultTracks %}
                        <div class=\"row\">
                        {% for track in resultTracks.tracks.items %}
                            <div class=\"col-sm-3\">
                                <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">
                                    <img src=\"{{ track.album.images[0].url }}\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>{{ track.name }}</strong></p>
                                    {% for artist in track.artists %}
                                        <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                            {% if loop.last %}
                                                <p class=\"text-center\">{{ artist.name }}</p>
                                            {% else %}
                                                <p class=\"text-center\">{{ artist.name }},</p>
                                            {% endif %}
                                        </a>
                                    {% endfor %}

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
            <h2 class=\"pb-3\">Artistes :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% if resultArtists %}
                        <div class=\"row\">
                        {% for artist in resultArtists.artists.items %}
                            <div class=\"col-sm-3\">
                                <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                    <img src=\"{% if artist.images %}{{ artist.images[0].url }}{% else %}{{ get_gravatar('', 210) }}{% endif %}\" alt=\"\" class=\"img-fluid rounded-circle\">
                                    <p class=\"text-center\"><strong>{{ artist.name }}</strong></p>
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
{% endblock %}", "search/search.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\search\\search.html.twig");
    }
}
