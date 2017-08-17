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
        $__internal_673d50cdb06685411207d1e4181844d2a7fdeb50fb644ce57693dbc7e7d35bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673d50cdb06685411207d1e4181844d2a7fdeb50fb644ce57693dbc7e7d35bb1->enter($__internal_673d50cdb06685411207d1e4181844d2a7fdeb50fb644ce57693dbc7e7d35bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_e5f98ed4add5837817be4273ded8b10da1d16225e056148e947e58dd8dfb3b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f98ed4add5837817be4273ded8b10da1d16225e056148e947e58dd8dfb3b9f->enter($__internal_e5f98ed4add5837817be4273ded8b10da1d16225e056148e947e58dd8dfb3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
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
    
        ";
        // line 145
        $this->displayBlock('script', $context, $blocks);
        // line 171
        echo "        <script>
            \$(function () {
                \$('.play').on('click', function() {
                    //console.log(\$(this).next())
                    \$(this).next()[0].play()
                });
            });    
        </script>
            
    </body>
</html>";
        
        $__internal_673d50cdb06685411207d1e4181844d2a7fdeb50fb644ce57693dbc7e7d35bb1->leave($__internal_673d50cdb06685411207d1e4181844d2a7fdeb50fb644ce57693dbc7e7d35bb1_prof);

        
        $__internal_e5f98ed4add5837817be4273ded8b10da1d16225e056148e947e58dd8dfb3b9f->leave($__internal_e5f98ed4add5837817be4273ded8b10da1d16225e056148e947e58dd8dfb3b9f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ba232d6073051ee07a91db8b960615908e1fae9c0d04db55d9e103b2290459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba232d6073051ee07a91db8b960615908e1fae9c0d04db55d9e103b2290459->enter($__internal_a3ba232d6073051ee07a91db8b960615908e1fae9c0d04db55d9e103b2290459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61bed920296597ca6301376d804a28278eca939c5c0076e80586b78db52b27ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bed920296597ca6301376d804a28278eca939c5c0076e80586b78db52b27ee->enter($__internal_61bed920296597ca6301376d804a28278eca939c5c0076e80586b78db52b27ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_61bed920296597ca6301376d804a28278eca939c5c0076e80586b78db52b27ee->leave($__internal_61bed920296597ca6301376d804a28278eca939c5c0076e80586b78db52b27ee_prof);

        
        $__internal_a3ba232d6073051ee07a91db8b960615908e1fae9c0d04db55d9e103b2290459->leave($__internal_a3ba232d6073051ee07a91db8b960615908e1fae9c0d04db55d9e103b2290459_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_894468d3b54d3224df55bf373d30e5678dae7633a4e1e37bbf3c0a92d14cbd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894468d3b54d3224df55bf373d30e5678dae7633a4e1e37bbf3c0a92d14cbd89->enter($__internal_894468d3b54d3224df55bf373d30e5678dae7633a4e1e37bbf3c0a92d14cbd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_bc29a8f0d514d5b80fc5edcf31c856c2e3df85a0257c208f8078e8b49eeb3d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc29a8f0d514d5b80fc5edcf31c856c2e3df85a0257c208f8078e8b49eeb3d4e->enter($__internal_bc29a8f0d514d5b80fc5edcf31c856c2e3df85a0257c208f8078e8b49eeb3d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_bc29a8f0d514d5b80fc5edcf31c856c2e3df85a0257c208f8078e8b49eeb3d4e->leave($__internal_bc29a8f0d514d5b80fc5edcf31c856c2e3df85a0257c208f8078e8b49eeb3d4e_prof);

        
        $__internal_894468d3b54d3224df55bf373d30e5678dae7633a4e1e37bbf3c0a92d14cbd89->leave($__internal_894468d3b54d3224df55bf373d30e5678dae7633a4e1e37bbf3c0a92d14cbd89_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_633d7e3db17e1efa42581654b8ab92ead91f0268eba4b1c4b9323a788f7609df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633d7e3db17e1efa42581654b8ab92ead91f0268eba4b1c4b9323a788f7609df->enter($__internal_633d7e3db17e1efa42581654b8ab92ead91f0268eba4b1c4b9323a788f7609df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c94bd856879cfc15b4d23892946a91dc8b4f55ca8d34682c9a173ee0c4ff2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c94bd856879cfc15b4d23892946a91dc8b4f55ca8d34682c9a173ee0c4ff2eb->enter($__internal_5c94bd856879cfc15b4d23892946a91dc8b4f55ca8d34682c9a173ee0c4ff2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "        
        ";
        
        $__internal_5c94bd856879cfc15b4d23892946a91dc8b4f55ca8d34682c9a173ee0c4ff2eb->leave($__internal_5c94bd856879cfc15b4d23892946a91dc8b4f55ca8d34682c9a173ee0c4ff2eb_prof);

        
        $__internal_633d7e3db17e1efa42581654b8ab92ead91f0268eba4b1c4b9323a788f7609df->leave($__internal_633d7e3db17e1efa42581654b8ab92ead91f0268eba4b1c4b9323a788f7609df_prof);

    }

    // line 145
    public function block_script($context, array $blocks = array())
    {
        $__internal_e275692800e93a5a4479a72e186e02abbf8bd7e0ff95e9a59f48d94ffa415005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e275692800e93a5a4479a72e186e02abbf8bd7e0ff95e9a59f48d94ffa415005->enter($__internal_e275692800e93a5a4479a72e186e02abbf8bd7e0ff95e9a59f48d94ffa415005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_3a8fca814c1c9a0c310af89552c95283f773926374711a04e1ee25b19be07c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8fca814c1c9a0c310af89552c95283f773926374711a04e1ee25b19be07c53->enter($__internal_3a8fca814c1c9a0c310af89552c95283f773926374711a04e1ee25b19be07c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for Slider -->
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        <!-- a refaire en propre -->
        ";
        
        $__internal_3a8fca814c1c9a0c310af89552c95283f773926374711a04e1ee25b19be07c53->leave($__internal_3a8fca814c1c9a0c310af89552c95283f773926374711a04e1ee25b19be07c53_prof);

        
        $__internal_e275692800e93a5a4479a72e186e02abbf8bd7e0ff95e9a59f48d94ffa415005->leave($__internal_e275692800e93a5a4479a72e186e02abbf8bd7e0ff95e9a59f48d94ffa415005_prof);

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
        return array (  399 => 168,  393 => 165,  389 => 164,  383 => 161,  377 => 158,  371 => 155,  367 => 154,  363 => 153,  359 => 152,  342 => 145,  331 => 99,  322 => 98,  310 => 29,  301 => 23,  297 => 22,  293 => 21,  289 => 20,  285 => 19,  281 => 18,  276 => 15,  267 => 14,  249 => 9,  229 => 171,  227 => 145,  198 => 120,  188 => 101,  186 => 98,  180 => 94,  174 => 93,  163 => 91,  160 => 90,  157 => 89,  154 => 88,  149 => 87,  145 => 86,  137 => 80,  134 => 79,  128 => 72,  123 => 70,  117 => 67,  113 => 66,  104 => 61,  95 => 55,  92 => 54,  90 => 53,  84 => 49,  78 => 47,  72 => 45,  70 => 44,  55 => 31,  53 => 14,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"200\">
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
                        {#<div class=\"social-line text-center\">
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-facebook btn-just-icon\">
                                <i class=\"fa fa-facebook-square\"></i>
                            </a>
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-google btn-just-icon\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                            <a href=\"#pablo\" class=\"btn btn-neutral btn-twitter btn-just-icon\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>
                        </div>#}
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
                \$('.play').on('click', function() {
                    //console.log(\$(this).next())
                    \$(this).next()[0].play()
                });
            });    
        </script>
            
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\layout.html.twig");
    }
}
