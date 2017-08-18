<?php

/* album/album.html.twig */
class __TwigTemplate_49cc1a1c46b4794e4103ac259cca69b3a25e57f9e81c664091f98d77b5b8934c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "album/album.html.twig", 1);
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
        $__internal_f7ecd7f209873ab454e7f2f871c65294ac91abf3e6a6265f028a235d343c9f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ecd7f209873ab454e7f2f871c65294ac91abf3e6a6265f028a235d343c9f49->enter($__internal_f7ecd7f209873ab454e7f2f871c65294ac91abf3e6a6265f028a235d343c9f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $__internal_ffb87fb429e302fb991933ffaef1b4128b37a34432d43ba74f7a552ec376a990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb87fb429e302fb991933ffaef1b4128b37a34432d43ba74f7a552ec376a990->enter($__internal_ffb87fb429e302fb991933ffaef1b4128b37a34432d43ba74f7a552ec376a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ecd7f209873ab454e7f2f871c65294ac91abf3e6a6265f028a235d343c9f49->leave($__internal_f7ecd7f209873ab454e7f2f871c65294ac91abf3e6a6265f028a235d343c9f49_prof);

        
        $__internal_ffb87fb429e302fb991933ffaef1b4128b37a34432d43ba74f7a552ec376a990->leave($__internal_ffb87fb429e302fb991933ffaef1b4128b37a34432d43ba74f7a552ec376a990_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c369bfd63885e6f45f40f48647612827c401b03328333ee8fcb99a6b78e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c369bfd63885e6f45f40f48647612827c401b03328333ee8fcb99a6b78e6ef->enter($__internal_a7c369bfd63885e6f45f40f48647612827c401b03328333ee8fcb99a6b78e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a371952383ad2e463e9f396b57b6fcdfdf01a71987f865461b8bc21e3712a131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a371952383ad2e463e9f396b57b6fcdfdf01a71987f865461b8bc21e3712a131->enter($__internal_a371952383ad2e463e9f396b57b6fcdfdf01a71987f865461b8bc21e3712a131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name", array()) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artists", array()), 0, array(), "array"), "name", array())), "html", null, true);
        
        $__internal_a371952383ad2e463e9f396b57b6fcdfdf01a71987f865461b8bc21e3712a131->leave($__internal_a371952383ad2e463e9f396b57b6fcdfdf01a71987f865461b8bc21e3712a131_prof);

        
        $__internal_a7c369bfd63885e6f45f40f48647612827c401b03328333ee8fcb99a6b78e6ef->leave($__internal_a7c369bfd63885e6f45f40f48647612827c401b03328333ee8fcb99a6b78e6ef_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1852506b5ecaafbff90799a476a2aeaadf220e6fb3d661a4f689baf518e4ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1852506b5ecaafbff90799a476a2aeaadf220e6fb3d661a4f689baf518e4ef4e->enter($__internal_1852506b5ecaafbff90799a476a2aeaadf220e6fb3d661a4f689baf518e4ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_766f4d15fbc5219d12ba291093d8e2f80eadb481147598f1701cb64757af7f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766f4d15fbc5219d12ba291093d8e2f80eadb481147598f1701cb64757af7f6e->enter($__internal_766f4d15fbc5219d12ba291093d8e2f80eadb481147598f1701cb64757af7f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
        echo "')\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div>
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <h3><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name", array()), "html", null, true);
        echo "</strong></h3>
                    <h4>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artists", array()));
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
            // line 20
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
            echo "\" class=\"link-music\">
                                ";
            // line 21
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 22
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo ",
                                ";
            } else {
                // line 24
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo "
                                ";
            }
            // line 26
            echo "                            </a>
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
        // line 28
        echo "                    </h4>
                    <small>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "label", array()), "html", null, true);
        echo "</small>
                    <p class=\"mt-2\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "tracks", array()), "items", array())), "html", null, true);
        echo " Morceaux </p>
                    <p>Sortie : ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "release_date", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-8\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th colspan=\"2\">#</th>
                                <th>Titre</th>
                                <th>durée</th>
                                <th class=\"text-center\">Ajouter</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "tracks", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 45
            echo "                            <tr>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "track_number", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-lg\" aria-hidden=\"true\"></i></button>
                                    <audio >
                                        <source src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
            echo "\" type=\"audio/mp3\">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (int) floor(($this->getAttribute($context["track"], "duration_ms", array()) / 1000)), "i:s"), "html", null, true);
            echo "</td>
                                <td class=\"text-center\"><button class=\"addToLibrary\" data-id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_766f4d15fbc5219d12ba291093d8e2f80eadb481147598f1701cb64757af7f6e->leave($__internal_766f4d15fbc5219d12ba291093d8e2f80eadb481147598f1701cb64757af7f6e_prof);

        
        $__internal_1852506b5ecaafbff90799a476a2aeaadf220e6fb3d661a4f689baf518e4ef4e->leave($__internal_1852506b5ecaafbff90799a476a2aeaadf220e6fb3d661a4f689baf518e4ef4e_prof);

    }

    public function getTemplateName()
    {
        return "album/album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 59,  199 => 56,  195 => 55,  191 => 54,  184 => 50,  177 => 46,  174 => 45,  170 => 44,  154 => 31,  150 => 30,  146 => 29,  143 => 28,  128 => 26,  122 => 24,  116 => 22,  114 => 21,  109 => 20,  92 => 19,  87 => 17,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title  album.name ~ ' - ' ~ album.artists[0].name  %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('{{ album.images[0].url }}')\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div>
                        <img src=\"{{ album.images[1].url }}\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <h3><strong>{{ album.name }}</strong></h3>
                    <h4>
                        {% for artist in album.artists %}
                            <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                {% if not loop.last %}
                                    {{ artist.name }},
                                {% else %}
                                    {{ artist.name }}
                                {% endif %}
                            </a>
                        {% endfor %}
                    </h4>
                    <small>{{ album.label }}</small>
                    <p class=\"mt-2\">{{ album.tracks.items|length }} Morceaux </p>
                    <p>Sortie : {{ album.release_date|date('d-m-Y')  }}</p>
                </div>
                <div class=\"col-sm-8\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th colspan=\"2\">#</th>
                                <th>Titre</th>
                                <th>durée</th>
                                <th class=\"text-center\">Ajouter</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for track in album.tracks.items %}
                            <tr>
                                <td>{{ track.track_number  }}</td>
                                <td>
                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-lg\" aria-hidden=\"true\"></i></button>
                                    <audio >
                                        <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>{{ track.name  }}</td>
                                <td>{{ ( track.duration_ms//1000 )|date('i:s') }}</td>
                                <td class=\"text-center\"><button class=\"addToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "album/album.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\album\\album.html.twig");
    }
}
