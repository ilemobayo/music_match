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
        $__internal_2aa249438e088d0a88f32bf42cbae3c7a25c9ba9e77e6ebc2d65e65e119ac14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa249438e088d0a88f32bf42cbae3c7a25c9ba9e77e6ebc2d65e65e119ac14e->enter($__internal_2aa249438e088d0a88f32bf42cbae3c7a25c9ba9e77e6ebc2d65e65e119ac14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_52add227f66e039e58a8b44f3d81c2abfde72f2a25d8f7118054999eba8541d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52add227f66e039e58a8b44f3d81c2abfde72f2a25d8f7118054999eba8541d3->enter($__internal_52add227f66e039e58a8b44f3d81c2abfde72f2a25d8f7118054999eba8541d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa249438e088d0a88f32bf42cbae3c7a25c9ba9e77e6ebc2d65e65e119ac14e->leave($__internal_2aa249438e088d0a88f32bf42cbae3c7a25c9ba9e77e6ebc2d65e65e119ac14e_prof);

        
        $__internal_52add227f66e039e58a8b44f3d81c2abfde72f2a25d8f7118054999eba8541d3->leave($__internal_52add227f66e039e58a8b44f3d81c2abfde72f2a25d8f7118054999eba8541d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f0094ce38958b769571998f529739dd1bdc9ea4dd871ef1a1553da387cea278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0094ce38958b769571998f529739dd1bdc9ea4dd871ef1a1553da387cea278->enter($__internal_4f0094ce38958b769571998f529739dd1bdc9ea4dd871ef1a1553da387cea278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d2e1b2983509f9dd2d280269d7e6e64551adbbd301c2d62cd25ad9645394475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2e1b2983509f9dd2d280269d7e6e64551adbbd301c2d62cd25ad9645394475->enter($__internal_5d2e1b2983509f9dd2d280269d7e6e64551adbbd301c2d62cd25ad9645394475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_5d2e1b2983509f9dd2d280269d7e6e64551adbbd301c2d62cd25ad9645394475->leave($__internal_5d2e1b2983509f9dd2d280269d7e6e64551adbbd301c2d62cd25ad9645394475_prof);

        
        $__internal_4f0094ce38958b769571998f529739dd1bdc9ea4dd871ef1a1553da387cea278->leave($__internal_4f0094ce38958b769571998f529739dd1bdc9ea4dd871ef1a1553da387cea278_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e809a7c3cb2c000fefcebce7e195acf6a031bf7e5d02640777f915444d0c921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e809a7c3cb2c000fefcebce7e195acf6a031bf7e5d02640777f915444d0c921a->enter($__internal_e809a7c3cb2c000fefcebce7e195acf6a031bf7e5d02640777f915444d0c921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a51a73dbf4305fb7c0013cb0367ea35d26b38d1f177685b66aaf45acfb8f6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a51a73dbf4305fb7c0013cb0367ea35d26b38d1f177685b66aaf45acfb8f6ae->enter($__internal_5a51a73dbf4305fb7c0013cb0367ea35d26b38d1f177685b66aaf45acfb8f6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5a51a73dbf4305fb7c0013cb0367ea35d26b38d1f177685b66aaf45acfb8f6ae->leave($__internal_5a51a73dbf4305fb7c0013cb0367ea35d26b38d1f177685b66aaf45acfb8f6ae_prof);

        
        $__internal_e809a7c3cb2c000fefcebce7e195acf6a031bf7e5d02640777f915444d0c921a->leave($__internal_e809a7c3cb2c000fefcebce7e195acf6a031bf7e5d02640777f915444d0c921a_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_c7cd2d5ede15e99d402ac0632ff850f50184c683072cb252ee3db2440c43b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cd2d5ede15e99d402ac0632ff850f50184c683072cb252ee3db2440c43b09f->enter($__internal_c7cd2d5ede15e99d402ac0632ff850f50184c683072cb252ee3db2440c43b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_7dd5234209abbc10bd6a5957627f689eaa404e01eb49b9c2f46ecf25da6642b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd5234209abbc10bd6a5957627f689eaa404e01eb49b9c2f46ecf25da6642b1->enter($__internal_7dd5234209abbc10bd6a5957627f689eaa404e01eb49b9c2f46ecf25da6642b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_7dd5234209abbc10bd6a5957627f689eaa404e01eb49b9c2f46ecf25da6642b1->leave($__internal_7dd5234209abbc10bd6a5957627f689eaa404e01eb49b9c2f46ecf25da6642b1_prof);

        
        $__internal_c7cd2d5ede15e99d402ac0632ff850f50184c683072cb252ee3db2440c43b09f->leave($__internal_c7cd2d5ede15e99d402ac0632ff850f50184c683072cb252ee3db2440c43b09f_prof);

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
