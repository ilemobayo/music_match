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
        $__internal_0e785c35745be38641c7176a960b2df28379d94e9defb5c8faef563306eaede4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e785c35745be38641c7176a960b2df28379d94e9defb5c8faef563306eaede4->enter($__internal_0e785c35745be38641c7176a960b2df28379d94e9defb5c8faef563306eaede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $__internal_b7a511f9583c597d78dee97e42f51ac961eb5b97e43aa4b1fe077a4c27f23653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a511f9583c597d78dee97e42f51ac961eb5b97e43aa4b1fe077a4c27f23653->enter($__internal_b7a511f9583c597d78dee97e42f51ac961eb5b97e43aa4b1fe077a4c27f23653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e785c35745be38641c7176a960b2df28379d94e9defb5c8faef563306eaede4->leave($__internal_0e785c35745be38641c7176a960b2df28379d94e9defb5c8faef563306eaede4_prof);

        
        $__internal_b7a511f9583c597d78dee97e42f51ac961eb5b97e43aa4b1fe077a4c27f23653->leave($__internal_b7a511f9583c597d78dee97e42f51ac961eb5b97e43aa4b1fe077a4c27f23653_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_921261dcb5de6d4239c2572301d28bae419ecce9b030a1b9f2e80be390d1d3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921261dcb5de6d4239c2572301d28bae419ecce9b030a1b9f2e80be390d1d3d2->enter($__internal_921261dcb5de6d4239c2572301d28bae419ecce9b030a1b9f2e80be390d1d3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_567a9e19288bd69856c3d784bdae62d50865198afb289ef76451ab952378890f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567a9e19288bd69856c3d784bdae62d50865198afb289ef76451ab952378890f->enter($__internal_567a9e19288bd69856c3d784bdae62d50865198afb289ef76451ab952378890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter des tags";
        
        $__internal_567a9e19288bd69856c3d784bdae62d50865198afb289ef76451ab952378890f->leave($__internal_567a9e19288bd69856c3d784bdae62d50865198afb289ef76451ab952378890f_prof);

        
        $__internal_921261dcb5de6d4239c2572301d28bae419ecce9b030a1b9f2e80be390d1d3d2->leave($__internal_921261dcb5de6d4239c2572301d28bae419ecce9b030a1b9f2e80be390d1d3d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_264352860efe268b948760d86c4ae9068f8ea194f922ad5ee33b7c9bbb0efc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264352860efe268b948760d86c4ae9068f8ea194f922ad5ee33b7c9bbb0efc83->enter($__internal_264352860efe268b948760d86c4ae9068f8ea194f922ad5ee33b7c9bbb0efc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5eb450270916ef0e7317ad26f8ea056b83f94b6cfc350acf67334774626d91a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb450270916ef0e7317ad26f8ea056b83f94b6cfc350acf67334774626d91a7->enter($__internal_5eb450270916ef0e7317ad26f8ea056b83f94b6cfc350acf67334774626d91a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_5eb450270916ef0e7317ad26f8ea056b83f94b6cfc350acf67334774626d91a7->leave($__internal_5eb450270916ef0e7317ad26f8ea056b83f94b6cfc350acf67334774626d91a7_prof);

        
        $__internal_264352860efe268b948760d86c4ae9068f8ea194f922ad5ee33b7c9bbb0efc83->leave($__internal_264352860efe268b948760d86c4ae9068f8ea194f922ad5ee33b7c9bbb0efc83_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb66624f78c065cd6fe3a557206d35280908718cf03c98f5fe48070eda89545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb66624f78c065cd6fe3a557206d35280908718cf03c98f5fe48070eda89545a->enter($__internal_cb66624f78c065cd6fe3a557206d35280908718cf03c98f5fe48070eda89545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_67af59a42656c05e6f1c93fc716b45d3b98227fe8d850398987a23de53dd4e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67af59a42656c05e6f1c93fc716b45d3b98227fe8d850398987a23de53dd4e2c->enter($__internal_67af59a42656c05e6f1c93fc716b45d3b98227fe8d850398987a23de53dd4e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_67af59a42656c05e6f1c93fc716b45d3b98227fe8d850398987a23de53dd4e2c->leave($__internal_67af59a42656c05e6f1c93fc716b45d3b98227fe8d850398987a23de53dd4e2c_prof);

        
        $__internal_cb66624f78c065cd6fe3a557206d35280908718cf03c98f5fe48070eda89545a->leave($__internal_cb66624f78c065cd6fe3a557206d35280908718cf03c98f5fe48070eda89545a_prof);

    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        $__internal_234fff9d6815ed7d51ea3140e980a27c754fe225fb71e417ce98e69613f51dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234fff9d6815ed7d51ea3140e980a27c754fe225fb71e417ce98e69613f51dfa->enter($__internal_234fff9d6815ed7d51ea3140e980a27c754fe225fb71e417ce98e69613f51dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_ad6ba7d4c7790ce80580bbc3e8ad05da57c9244bb9099d10f4a38d8b7acfbce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6ba7d4c7790ce80580bbc3e8ad05da57c9244bb9099d10f4a38d8b7acfbce3->enter($__internal_ad6ba7d4c7790ce80580bbc3e8ad05da57c9244bb9099d10f4a38d8b7acfbce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_ad6ba7d4c7790ce80580bbc3e8ad05da57c9244bb9099d10f4a38d8b7acfbce3->leave($__internal_ad6ba7d4c7790ce80580bbc3e8ad05da57c9244bb9099d10f4a38d8b7acfbce3_prof);

        
        $__internal_234fff9d6815ed7d51ea3140e980a27c754fe225fb71e417ce98e69613f51dfa->leave($__internal_234fff9d6815ed7d51ea3140e980a27c754fe225fb71e417ce98e69613f51dfa_prof);

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
