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
        // line 99
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <div class=\"social-line text-center\">
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-facebook btn-just-icon\">
                                <i class=\"fa fa-facebook-square\"></i>
                            </a>
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-google btn-just-icon\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-twitter btn-just-icon\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>
                        </div>
                        <form method=\"post\" action=\"";
        // line 118
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
    
                            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for Slider -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization snd functons -->
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        <!-- a refaire en propre -->
        <script>
            \$(function () {
                \$('.play').on('click', function() {
                    //console.log(\$(this).next())
                    \$(this).next()[0].play()
                })
                
                //-----------------------------------
                
                \$.get('ajax/getTags', function(data){
                    console.log(data);
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
        return array (  348 => 98,  342 => 29,  333 => 23,  329 => 22,  325 => 21,  321 => 20,  317 => 19,  313 => 18,  308 => 15,  305 => 14,  299 => 9,  277 => 166,  271 => 163,  267 => 162,  261 => 159,  255 => 156,  249 => 153,  245 => 152,  241 => 151,  237 => 150,  202 => 118,  181 => 99,  179 => 98,  173 => 94,  167 => 93,  156 => 91,  153 => 90,  150 => 89,  147 => 88,  142 => 87,  138 => 86,  130 => 80,  127 => 79,  121 => 72,  116 => 70,  110 => 67,  106 => 66,  97 => 61,  88 => 55,  85 => 54,  83 => 53,  77 => 49,  71 => 47,  65 => 45,  63 => 44,  48 => 31,  46 => 14,  38 => 9,  32 => 6,  28 => 5,  22 => 1,);
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
