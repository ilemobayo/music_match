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
        $__internal_95a10223567c1541e24bfb3ab8c4743250f28fbb85631fb471e13624d0d4e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a10223567c1541e24bfb3ab8c4743250f28fbb85631fb471e13624d0d4e1b2->enter($__internal_95a10223567c1541e24bfb3ab8c4743250f28fbb85631fb471e13624d0d4e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_71d699f38a4a30dafc60f44fadea0f1ccb3f4906716b61334c9a1367e97c94d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d699f38a4a30dafc60f44fadea0f1ccb3f4906716b61334c9a1367e97c94d5->enter($__internal_71d699f38a4a30dafc60f44fadea0f1ccb3f4906716b61334c9a1367e97c94d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
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
        // line 32
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
        // line 45
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 46
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\">Music Match</a>
                    ";
        } else {
            // line 48
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Music Match</a>
                    ";
        }
        // line 50
        echo "                </div>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav ml-auto\" >
                        ";
        // line 54
        if ( !$this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 55
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"btn btn-danger btn-round\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <button class=\"btn btn-primary btn-round\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                        </li>
                        ";
        } else {
            // line 62
            echo "                        <form class=\"form-inline my-2 my-lg-0\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
            echo "\" method=\"get\">
                            <input class=\"form-control mr-sm-2\" type=\"text\"  name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()), "html", null, true);
            echo "
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Profil</a>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardLibrary", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Bibliothèque</a>                                
                                <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardfriend");
            echo "\" class=\"dropdown-item\">Amis</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        ";
            // line 82
            echo "                        ";
        }
        // line 83
        echo "                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 90
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 91
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 92
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 93
                    echo "                    ";
                }
                // line 94
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
            // line 96
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>
        
        
        
        ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"";
        // line 112
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
                            <a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgottenPass");
        echo "\" class=\"btn btn-link btn-danger\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- succes message ajex -->
        <div class=\"panel-ajax\"></div>
        
        ";
        // line 140
        $this->displayBlock('script', $context, $blocks);
        // line 174
        echo "        
    </body>
