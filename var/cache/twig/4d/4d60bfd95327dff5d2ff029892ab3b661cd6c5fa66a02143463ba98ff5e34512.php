<?php

/* layout.html.twig */
class __TwigTemplate_0f15317b353e2492234d5238e4147a701580eb96b9f3c38bee27e0a59f6480db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3b9588272ee358366cb5cc8e384bd80642c1b6edb08ffaaec85f108e44ba692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b9588272ee358366cb5cc8e384bd80642c1b6edb08ffaaec85f108e44ba692->enter($__internal_e3b9588272ee358366cb5cc8e384bd80642c1b6edb08ffaaec85f108e44ba692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_0d7a57dd76869a30c6d833f1065b0350451d46d89bc46ae501a4b4b2117e8188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7a57dd76869a30c6d833f1065b0350451d46d89bc46ae501a4b4b2117e8188->enter($__internal_0d7a57dd76869a30c6d833f1065b0350451d46d89bc46ae501a4b4b2117e8188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " | Music Match</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    
    ";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "
</head>
    <body>
        <!--Navbar  -->
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"287\">
            <div class=\"container\">
                <div class=\"navbar-translate\">
                    <button class=\"navbar-toggler navbar-toggler-right navbar-burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                    </button>

                    ";
        // line 44
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 45
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\">Music Match</a>
                    ";
        } else {
            // line 47
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Music Match</a>
                    ";
        }
        // line 49
        echo "                </div>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav ml-auto\" >
                        ";
        // line 53
        if ( !$this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 54
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"btn btn-danger btn-round\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <button class=\"btn btn-primary btn-round\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                        </li>
                        ";
        } else {
            // line 61
            echo "                        <form class=\"form-inline my-2 my-lg-0\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
            echo "\" method=\"get\">
                            <input class=\"form-control mr-sm-2\" type=\"text\"  name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()), "html", null, true);
            echo "
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Profil</a>
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardLibrary", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Bibliothèque</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        ";
            // line 80
            echo "                        ";
        }
        // line 81
        echo "                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 88
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 89
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 90
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 91
                    echo "                    ";
                }
                // line 92
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["flash"];
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
        
        
        
        ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"register-form\">
                            <label>Email</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"nc-icon nc-email-85\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"nc-icon nc-key-25\"></i>
                                </span>
                                <input type=\"text\" id=\"mdp\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger btn-block btn-round\">Log In</button>
                        </form>
                        <div class=\"forgot\">
                            <a href=\"#\" class=\"btn btn-link btn-danger\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- succes message ajex -->
        <div class=\"panel-ajax\"></div>
        
        ";
        // line 138
        $this->displayBlock('script', $context, $blocks);
        // line 164
        echo "        <script>
            \$(function () {
                // player stop and play
                \$('.play').on('click', function() {
                    \$this = \$(this);
                    i = \$this.children();
                    \$('audio').each(function () {
                        //console.log(\$(this).get(0));
                        \$(this).get(0).pause();
                        \$(this).get(0).currentTime = 0;
                    });
                    if(i.hasClass('fa-play-circle')){
                        i.removeClass('fa-play-circle').addClass('fa-pause-circle');
                        \$this.next().get(0).play()
                    }else{
                        i.removeClass('fa-pause-circle').addClass('fa-play-circle');
                        \$this.next().get(0).pause()
                    }
                    \$('audio').on('pause', function () {
                        \$(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
                    })
                    \$('audio').on('ended', function () {
                        \$(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
                    })
                })
                // ajout d'un titre dans la bibliotheque
                \$('.addToLibrary').on('click', function () {
                    var \$this = \$(this);
                    var id_track = \$this.data('id');
                    \$.post( \"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addTrack");
        echo "\", { id: id_track } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
                // retirer un titre de la biliotheque
                \$('.removeToLibrary').on('click', function () {
                    var \$this = \$(this);
                    var id_track = \$this.data('id');
                    \$.post( \"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeTrack");
        echo "\", { id: id_track } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('li').slideUp('slow');
                        \$this.closest('li').next().hide();
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
            });    
        </script>
            
    </body>
</html>";
        
        $__internal_e3b9588272ee358366cb5cc8e384bd80642c1b6edb08ffaaec85f108e44ba692->leave($__internal_e3b9588272ee358366cb5cc8e384bd80642c1b6edb08ffaaec85f108e44ba692_prof);

        
        $__internal_0d7a57dd76869a30c6d833f1065b0350451d46d89bc46ae501a4b4b2117e8188->leave($__internal_0d7a57dd76869a30c6d833f1065b0350451d46d89bc46ae501a4b4b2117e8188_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1857bb51801565e5c60ecfeddf372cad16e80342b8172d9e8fc141c3d98dfb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1857bb51801565e5c60ecfeddf372cad16e80342b8172d9e8fc141c3d98dfb8c->enter($__internal_1857bb51801565e5c60ecfeddf372cad16e80342b8172d9e8fc141c3d98dfb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0882500fea67fb9c4bc06d24be40f21e2c5d8c92403a742b656225c3606ff975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0882500fea67fb9c4bc06d24be40f21e2c5d8c92403a742b656225c3606ff975->enter($__internal_0882500fea67fb9c4bc06d24be40f21e2c5d8c92403a742b656225c3606ff975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_0882500fea67fb9c4bc06d24be40f21e2c5d8c92403a742b656225c3606ff975->leave($__internal_0882500fea67fb9c4bc06d24be40f21e2c5d8c92403a742b656225c3606ff975_prof);

        
        $__internal_1857bb51801565e5c60ecfeddf372cad16e80342b8172d9e8fc141c3d98dfb8c->leave($__internal_1857bb51801565e5c60ecfeddf372cad16e80342b8172d9e8fc141c3d98dfb8c_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_32b85ee3732434fe96b07f6d129459dc7bcbc5c26283155e50e82d815677433f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b85ee3732434fe96b07f6d129459dc7bcbc5c26283155e50e82d815677433f->enter($__internal_32b85ee3732434fe96b07f6d129459dc7bcbc5c26283155e50e82d815677433f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_85826ea5af2f1c8e12f4a199f9fb2049396432c8270b11ff7f01ec0a857aee10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85826ea5af2f1c8e12f4a199f9fb2049396432c8270b11ff7f01ec0a857aee10->enter($__internal_85826ea5af2f1c8e12f4a199f9fb2049396432c8270b11ff7f01ec0a857aee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 15
        echo "    <!--Animate.css  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/paper-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main_1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_85826ea5af2f1c8e12f4a199f9fb2049396432c8270b11ff7f01ec0a857aee10->leave($__internal_85826ea5af2f1c8e12f4a199f9fb2049396432c8270b11ff7f01ec0a857aee10_prof);

        
        $__internal_32b85ee3732434fe96b07f6d129459dc7bcbc5c26283155e50e82d815677433f->leave($__internal_32b85ee3732434fe96b07f6d129459dc7bcbc5c26283155e50e82d815677433f_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_25dcce19b200a0f6b3a81a778d23f989996cfefc761d256538e160daf6545aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dcce19b200a0f6b3a81a778d23f989996cfefc761d256538e160daf6545aef->enter($__internal_25dcce19b200a0f6b3a81a778d23f989996cfefc761d256538e160daf6545aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0207c619c9380e3bec0dfcee2c09a42f314a591127c2fa2a6c978ef4ba716612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0207c619c9380e3bec0dfcee2c09a42f314a591127c2fa2a6c978ef4ba716612->enter($__internal_0207c619c9380e3bec0dfcee2c09a42f314a591127c2fa2a6c978ef4ba716612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "        
        ";
        
        $__internal_0207c619c9380e3bec0dfcee2c09a42f314a591127c2fa2a6c978ef4ba716612->leave($__internal_0207c619c9380e3bec0dfcee2c09a42f314a591127c2fa2a6c978ef4ba716612_prof);

        
        $__internal_25dcce19b200a0f6b3a81a778d23f989996cfefc761d256538e160daf6545aef->leave($__internal_25dcce19b200a0f6b3a81a778d23f989996cfefc761d256538e160daf6545aef_prof);

    }

    // line 138
    public function block_script($context, array $blocks = array())
    {
        $__internal_6d28b047ec6cd846e30f34bce9d61b2cd7f8afae656744101887867936a42486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d28b047ec6cd846e30f34bce9d61b2cd7f8afae656744101887867936a42486->enter($__internal_6d28b047ec6cd846e30f34bce9d61b2cd7f8afae656744101887867936a42486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_40e263f2a6e12757c72cde2a8935caa4d784fad6db273c81e4dbbcb23e5f2ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e263f2a6e12757c72cde2a8935caa4d784fad6db273c81e4dbbcb23e5f2ce1->enter($__internal_40e263f2a6e12757c72cde2a8935caa4d784fad6db273c81e4dbbcb23e5f2ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for Slider -->
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        <!-- a refaire en propre -->
        ";
        
        $__internal_40e263f2a6e12757c72cde2a8935caa4d784fad6db273c81e4dbbcb23e5f2ce1->leave($__internal_40e263f2a6e12757c72cde2a8935caa4d784fad6db273c81e4dbbcb23e5f2ce1_prof);

        
        $__internal_6d28b047ec6cd846e30f34bce9d61b2cd7f8afae656744101887867936a42486->leave($__internal_6d28b047ec6cd846e30f34bce9d61b2cd7f8afae656744101887867936a42486_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 161,  456 => 158,  452 => 157,  446 => 154,  440 => 151,  434 => 148,  430 => 147,  426 => 146,  422 => 145,  405 => 138,  394 => 100,  385 => 99,  373 => 29,  364 => 23,  360 => 22,  356 => 21,  352 => 20,  348 => 19,  344 => 18,  339 => 15,  330 => 14,  312 => 9,  284 => 208,  266 => 193,  235 => 164,  233 => 138,  202 => 110,  192 => 102,  190 => 99,  184 => 95,  178 => 94,  167 => 92,  164 => 91,  161 => 90,  158 => 89,  153 => 88,  149 => 87,  141 => 81,  138 => 80,  132 => 73,  127 => 71,  123 => 70,  117 => 67,  113 => 66,  104 => 61,  95 => 55,  92 => 54,  90 => 53,  84 => 49,  78 => 47,  72 => 45,  70 => 44,  55 => 31,  53 => 14,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/favicon.ico') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/apple-icon.png') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>{% block title '' %} | Music Match</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    
    {% block stylesheet %}
    <!--Animate.css  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/paper-kit.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/demo.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/dashboard.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/main_1.css') }}\" rel=\"stylesheet\" />
    

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    {% endblock %}

</head>
    <body>
        <!--Navbar  -->
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"287\">
            <div class=\"container\">
                <div class=\"navbar-translate\">
                    <button class=\"navbar-toggler navbar-toggler-right navbar-burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                    </button>

                    {% if  user_manager.user %}
                        <a class=\"navbar-brand\" href=\"{{ path('dashboardDisplay', { username : user_manager.user.username }) }}\">Music Match</a>
                    {% else %}
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Music Match</a>
                    {% endif %}
                </div>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav ml-auto\" >
                        {% if  not user_manager.user %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('register') }}\" class=\"btn btn-danger btn-round\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <button class=\"btn btn-primary btn-round\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                        </li>
                        {% else %}
                        <form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('search') }}\" method=\"get\">
                            <input class=\"form-control mr-sm-2\" type=\"text\"  name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"{{ path('display', { username : user_manager.user.username }) }}\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ user_manager.user.username }}
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"{{ path('display', { username : user_manager.user.username }) }}\" class=\"dropdown-item\">Profil</a>
                                <a href=\"{{ path('dashboardLibrary', { username : user_manager.user.username }) }}\" class=\"dropdown-item\">Bibliothèque</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('logout') }}\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        {#<li class=\"nav-item\">
                            <a href=\"{{ path('display', { username : user_manager.user.username }) }}\" class=\"btn btn-info btn-round\">{{ user_manager.user.username }}</a>
                            <a href=\"{{ path('logout') }}\" class=\"btn btn-info btn-round\">Déconnexion</a>
                        </li>#}
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            {% for type, flashes in app.session.flashbag.all %}
                {% for flash in flashes %}
                    {%  if type == 'error' %}
                        {% set type = 'danger' %}
                    {% endif %}
                    <div class=\"alert alert-{{ type }}\">{{ flash|raw }}</div>
                {% endfor %}
            {%  endfor %}
        </div>
        
        
        
        {% block content %}
        
        {% endblock %}
        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"{{ path('login') }}\" class=\"register-form\">
                            <label>Email</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"nc-icon nc-email-85\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"nc-icon nc-key-25\"></i>
                                </span>
                                <input type=\"text\" id=\"mdp\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger btn-block btn-round\">Log In</button>
                        </form>
                        <div class=\"forgot\">
                            <a href=\"#\" class=\"btn btn-link btn-danger\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- succes message ajex -->
        <div class=\"panel-ajax\"></div>
        
        {% block script %}                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/tether.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"{{ asset('js/bootstrap-switch.min.js') }}\"></script>

        <!--  Plugins for Slider -->
        <script src=\"{{ asset('js/nouislider.js') }}\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"{{ asset('js/moment.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"{{ asset('js/paper-kit.js?v=2.0.0') }}\"></script>
        <!-- a refaire en propre -->
        {% endblock %}
        <script>
            \$(function () {
                // player stop and play
                \$('.play').on('click', function() {
                    \$this = \$(this);
                    i = \$this.children();
                    \$('audio').each(function () {
                        //console.log(\$(this).get(0));
                        \$(this).get(0).pause();
                        \$(this).get(0).currentTime = 0;
                    });
                    if(i.hasClass('fa-play-circle')){
                        i.removeClass('fa-play-circle').addClass('fa-pause-circle');
                        \$this.next().get(0).play()
                    }else{
                        i.removeClass('fa-pause-circle').addClass('fa-play-circle');
                        \$this.next().get(0).pause()
                    }
                    \$('audio').on('pause', function () {
                        \$(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
                    })
                    \$('audio').on('ended', function () {
                        \$(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
                    })
                })
                // ajout d'un titre dans la bibliotheque
                \$('.addToLibrary').on('click', function () {
                    var \$this = \$(this);
                    var id_track = \$this.data('id');
                    \$.post( \"{{ path('ajax_addTrack') }}\", { id: id_track } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
                // retirer un titre de la biliotheque
                \$('.removeToLibrary').on('click', function () {
                    var \$this = \$(this);
                    var id_track = \$this.data('id');
                    \$.post( \"{{ path('ajax_removeTrack') }}\", { id: id_track } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('li').slideUp('slow');
                        \$this.closest('li').next().hide();
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
            });    
        </script>
            
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\layout.html.twig");
    }
}
