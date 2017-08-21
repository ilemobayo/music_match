<?php

/* layout.html.twig */
class __TwigTemplate_b439a1ba4e3dc5bfa7e114b23cbda5553c353239d6228b067a73b93ea76ce941 extends Twig_Template
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
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"200\">
            <div class=\"container\">
                <div class=\"navbar-translate\">
                    <button class=\"navbar-toggler navbar-toggler-right navbar-burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                    </button>

                    ";
        // line 44
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 45
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()), "username", array()))), "html", null, true);
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
        if ( !$this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()), "username", array()))), "html", null, true);
            echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Profil</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        ";
            // line 79
            echo "                        ";
        }
        // line 80
        echo "                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 87
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 88
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 89
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 90
                    echo "                    ";
                }
                // line 91
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
            // line 93
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
        
        
        
        ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        ";
        // line 120
        echo "                        <form method=\"post\" action=\"";
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
        // line 148
        $this->displayBlock('script', $context, $blocks);
        // line 174
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
        // line 203
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
        // line 218
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
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "        
        ";
    }

    // line 148
    public function block_script($context, array $blocks = array())
    {
        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for Slider -->
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        <!-- a refaire en propre -->
        ";
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
        return array (  405 => 171,  399 => 168,  395 => 167,  389 => 164,  383 => 161,  377 => 158,  373 => 157,  369 => 156,  365 => 155,  354 => 148,  349 => 99,  346 => 98,  340 => 29,  331 => 23,  327 => 22,  323 => 21,  319 => 20,  315 => 19,  311 => 18,  306 => 15,  303 => 14,  297 => 9,  275 => 218,  257 => 203,  226 => 174,  224 => 148,  192 => 120,  182 => 101,  180 => 98,  174 => 94,  168 => 93,  157 => 91,  154 => 90,  151 => 89,  148 => 88,  143 => 87,  139 => 86,  131 => 80,  128 => 79,  122 => 72,  117 => 70,  111 => 67,  107 => 66,  98 => 61,  89 => 55,  86 => 54,  84 => 53,  78 => 49,  72 => 47,  66 => 45,  64 => 44,  49 => 31,  47 => 14,  39 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\layout.html.twig");
    }
}