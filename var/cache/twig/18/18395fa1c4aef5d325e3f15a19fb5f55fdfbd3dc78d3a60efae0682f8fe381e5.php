<?php

/* dashboard/friends.html.twig */
class __TwigTemplate_f86e7029da33791686054c79a288ccf6c5579f83e8eed207b91e2869b6fd6cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/friends.html.twig", 1);
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
        $__internal_b63f2e96c909d5d0529cc7e48bcb4a3bbaf2e4e5b1ad0a32ee6f182bc27269eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63f2e96c909d5d0529cc7e48bcb4a3bbaf2e4e5b1ad0a32ee6f182bc27269eb->enter($__internal_b63f2e96c909d5d0529cc7e48bcb4a3bbaf2e4e5b1ad0a32ee6f182bc27269eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/friends.html.twig"));

        $__internal_84112991312c9f3c752e3fe24384280e23ab29a3c89e57b1f94d32ba7108056c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84112991312c9f3c752e3fe24384280e23ab29a3c89e57b1f94d32ba7108056c->enter($__internal_84112991312c9f3c752e3fe24384280e23ab29a3c89e57b1f94d32ba7108056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/friends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63f2e96c909d5d0529cc7e48bcb4a3bbaf2e4e5b1ad0a32ee6f182bc27269eb->leave($__internal_b63f2e96c909d5d0529cc7e48bcb4a3bbaf2e4e5b1ad0a32ee6f182bc27269eb_prof);

        
        $__internal_84112991312c9f3c752e3fe24384280e23ab29a3c89e57b1f94d32ba7108056c->leave($__internal_84112991312c9f3c752e3fe24384280e23ab29a3c89e57b1f94d32ba7108056c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e7402303b5f7042dcc3a7f1717cd5489a607b4d8a8c5806de24ddafb4010fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7402303b5f7042dcc3a7f1717cd5489a607b4d8a8c5806de24ddafb4010fdc->enter($__internal_4e7402303b5f7042dcc3a7f1717cd5489a607b4d8a8c5806de24ddafb4010fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5c6d70a0c5bb320be04a1d2929a670987ae4875bdc1c34cd05bde8d2b632698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c6d70a0c5bb320be04a1d2929a670987ae4875bdc1c34cd05bde8d2b632698->enter($__internal_c5c6d70a0c5bb320be04a1d2929a670987ae4875bdc1c34cd05bde8d2b632698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Amis";
        
        $__internal_c5c6d70a0c5bb320be04a1d2929a670987ae4875bdc1c34cd05bde8d2b632698->leave($__internal_c5c6d70a0c5bb320be04a1d2929a670987ae4875bdc1c34cd05bde8d2b632698_prof);

        
        $__internal_4e7402303b5f7042dcc3a7f1717cd5489a607b4d8a8c5806de24ddafb4010fdc->leave($__internal_4e7402303b5f7042dcc3a7f1717cd5489a607b4d8a8c5806de24ddafb4010fdc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf139888ed2dfdb62da69be965fec5c06f50c9e09bd24d418bada724b93b19c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf139888ed2dfdb62da69be965fec5c06f50c9e09bd24d418bada724b93b19c1->enter($__internal_cf139888ed2dfdb62da69be965fec5c06f50c9e09bd24d418bada724b93b19c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c26655875ffd4270d4c5bde4c05acf33e8bc4bebaa8fb0256a14dac49ee7bd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26655875ffd4270d4c5bde4c05acf33e8bc4bebaa8fb0256a14dac49ee7bd97->enter($__internal_c26655875ffd4270d4c5bde4c05acf33e8bc4bebaa8fb0256a14dac49ee7bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/music-connexion.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
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
                <div class=\"container flex mb-3\">
                    <div class=\"flexItem\">
                        <h2>Mes Amis</h2>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 31
        if ((isset($context["usersFriends"]) ? $context["usersFriends"] : $this->getContext($context, "usersFriends"))) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersFriends"]) ? $context["usersFriends"] : $this->getContext($context, "usersFriends")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 33
                echo "                    <div class=\"col-sm-3\" >
                        <div class=\"card\">
                            <img class=\"card-img-top \" src=\"";
                // line 35
                if ($this->getAttribute($context["friend"], "picture", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "picture", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute($context["friend"], "email", array()), 210, "retro")), "html", null, true);
                }
                echo "\" alt=\"Card image cap\" style='height: 210px;'>
                            <div class=\"card-body \">
                                <h4 class=\"card-title\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "username", array()), "html", null, true);
                echo "</h4>
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($context["friend"], "username", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                <button class=\"removeToFriends btn btn-danger btn-block\" data-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i></button>
                            </div>
                        </div>
                    </div>
                    ";
                // line 43
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 44
                    echo "                        </div><div class=\"row\">
                    ";
                }
                // line 46
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
        }
        // line 48
        echo "                ";
        if ((isset($context["usersFriends2"]) ? $context["usersFriends2"] : $this->getContext($context, "usersFriends2"))) {
            // line 49
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersFriends2"]) ? $context["usersFriends2"] : $this->getContext($context, "usersFriends2")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 50
                echo "                    <div class=\"col-sm-3\" >
                        <div class=\"card\">
                            <img class=\"card-img-top \" src=\"";
                // line 52
                if ($this->getAttribute($context["friend"], "picture", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "picture", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute($context["friend"], "email", array()), 210, "retro")), "html", null, true);
                }
                echo "\" alt=\"Card image cap\" style='height: 210px;'>
                            <div class=\"card-body \">
                                <h4 class=\"card-title\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "username", array()), "html", null, true);
                echo "</h4>
                                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($context["friend"], "username", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                <button class=\"removeToFriends2 btn btn-danger btn-block\" data-id=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i></button>
                            </div>
                        </div>
                    </div>
                    ";
                // line 60
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                    // line 61
                    echo "                        </div><div class=\"row\">
                    ";
                }
                // line 63
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        }
        // line 65
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c26655875ffd4270d4c5bde4c05acf33e8bc4bebaa8fb0256a14dac49ee7bd97->leave($__internal_c26655875ffd4270d4c5bde4c05acf33e8bc4bebaa8fb0256a14dac49ee7bd97_prof);

        
        $__internal_cf139888ed2dfdb62da69be965fec5c06f50c9e09bd24d418bada724b93b19c1->leave($__internal_cf139888ed2dfdb62da69be965fec5c06f50c9e09bd24d418bada724b93b19c1_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 65,  256 => 64,  242 => 63,  238 => 61,  236 => 60,  229 => 56,  225 => 55,  221 => 54,  211 => 52,  207 => 50,  189 => 49,  186 => 48,  183 => 47,  169 => 46,  165 => 44,  163 => 43,  156 => 39,  152 => 38,  148 => 37,  138 => 35,  134 => 33,  116 => 32,  114 => 31,  101 => 21,  97 => 19,  91 => 18,  84 => 16,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Amis' %}

{% block content %}
<div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('{{asset('img/music-connexion.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
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
                <div class=\"container flex mb-3\">
                    <div class=\"flexItem\">
                        <h2>Mes Amis</h2>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                {% if usersFriends %}
                    {% for friend in usersFriends %}
                    <div class=\"col-sm-3\" >
                        <div class=\"card\">
                            <img class=\"card-img-top \" src=\"{% if friend.picture %}{{ asset('photo/') }}{{ friend.picture }}{% else %}{{ get_gravatar(friend.email, 210, 'retro') }}{% endif %}\" alt=\"Card image cap\" style='height: 210px;'>
                            <div class=\"card-body \">
                                <h4 class=\"card-title\">{{ friend.username }}</h4>
                                <a href=\"{{ path('display', {'username' : friend.username}) }}\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                <button class=\"removeToFriends btn btn-danger btn-block\" data-id=\"{{ friend.id }}\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i></button>
                            </div>
                        </div>
                    </div>
                    {% if loop.index is divisible by(4) %}
                        </div><div class=\"row\">
                    {% endif %}
                    {% endfor %}
                {% endif %}
                {% if usersFriends2 %}
                    {% for friend in usersFriends2 %}
                    <div class=\"col-sm-3\" >
                        <div class=\"card\">
                            <img class=\"card-img-top \" src=\"{% if friend.picture %}{{ asset('photo/') }}{{ friend.picture }}{% else %}{{ get_gravatar(friend.email, 210, 'retro') }}{% endif %}\" alt=\"Card image cap\" style='height: 210px;'>
                            <div class=\"card-body \">
                                <h4 class=\"card-title\">{{ friend.username }}</h4>
                                <a href=\"{{ path('display', {'username' : friend.username}) }}\" class=\"btn btn-primary btn-block mb-1\">voir profil</a>
                                <button class=\"removeToFriends2 btn btn-danger btn-block\" data-id=\"{{ friend.id }}\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i></button>
                            </div>
                        </div>
                    </div>
                    {% if loop.index is divisible by(4) %}
                        </div><div class=\"row\">
                    {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "dashboard/friends.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\friends.html.twig");
    }
}
