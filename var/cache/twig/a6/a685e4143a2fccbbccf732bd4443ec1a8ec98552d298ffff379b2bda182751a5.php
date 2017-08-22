<?php

/* user/add_tags.html.twig */
class __TwigTemplate_06ebfada273f6b96b82989ea4b3e1b142377db3e4e76ebeea2072775ef37c646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/add_tags.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b40f6f8255515ce1929043ac91a92adc73a01cccd4cf8de707692743c535a0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40f6f8255515ce1929043ac91a92adc73a01cccd4cf8de707692743c535a0a1->enter($__internal_b40f6f8255515ce1929043ac91a92adc73a01cccd4cf8de707692743c535a0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $__internal_35c28f1d5d7405ce919bb8590013e61b4e60fd77c8d1e50c8da68d8b5c01ab47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c28f1d5d7405ce919bb8590013e61b4e60fd77c8d1e50c8da68d8b5c01ab47->enter($__internal_35c28f1d5d7405ce919bb8590013e61b4e60fd77c8d1e50c8da68d8b5c01ab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b40f6f8255515ce1929043ac91a92adc73a01cccd4cf8de707692743c535a0a1->leave($__internal_b40f6f8255515ce1929043ac91a92adc73a01cccd4cf8de707692743c535a0a1_prof);

        
        $__internal_35c28f1d5d7405ce919bb8590013e61b4e60fd77c8d1e50c8da68d8b5c01ab47->leave($__internal_35c28f1d5d7405ce919bb8590013e61b4e60fd77c8d1e50c8da68d8b5c01ab47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e45573a9678e50c1b0c423225d726685e62f66abb3d7ce38b5e84872d0b5d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e45573a9678e50c1b0c423225d726685e62f66abb3d7ce38b5e84872d0b5d67->enter($__internal_8e45573a9678e50c1b0c423225d726685e62f66abb3d7ce38b5e84872d0b5d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a199de6f0639a7a03d965e699bcc88a1e1022da029e1f7e1bf437c6d4bbb397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a199de6f0639a7a03d965e699bcc88a1e1022da029e1f7e1bf437c6d4bbb397->enter($__internal_5a199de6f0639a7a03d965e699bcc88a1e1022da029e1f7e1bf437c6d4bbb397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter des tags";
        
        $__internal_5a199de6f0639a7a03d965e699bcc88a1e1022da029e1f7e1bf437c6d4bbb397->leave($__internal_5a199de6f0639a7a03d965e699bcc88a1e1022da029e1f7e1bf437c6d4bbb397_prof);

        
        $__internal_8e45573a9678e50c1b0c423225d726685e62f66abb3d7ce38b5e84872d0b5d67->leave($__internal_8e45573a9678e50c1b0c423225d726685e62f66abb3d7ce38b5e84872d0b5d67_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d6bd9964d988f83dea075b8d32f75cdb0c08d9e8b289b65c0f3ee3ee2844cff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bd9964d988f83dea075b8d32f75cdb0c08d9e8b289b65c0f3ee3ee2844cff8->enter($__internal_d6bd9964d988f83dea075b8d32f75cdb0c08d9e8b289b65c0f3ee3ee2844cff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_691cb094b22f8fc353501c497867d7539b9f9014b1df082b58c4241c46f4b75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691cb094b22f8fc353501c497867d7539b9f9014b1df082b58c4241c46f4b75c->enter($__internal_691cb094b22f8fc353501c497867d7539b9f9014b1df082b58c4241c46f4b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_691cb094b22f8fc353501c497867d7539b9f9014b1df082b58c4241c46f4b75c->leave($__internal_691cb094b22f8fc353501c497867d7539b9f9014b1df082b58c4241c46f4b75c_prof);

        
        $__internal_d6bd9964d988f83dea075b8d32f75cdb0c08d9e8b289b65c0f3ee3ee2844cff8->leave($__internal_d6bd9964d988f83dea075b8d32f75cdb0c08d9e8b289b65c0f3ee3ee2844cff8_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_052f7fb7afd25327c40feec1d34d8c28893129949169756494555c36496b0024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052f7fb7afd25327c40feec1d34d8c28893129949169756494555c36496b0024->enter($__internal_052f7fb7afd25327c40feec1d34d8c28893129949169756494555c36496b0024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b00bca1733b1c34890fb4e6b3d7a092f97c67172058dea74d22d60edcfd92b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00bca1733b1c34890fb4e6b3d7a092f97c67172058dea74d22d60edcfd92b7a->enter($__internal_b00bca1733b1c34890fb4e6b3d7a092f97c67172058dea74d22d60edcfd92b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/musician-664432.jpg"), "html", null, true);
        echo "')\">
            <div class=\"filter\">
            </div>
        </div>
    </div> 

    <div class=\"container\">
        <h2>Veuillez ajouter les styles musicaux que vous recherchez</h2>
        <form method=\"post\">
            <div class=\"row my-4\">
                <div class=\"col-sm-10 offset-sm-1\">
                    <select name=\"tags[]\" class=\"form-control\" id=\"tagsForm\" multiple=\"multiple\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 25
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\">
                                ";
            // line 26
            echo twig_escape_filter($this->env, twig_replace_filter($context["tag"], array("-" => " ")), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </select>
                    ";
        // line 30
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            // line 31
            echo "                        <div class=\"alert alert-danger mt-2 text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "tags", array()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 33
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 offset-sm-3\">
                    <input type =\"submit\" class=\"btn btn-primary form-control\" value=\"Valider vos styles musicaux\">
                </div>
            </div>
        </form>
    </div>                   
";
        
        $__internal_b00bca1733b1c34890fb4e6b3d7a092f97c67172058dea74d22d60edcfd92b7a->leave($__internal_b00bca1733b1c34890fb4e6b3d7a092f97c67172058dea74d22d60edcfd92b7a_prof);

        
        $__internal_052f7fb7afd25327c40feec1d34d8c28893129949169756494555c36496b0024->leave($__internal_052f7fb7afd25327c40feec1d34d8c28893129949169756494555c36496b0024_prof);

    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        $__internal_a788920b7873796b160f062ea1e5b0d833d83b34c44c857b0d0e54c6425b5aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a788920b7873796b160f062ea1e5b0d833d83b34c44c857b0d0e54c6425b5aa2->enter($__internal_a788920b7873796b160f062ea1e5b0d833d83b34c44c857b0d0e54c6425b5aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_679a3372f4f2d82b7dade00b0253abda43563fe7b4f906163d9c682f4b8a7b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679a3372f4f2d82b7dade00b0253abda43563fe7b4f906163d9c682f4b8a7b54->enter($__internal_679a3372f4f2d82b7dade00b0253abda43563fe7b4f906163d9c682f4b8a7b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 45
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$('#tagsForm').select2();
        }); 
    </script>
";
        
        $__internal_679a3372f4f2d82b7dade00b0253abda43563fe7b4f906163d9c682f4b8a7b54->leave($__internal_679a3372f4f2d82b7dade00b0253abda43563fe7b4f906163d9c682f4b8a7b54_prof);

        
        $__internal_a788920b7873796b160f062ea1e5b0d833d83b34c44c857b0d0e54c6425b5aa2->leave($__internal_a788920b7873796b160f062ea1e5b0d833d83b34c44c857b0d0e54c6425b5aa2_prof);

    }

    public function getTemplateName()
    {
        return "user/add_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  159 => 44,  140 => 33,  134 => 31,  132 => 30,  129 => 29,  120 => 26,  115 => 25,  111 => 24,  96 => 12,  93 => 11,  84 => 10,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title 'Ajouter des tags' %}

{% block stylesheet %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}
    
{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('{{asset('img/musician-664432.jpg')}}')\">
            <div class=\"filter\">
            </div>
        </div>
    </div> 

    <div class=\"container\">
        <h2>Veuillez ajouter les styles musicaux que vous recherchez</h2>
        <form method=\"post\">
            <div class=\"row my-4\">
                <div class=\"col-sm-10 offset-sm-1\">
                    <select name=\"tags[]\" class=\"form-control\" id=\"tagsForm\" multiple=\"multiple\">
                        {% for tag in tags.genres %}
                            <option value=\"{{tag}}\">
                                {{tag|replace({'-' : ' '})}}
                            </option>
                        {% endfor %}
                    </select>
                    {% if errors %}
                        <div class=\"alert alert-danger mt-2 text-center\">{{ errors.tags }}</div>
                    {% endif %}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 offset-sm-3\">
                    <input type =\"submit\" class=\"btn btn-primary form-control\" value=\"Valider vos styles musicaux\">
                </div>
            </div>
        </form>
    </div>                   
{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$('#tagsForm').select2();
        }); 
    </script>
{% endblock %}", "user/add_tags.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\add_tags.html.twig");
    }
}
