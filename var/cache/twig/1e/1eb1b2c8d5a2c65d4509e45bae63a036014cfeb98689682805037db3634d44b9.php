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
        $__internal_67c8ec116b725ea3ffff85441757969c0f29d4145d65b3d5d494decd4e46d8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c8ec116b725ea3ffff85441757969c0f29d4145d65b3d5d494decd4e46d8fc->enter($__internal_67c8ec116b725ea3ffff85441757969c0f29d4145d65b3d5d494decd4e46d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_7893ca264fa3c45e5d0664c142702f5b4fa6d9b20e22603a6e5712391d054ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7893ca264fa3c45e5d0664c142702f5b4fa6d9b20e22603a6e5712391d054ac5->enter($__internal_7893ca264fa3c45e5d0664c142702f5b4fa6d9b20e22603a6e5712391d054ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67c8ec116b725ea3ffff85441757969c0f29d4145d65b3d5d494decd4e46d8fc->leave($__internal_67c8ec116b725ea3ffff85441757969c0f29d4145d65b3d5d494decd4e46d8fc_prof);

        
        $__internal_7893ca264fa3c45e5d0664c142702f5b4fa6d9b20e22603a6e5712391d054ac5->leave($__internal_7893ca264fa3c45e5d0664c142702f5b4fa6d9b20e22603a6e5712391d054ac5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b9c290ead801f7fb4ea33586816b05dd59772f4b397f253222a6013789b3729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9c290ead801f7fb4ea33586816b05dd59772f4b397f253222a6013789b3729->enter($__internal_6b9c290ead801f7fb4ea33586816b05dd59772f4b397f253222a6013789b3729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af1b96d00ba50462b5c390b99cab4290df1751a5e5fad622b95e02336d04a67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1b96d00ba50462b5c390b99cab4290df1751a5e5fad622b95e02336d04a67d->enter($__internal_af1b96d00ba50462b5c390b99cab4290df1751a5e5fad622b95e02336d04a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "query";
        
        $__internal_af1b96d00ba50462b5c390b99cab4290df1751a5e5fad622b95e02336d04a67d->leave($__internal_af1b96d00ba50462b5c390b99cab4290df1751a5e5fad622b95e02336d04a67d_prof);

        
        $__internal_6b9c290ead801f7fb4ea33586816b05dd59772f4b397f253222a6013789b3729->leave($__internal_6b9c290ead801f7fb4ea33586816b05dd59772f4b397f253222a6013789b3729_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_958c51668dde8e6f209b9d9f90138c590bc23605b9f5f0e599bfcb637f1c1cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958c51668dde8e6f209b9d9f90138c590bc23605b9f5f0e599bfcb637f1c1cac->enter($__internal_958c51668dde8e6f209b9d9f90138c590bc23605b9f5f0e599bfcb637f1c1cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea4206aec77001a3fe9e3a625bf8963beb7009d552cd58792c1b4f09e32a0e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4206aec77001a3fe9e3a625bf8963beb7009d552cd58792c1b4f09e32a0e9a->enter($__internal_ea4206aec77001a3fe9e3a625bf8963beb7009d552cd58792c1b4f09e32a0e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                ";
        // line 30
        if ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))) {
            // line 31
            echo "                    <div class=\"row\">
                        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "albums", array()), "items", array()));
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
                // line 33
                echo "                            <div class=\"col-sm-3\">
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">
                                    <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["album"], "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                                    <p class=\"text-center\"><strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "name", array()), "html", null, true);
                echo "</strong></p>
                                    ";
                // line 37
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
                    // line 38
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                            ";
                    // line 39
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 40
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "</p>
                                            ";
                    } else {
                        // line 42
                        echo "                                                <p class=\"text-center\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",</p>
                                            ";
                    }
                    // line 44
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
                // line 46
                echo "                                    
                                </a>
                            </div>
                            ";
                // line 49
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 50
                    echo "                                </div><div class=\"row\">
                            ";
                }
                // line 52
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
            // line 53
            echo "                    </div>
                ";
        }
        // line 55
        echo "                </div>
            </div>
                
        </div>
    </div>
";
        
        $__internal_ea4206aec77001a3fe9e3a625bf8963beb7009d552cd58792c1b4f09e32a0e9a->leave($__internal_ea4206aec77001a3fe9e3a625bf8963beb7009d552cd58792c1b4f09e32a0e9a_prof);

        
        $__internal_958c51668dde8e6f209b9d9f90138c590bc23605b9f5f0e599bfcb637f1c1cac->leave($__internal_958c51668dde8e6f209b9d9f90138c590bc23605b9f5f0e599bfcb637f1c1cac_prof);

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
        return array (  222 => 55,  218 => 53,  204 => 52,  200 => 50,  198 => 49,  193 => 46,  178 => 44,  172 => 42,  166 => 40,  164 => 39,  159 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  127 => 33,  110 => 32,  107 => 31,  105 => 30,  87 => 17,  80 => 13,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'query' %}

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
            
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                {% if result %}
                    <div class=\"row\">
                        {% for album in result.albums.items %}
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
                
        </div>
    </div>
{% endblock %}
    
", "search/search.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\search\\search.html.twig");
    }
}