</html>";
        
        $__internal_95a10223567c1541e24bfb3ab8c4743250f28fbb85631fb471e13624d0d4e1b2->leave($__internal_95a10223567c1541e24bfb3ab8c4743250f28fbb85631fb471e13624d0d4e1b2_prof);

        
        $__internal_71d699f38a4a30dafc60f44fadea0f1ccb3f4906716b61334c9a1367e97c94d5->leave($__internal_71d699f38a4a30dafc60f44fadea0f1ccb3f4906716b61334c9a1367e97c94d5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5655468f3e61bbef2ac5908d31d8c069eb104b1490d965bd7ab6330eab71564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5655468f3e61bbef2ac5908d31d8c069eb104b1490d965bd7ab6330eab71564->enter($__internal_b5655468f3e61bbef2ac5908d31d8c069eb104b1490d965bd7ab6330eab71564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fac064997d8142dce01234d1c2b24696f1a183581cc565e754ade452e8ac4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fac064997d8142dce01234d1c2b24696f1a183581cc565e754ade452e8ac4f0->enter($__internal_5fac064997d8142dce01234d1c2b24696f1a183581cc565e754ade452e8ac4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_5fac064997d8142dce01234d1c2b24696f1a183581cc565e754ade452e8ac4f0->leave($__internal_5fac064997d8142dce01234d1c2b24696f1a183581cc565e754ade452e8ac4f0_prof);

        
        $__internal_b5655468f3e61bbef2ac5908d31d8c069eb104b1490d965bd7ab6330eab71564->leave($__internal_b5655468f3e61bbef2ac5908d31d8c069eb104b1490d965bd7ab6330eab71564_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ee5e227d5ec81e20e3755b7a64c11c1a9eefb26633242588bf68c3dc666ee6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5e227d5ec81e20e3755b7a64c11c1a9eefb26633242588bf68c3dc666ee6cb->enter($__internal_ee5e227d5ec81e20e3755b7a64c11c1a9eefb26633242588bf68c3dc666ee6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_fd538ae4ddf526b698babf37256b15b0a53286bc8833c6754c8d97e13e839595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd538ae4ddf526b698babf37256b15b0a53286bc8833c6754c8d97e13e839595->enter($__internal_fd538ae4ddf526b698babf37256b15b0a53286bc8833c6754c8d97e13e839595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Bangers|Roboto\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main_1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_fd538ae4ddf526b698babf37256b15b0a53286bc8833c6754c8d97e13e839595->leave($__internal_fd538ae4ddf526b698babf37256b15b0a53286bc8833c6754c8d97e13e839595_prof);

        
        $__internal_ee5e227d5ec81e20e3755b7a64c11c1a9eefb26633242588bf68c3dc666ee6cb->leave($__internal_ee5e227d5ec81e20e3755b7a64c11c1a9eefb26633242588bf68c3dc666ee6cb_prof);

    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
        $__internal_644c71898b44fd8a728dd3501b9f6af5c63b2eb0e780ec20079dbbbad9d7fe16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644c71898b44fd8a728dd3501b9f6af5c63b2eb0e780ec20079dbbbad9d7fe16->enter($__internal_644c71898b44fd8a728dd3501b9f6af5c63b2eb0e780ec20079dbbbad9d7fe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_85e278adf547ed157e5024e6bbb2b5753a559bf282134f83543a2f14e9f3a903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e278adf547ed157e5024e6bbb2b5753a559bf282134f83543a2f14e9f3a903->enter($__internal_85e278adf547ed157e5024e6bbb2b5753a559bf282134f83543a2f14e9f3a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 102
        echo "        
        ";
        
        $__internal_85e278adf547ed157e5024e6bbb2b5753a559bf282134f83543a2f14e9f3a903->leave($__internal_85e278adf547ed157e5024e6bbb2b5753a559bf282134f83543a2f14e9f3a903_prof);

        
        $__internal_644c71898b44fd8a728dd3501b9f6af5c63b2eb0e780ec20079dbbbad9d7fe16->leave($__internal_644c71898b44fd8a728dd3501b9f6af5c63b2eb0e780ec20079dbbbad9d7fe16_prof);

    }

    // line 140
    public function block_script($context, array $blocks = array())
    {
        $__internal_d8a5ab72dc66a1d2dff38449ed0737933bab4bccba969da7b1669b218877fda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a5ab72dc66a1d2dff38449ed0737933bab4bccba969da7b1669b218877fda3->enter($__internal_d8a5ab72dc66a1d2dff38449ed0737933bab4bccba969da7b1669b218877fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_291d1cdbe15fd5af21c078524f7043f347e4ebd0e8189ad06c94b25c943cc4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291d1cdbe15fd5af21c078524f7043f347e4ebd0e8189ad06c94b25c943cc4b2->enter($__internal_291d1cdbe15fd5af21c078524f7043f347e4ebd0e8189ad06c94b25c943cc4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
        
        <!--  Plugins for Slider -->
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        
        <script>
            var ajaxAddTrack = \"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addTrack");
        echo "\";
            var ajaxRemoveTrack = \"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeTrack");
        echo "\";
            var ajaxAddFriend = \"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addFriend");
        echo "\";
            var ajaxRemoveFriend = \"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeFriend");
        echo "\";
        </script>
        
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_291d1cdbe15fd5af21c078524f7043f347e4ebd0e8189ad06c94b25c943cc4b2->leave($__internal_291d1cdbe15fd5af21c078524f7043f347e4ebd0e8189ad06c94b25c943cc4b2_prof);

        
        $__internal_d8a5ab72dc66a1d2dff38449ed0737933bab4bccba969da7b1669b218877fda3->leave($__internal_d8a5ab72dc66a1d2dff38449ed0737933bab4bccba969da7b1669b218877fda3_prof);

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
        return array (  429 => 172,  423 => 169,  419 => 168,  415 => 167,  411 => 166,  405 => 163,  399 => 160,  395 => 159,  389 => 156,  383 => 153,  377 => 150,  373 => 149,  369 => 148,  365 => 147,  348 => 140,  337 => 102,  328 => 101,  316 => 30,  307 => 24,  302 => 22,  298 => 21,  294 => 20,  290 => 19,  286 => 18,  281 => 15,  272 => 14,  254 => 9,  242 => 174,  240 => 140,  227 => 130,  206 => 112,  196 => 104,  194 => 101,  188 => 97,  182 => 96,  171 => 94,  168 => 93,  165 => 92,  162 => 91,  157 => 90,  153 => 89,  145 => 83,  142 => 82,  136 => 75,  131 => 73,  127 => 72,  123 => 71,  117 => 68,  113 => 67,  104 => 62,  95 => 56,  92 => 55,  90 => 54,  84 => 50,  78 => 48,  72 => 46,  70 => 45,  55 => 32,  53 => 14,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/logo1.png') }}\">
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
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Bangers|Roboto\" rel=\"stylesheet\">
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
                            <a href=\"{{ path('forgottenPass') }}\" class=\"btn btn-link btn-danger\">Forgot password?</a>
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
        
        <script>
            var ajaxAddTrack = \"{{ path('ajax_addTrack') }}\";
            var ajaxRemoveTrack = \"{{ path('ajax_removeTrack') }}\";
            var ajaxAddFriend = \"{{ path('ajax_addFriend') }}\";
            var ajaxRemoveFriend = \"{{ path('ajax_removeFriend') }}\";
        </script>
        
        <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
        
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\layout.html.twig");
    }
}
