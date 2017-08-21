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
        $__internal_79773c0added47e336260dfb3a8b8ca3613ec27f867f9cacf91b0e2582927a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79773c0added47e336260dfb3a8b8ca3613ec27f867f9cacf91b0e2582927a5d->enter($__internal_79773c0added47e336260dfb3a8b8ca3613ec27f867f9cacf91b0e2582927a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $__internal_9b3f14cc5ae6887cba98cffe24cdeea1586c0af84e780c28568d047075880cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3f14cc5ae6887cba98cffe24cdeea1586c0af84e780c28568d047075880cf1->enter($__internal_9b3f14cc5ae6887cba98cffe24cdeea1586c0af84e780c28568d047075880cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/add_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79773c0added47e336260dfb3a8b8ca3613ec27f867f9cacf91b0e2582927a5d->leave($__internal_79773c0added47e336260dfb3a8b8ca3613ec27f867f9cacf91b0e2582927a5d_prof);

        
        $__internal_9b3f14cc5ae6887cba98cffe24cdeea1586c0af84e780c28568d047075880cf1->leave($__internal_9b3f14cc5ae6887cba98cffe24cdeea1586c0af84e780c28568d047075880cf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_945ba732019c07276fbd0a23d515af5d7107eeb6f80352642a5522086bc683f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945ba732019c07276fbd0a23d515af5d7107eeb6f80352642a5522086bc683f4->enter($__internal_945ba732019c07276fbd0a23d515af5d7107eeb6f80352642a5522086bc683f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98af262f2c6b71c0427a0457e9f6eb395f6e8f18df9dcf64a36d50cb76025c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98af262f2c6b71c0427a0457e9f6eb395f6e8f18df9dcf64a36d50cb76025c1f->enter($__internal_98af262f2c6b71c0427a0457e9f6eb395f6e8f18df9dcf64a36d50cb76025c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter des tags";
        
        $__internal_98af262f2c6b71c0427a0457e9f6eb395f6e8f18df9dcf64a36d50cb76025c1f->leave($__internal_98af262f2c6b71c0427a0457e9f6eb395f6e8f18df9dcf64a36d50cb76025c1f_prof);

        
        $__internal_945ba732019c07276fbd0a23d515af5d7107eeb6f80352642a5522086bc683f4->leave($__internal_945ba732019c07276fbd0a23d515af5d7107eeb6f80352642a5522086bc683f4_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_db27c31d45a6b8659c1b2d661d9baf9c080b00d23873bc82fc55dcb78b1830ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db27c31d45a6b8659c1b2d661d9baf9c080b00d23873bc82fc55dcb78b1830ae->enter($__internal_db27c31d45a6b8659c1b2d661d9baf9c080b00d23873bc82fc55dcb78b1830ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_dec3ff5e4933817237df212131722568c4bf8c21ed19f23d71b32fac53481e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec3ff5e4933817237df212131722568c4bf8c21ed19f23d71b32fac53481e34->enter($__internal_dec3ff5e4933817237df212131722568c4bf8c21ed19f23d71b32fac53481e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_dec3ff5e4933817237df212131722568c4bf8c21ed19f23d71b32fac53481e34->leave($__internal_dec3ff5e4933817237df212131722568c4bf8c21ed19f23d71b32fac53481e34_prof);

        
        $__internal_db27c31d45a6b8659c1b2d661d9baf9c080b00d23873bc82fc55dcb78b1830ae->leave($__internal_db27c31d45a6b8659c1b2d661d9baf9c080b00d23873bc82fc55dcb78b1830ae_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_8827c3dd70d72e2b60455bcb69de40c67d7fe1e26540b862ef08d626e77b6e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8827c3dd70d72e2b60455bcb69de40c67d7fe1e26540b862ef08d626e77b6e71->enter($__internal_8827c3dd70d72e2b60455bcb69de40c67d7fe1e26540b862ef08d626e77b6e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee5c3ba1bded77b762a64146287014ca27d578fc8402efaca1b2655c68539acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5c3ba1bded77b762a64146287014ca27d578fc8402efaca1b2655c68539acd->enter($__internal_ee5c3ba1bded77b762a64146287014ca27d578fc8402efaca1b2655c68539acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ee5c3ba1bded77b762a64146287014ca27d578fc8402efaca1b2655c68539acd->leave($__internal_ee5c3ba1bded77b762a64146287014ca27d578fc8402efaca1b2655c68539acd_prof);

        
        $__internal_8827c3dd70d72e2b60455bcb69de40c67d7fe1e26540b862ef08d626e77b6e71->leave($__internal_8827c3dd70d72e2b60455bcb69de40c67d7fe1e26540b862ef08d626e77b6e71_prof);

    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        $__internal_9daba2e1a46f06f1cccd0ab250cb87c2da9b3b449973c96cd5741b5e9be6acaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9daba2e1a46f06f1cccd0ab250cb87c2da9b3b449973c96cd5741b5e9be6acaa->enter($__internal_9daba2e1a46f06f1cccd0ab250cb87c2da9b3b449973c96cd5741b5e9be6acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_37c20c6d7a9c8538eb4a3ac470d9fd6e9b0600d07851623ea65849be64a40d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c20c6d7a9c8538eb4a3ac470d9fd6e9b0600d07851623ea65849be64a40d17->enter($__internal_37c20c6d7a9c8538eb4a3ac470d9fd6e9b0600d07851623ea65849be64a40d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_37c20c6d7a9c8538eb4a3ac470d9fd6e9b0600d07851623ea65849be64a40d17->leave($__internal_37c20c6d7a9c8538eb4a3ac470d9fd6e9b0600d07851623ea65849be64a40d17_prof);

        
        $__internal_9daba2e1a46f06f1cccd0ab250cb87c2da9b3b449973c96cd5741b5e9be6acaa->leave($__internal_9daba2e1a46f06f1cccd0ab250cb87c2da9b3b449973c96cd5741b5e9be6acaa_prof);

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
