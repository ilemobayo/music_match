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
        $__internal_54e25bc74c719a589b4c542e5ae12b231fe01ae3d914412dc925a28390d04032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e25bc74c719a589b4c542e5ae12b231fe01ae3d914412dc925a28390d04032->enter($__internal_54e25bc74c719a589b4c542e5ae12b231fe01ae3d914412dc925a28390d04032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_b37ac923c451990fac51c677c2b0d924b60de69d6da2060a89f852b18085730b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ac923c451990fac51c677c2b0d924b60de69d6da2060a89f852b18085730b->enter($__internal_b37ac923c451990fac51c677c2b0d924b60de69d6da2060a89f852b18085730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e25bc74c719a589b4c542e5ae12b231fe01ae3d914412dc925a28390d04032->leave($__internal_54e25bc74c719a589b4c542e5ae12b231fe01ae3d914412dc925a28390d04032_prof);

        
        $__internal_b37ac923c451990fac51c677c2b0d924b60de69d6da2060a89f852b18085730b->leave($__internal_b37ac923c451990fac51c677c2b0d924b60de69d6da2060a89f852b18085730b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_829ee319aa8467069825910dab1b5d9e4474e6b2451bdf3358169e3da145e3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ee319aa8467069825910dab1b5d9e4474e6b2451bdf3358169e3da145e3ee->enter($__internal_829ee319aa8467069825910dab1b5d9e4474e6b2451bdf3358169e3da145e3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fbd2f28c17650dd8e2c0098ef1584bdd0755bdc5733895fb2ed720d160a0af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbd2f28c17650dd8e2c0098ef1584bdd0755bdc5733895fb2ed720d160a0af6->enter($__internal_3fbd2f28c17650dd8e2c0098ef1584bdd0755bdc5733895fb2ed720d160a0af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "query";
        
        $__internal_3fbd2f28c17650dd8e2c0098ef1584bdd0755bdc5733895fb2ed720d160a0af6->leave($__internal_3fbd2f28c17650dd8e2c0098ef1584bdd0755bdc5733895fb2ed720d160a0af6_prof);

        
        $__internal_829ee319aa8467069825910dab1b5d9e4474e6b2451bdf3358169e3da145e3ee->leave($__internal_829ee319aa8467069825910dab1b5d9e4474e6b2451bdf3358169e3da145e3ee_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a5d363c0f2150d019cc5dcd1f2bfa97b3d4285a502bbacb7cf577288c252d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5d363c0f2150d019cc5dcd1f2bfa97b3d4285a502bbacb7cf577288c252d6e->enter($__internal_8a5d363c0f2150d019cc5dcd1f2bfa97b3d4285a502bbacb7cf577288c252d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8541a0f7b2604ee09e6807b7246efd9df59424100cffec9cb40aaa5acc726d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8541a0f7b2604ee09e6807b7246efd9df59424100cffec9cb40aaa5acc726d82->enter($__internal_8541a0f7b2604ee09e6807b7246efd9df59424100cffec9cb40aaa5acc726d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8541a0f7b2604ee09e6807b7246efd9df59424100cffec9cb40aaa5acc726d82->leave($__internal_8541a0f7b2604ee09e6807b7246efd9df59424100cffec9cb40aaa5acc726d82_prof);

        
        $__internal_8a5d363c0f2150d019cc5dcd1f2bfa97b3d4285a502bbacb7cf577288c252d6e->leave($__internal_8a5d363c0f2150d019cc5dcd1f2bfa97b3d4285a502bbacb7cf577288c252d6e_prof);

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
