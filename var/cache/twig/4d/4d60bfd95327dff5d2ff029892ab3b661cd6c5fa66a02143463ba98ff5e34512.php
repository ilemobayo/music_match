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
        $__internal_1ff3dffc9bddececdc2968b98ff9f055dc177da321be35e0d562286b85568395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff3dffc9bddececdc2968b98ff9f055dc177da321be35e0d562286b85568395->enter($__internal_1ff3dffc9bddececdc2968b98ff9f055dc177da321be35e0d562286b85568395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_70871e229e5fe57d29da3ec4a859bec9bc8dc67a04ba0ca880b86c4b747cedbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70871e229e5fe57d29da3ec4a859bec9bc8dc67a04ba0ca880b86c4b747cedbf->enter($__internal_70871e229e5fe57d29da3ec4a859bec9bc8dc67a04ba0ca880b86c4b747cedbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
                                <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardfriend");
            echo "\" class=\"dropdown-item\">Amis</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        ";
            // line 81
            echo "                        ";
        }
        // line 82
        echo "                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 89
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 90
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 91
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 92
                    echo "                    ";
                }
                // line 93
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
            // line 95
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </div>
        
        
        
        ";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"register-form\">
                            <label>Email</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
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
        // line 139
        $this->displayBlock('script', $context, $blocks);
        // line 165
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
        // line 194
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
        // line 209
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
                
                // ajout d'un amie dans la liste
                \$('.addToFriends').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addFriend");
        echo "\", { id: id_friend } ,function( data ) {
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
                
                // retirer un amie de la liste
                \$('.removeToFriends').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeFriend");
        echo "\", { id: id_friend } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('.col-sm-3').fadeOut('slow');
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
                
                // retirer un amie de la liste
                \$('.removeToFriends2').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeFriend");
        echo "\", { id_friend: id_friend } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('.col-sm-3').fadeOut('slow');
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
        
        $__internal_1ff3dffc9bddececdc2968b98ff9f055dc177da321be35e0d562286b85568395->leave($__internal_1ff3dffc9bddececdc2968b98ff9f055dc177da321be35e0d562286b85568395_prof);

        
        $__internal_70871e229e5fe57d29da3ec4a859bec9bc8dc67a04ba0ca880b86c4b747cedbf->leave($__internal_70871e229e5fe57d29da3ec4a859bec9bc8dc67a04ba0ca880b86c4b747cedbf_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_44529c93b6bc457021013ebc4b04e85a5b8f5b9e06f816e28ba3cd0e1f87072a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44529c93b6bc457021013ebc4b04e85a5b8f5b9e06f816e28ba3cd0e1f87072a->enter($__internal_44529c93b6bc457021013ebc4b04e85a5b8f5b9e06f816e28ba3cd0e1f87072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f33b7234cb90b203ba1cf99d4397df9cee63de36d7b6e033aa544e1de7997268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33b7234cb90b203ba1cf99d4397df9cee63de36d7b6e033aa544e1de7997268->enter($__internal_f33b7234cb90b203ba1cf99d4397df9cee63de36d7b6e033aa544e1de7997268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_f33b7234cb90b203ba1cf99d4397df9cee63de36d7b6e033aa544e1de7997268->leave($__internal_f33b7234cb90b203ba1cf99d4397df9cee63de36d7b6e033aa544e1de7997268_prof);

        
        $__internal_44529c93b6bc457021013ebc4b04e85a5b8f5b9e06f816e28ba3cd0e1f87072a->leave($__internal_44529c93b6bc457021013ebc4b04e85a5b8f5b9e06f816e28ba3cd0e1f87072a_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_66bc687333f5e7007b7c051c55ebf434ec45d09b9a06278480f111261d9858fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bc687333f5e7007b7c051c55ebf434ec45d09b9a06278480f111261d9858fb->enter($__internal_66bc687333f5e7007b7c051c55ebf434ec45d09b9a06278480f111261d9858fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ab49653d6df3fe1937d1cc609b028fe7818cca56502288708551e2b22126b74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab49653d6df3fe1937d1cc609b028fe7818cca56502288708551e2b22126b74a->enter($__internal_ab49653d6df3fe1937d1cc609b028fe7818cca56502288708551e2b22126b74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_ab49653d6df3fe1937d1cc609b028fe7818cca56502288708551e2b22126b74a->leave($__internal_ab49653d6df3fe1937d1cc609b028fe7818cca56502288708551e2b22126b74a_prof);

        
        $__internal_66bc687333f5e7007b7c051c55ebf434ec45d09b9a06278480f111261d9858fb->leave($__internal_66bc687333f5e7007b7c051c55ebf434ec45d09b9a06278480f111261d9858fb_prof);

    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2144bfda261a31b7887402b8dc3cdae68ee44f04fc28f3ce75058ace2f7bd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2144bfda261a31b7887402b8dc3cdae68ee44f04fc28f3ce75058ace2f7bd6d->enter($__internal_a2144bfda261a31b7887402b8dc3cdae68ee44f04fc28f3ce75058ace2f7bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_82f260c9b30458928c0424932be9f34056b965e7aa59ea06908aaea1882f6a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f260c9b30458928c0424932be9f34056b965e7aa59ea06908aaea1882f6a09->enter($__internal_82f260c9b30458928c0424932be9f34056b965e7aa59ea06908aaea1882f6a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 101
        echo "        
        ";
        
        $__internal_82f260c9b30458928c0424932be9f34056b965e7aa59ea06908aaea1882f6a09->leave($__internal_82f260c9b30458928c0424932be9f34056b965e7aa59ea06908aaea1882f6a09_prof);

        
        $__internal_a2144bfda261a31b7887402b8dc3cdae68ee44f04fc28f3ce75058ace2f7bd6d->leave($__internal_a2144bfda261a31b7887402b8dc3cdae68ee44f04fc28f3ce75058ace2f7bd6d_prof);

    }

    // line 139
    public function block_script($context, array $blocks = array())
    {
        $__internal_7dbf93ceae8be8620495a36da8eb530eda422e8005a214d86ba17e38c3810c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbf93ceae8be8620495a36da8eb530eda422e8005a214d86ba17e38c3810c0d->enter($__internal_7dbf93ceae8be8620495a36da8eb530eda422e8005a214d86ba17e38c3810c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_014bbb4743ea41122b59755145be994e7da59b4b7df3600b0aadfeec3cdcae4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014bbb4743ea41122b59755145be994e7da59b4b7df3600b0aadfeec3cdcae4a->enter($__internal_014bbb4743ea41122b59755145be994e7da59b4b7df3600b0aadfeec3cdcae4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for Slider -->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        <!-- a refaire en propre -->
        ";
        
        $__internal_014bbb4743ea41122b59755145be994e7da59b4b7df3600b0aadfeec3cdcae4a->leave($__internal_014bbb4743ea41122b59755145be994e7da59b4b7df3600b0aadfeec3cdcae4a_prof);

        
        $__internal_7dbf93ceae8be8620495a36da8eb530eda422e8005a214d86ba17e38c3810c0d->leave($__internal_7dbf93ceae8be8620495a36da8eb530eda422e8005a214d86ba17e38c3810c0d_prof);

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
        return array (  525 => 162,  519 => 159,  515 => 158,  509 => 155,  503 => 152,  497 => 149,  493 => 148,  489 => 147,  485 => 146,  468 => 139,  457 => 101,  448 => 100,  436 => 29,  427 => 23,  423 => 22,  419 => 21,  415 => 20,  411 => 19,  407 => 18,  402 => 15,  393 => 14,  375 => 9,  348 => 260,  328 => 243,  309 => 227,  288 => 209,  270 => 194,  239 => 165,  237 => 139,  206 => 111,  196 => 103,  194 => 100,  188 => 96,  182 => 95,  171 => 93,  168 => 92,  165 => 91,  162 => 90,  157 => 89,  153 => 88,  145 => 82,  142 => 81,  136 => 74,  131 => 72,  127 => 71,  123 => 70,  117 => 67,  113 => 66,  104 => 61,  95 => 55,  92 => 54,  90 => 53,  84 => 49,  78 => 47,  72 => 45,  70 => 44,  55 => 31,  53 => 14,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
                                <a href=\"{{ path('dashboardfriend')}}\" class=\"dropdown-item\">Amis</a>                                
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
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
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
                
                // ajout d'un amie dans la liste
                \$('.addToFriends').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"{{ path('ajax_addFriend') }}\", { id: id_friend } ,function( data ) {
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
                
                // retirer un amie de la liste
                \$('.removeToFriends').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"{{ path('ajax_removeFriend') }}\", { id: id_friend } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('.col-sm-3').fadeOut('slow');
                        \$('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                            \$(this).removeClass('move-panel-ajax');
                            next();
                        }).delay(500).queue(function(next){
                            \$(this).removeClass(data.status);
                            next();
                        });
                    });
                })
                
                // retirer un amie de la liste
                \$('.removeToFriends2').on('click', function () {
                    var \$this = \$(this);
                    var id_friend = \$this.data('id');
                    \$.post( \"{{ path('ajax_removeFriend') }}\", { id_friend: id_friend } ,function( data ) {
                        \$('.panel-ajax').html( data.message );
                        \$this.closest('.col-sm-3').fadeOut('slow');
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
