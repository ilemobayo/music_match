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
        $__internal_d2719a420f7800819be07c1dd8175e437f80f7c2bb219197cc9675d7d0aa239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2719a420f7800819be07c1dd8175e437f80f7c2bb219197cc9675d7d0aa239f->enter($__internal_d2719a420f7800819be07c1dd8175e437f80f7c2bb219197cc9675d7d0aa239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_a8debeb66facfade2184f2d91a13612294c73c98e7ec5f89d4f1c35836f0e60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8debeb66facfade2184f2d91a13612294c73c98e7ec5f89d4f1c35836f0e60b->enter($__internal_a8debeb66facfade2184f2d91a13612294c73c98e7ec5f89d4f1c35836f0e60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2719a420f7800819be07c1dd8175e437f80f7c2bb219197cc9675d7d0aa239f->leave($__internal_d2719a420f7800819be07c1dd8175e437f80f7c2bb219197cc9675d7d0aa239f_prof);

        
        $__internal_a8debeb66facfade2184f2d91a13612294c73c98e7ec5f89d4f1c35836f0e60b->leave($__internal_a8debeb66facfade2184f2d91a13612294c73c98e7ec5f89d4f1c35836f0e60b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4fad15db91577b2fe396a2cee486787bc7d84cef06ba360069b17c0307d07e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fad15db91577b2fe396a2cee486787bc7d84cef06ba360069b17c0307d07e0->enter($__internal_f4fad15db91577b2fe396a2cee486787bc7d84cef06ba360069b17c0307d07e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eac73d31a66374c339ae97bcbc48aa2586b1f1ffb0f9e0f56673d5851dd7f68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac73d31a66374c339ae97bcbc48aa2586b1f1ffb0f9e0f56673d5851dd7f68f->enter($__internal_eac73d31a66374c339ae97bcbc48aa2586b1f1ffb0f9e0f56673d5851dd7f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_eac73d31a66374c339ae97bcbc48aa2586b1f1ffb0f9e0f56673d5851dd7f68f->leave($__internal_eac73d31a66374c339ae97bcbc48aa2586b1f1ffb0f9e0f56673d5851dd7f68f_prof);

        
        $__internal_f4fad15db91577b2fe396a2cee486787bc7d84cef06ba360069b17c0307d07e0->leave($__internal_f4fad15db91577b2fe396a2cee486787bc7d84cef06ba360069b17c0307d07e0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5294525cb55bf83ed8e1c67ee504d7d608f5429bfb6a177bcd5bf938675767c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5294525cb55bf83ed8e1c67ee504d7d608f5429bfb6a177bcd5bf938675767c->enter($__internal_a5294525cb55bf83ed8e1c67ee504d7d608f5429bfb6a177bcd5bf938675767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4a55cfe9163dd2f88df49af27dde83b155e7ade3605e8f3a50f29a41fc3f023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a55cfe9163dd2f88df49af27dde83b155e7ade3605e8f3a50f29a41fc3f023d->enter($__internal_4a55cfe9163dd2f88df49af27dde83b155e7ade3605e8f3a50f29a41fc3f023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4a55cfe9163dd2f88df49af27dde83b155e7ade3605e8f3a50f29a41fc3f023d->leave($__internal_4a55cfe9163dd2f88df49af27dde83b155e7ade3605e8f3a50f29a41fc3f023d_prof);

        
        $__internal_a5294525cb55bf83ed8e1c67ee504d7d608f5429bfb6a177bcd5bf938675767c->leave($__internal_a5294525cb55bf83ed8e1c67ee504d7d608f5429bfb6a177bcd5bf938675767c_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_f40441f74f9d14ebe6b069985bad4ce7cec17f4c8cbd5dafb5d4d9ca0ee6552c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40441f74f9d14ebe6b069985bad4ce7cec17f4c8cbd5dafb5d4d9ca0ee6552c->enter($__internal_f40441f74f9d14ebe6b069985bad4ce7cec17f4c8cbd5dafb5d4d9ca0ee6552c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_46bf37495ec71cbda336d7d4a086284b35f5c8381fbfd5bbfd5e6856dea164ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bf37495ec71cbda336d7d4a086284b35f5c8381fbfd5bbfd5e6856dea164ef->enter($__internal_46bf37495ec71cbda336d7d4a086284b35f5c8381fbfd5bbfd5e6856dea164ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_46bf37495ec71cbda336d7d4a086284b35f5c8381fbfd5bbfd5e6856dea164ef->leave($__internal_46bf37495ec71cbda336d7d4a086284b35f5c8381fbfd5bbfd5e6856dea164ef_prof);

        
        $__internal_f40441f74f9d14ebe6b069985bad4ce7cec17f4c8cbd5dafb5d4d9ca0ee6552c->leave($__internal_f40441f74f9d14ebe6b069985bad4ce7cec17f4c8cbd5dafb5d4d9ca0ee6552c_prof);

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
