<?php

/* index.html.twig */
class __TwigTemplate_177dfe9eaae9df75214ee42a81eedae01e6a2f356f035bcb9d701f0e7ac97871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_91836040cf20eda3cb085745d36c0aa9481d656b15a0419cf442068310d37009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91836040cf20eda3cb085745d36c0aa9481d656b15a0419cf442068310d37009->enter($__internal_91836040cf20eda3cb085745d36c0aa9481d656b15a0419cf442068310d37009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_88d5582c931c83ddbd1414a0eea6b7bc413bff94e717229886b77eca21fd8e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d5582c931c83ddbd1414a0eea6b7bc413bff94e717229886b77eca21fd8e6c->enter($__internal_88d5582c931c83ddbd1414a0eea6b7bc413bff94e717229886b77eca21fd8e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91836040cf20eda3cb085745d36c0aa9481d656b15a0419cf442068310d37009->leave($__internal_91836040cf20eda3cb085745d36c0aa9481d656b15a0419cf442068310d37009_prof);

        
        $__internal_88d5582c931c83ddbd1414a0eea6b7bc413bff94e717229886b77eca21fd8e6c->leave($__internal_88d5582c931c83ddbd1414a0eea6b7bc413bff94e717229886b77eca21fd8e6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_642d7693d34fc5b095f0a8cc921155dcb51d7d567f3dc0d2c252948bfbac62fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642d7693d34fc5b095f0a8cc921155dcb51d7d567f3dc0d2c252948bfbac62fd->enter($__internal_642d7693d34fc5b095f0a8cc921155dcb51d7d567f3dc0d2c252948bfbac62fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61ef106f0e28be941da4fbfa76913f251fe9c5476920db7b891747da29da580b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ef106f0e28be941da4fbfa76913f251fe9c5476920db7b891747da29da580b->enter($__internal_61ef106f0e28be941da4fbfa76913f251fe9c5476920db7b891747da29da580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_61ef106f0e28be941da4fbfa76913f251fe9c5476920db7b891747da29da580b->leave($__internal_61ef106f0e28be941da4fbfa76913f251fe9c5476920db7b891747da29da580b_prof);

        
        $__internal_642d7693d34fc5b095f0a8cc921155dcb51d7d567f3dc0d2c252948bfbac62fd->leave($__internal_642d7693d34fc5b095f0a8cc921155dcb51d7d567f3dc0d2c252948bfbac62fd_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_816d70c7a13d604dfbc90157b866f5cc72527a22ac79145b49e739f2e769faa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816d70c7a13d604dfbc90157b866f5cc72527a22ac79145b49e739f2e769faa7->enter($__internal_816d70c7a13d604dfbc90157b866f5cc72527a22ac79145b49e739f2e769faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a0b5463d072b508ef5013a2230afe48721889bc3756c63b5b59128579b0badb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b5463d072b508ef5013a2230afe48721889bc3756c63b5b59128579b0badb8->enter($__internal_a0b5463d072b508ef5013a2230afe48721889bc3756c63b5b59128579b0badb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!--Main Section  -->
<div class=\"wrapper\">
    
    <div class=\"page-header section-dark\" style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/backG/main_bg.jpg"), "html", null, true);
        echo "')\">
        <div class=\"filter\"></div>
        <div class=\"content-center\">
            <div class=\"container\">
                <div class=\"title-brand\">
                    <h1 class=\"presentation-title animated fadeIn\">MUSIC MATCH</h1>\t 
                </div>
                <h2 class=\"presentation-subtitle text-center animated fadeInRight\">Ne tombez plus jamais a court de nouveaux artistes </h2>
            </div>
        </div>
        <div class=\"moving-clouds\" style=\"background-image: url('";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/clouds.png"), "html", null, true);
        echo "')\">
        </div>
        <div class=\"fog-low\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fog-low.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"fog-low right\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fog-low.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>  
        <h6 class=\"category category-absolute\">Designed and coded by WF3 Team
        </h6>
    </div>

    <!--Section 2  -->
    <section class=\"section2 container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-10 offset-sm-1\">
                <img id=\"image_accueil\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/music_tree.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"offset-lg-2 col-lg-5 col-sm-10 offset-sm-1\">
                <p id=\"texte_accueil\" class=\"description\">Marre d'écouter les mêmes albums en boucle ? <span class=\"musicM\">MusicMatch</span> est un espace pour les passionnés de musique, permettant de découvrir de nouveaux artistes en se basant sur vos préférences. <br>Plus besoin de s'ennuyer avec la radio, <span class=\"musicM\">MusicMatch</span> est la !<br><br>
                </p>
                <div>
                    <span class=\"rock\">Are you ready to ...</span><img src=\"/MusicMatch/web/img/reggae.jpg\" id=\"readyTo\" alt=\"\" width=\"334\"><span class=\"rock2\">?</span>
                </div>
            </div>
        </div>
    </section>
</div>
            
<footer class=\"footer\">
   <div class=\"container\">
       <div class=\"row\">
           <nav class=\"footer-nav\">
               <ul>
                   <li><a href=\"#\">Mentions légales</a></li>
                   <li><a href=\"#\">Nous contacter</a></li>
               </ul>
           </nav> 
           <div class=\"credits ml-auto\">
               <span class=\"copyright\">
                   © <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i> by WF3 Team
               </span>
           </div>
       </div>
   </div>
</footer>
";
        
        $__internal_a0b5463d072b508ef5013a2230afe48721889bc3756c63b5b59128579b0badb8->leave($__internal_a0b5463d072b508ef5013a2230afe48721889bc3756c63b5b59128579b0badb8_prof);

        
        $__internal_816d70c7a13d604dfbc90157b866f5cc72527a22ac79145b49e739f2e769faa7->leave($__internal_816d70c7a13d604dfbc90157b866f5cc72527a22ac79145b49e739f2e769faa7_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_0eb1824c358fae529bf1786489c8d553c02d55b7a8790dedaf58aab1d86cbcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb1824c358fae529bf1786489c8d553c02d55b7a8790dedaf58aab1d86cbcfb->enter($__internal_0eb1824c358fae529bf1786489c8d553c02d55b7a8790dedaf58aab1d86cbcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_02ff84ce87afcc3c62753a8f068edd2941a73f7181861980d68ed84137ea180b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ff84ce87afcc3c62753a8f068edd2941a73f7181861980d68ed84137ea180b->enter($__internal_02ff84ce87afcc3c62753a8f068edd2941a73f7181861980d68ed84137ea180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 68
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <!-- Images animées page d'accueil -->
    <script>
        var path = \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo "\";
    </script>

    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/readyTo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_02ff84ce87afcc3c62753a8f068edd2941a73f7181861980d68ed84137ea180b->leave($__internal_02ff84ce87afcc3c62753a8f068edd2941a73f7181861980d68ed84137ea180b_prof);

        
        $__internal_0eb1824c358fae529bf1786489c8d553c02d55b7a8790dedaf58aab1d86cbcfb->leave($__internal_0eb1824c358fae529bf1786489c8d553c02d55b7a8790dedaf58aab1d86cbcfb_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  169 => 71,  162 => 68,  153 => 67,  112 => 35,  99 => 25,  93 => 22,  87 => 19,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title 'Accueil' %}

{% block content %}
<!--Main Section  -->
<div class=\"wrapper\">
    
    <div class=\"page-header section-dark\" style=\"background-image: url('{{ asset('img/backG/main_bg.jpg') }}')\">
        <div class=\"filter\"></div>
        <div class=\"content-center\">
            <div class=\"container\">
                <div class=\"title-brand\">
                    <h1 class=\"presentation-title animated fadeIn\">MUSIC MATCH</h1>\t 
                </div>
                <h2 class=\"presentation-subtitle text-center animated fadeInRight\">Ne tombez plus jamais a court de nouveaux artistes </h2>
            </div>
        </div>
        <div class=\"moving-clouds\" style=\"background-image: url('{{ asset('img/clouds.png') }}')\">
        </div>
        <div class=\"fog-low\">
            <img src=\"{{ asset('img/fog-low.png') }}\" alt=\"\">
        </div>
        <div class=\"fog-low right\">
            <img src=\"{{ asset('img/fog-low.png') }}\" alt=\"\">
        </div>  
        <h6 class=\"category category-absolute\">Designed and coded by WF3 Team
        </h6>
    </div>

    <!--Section 2  -->
    <section class=\"section2 container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-10 offset-sm-1\">
                <img id=\"image_accueil\" src=\"{{ asset('img/music_tree.png') }}\" alt=\"\">
            </div>
            <div class=\"offset-lg-2 col-lg-5 col-sm-10 offset-sm-1\">
                <p id=\"texte_accueil\" class=\"description\">Marre d'écouter les mêmes albums en boucle ? <span class=\"musicM\">MusicMatch</span> est un espace pour les passionnés de musique, permettant de découvrir de nouveaux artistes en se basant sur vos préférences. <br>Plus besoin de s'ennuyer avec la radio, <span class=\"musicM\">MusicMatch</span> est la !<br><br>
                </p>
                <div>
                    <span class=\"rock\">Are you ready to ...</span><img src=\"/MusicMatch/web/img/reggae.jpg\" id=\"readyTo\" alt=\"\" width=\"334\"><span class=\"rock2\">?</span>
                </div>
            </div>
        </div>
    </section>
</div>
            
<footer class=\"footer\">
   <div class=\"container\">
       <div class=\"row\">
           <nav class=\"footer-nav\">
               <ul>
                   <li><a href=\"#\">Mentions légales</a></li>
                   <li><a href=\"#\">Nous contacter</a></li>
               </ul>
           </nav> 
           <div class=\"credits ml-auto\">
               <span class=\"copyright\">
                   © <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i> by WF3 Team
               </span>
           </div>
       </div>
   </div>
</footer>
{% endblock %}
    
{% block script %}
    {{ parent() }}
    <!-- Images animées page d'accueil -->
    <script>
        var path = \"{{ asset('img/') }}\";
    </script>

    <script src=\"{{ asset('js/readyTo.js') }}\"></script>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\index.html.twig");
    }
}
