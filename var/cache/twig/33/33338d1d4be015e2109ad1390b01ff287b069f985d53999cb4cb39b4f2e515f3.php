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
        $__internal_92323fd2e8aa0b1a2e12ee0b26bbc2e78fa079cdac8f61e8ca49cd9ae1a20656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92323fd2e8aa0b1a2e12ee0b26bbc2e78fa079cdac8f61e8ca49cd9ae1a20656->enter($__internal_92323fd2e8aa0b1a2e12ee0b26bbc2e78fa079cdac8f61e8ca49cd9ae1a20656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $__internal_0d2cb0471d6dd20c7afebc65a3f44d86ea8912ca4d68ea99e7c8c9fea1a587b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2cb0471d6dd20c7afebc65a3f44d86ea8912ca4d68ea99e7c8c9fea1a587b8->enter($__internal_0d2cb0471d6dd20c7afebc65a3f44d86ea8912ca4d68ea99e7c8c9fea1a587b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92323fd2e8aa0b1a2e12ee0b26bbc2e78fa079cdac8f61e8ca49cd9ae1a20656->leave($__internal_92323fd2e8aa0b1a2e12ee0b26bbc2e78fa079cdac8f61e8ca49cd9ae1a20656_prof);

        
        $__internal_0d2cb0471d6dd20c7afebc65a3f44d86ea8912ca4d68ea99e7c8c9fea1a587b8->leave($__internal_0d2cb0471d6dd20c7afebc65a3f44d86ea8912ca4d68ea99e7c8c9fea1a587b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3615ded32c05a1533d9ace6d8962bdbb7468fb87804ba2b1b2b4fe50d2ede8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3615ded32c05a1533d9ace6d8962bdbb7468fb87804ba2b1b2b4fe50d2ede8d3->enter($__internal_3615ded32c05a1533d9ace6d8962bdbb7468fb87804ba2b1b2b4fe50d2ede8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_293e8c8e818610c4a15794edf01435bb37f248dfbafdf5e9d30cfd558495d658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293e8c8e818610c4a15794edf01435bb37f248dfbafdf5e9d30cfd558495d658->enter($__internal_293e8c8e818610c4a15794edf01435bb37f248dfbafdf5e9d30cfd558495d658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_293e8c8e818610c4a15794edf01435bb37f248dfbafdf5e9d30cfd558495d658->leave($__internal_293e8c8e818610c4a15794edf01435bb37f248dfbafdf5e9d30cfd558495d658_prof);

        
        $__internal_3615ded32c05a1533d9ace6d8962bdbb7468fb87804ba2b1b2b4fe50d2ede8d3->leave($__internal_3615ded32c05a1533d9ace6d8962bdbb7468fb87804ba2b1b2b4fe50d2ede8d3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce53ea59e228373ddd7d34625b257883ab7d12cf285124b26aa0e4e424f5faf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce53ea59e228373ddd7d34625b257883ab7d12cf285124b26aa0e4e424f5faf9->enter($__internal_ce53ea59e228373ddd7d34625b257883ab7d12cf285124b26aa0e4e424f5faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6d1e2abfabb77375a3fbc8ba0e24cf412514eb4acce059e19f9e5afe6177d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d1e2abfabb77375a3fbc8ba0e24cf412514eb4acce059e19f9e5afe6177d5b->enter($__internal_f6d1e2abfabb77375a3fbc8ba0e24cf412514eb4acce059e19f9e5afe6177d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                                    <div class=\"col-md-2 offset-md-0\">
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
                                                    <div class=\"col-md-7 col-xs-4\">
                                                        <h6><a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste : 
                                                                ";
                // line 58
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
                    // line 59
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 60
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 61
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 63
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 65
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
                // line 67
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 69
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
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
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
            // line 82
            echo "                                    ";
        } else {
            // line 83
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 89
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane \" id=\"following\" role=\"tabpanel\">
                       <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 97
        if ((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag"))) {
            // line 98
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recommendationsTag"]) ? $context["recommendationsTag"] : $this->getContext($context, "recommendationsTag")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 99
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-2 offset-md-0\">
                                                        <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4\">
                                                        <h6><a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 110
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
                    // line 111
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 112
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 113
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 115
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 117
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
                // line 119
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 121
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
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
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
            // line 134
            echo "                                    ";
        } else {
            // line 135
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 141
        echo "                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
             
";
        
        $__internal_f6d1e2abfabb77375a3fbc8ba0e24cf412514eb4acce059e19f9e5afe6177d5b->leave($__internal_f6d1e2abfabb77375a3fbc8ba0e24cf412514eb4acce059e19f9e5afe6177d5b_prof);

        
        $__internal_ce53ea59e228373ddd7d34625b257883ab7d12cf285124b26aa0e4e424f5faf9->leave($__internal_ce53ea59e228373ddd7d34625b257883ab7d12cf285124b26aa0e4e424f5faf9_prof);

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
        return array (  371 => 141,  363 => 135,  360 => 134,  347 => 127,  336 => 121,  332 => 119,  317 => 117,  311 => 115,  305 => 113,  303 => 112,  298 => 111,  281 => 110,  273 => 107,  266 => 103,  262 => 102,  257 => 99,  252 => 98,  250 => 97,  240 => 89,  232 => 83,  229 => 82,  216 => 75,  205 => 69,  201 => 67,  186 => 65,  180 => 63,  174 => 61,  172 => 60,  167 => 59,  150 => 58,  142 => 55,  135 => 51,  131 => 50,  126 => 47,  121 => 46,  119 => 45,  105 => 34,  84 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                                    <div class=\"col-md-2 offset-md-0\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
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
                                                    <div class=\"col-md-2 offset-md-0\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
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
