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
        $__internal_0554072519771dae79c692026c6bb009871410b618ee3a5c4b4098f2d662d8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0554072519771dae79c692026c6bb009871410b618ee3a5c4b4098f2d662d8a4->enter($__internal_0554072519771dae79c692026c6bb009871410b618ee3a5c4b4098f2d662d8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $__internal_f94eb6a7968d5379252a34b604f8a0cc4cc610e08a11454a5a313d72e41da17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94eb6a7968d5379252a34b604f8a0cc4cc610e08a11454a5a313d72e41da17c->enter($__internal_f94eb6a7968d5379252a34b604f8a0cc4cc610e08a11454a5a313d72e41da17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0554072519771dae79c692026c6bb009871410b618ee3a5c4b4098f2d662d8a4->leave($__internal_0554072519771dae79c692026c6bb009871410b618ee3a5c4b4098f2d662d8a4_prof);

        
        $__internal_f94eb6a7968d5379252a34b604f8a0cc4cc610e08a11454a5a313d72e41da17c->leave($__internal_f94eb6a7968d5379252a34b604f8a0cc4cc610e08a11454a5a313d72e41da17c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52f58b1153a6d41d0bde05fccb276c304197a150f0895f9b65f89776a0b6c422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f58b1153a6d41d0bde05fccb276c304197a150f0895f9b65f89776a0b6c422->enter($__internal_52f58b1153a6d41d0bde05fccb276c304197a150f0895f9b65f89776a0b6c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8867a34ec95e53e4eabb076bd67e497ba2aa32ecfa8ccaf3098a2e10e2399d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8867a34ec95e53e4eabb076bd67e497ba2aa32ecfa8ccaf3098a2e10e2399d59->enter($__internal_8867a34ec95e53e4eabb076bd67e497ba2aa32ecfa8ccaf3098a2e10e2399d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_8867a34ec95e53e4eabb076bd67e497ba2aa32ecfa8ccaf3098a2e10e2399d59->leave($__internal_8867a34ec95e53e4eabb076bd67e497ba2aa32ecfa8ccaf3098a2e10e2399d59_prof);

        
        $__internal_52f58b1153a6d41d0bde05fccb276c304197a150f0895f9b65f89776a0b6c422->leave($__internal_52f58b1153a6d41d0bde05fccb276c304197a150f0895f9b65f89776a0b6c422_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ade096f82efc6c0e0951a7577e5cdb6a9180b012b0186b78724ee99e4dac5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ade096f82efc6c0e0951a7577e5cdb6a9180b012b0186b78724ee99e4dac5c5->enter($__internal_0ade096f82efc6c0e0951a7577e5cdb6a9180b012b0186b78724ee99e4dac5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a51095c5f4efe8c217a3b027cfd6f5085ef04f8afd91795ad5e8b1e9e5162f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51095c5f4efe8c217a3b027cfd6f5085ef04f8afd91795ad5e8b1e9e5162f77->enter($__internal_a51095c5f4efe8c217a3b027cfd6f5085ef04f8afd91795ad5e8b1e9e5162f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center -630px\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
        echo "\" class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">";
        // line 16
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
                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#follows\" role=\"tab\">Recommandations musicales</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#following\" role=\"tab\">Recommandations basées sur la catégorie : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class=\"tab-content following\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 45
        if ((isset($context["recommendations"]) ? $context["recommendations"] : $this->getContext($context, "recommendations"))) {
            // line 46
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendations"]) ? $context["recommendations"] : $this->getContext($context, "recommendations")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 47
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0\">
                                                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 text-center\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4\">
                                                        <h6><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste : 
                                                                ";
                // line 65
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
                    // line 66
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 67
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 68
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 70
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 72
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
                // line 74
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 76
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
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"";
                // line 87
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
            // line 94
            echo "                                    ";
        } else {
            // line 95
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 101
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane \" id=\"following\" role=\"tabpanel\">
                       <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 109
        if ((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag"))) {
            // line 110
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 111
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0\">
                                                        <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 text-center\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4\">
                                                        <h6><a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 129
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
                    // line 130
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 131
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 132
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 134
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 136
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
                // line 138
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 140
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
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"addToLibrary\" data-id=\"";
                // line 151
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
            // line 158
            echo "                                    ";
        } else {
            // line 159
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 165
        echo "                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
             
";
        
        $__internal_a51095c5f4efe8c217a3b027cfd6f5085ef04f8afd91795ad5e8b1e9e5162f77->leave($__internal_a51095c5f4efe8c217a3b027cfd6f5085ef04f8afd91795ad5e8b1e9e5162f77_prof);

        
        $__internal_0ade096f82efc6c0e0951a7577e5cdb6a9180b012b0186b78724ee99e4dac5c5->leave($__internal_0ade096f82efc6c0e0951a7577e5cdb6a9180b012b0186b78724ee99e4dac5c5_prof);

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
        return array (  407 => 165,  399 => 159,  396 => 158,  383 => 151,  375 => 146,  364 => 140,  360 => 138,  345 => 136,  339 => 134,  333 => 132,  331 => 131,  326 => 130,  309 => 129,  301 => 126,  293 => 121,  284 => 115,  280 => 114,  275 => 111,  270 => 110,  268 => 109,  258 => 101,  250 => 95,  247 => 94,  234 => 87,  226 => 82,  215 => 76,  211 => 74,  196 => 72,  190 => 70,  184 => 68,  182 => 67,  177 => 66,  160 => 65,  152 => 62,  144 => 57,  135 => 51,  131 => 50,  126 => 47,  121 => 46,  119 => 45,  105 => 34,  84 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <div class=\"page-header page-header-xs\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center -630px\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"{{ asset('photo/') }}{{ user.picture }}\" class='rounded-circle profil' width='150' height='150'>
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
                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#follows\" role=\"tab\">Recommandations musicales</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#following\" role=\"tab\">Recommandations basées sur la catégorie : {{ tag }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class=\"tab-content following\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if recommendations %}
                                        {% for track in recommendations.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
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
                    <div class=\"tab-pane \" id=\"following\" role=\"tabpanel\">
                       <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if recommendationsTag %}
                                        {% for track in recommendationsTag.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
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
             
{% endblock %}
", "dashboard/home.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\home.html.twig");
    }
}
