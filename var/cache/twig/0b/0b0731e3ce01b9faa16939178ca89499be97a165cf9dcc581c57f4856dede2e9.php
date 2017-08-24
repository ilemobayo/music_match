<?php

/* index.html.twig */
class __TwigTemplate_886c346db559919896170d3cfc5c6431e604e6acff689afaafe86492866f5737 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
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
        return array (  133 => 74,  127 => 71,  120 => 68,  117 => 67,  82 => 35,  69 => 25,  63 => 22,  57 => 19,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\index.html.twig");
    }
}
