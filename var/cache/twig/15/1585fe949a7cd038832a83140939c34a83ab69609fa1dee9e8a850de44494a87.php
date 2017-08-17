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
        $__internal_852b69455c0249c5156b66ae45d82287f5004a128ec895b8b03eb81b41d59a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852b69455c0249c5156b66ae45d82287f5004a128ec895b8b03eb81b41d59a7f->enter($__internal_852b69455c0249c5156b66ae45d82287f5004a128ec895b8b03eb81b41d59a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $__internal_08c56d6e8347280e4094d5731f8ff6bbfee209014cb8ff7092958eda9f0baeea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c56d6e8347280e4094d5731f8ff6bbfee209014cb8ff7092958eda9f0baeea->enter($__internal_08c56d6e8347280e4094d5731f8ff6bbfee209014cb8ff7092958eda9f0baeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_852b69455c0249c5156b66ae45d82287f5004a128ec895b8b03eb81b41d59a7f->leave($__internal_852b69455c0249c5156b66ae45d82287f5004a128ec895b8b03eb81b41d59a7f_prof);

        
        $__internal_08c56d6e8347280e4094d5731f8ff6bbfee209014cb8ff7092958eda9f0baeea->leave($__internal_08c56d6e8347280e4094d5731f8ff6bbfee209014cb8ff7092958eda9f0baeea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_065cf0ea366be02faed265bdd90c05bd070ba06f6bdaf83820a3dcb7be69e8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065cf0ea366be02faed265bdd90c05bd070ba06f6bdaf83820a3dcb7be69e8c7->enter($__internal_065cf0ea366be02faed265bdd90c05bd070ba06f6bdaf83820a3dcb7be69e8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c08052cd3f1c476525f5eaebc6b6143c2ba3d7bdc732cba1f5d85657d6e6701a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08052cd3f1c476525f5eaebc6b6143c2ba3d7bdc732cba1f5d85657d6e6701a->enter($__internal_c08052cd3f1c476525f5eaebc6b6143c2ba3d7bdc732cba1f5d85657d6e6701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name", array()) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artists", array()), 0, array(), "array"), "name", array())), "html", null, true);
        
        $__internal_c08052cd3f1c476525f5eaebc6b6143c2ba3d7bdc732cba1f5d85657d6e6701a->leave($__internal_c08052cd3f1c476525f5eaebc6b6143c2ba3d7bdc732cba1f5d85657d6e6701a_prof);

        
        $__internal_065cf0ea366be02faed265bdd90c05bd070ba06f6bdaf83820a3dcb7be69e8c7->leave($__internal_065cf0ea366be02faed265bdd90c05bd070ba06f6bdaf83820a3dcb7be69e8c7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_87adf65ab89546fa01b7819aca868a26a563098a25772657fa36a39e46b223d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87adf65ab89546fa01b7819aca868a26a563098a25772657fa36a39e46b223d1->enter($__internal_87adf65ab89546fa01b7819aca868a26a563098a25772657fa36a39e46b223d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f8ae2b92d23975dcfaa79ddbfc99dabf6df8f95154770a6fbb8dc2300207b11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ae2b92d23975dcfaa79ddbfc99dabf6df8f95154770a6fbb8dc2300207b11d->enter($__internal_f8ae2b92d23975dcfaa79ddbfc99dabf6df8f95154770a6fbb8dc2300207b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                <th>#</th>
                                <th>Titre</th>
                                <th>durée</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "tracks", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 44
            echo "                            <tr>
                                <TD>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "track_number", array()), "html", null, true);
            echo "</TD>
                                <TD>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
            echo "</TD>
                                <TD>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (int) floor(($this->getAttribute($context["track"], "duration_ms", array()) / 1000)), "i:s"), "html", null, true);
            echo "</TD>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f8ae2b92d23975dcfaa79ddbfc99dabf6df8f95154770a6fbb8dc2300207b11d->leave($__internal_f8ae2b92d23975dcfaa79ddbfc99dabf6df8f95154770a6fbb8dc2300207b11d_prof);

        
        $__internal_87adf65ab89546fa01b7819aca868a26a563098a25772657fa36a39e46b223d1->leave($__internal_87adf65ab89546fa01b7819aca868a26a563098a25772657fa36a39e46b223d1_prof);

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
        return array (  193 => 50,  184 => 47,  180 => 46,  176 => 45,  173 => 44,  169 => 43,  154 => 31,  150 => 30,  146 => 29,  143 => 28,  128 => 26,  122 => 24,  116 => 22,  114 => 21,  109 => 20,  92 => 19,  87 => 17,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                <th>#</th>
                                <th>Titre</th>
                                <th>durée</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for track in album.tracks.items %}
                            <tr>
                                <TD>{{ track.track_number  }}</TD>
                                <TD>{{ track.name  }}</TD>
                                <TD>{{ ( track.duration_ms//1000 )|date('i:s') }}</TD>
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
