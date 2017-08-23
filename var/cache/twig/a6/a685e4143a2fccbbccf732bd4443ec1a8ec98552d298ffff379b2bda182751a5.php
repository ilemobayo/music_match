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
        $__internal_71f1e77c6ab2c46fa00d50b70948dc6dad19e662d1a8c8f219bb378eaeb46428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f1e77c6ab2c46fa00d50b70948dc6dad19e662d1a8c8f219bb378eaeb46428->enter($__internal_71f1e77c6ab2c46fa00d50b70948dc6dad19e662d1a8c8f219bb378eaeb46428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $__internal_4c761ae778c73dad789a8ae228d1d5128152f1cb13985c7c2f96627e19a214ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c761ae778c73dad789a8ae228d1d5128152f1cb13985c7c2f96627e19a214ca->enter($__internal_4c761ae778c73dad789a8ae228d1d5128152f1cb13985c7c2f96627e19a214ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f1e77c6ab2c46fa00d50b70948dc6dad19e662d1a8c8f219bb378eaeb46428->leave($__internal_71f1e77c6ab2c46fa00d50b70948dc6dad19e662d1a8c8f219bb378eaeb46428_prof);

        
        $__internal_4c761ae778c73dad789a8ae228d1d5128152f1cb13985c7c2f96627e19a214ca->leave($__internal_4c761ae778c73dad789a8ae228d1d5128152f1cb13985c7c2f96627e19a214ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd9fbdd86b6c038ab66301fede98ad235f50015e145aa8212ec1aa350159fc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9fbdd86b6c038ab66301fede98ad235f50015e145aa8212ec1aa350159fc80->enter($__internal_bd9fbdd86b6c038ab66301fede98ad235f50015e145aa8212ec1aa350159fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87f48b520889b50910d726ea71d2c322fc4e53dd62a8e7dd569cf24bf215c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f48b520889b50910d726ea71d2c322fc4e53dd62a8e7dd569cf24bf215c847->enter($__internal_87f48b520889b50910d726ea71d2c322fc4e53dd62a8e7dd569cf24bf215c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter des tags";
        
        $__internal_87f48b520889b50910d726ea71d2c322fc4e53dd62a8e7dd569cf24bf215c847->leave($__internal_87f48b520889b50910d726ea71d2c322fc4e53dd62a8e7dd569cf24bf215c847_prof);

        
        $__internal_bd9fbdd86b6c038ab66301fede98ad235f50015e145aa8212ec1aa350159fc80->leave($__internal_bd9fbdd86b6c038ab66301fede98ad235f50015e145aa8212ec1aa350159fc80_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4e7a8fd35c6e096dbc6b46ec14a09316a133b49785ca6653ede746a7e034ba33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a8fd35c6e096dbc6b46ec14a09316a133b49785ca6653ede746a7e034ba33->enter($__internal_4e7a8fd35c6e096dbc6b46ec14a09316a133b49785ca6653ede746a7e034ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_76407307f97c655b0b4f844d912b49de99fb3c4abb42f09eff457cfc390733da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76407307f97c655b0b4f844d912b49de99fb3c4abb42f09eff457cfc390733da->enter($__internal_76407307f97c655b0b4f844d912b49de99fb3c4abb42f09eff457cfc390733da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_76407307f97c655b0b4f844d912b49de99fb3c4abb42f09eff457cfc390733da->leave($__internal_76407307f97c655b0b4f844d912b49de99fb3c4abb42f09eff457cfc390733da_prof);

        
        $__internal_4e7a8fd35c6e096dbc6b46ec14a09316a133b49785ca6653ede746a7e034ba33->leave($__internal_4e7a8fd35c6e096dbc6b46ec14a09316a133b49785ca6653ede746a7e034ba33_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5f55df602114619f01fe59b8e3b6f36f931f5a4f80853380a3f495652fc1cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f55df602114619f01fe59b8e3b6f36f931f5a4f80853380a3f495652fc1cb9->enter($__internal_e5f55df602114619f01fe59b8e3b6f36f931f5a4f80853380a3f495652fc1cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0ac81267dd2514fb797fda246c4c733a601fe13118b2636231f76df40c85ea04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac81267dd2514fb797fda246c4c733a601fe13118b2636231f76df40c85ea04->enter($__internal_0ac81267dd2514fb797fda246c4c733a601fe13118b2636231f76df40c85ea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0ac81267dd2514fb797fda246c4c733a601fe13118b2636231f76df40c85ea04->leave($__internal_0ac81267dd2514fb797fda246c4c733a601fe13118b2636231f76df40c85ea04_prof);

        
        $__internal_e5f55df602114619f01fe59b8e3b6f36f931f5a4f80853380a3f495652fc1cb9->leave($__internal_e5f55df602114619f01fe59b8e3b6f36f931f5a4f80853380a3f495652fc1cb9_prof);

    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        $__internal_dafdd21eba7f8e9c0062609a003d37c6c3c11f9080684e896d6c499c46b1fe00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafdd21eba7f8e9c0062609a003d37c6c3c11f9080684e896d6c499c46b1fe00->enter($__internal_dafdd21eba7f8e9c0062609a003d37c6c3c11f9080684e896d6c499c46b1fe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_0f6b00d58df81a1047dcce5899b5533a683e78ebb0885906cbdcab9b9197d5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6b00d58df81a1047dcce5899b5533a683e78ebb0885906cbdcab9b9197d5db->enter($__internal_0f6b00d58df81a1047dcce5899b5533a683e78ebb0885906cbdcab9b9197d5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_0f6b00d58df81a1047dcce5899b5533a683e78ebb0885906cbdcab9b9197d5db->leave($__internal_0f6b00d58df81a1047dcce5899b5533a683e78ebb0885906cbdcab9b9197d5db_prof);

        
        $__internal_dafdd21eba7f8e9c0062609a003d37c6c3c11f9080684e896d6c499c46b1fe00->leave($__internal_dafdd21eba7f8e9c0062609a003d37c6c3c11f9080684e896d6c499c46b1fe00_prof);

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
