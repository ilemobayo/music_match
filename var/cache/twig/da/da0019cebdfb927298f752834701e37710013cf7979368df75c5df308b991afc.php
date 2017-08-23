<?php

/* user/forgottenPass.html.twig */
class __TwigTemplate_0bb570407c03fc8aab1922653522346f3ad21424d26f9e832e482c35d0c6bce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/forgottenPass.html.twig", 1);
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
        $__internal_4d1486b28dce3f9a1269a3e951637ed35cabf96f460ab4f462d63d590cd7ecf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1486b28dce3f9a1269a3e951637ed35cabf96f460ab4f462d63d590cd7ecf4->enter($__internal_4d1486b28dce3f9a1269a3e951637ed35cabf96f460ab4f462d63d590cd7ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/forgottenPass.html.twig"));

        $__internal_6cb54c7a68930e498c254550d305ac4f593e36e142c216c3330d7193c5ad2d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb54c7a68930e498c254550d305ac4f593e36e142c216c3330d7193c5ad2d62->enter($__internal_6cb54c7a68930e498c254550d305ac4f593e36e142c216c3330d7193c5ad2d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/forgottenPass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1486b28dce3f9a1269a3e951637ed35cabf96f460ab4f462d63d590cd7ecf4->leave($__internal_4d1486b28dce3f9a1269a3e951637ed35cabf96f460ab4f462d63d590cd7ecf4_prof);

        
        $__internal_6cb54c7a68930e498c254550d305ac4f593e36e142c216c3330d7193c5ad2d62->leave($__internal_6cb54c7a68930e498c254550d305ac4f593e36e142c216c3330d7193c5ad2d62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b46d85ad02c49cf4a1ae5740599f5a430018284b8eef56d13e9fe51e0ed416cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46d85ad02c49cf4a1ae5740599f5a430018284b8eef56d13e9fe51e0ed416cb->enter($__internal_b46d85ad02c49cf4a1ae5740599f5a430018284b8eef56d13e9fe51e0ed416cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6adccb207763a6f979c8e8432dc6594ffdc14b7701f9f659861c2dc96213619c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adccb207763a6f979c8e8432dc6594ffdc14b7701f9f659861c2dc96213619c->enter($__internal_6adccb207763a6f979c8e8432dc6594ffdc14b7701f9f659861c2dc96213619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mot de passe oublié";
        
        $__internal_6adccb207763a6f979c8e8432dc6594ffdc14b7701f9f659861c2dc96213619c->leave($__internal_6adccb207763a6f979c8e8432dc6594ffdc14b7701f9f659861c2dc96213619c_prof);

        
        $__internal_b46d85ad02c49cf4a1ae5740599f5a430018284b8eef56d13e9fe51e0ed416cb->leave($__internal_b46d85ad02c49cf4a1ae5740599f5a430018284b8eef56d13e9fe51e0ed416cb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b3543bdb33aae08736d55092c09665396d9d6490ae4f11f6702fbc2ab7a25d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3543bdb33aae08736d55092c09665396d9d6490ae4f11f6702fbc2ab7a25d1->enter($__internal_6b3543bdb33aae08736d55092c09665396d9d6490ae4f11f6702fbc2ab7a25d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c7ef48e6ef188c173d5d470178893914055754230b4994f3dc4238ac781cb46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ef48e6ef188c173d5d470178893914055754230b4994f3dc4238ac781cb46e->enter($__internal_c7ef48e6ef188c173d5d470178893914055754230b4994f3dc4238ac781cb46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header\" style=\"background-image:url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/music-cassette.jpg"), "html", null, true);
        echo "'); text-align:center;\">
            <div class=\"filter\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 offset-lg-4 col-sm-6 offset-sm-3\">
                            <div class=\"card card-register\" style=\"background:transparent;\">\t\t\t\t\t\t
                                <h2 class=\"title\" style=\"font-weight:bold;color:red;\">Mot de passe oublié</h2>
                                    <form method=\"post\">
                                        <div class=\"form-group\">
                                            <label>Votre Email</label>
                                            <input class=\"form-control\" type='email' name='email'>
                                        </div>

                                        <div class=\"form-group\">
                                            <input class=\"form-control btn btn-primary\" type='submit' value=\"Valider\">
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"footer register-footer text-center\">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i>by us @ WebForce3</h6>
                    </div>
                </div>
        </div>
    </div>
";
        
        $__internal_c7ef48e6ef188c173d5d470178893914055754230b4994f3dc4238ac781cb46e->leave($__internal_c7ef48e6ef188c173d5d470178893914055754230b4994f3dc4238ac781cb46e_prof);

        
        $__internal_6b3543bdb33aae08736d55092c09665396d9d6490ae4f11f6702fbc2ab7a25d1->leave($__internal_6b3543bdb33aae08736d55092c09665396d9d6490ae4f11f6702fbc2ab7a25d1_prof);

    }

    public function getTemplateName()
    {
        return "user/forgottenPass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Mot de passe oublié' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header\" style=\"background-image:url('{{ asset('img/music-cassette.jpg') }}'); text-align:center;\">
            <div class=\"filter\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 offset-lg-4 col-sm-6 offset-sm-3\">
                            <div class=\"card card-register\" style=\"background:transparent;\">\t\t\t\t\t\t
                                <h2 class=\"title\" style=\"font-weight:bold;color:red;\">Mot de passe oublié</h2>
                                    <form method=\"post\">
                                        <div class=\"form-group\">
                                            <label>Votre Email</label>
                                            <input class=\"form-control\" type='email' name='email'>
                                        </div>

                                        <div class=\"form-group\">
                                            <input class=\"form-control btn btn-primary\" type='submit' value=\"Valider\">
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"footer register-footer text-center\">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i>by us @ WebForce3</h6>
                    </div>
                </div>
        </div>
    </div>
{% endblock %}", "user/forgottenPass.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\user\\forgottenPass.html.twig");
    }
}
