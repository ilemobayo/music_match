<?php

/* dashboard/home.html.twig */
class __TwigTemplate_b9934d6187a52a4196d2457018ef2a54edb8fc877414089ba107e9a3a5bdd1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/home.html.twig", 1);
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
        $__internal_549d980b9aa40aa0f678b219263bcdafb91a37040aa6cd5479aa680ee56e176f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549d980b9aa40aa0f678b219263bcdafb91a37040aa6cd5479aa680ee56e176f->enter($__internal_549d980b9aa40aa0f678b219263bcdafb91a37040aa6cd5479aa680ee56e176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $__internal_72273f510dae814c7022debde5b91da07aa9a8b9131058b2166c41dc5a8462f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72273f510dae814c7022debde5b91da07aa9a8b9131058b2166c41dc5a8462f0->enter($__internal_72273f510dae814c7022debde5b91da07aa9a8b9131058b2166c41dc5a8462f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549d980b9aa40aa0f678b219263bcdafb91a37040aa6cd5479aa680ee56e176f->leave($__internal_549d980b9aa40aa0f678b219263bcdafb91a37040aa6cd5479aa680ee56e176f_prof);

        
        $__internal_72273f510dae814c7022debde5b91da07aa9a8b9131058b2166c41dc5a8462f0->leave($__internal_72273f510dae814c7022debde5b91da07aa9a8b9131058b2166c41dc5a8462f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35ba43865f21a8a58c0c94f07ed01eaafbb40ca4259777209b86160a120e7cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ba43865f21a8a58c0c94f07ed01eaafbb40ca4259777209b86160a120e7cf0->enter($__internal_35ba43865f21a8a58c0c94f07ed01eaafbb40ca4259777209b86160a120e7cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8aa16d34a306c9165ef5bb98eab18e2b46fac6845a51f93cd46a7ca8247b8b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa16d34a306c9165ef5bb98eab18e2b46fac6845a51f93cd46a7ca8247b8b35->enter($__internal_8aa16d34a306c9165ef5bb98eab18e2b46fac6845a51f93cd46a7ca8247b8b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_8aa16d34a306c9165ef5bb98eab18e2b46fac6845a51f93cd46a7ca8247b8b35->leave($__internal_8aa16d34a306c9165ef5bb98eab18e2b46fac6845a51f93cd46a7ca8247b8b35_prof);

        
        $__internal_35ba43865f21a8a58c0c94f07ed01eaafbb40ca4259777209b86160a120e7cf0->leave($__internal_35ba43865f21a8a58c0c94f07ed01eaafbb40ca4259777209b86160a120e7cf0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_52cec27279d0b83344fa7bfb0b798fb7134ab43bcb09c8a2969fda9b31b82dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cec27279d0b83344fa7bfb0b798fb7134ab43bcb09c8a2969fda9b31b82dbf->enter($__internal_52cec27279d0b83344fa7bfb0b798fb7134ab43bcb09c8a2969fda9b31b82dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_94f1fc1148c3f4699a69ed07759e3ca3fd35adcd335af781147c3296bcb9904c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f1fc1148c3f4699a69ed07759e3ca3fd35adcd335af781147c3296bcb9904c->enter($__internal_94f1fc1148c3f4699a69ed07759e3ca3fd35adcd335af781147c3296bcb9904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
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
        echo "\"
                             class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
            
               
                <br/>
                <div class=\"nav-tabs-navigation\">
                    <div class=\"nav-tabs-wrapper\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#recommendations\" role=\"tab\">Recommandations musicales</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#recomcat\" role=\"tab\">Recommandations basées sur la catégorie : </br> ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#artist-recommendation\" role=\"tab\">Recommandations basées sur un artiste  : </br> ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "html", null, true);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class=\"tab-content following\">
                    <div class=\"tab-pane active\" id=\"recommendations\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 53
        if ((isset($context["recommendations"]) ? $context["recommendations"] : $this->getContext($context, "recommendations"))) {
            // line 54
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendations"]) ? $context["recommendations"] : $this->getContext($context, "recommendations")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 55
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 col-xs-1 offset-md-0 image text-center\" >
                                                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 mt-3 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste : 
                                                                ";
                // line 73
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
                    // line 74
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 75
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 76
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 78
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 80
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
                // line 82
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 84
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
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library\">
                                                        <div class=\"mt-3\">
                                                            <button class=\"addToLibrary\" data-id=\"";
                // line 95
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
            // line 102
            echo "                                    ";
        } else {
            // line 103
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 109
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane \" id=\"recomcat\" role=\"tabpanel\">
                       <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1 col-xs-10 \">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 117
        if ((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag"))) {
            // line 118
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 119
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 col-xs-1 image text-center\">
                                                        <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 col-xs-2 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 137
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
                    // line 138
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 139
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 140
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 142
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 144
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
                // line 146
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 148
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
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library\">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"";
                // line 159
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
            // line 166
            echo "                                    ";
        } else {
            // line 167
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 173
        echo "                                </ul>
                            </div>
                       </div>
                    </div>
                    <!-- recommendation artiste -->
                    <div class=\"tab-pane \" id=\"artist-recommendation\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-xs-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 182
        if ((isset($context["recommendationsArtist"]) ? $context["recommendationsArtist"] : $this->getContext($context, "recommendationsArtist"))) {
            // line 183
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendationsArtist"]) ? $context["recommendationsArtist"] : $this->getContext($context, "recommendationsArtist")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 184
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 col-xs-1 image text-center\">
                                                        <a href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-1 mt-3 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 202
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
                    // line 203
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 204
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 205
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 207
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 209
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
                // line 211
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 213
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
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"";
                // line 224
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
            // line 231
            echo "                                    ";
        } else {
            // line 232
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 238
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
";
        
        $__internal_94f1fc1148c3f4699a69ed07759e3ca3fd35adcd335af781147c3296bcb9904c->leave($__internal_94f1fc1148c3f4699a69ed07759e3ca3fd35adcd335af781147c3296bcb9904c_prof);

        
        $__internal_52cec27279d0b83344fa7bfb0b798fb7134ab43bcb09c8a2969fda9b31b82dbf->leave($__internal_52cec27279d0b83344fa7bfb0b798fb7134ab43bcb09c8a2969fda9b31b82dbf_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 238,  569 => 232,  566 => 231,  553 => 224,  545 => 219,  534 => 213,  530 => 211,  515 => 209,  509 => 207,  503 => 205,  501 => 204,  496 => 203,  479 => 202,  471 => 199,  463 => 194,  454 => 188,  450 => 187,  445 => 184,  440 => 183,  438 => 182,  427 => 173,  419 => 167,  416 => 166,  403 => 159,  395 => 154,  384 => 148,  380 => 146,  365 => 144,  359 => 142,  353 => 140,  351 => 139,  346 => 138,  329 => 137,  321 => 134,  313 => 129,  304 => 123,  300 => 122,  295 => 119,  290 => 118,  288 => 117,  278 => 109,  270 => 103,  267 => 102,  254 => 95,  246 => 90,  235 => 84,  231 => 82,  216 => 80,  210 => 78,  204 => 76,  202 => 75,  197 => 74,  180 => 73,  172 => 70,  164 => 65,  155 => 59,  151 => 58,  146 => 55,  141 => 54,  139 => 53,  125 => 42,  119 => 39,  98 => 21,  94 => 19,  88 => 18,  81 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Home' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
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
                            {% endif %}\"
                             class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">{{ user.username}}<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
            
               
                <br/>
                <div class=\"nav-tabs-navigation\">
                    <div class=\"nav-tabs-wrapper\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#recommendations\" role=\"tab\">Recommandations musicales</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#recomcat\" role=\"tab\">Recommandations basées sur la catégorie : </br> {{ tag }}</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#artist-recommendation\" role=\"tab\">Recommandations basées sur un artiste  : </br> {{ artist }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class=\"tab-content following\">
                    <div class=\"tab-pane active\" id=\"recommendations\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if recommendations %}
                                        {% for track in recommendations.tracks %}
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
                                    {% else %}
                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane \" id=\"recomcat\" role=\"tabpanel\">
                       <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1 col-xs-10 \">
                                <ul class=\"list-unstyled follows\">
                                    {% if recommendationsTag %}
                                        {% for track in recommendationsTag.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 col-xs-1 image text-center\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[1].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
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
                                                    <div class=\"col-md-1 col-xs-2 offset-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library\">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                        {% endfor %}
                                    {% else %}
                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                       </div>
                    </div>
                    <!-- recommendation artiste -->
                    <div class=\"tab-pane \" id=\"artist-recommendation\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-xs-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if recommendationsArtist %}
                                        {% for track in recommendationsArtist.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 col-xs-1 image text-center\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[1].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-1 mt-3 text-center playbutton\">
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
                                                    <div class=\"col-md-1 col-xs-2 offset-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                        {% endfor %}
                                    {% else %}
                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
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
             
{% endblock %}", "dashboard/home.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\home.html.twig");
    }
}
