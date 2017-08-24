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
        $__internal_b656fd3b74d181bfbf3ce978a4c5a2357b455509e116cdfdaca4a0301ef56376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656fd3b74d181bfbf3ce978a4c5a2357b455509e116cdfdaca4a0301ef56376->enter($__internal_b656fd3b74d181bfbf3ce978a4c5a2357b455509e116cdfdaca4a0301ef56376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_e2ecc508f163805634695ebd606bafce6b011faf57aca038f742af8e4c8b98bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ecc508f163805634695ebd606bafce6b011faf57aca038f742af8e4c8b98bf->enter($__internal_e2ecc508f163805634695ebd606bafce6b011faf57aca038f742af8e4c8b98bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b656fd3b74d181bfbf3ce978a4c5a2357b455509e116cdfdaca4a0301ef56376->leave($__internal_b656fd3b74d181bfbf3ce978a4c5a2357b455509e116cdfdaca4a0301ef56376_prof);

        
        $__internal_e2ecc508f163805634695ebd606bafce6b011faf57aca038f742af8e4c8b98bf->leave($__internal_e2ecc508f163805634695ebd606bafce6b011faf57aca038f742af8e4c8b98bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5ab83ec450ed0f848fc0b42d40278e1b2be27dda8894e910791cee3eaf67768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ab83ec450ed0f848fc0b42d40278e1b2be27dda8894e910791cee3eaf67768->enter($__internal_a5ab83ec450ed0f848fc0b42d40278e1b2be27dda8894e910791cee3eaf67768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa484fb754c3a3e178d46b660634d8344cc94d4b3bfb0d3d35bf88c418b62f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa484fb754c3a3e178d46b660634d8344cc94d4b3bfb0d3d35bf88c418b62f8e->enter($__internal_fa484fb754c3a3e178d46b660634d8344cc94d4b3bfb0d3d35bf88c418b62f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) ? ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) : ("recherche")), "html", null, true);
        
        $__internal_fa484fb754c3a3e178d46b660634d8344cc94d4b3bfb0d3d35bf88c418b62f8e->leave($__internal_fa484fb754c3a3e178d46b660634d8344cc94d4b3bfb0d3d35bf88c418b62f8e_prof);

        
        $__internal_a5ab83ec450ed0f848fc0b42d40278e1b2be27dda8894e910791cee3eaf67768->leave($__internal_a5ab83ec450ed0f848fc0b42d40278e1b2be27dda8894e910791cee3eaf67768_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_50a455628f3322ae4bfc85e9c410cc08e9e20d8c0ee03cdcc6c2d5f9731d561a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a455628f3322ae4bfc85e9c410cc08e9e20d8c0ee03cdcc6c2d5f9731d561a->enter($__internal_50a455628f3322ae4bfc85e9c410cc08e9e20d8c0ee03cdcc6c2d5f9731d561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_488f99995ba84c9875a388500d0ee4cd11f49a4b8748da7fec7693b561461024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488f99995ba84c9875a388500d0ee4cd11f49a4b8748da7fec7693b561461024->enter($__internal_488f99995ba84c9875a388500d0ee4cd11f49a4b8748da7fec7693b561461024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if (((isset($context["resultAlbums"]) ? $context["resultAlbums"] : $this->getContext($context, "resultAlbums")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["resultAlbums"]) ? $context["resultAlbums"] : $this->getContext($context, "resultAlbums")), "albums", array()), "items", array())))) {
            // line 32
            echo "                        <div class=\"row\">
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
            echo "                        </div>
                    ";
        } else {
            // line 56
            echo "                        <p>Pas de résultat</p>
                    ";
        }
        // line 58
        echo "                </div>
            </div>
            <h2 class=\"pb-3\">Titres :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 63
        if (((isset($context["resultTracks"]) ? $context["resultTracks"] : $this->getContext($context, "resultTracks")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["resultTracks"]) ? $context["resultTracks"] : $this->getContext($context, "resultTracks")), "tracks", array()), "items", array())))) {
            // line 64
            echo "                        <div class=\"row\">
                        ";
            // line 65
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
                // line 66
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</strong></p>
                                    ";
                // line 70
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
                    // line 71
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                            ";
                    // line 72
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 73
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "</p>
                                            ";
                    } else {
                        // line 75
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",</p>
                                            ";
                    }
                    // line 77
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
                // line 79
                echo "
                                </a>
                            </div>
                            ";
                // line 82
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 83
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 85
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
            // line 86
            echo "                        </div>
                    ";
        } else {
            // line 88
            echo "                        <p>Pas de résultat</p>
                    ";
        }
        // line 90
        echo "                </div>
            </div>
            <h2 class=\"pb-3\">Artistes :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 95
        if (((isset($context["resultArtists"]) ? $context["resultArtists"] : $this->getContext($context, "resultArtists")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["resultArtists"]) ? $context["resultArtists"] : $this->getContext($context, "resultArtists")), "artists", array()), "items", array())))) {
            // line 96
            echo "                        <div class=\"row\">
                        ";
            // line 97
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
                // line 98
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 100
                if ($this->getAttribute($context["artist"], "images", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["artist"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array("", 210)), "html", null, true);
                }
                echo "\" alt=\"\" class=\"img-fluid rounded-circle\" height=\"207\">
                                    <p class=\"text-center\"><strong>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo "</strong></p>
                                </a>
                            </div>
                            ";
                // line 104
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 105
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 107
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
            // line 108
            echo "                        </div>
                    ";
        } else {
            // line 110
            echo "                        <p>Pas de résultat</p>
                    ";
        }
        // line 112
        echo "                </div>
            </div>
            <h2 class=\"pb-3\">Profils :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 117
        if ((isset($context["resultUsers"]) ? $context["resultUsers"] : $this->getContext($context, "resultUsers"))) {
            // line 118
            echo "                        <div class=\"row\">
                        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultUsers"]) ? $context["resultUsers"] : $this->getContext($context, "resultUsers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
                // line 120
                echo "                            <div class=\"col-sm-3\">
                                <div class=\"card\" >
                                    <img height=\"210\" class=\"card-img-top\" src=\"";
                // line 122
                if ($this->getAttribute($context["profil"], "picture", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "picture", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute($context["profil"], "email", array()), 210, "retro")), "html", null, true);
                }
                echo "\" alt=\"Card image cap\">
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "username", array()), "html", null, true);
                echo "</h4>
                                        <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($context["profil"], "username", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                        <button class=\"addToFriends btn btn-info btn-block\" data-id=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                    </div>
                                </div>
                            </div>
                            ";
                // line 130
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 131
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 133
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                        </div>
                    ";
        } else {
            // line 136
            echo "                        <p>Pas de résultat</p>
                    ";
        }
        // line 138
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_488f99995ba84c9875a388500d0ee4cd11f49a4b8748da7fec7693b561461024->leave($__internal_488f99995ba84c9875a388500d0ee4cd11f49a4b8748da7fec7693b561461024_prof);

        
        $__internal_50a455628f3322ae4bfc85e9c410cc08e9e20d8c0ee03cdcc6c2d5f9731d561a->leave($__internal_50a455628f3322ae4bfc85e9c410cc08e9e20d8c0ee03cdcc6c2d5f9731d561a_prof);

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
        return array (  519 => 138,  515 => 136,  511 => 134,  497 => 133,  493 => 131,  491 => 130,  484 => 126,  480 => 125,  476 => 124,  466 => 122,  462 => 120,  445 => 119,  442 => 118,  440 => 117,  433 => 112,  429 => 110,  425 => 108,  411 => 107,  407 => 105,  405 => 104,  399 => 101,  391 => 100,  387 => 99,  384 => 98,  367 => 97,  364 => 96,  362 => 95,  355 => 90,  351 => 88,  347 => 86,  333 => 85,  329 => 83,  327 => 82,  322 => 79,  307 => 77,  301 => 75,  295 => 73,  293 => 72,  288 => 71,  271 => 70,  267 => 69,  263 => 68,  259 => 67,  256 => 66,  239 => 65,  236 => 64,  234 => 63,  227 => 58,  223 => 56,  219 => 54,  205 => 53,  201 => 51,  199 => 50,  194 => 47,  179 => 45,  173 => 43,  167 => 41,  165 => 40,  160 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  128 => 34,  111 => 33,  108 => 32,  106 => 31,  87 => 17,  80 => 13,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                    {% if  resultAlbums and resultAlbums.albums.items is not empty %}
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
                    {% else %}
                        <p>Pas de résultat</p>
                    {% endif %}
                </div>
            </div>
            <h2 class=\"pb-3\">Titres :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% if resultTracks and resultTracks.tracks.items is not empty %}
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
                    {% else %}
                        <p>Pas de résultat</p>
                    {% endif %}
                </div>
            </div>
            <h2 class=\"pb-3\">Artistes :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% if resultArtists and resultArtists.artists.items is not empty %}
                        <div class=\"row\">
                        {% for artist in resultArtists.artists.items %}
                            <div class=\"col-sm-3\">
                                <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                    <img src=\"{% if artist.images %}{{ artist.images[0].url }}{% else %}{{ get_gravatar('', 210) }}{% endif %}\" alt=\"\" class=\"img-fluid rounded-circle\" height=\"207\">
                                    <p class=\"text-center\"><strong>{{ artist.name }}</strong></p>
                                </a>
                            </div>
                            {% if loop.index is divisible by(4) %}
                                </div><div class=\"row\">
                            {% endif %}
                        {% endfor %}
                        </div>
                    {% else %}
                        <p>Pas de résultat</p>
                    {% endif %}
                </div>
            </div>
            <h2 class=\"pb-3\">Profils :</h2>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% if resultUsers%}
                        <div class=\"row\">
                        {% for profil in resultUsers %}
                            <div class=\"col-sm-3\">
                                <div class=\"card\" >
                                    <img height=\"210\" class=\"card-img-top\" src=\"{% if profil.picture %}{{ asset('photo/') }}{{ profil.picture }}{% else %}{{ get_gravatar(profil.email, 210, 'retro') }}{% endif %}\" alt=\"Card image cap\">
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">{{ profil.username }}</h4>
                                        <a href=\"{{ path('display', {'username' : profil.username}) }}\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                        <button class=\"addToFriends btn btn-info btn-block\" data-id=\"{{ profil.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                    </div>
                                </div>
                            </div>
                            {% if loop.index is divisible by(4) %}
                                </div><div class=\"row\">
                            {% endif %}
                        {% endfor %}
                        </div>
                    {% else %}
                        <p>Pas de résultat</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "search/search.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\search\\search.html.twig");
    }
}
