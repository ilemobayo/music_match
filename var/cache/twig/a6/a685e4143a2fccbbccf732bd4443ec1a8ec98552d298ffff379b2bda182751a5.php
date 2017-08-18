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
        $__internal_a703b4d47be075545ab6ca21f2b5f3a1316f143830b3a26bc6e8540b6e1a6b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a703b4d47be075545ab6ca21f2b5f3a1316f143830b3a26bc6e8540b6e1a6b0a->enter($__internal_a703b4d47be075545ab6ca21f2b5f3a1316f143830b3a26bc6e8540b6e1a6b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $__internal_5953b3ac1b10057aa08812a3916bd7f5a2dbbed0765530774ec8781f2ed09a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5953b3ac1b10057aa08812a3916bd7f5a2dbbed0765530774ec8781f2ed09a26->enter($__internal_5953b3ac1b10057aa08812a3916bd7f5a2dbbed0765530774ec8781f2ed09a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a703b4d47be075545ab6ca21f2b5f3a1316f143830b3a26bc6e8540b6e1a6b0a->leave($__internal_a703b4d47be075545ab6ca21f2b5f3a1316f143830b3a26bc6e8540b6e1a6b0a_prof);

        
        $__internal_5953b3ac1b10057aa08812a3916bd7f5a2dbbed0765530774ec8781f2ed09a26->leave($__internal_5953b3ac1b10057aa08812a3916bd7f5a2dbbed0765530774ec8781f2ed09a26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e84b36bacaab645680d5766dfa0a59a4e1ac80409aa579af5c6bc5eaf3c896f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e84b36bacaab645680d5766dfa0a59a4e1ac80409aa579af5c6bc5eaf3c896f->enter($__internal_2e84b36bacaab645680d5766dfa0a59a4e1ac80409aa579af5c6bc5eaf3c896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15274c535634a8a99c2056e15ee2f2e211fee3d8cd8a06e70eec388f10fff5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15274c535634a8a99c2056e15ee2f2e211fee3d8cd8a06e70eec388f10fff5a1->enter($__internal_15274c535634a8a99c2056e15ee2f2e211fee3d8cd8a06e70eec388f10fff5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter des tags";
        
        $__internal_15274c535634a8a99c2056e15ee2f2e211fee3d8cd8a06e70eec388f10fff5a1->leave($__internal_15274c535634a8a99c2056e15ee2f2e211fee3d8cd8a06e70eec388f10fff5a1_prof);

        
        $__internal_2e84b36bacaab645680d5766dfa0a59a4e1ac80409aa579af5c6bc5eaf3c896f->leave($__internal_2e84b36bacaab645680d5766dfa0a59a4e1ac80409aa579af5c6bc5eaf3c896f_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a1e3470687f381aae5a4de915486d92c1fc62c1b2d56cd46a3933f14e5c6d47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e3470687f381aae5a4de915486d92c1fc62c1b2d56cd46a3933f14e5c6d47c->enter($__internal_a1e3470687f381aae5a4de915486d92c1fc62c1b2d56cd46a3933f14e5c6d47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_78f22bc4c5957e297b746b802ffe275818837a123779fe4a3f22db3d632c343a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f22bc4c5957e297b746b802ffe275818837a123779fe4a3f22db3d632c343a->enter($__internal_78f22bc4c5957e297b746b802ffe275818837a123779fe4a3f22db3d632c343a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_78f22bc4c5957e297b746b802ffe275818837a123779fe4a3f22db3d632c343a->leave($__internal_78f22bc4c5957e297b746b802ffe275818837a123779fe4a3f22db3d632c343a_prof);

        
        $__internal_a1e3470687f381aae5a4de915486d92c1fc62c1b2d56cd46a3933f14e5c6d47c->leave($__internal_a1e3470687f381aae5a4de915486d92c1fc62c1b2d56cd46a3933f14e5c6d47c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f73654ad320951069d41e8edaa89718b75baa785a6de0bb5a069b7c2d68a431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f73654ad320951069d41e8edaa89718b75baa785a6de0bb5a069b7c2d68a431->enter($__internal_2f73654ad320951069d41e8edaa89718b75baa785a6de0bb5a069b7c2d68a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_69d70b320dc3a466578f04b06a163e5e43d2746f034f3997d6d2947a84db420f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d70b320dc3a466578f04b06a163e5e43d2746f034f3997d6d2947a84db420f->enter($__internal_69d70b320dc3a466578f04b06a163e5e43d2746f034f3997d6d2947a84db420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_69d70b320dc3a466578f04b06a163e5e43d2746f034f3997d6d2947a84db420f->leave($__internal_69d70b320dc3a466578f04b06a163e5e43d2746f034f3997d6d2947a84db420f_prof);

        
        $__internal_2f73654ad320951069d41e8edaa89718b75baa785a6de0bb5a069b7c2d68a431->leave($__internal_2f73654ad320951069d41e8edaa89718b75baa785a6de0bb5a069b7c2d68a431_prof);

    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        $__internal_26439346f87e00ccfb52f3a498034fdada1f59cfca15427dee7ff5d1f4c9af65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26439346f87e00ccfb52f3a498034fdada1f59cfca15427dee7ff5d1f4c9af65->enter($__internal_26439346f87e00ccfb52f3a498034fdada1f59cfca15427dee7ff5d1f4c9af65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_512b80625565b0c1116d94ad745255d0abe96077679532c2b4bf889ddb2cf6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512b80625565b0c1116d94ad745255d0abe96077679532c2b4bf889ddb2cf6b1->enter($__internal_512b80625565b0c1116d94ad745255d0abe96077679532c2b4bf889ddb2cf6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_512b80625565b0c1116d94ad745255d0abe96077679532c2b4bf889ddb2cf6b1->leave($__internal_512b80625565b0c1116d94ad745255d0abe96077679532c2b4bf889ddb2cf6b1_prof);

        
        $__internal_26439346f87e00ccfb52f3a498034fdada1f59cfca15427dee7ff5d1f4c9af65->leave($__internal_26439346f87e00ccfb52f3a498034fdada1f59cfca15427dee7ff5d1f4c9af65_prof);

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
