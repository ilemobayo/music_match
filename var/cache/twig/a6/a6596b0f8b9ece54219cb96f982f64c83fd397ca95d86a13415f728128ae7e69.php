<?php

/* dashboard/library.html.twig */
class __TwigTemplate_87d34244843d3fb67e742237a91abbc386a8c67eee6e84b53627fa289ad81b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/library.html.twig", 1);
        $this->blocks = array(
            'titile' => array($this, 'block_titile'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b06b279799df56babbafe4781bf587534890d3e7a212bbf5db665ab4d899a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b06b279799df56babbafe4781bf587534890d3e7a212bbf5db665ab4d899a8f->enter($__internal_1b06b279799df56babbafe4781bf587534890d3e7a212bbf5db665ab4d899a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $__internal_c38a9e30ae7c29e93c20cbeac691eb33ef9fcd1d0cf425119dc983242d1966bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38a9e30ae7c29e93c20cbeac691eb33ef9fcd1d0cf425119dc983242d1966bc->enter($__internal_c38a9e30ae7c29e93c20cbeac691eb33ef9fcd1d0cf425119dc983242d1966bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b06b279799df56babbafe4781bf587534890d3e7a212bbf5db665ab4d899a8f->leave($__internal_1b06b279799df56babbafe4781bf587534890d3e7a212bbf5db665ab4d899a8f_prof);

        
        $__internal_c38a9e30ae7c29e93c20cbeac691eb33ef9fcd1d0cf425119dc983242d1966bc->leave($__internal_c38a9e30ae7c29e93c20cbeac691eb33ef9fcd1d0cf425119dc983242d1966bc_prof);

    }

    // line 3
    public function block_titile($context, array $blocks = array())
    {
        $__internal_7ad98feafd92973139dd52af347c7aa3be1eb54d522329d73d148a7087a089b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad98feafd92973139dd52af347c7aa3be1eb54d522329d73d148a7087a089b5->enter($__internal_7ad98feafd92973139dd52af347c7aa3be1eb54d522329d73d148a7087a089b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titile"));

        $__internal_bce0d857567854e6824bb6dda16ffba28d536d283f2480aecb0bccdfd4afbce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce0d857567854e6824bb6dda16ffba28d536d283f2480aecb0bccdfd4afbce2->enter($__internal_bce0d857567854e6824bb6dda16ffba28d536d283f2480aecb0bccdfd4afbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titile"));

        echo "Bibliotheque";
        
        $__internal_bce0d857567854e6824bb6dda16ffba28d536d283f2480aecb0bccdfd4afbce2->leave($__internal_bce0d857567854e6824bb6dda16ffba28d536d283f2480aecb0bccdfd4afbce2_prof);

        
        $__internal_7ad98feafd92973139dd52af347c7aa3be1eb54d522329d73d148a7087a089b5->leave($__internal_7ad98feafd92973139dd52af347c7aa3be1eb54d522329d73d148a7087a089b5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_33ead35ad546f56cba3107793327382061c0bcc746d805799263297b693046a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ead35ad546f56cba3107793327382061c0bcc746d805799263297b693046a3->enter($__internal_33ead35ad546f56cba3107793327382061c0bcc746d805799263297b693046a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_57e1384eefd3495333b16a3f0d32eba3f5d604879904e1c4afc34c294059a9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e1384eefd3495333b16a3f0d32eba3f5d604879904e1c4afc34c294059a9dc->enter($__internal_57e1384eefd3495333b16a3f0d32eba3f5d604879904e1c4afc34c294059a9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        ";
        // line 18
        echo "                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliotheque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 31
        if ((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser"))) {
            // line 32
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 33
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-2 offset-md-0\">
                                                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4\">
                                                        <h6><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 44
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
                    // line 45
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 46
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 47
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 49
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 51
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
                // line 53
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "album", array()), "name", array()), "html", null, true);
                echo "</a>
                                                            </small><br/>
                                                        </h6>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
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
            // line 73
            echo "                                    ";
        } else {
            // line 74
            echo "                                        <li>
                                            <p><strong>No tracks</strong></p>
                                            <h3 class=\"text-muted\">Not following anyone yet :(</h3>
                                            <button class=\"btn btn-warning btn-round\">Find artists</button>
                                        </li>
                                    ";
        }
        // line 80
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_57e1384eefd3495333b16a3f0d32eba3f5d604879904e1c4afc34c294059a9dc->leave($__internal_57e1384eefd3495333b16a3f0d32eba3f5d604879904e1c4afc34c294059a9dc_prof);

        
        $__internal_33ead35ad546f56cba3107793327382061c0bcc746d805799263297b693046a3->leave($__internal_33ead35ad546f56cba3107793327382061c0bcc746d805799263297b693046a3_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 80,  224 => 74,  221 => 73,  208 => 66,  200 => 61,  189 => 55,  185 => 53,  170 => 51,  164 => 49,  158 => 47,  156 => 46,  151 => 45,  134 => 44,  126 => 41,  119 => 37,  115 => 36,  110 => 33,  105 => 32,  103 => 31,  88 => 18,  84 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block titile 'Bibliotheque' %}

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
                        {# <h6 class=\"description\">Music Producer</h6> #}
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliotheque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if tracksUser %}
                                        {% for track in tracksUser.tracks %}
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
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
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
{% endblock %}", "dashboard/library.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\library.html.twig");
    }
}
