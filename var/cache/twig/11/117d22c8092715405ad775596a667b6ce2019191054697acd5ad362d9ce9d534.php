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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af7b6e07fce5a98dadc0f29bf110845fc7d7b5fbd4840f4478b7fbc7940554df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7b6e07fce5a98dadc0f29bf110845fc7d7b5fbd4840f4478b7fbc7940554df->enter($__internal_af7b6e07fce5a98dadc0f29bf110845fc7d7b5fbd4840f4478b7fbc7940554df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_dc59fc3ac1ee83b7ed5125a336c8bb755f6981abbc7cd4cbb4ca6185a9b4ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc59fc3ac1ee83b7ed5125a336c8bb755f6981abbc7cd4cbb4ca6185a9b4ba54->enter($__internal_dc59fc3ac1ee83b7ed5125a336c8bb755f6981abbc7cd4cbb4ca6185a9b4ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af7b6e07fce5a98dadc0f29bf110845fc7d7b5fbd4840f4478b7fbc7940554df->leave($__internal_af7b6e07fce5a98dadc0f29bf110845fc7d7b5fbd4840f4478b7fbc7940554df_prof);

        
        $__internal_dc59fc3ac1ee83b7ed5125a336c8bb755f6981abbc7cd4cbb4ca6185a9b4ba54->leave($__internal_dc59fc3ac1ee83b7ed5125a336c8bb755f6981abbc7cd4cbb4ca6185a9b4ba54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3049ef20897176d7d5f450d461b167a3b0242b4e5f537f7785a77f1e0550ad0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3049ef20897176d7d5f450d461b167a3b0242b4e5f537f7785a77f1e0550ad0f->enter($__internal_3049ef20897176d7d5f450d461b167a3b0242b4e5f537f7785a77f1e0550ad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd57a0ebf5522bc59099f861ee4c2fe4832c4ef5a3018da9230ab437805ed939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd57a0ebf5522bc59099f861ee4c2fe4832c4ef5a3018da9230ab437805ed939->enter($__internal_bd57a0ebf5522bc59099f861ee4c2fe4832c4ef5a3018da9230ab437805ed939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_bd57a0ebf5522bc59099f861ee4c2fe4832c4ef5a3018da9230ab437805ed939->leave($__internal_bd57a0ebf5522bc59099f861ee4c2fe4832c4ef5a3018da9230ab437805ed939_prof);

        
        $__internal_3049ef20897176d7d5f450d461b167a3b0242b4e5f537f7785a77f1e0550ad0f->leave($__internal_3049ef20897176d7d5f450d461b167a3b0242b4e5f537f7785a77f1e0550ad0f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc45c37a09b8b1806cae84a576f19ae2642e009edd9f2dfb9c611937ca75c7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc45c37a09b8b1806cae84a576f19ae2642e009edd9f2dfb9c611937ca75c7be->enter($__internal_fc45c37a09b8b1806cae84a576f19ae2642e009edd9f2dfb9c611937ca75c7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_88bed99ab308f51e974758f2eac93ca34f10d6663a9f0a765cae5e0f0a9122b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bed99ab308f51e974758f2eac93ca34f10d6663a9f0a765cae5e0f0a9122b3->enter($__internal_88bed99ab308f51e974758f2eac93ca34f10d6663a9f0a765cae5e0f0a9122b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <section class=\"container-fluid\">
           
            <div class=\"container flex\">
                <div class=\"flexItem\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/music_tree.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                 <div class=\"flexItem\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In minima neque iusto odio dolorem, cumque dolorum sequi, optio provident illo placeat sit similique itaque molestias nam voluptate labore numquam harum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, nesciunt quas ex. Voluptatem aspernatur eos impedit ullam commodi adipisci quasi quisquam explicabo, assumenda facere illum totam cupiditate vel nam nesciunt.</p>
                </div>
            </div>
        </section>

        <!--Section 3  -->
       
        <section class=\"container-fluid vinyl\">
            <div class=\"container flex\">
                <div class=\"flexItem\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/placeholder.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class=\"flexItem\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/placeholder.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class=\"flexItem\">
                    <div class=\"centerImg\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/placeholder.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>
        <footer class=\"footer\">
           <div class=\"container\">
               <div class=\"row\">
                   <nav class=\"footer-nav\">
                       <ul>
                           <li><a href=\"http://www.creative-tim.com\">Creative Tim</a></li>
                           <li><a href=\"http://blog.creative-tim.com\">Blog</a></li>
                           <li><a href=\"http://www.creative-tim.com/license\">Licenses</a></li>
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
        
        $__internal_88bed99ab308f51e974758f2eac93ca34f10d6663a9f0a765cae5e0f0a9122b3->leave($__internal_88bed99ab308f51e974758f2eac93ca34f10d6663a9f0a765cae5e0f0a9122b3_prof);

        
        $__internal_fc45c37a09b8b1806cae84a576f19ae2642e009edd9f2dfb9c611937ca75c7be->leave($__internal_fc45c37a09b8b1806cae84a576f19ae2642e009edd9f2dfb9c611937ca75c7be_prof);

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
        return array (  143 => 58,  135 => 53,  128 => 49,  112 => 36,  98 => 25,  92 => 22,  86 => 19,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <section class=\"container-fluid\">
           
            <div class=\"container flex\">
                <div class=\"flexItem\">
                    <img src=\"{{ asset('img/music_tree.png') }}\" alt=\"\">
                </div>
                 <div class=\"flexItem\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In minima neque iusto odio dolorem, cumque dolorum sequi, optio provident illo placeat sit similique itaque molestias nam voluptate labore numquam harum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, nesciunt quas ex. Voluptatem aspernatur eos impedit ullam commodi adipisci quasi quisquam explicabo, assumenda facere illum totam cupiditate vel nam nesciunt.</p>
                </div>
            </div>
        </section>

        <!--Section 3  -->
       
        <section class=\"container-fluid vinyl\">
            <div class=\"container flex\">
                <div class=\"flexItem\">
                    <img src=\"{{ asset('img/placeholder.jpg')}}\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class=\"flexItem\">
                    <img src=\"{{ asset('img/placeholder.jpg')}}\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class=\"flexItem\">
                    <div class=\"centerImg\">
                        <img src=\"{{ asset('img/placeholder.jpg')}}\" class=\"img-circle img-no-padding img-responsive\" alt=\"Rounded Image\">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique est ab eaque ipsum molestiae atque hic in optio. Culpa unde repellendus fuga aliquid, perferendis eligendi tempora excepturi suscipit quidem pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>
        <footer class=\"footer\">
           <div class=\"container\">
               <div class=\"row\">
                   <nav class=\"footer-nav\">
                       <ul>
                           <li><a href=\"http://www.creative-tim.com\">Creative Tim</a></li>
                           <li><a href=\"http://blog.creative-tim.com\">Blog</a></li>
                           <li><a href=\"http://www.creative-tim.com/license\">Licenses</a></li>
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
    

", "index.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\index.html.twig");
    }
}
