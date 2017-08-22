<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_0546e8040be6181def9c194fae310a7360f6e5c270848d9b67a270a880ef15ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_350cb8f2f7c67d1071e71f5aedcd2c086d173f1459280c19b3b87712b985da2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350cb8f2f7c67d1071e71f5aedcd2c086d173f1459280c19b3b87712b985da2e->enter($__internal_350cb8f2f7c67d1071e71f5aedcd2c086d173f1459280c19b3b87712b985da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_68168ea48b992ab8ff23093feed4b2abaa61fb1a265fd68f1d10c8061b9258b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68168ea48b992ab8ff23093feed4b2abaa61fb1a265fd68f1d10c8061b9258b9->enter($__internal_68168ea48b992ab8ff23093feed4b2abaa61fb1a265fd68f1d10c8061b9258b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_350cb8f2f7c67d1071e71f5aedcd2c086d173f1459280c19b3b87712b985da2e->leave($__internal_350cb8f2f7c67d1071e71f5aedcd2c086d173f1459280c19b3b87712b985da2e_prof);

        
        $__internal_68168ea48b992ab8ff23093feed4b2abaa61fb1a265fd68f1d10c8061b9258b9->leave($__internal_68168ea48b992ab8ff23093feed4b2abaa61fb1a265fd68f1d10c8061b9258b9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d9320483d53b7b60dbd15247ca00cddbd77ae278044a6b0ff5b62dfe61f1afde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9320483d53b7b60dbd15247ca00cddbd77ae278044a6b0ff5b62dfe61f1afde->enter($__internal_d9320483d53b7b60dbd15247ca00cddbd77ae278044a6b0ff5b62dfe61f1afde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5b14e7ee471e2b17ee40828416310a85bb7e7d6825269adc6da2d862b26f9e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b14e7ee471e2b17ee40828416310a85bb7e7d6825269adc6da2d862b26f9e70->enter($__internal_5b14e7ee471e2b17ee40828416310a85bb7e7d6825269adc6da2d862b26f9e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5b14e7ee471e2b17ee40828416310a85bb7e7d6825269adc6da2d862b26f9e70->leave($__internal_5b14e7ee471e2b17ee40828416310a85bb7e7d6825269adc6da2d862b26f9e70_prof);

        
        $__internal_d9320483d53b7b60dbd15247ca00cddbd77ae278044a6b0ff5b62dfe61f1afde->leave($__internal_d9320483d53b7b60dbd15247ca00cddbd77ae278044a6b0ff5b62dfe61f1afde_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_561cd04b6752b1edd51b052dceb23e5a6a84d0296ba8bf103bd0e53c186d7c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561cd04b6752b1edd51b052dceb23e5a6a84d0296ba8bf103bd0e53c186d7c69->enter($__internal_561cd04b6752b1edd51b052dceb23e5a6a84d0296ba8bf103bd0e53c186d7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c67d2e85c3e21fcd12588ee7b41b3412a8f0aebc885b422d7302b266a6ebde83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67d2e85c3e21fcd12588ee7b41b3412a8f0aebc885b422d7302b266a6ebde83->enter($__internal_c67d2e85c3e21fcd12588ee7b41b3412a8f0aebc885b422d7302b266a6ebde83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c67d2e85c3e21fcd12588ee7b41b3412a8f0aebc885b422d7302b266a6ebde83->leave($__internal_c67d2e85c3e21fcd12588ee7b41b3412a8f0aebc885b422d7302b266a6ebde83_prof);

        
        $__internal_561cd04b6752b1edd51b052dceb23e5a6a84d0296ba8bf103bd0e53c186d7c69->leave($__internal_561cd04b6752b1edd51b052dceb23e5a6a84d0296ba8bf103bd0e53c186d7c69_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_86665dd6f3ad1c7f1b917a6f5f3239eb510c2b706383eaf220975c99f69e1626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86665dd6f3ad1c7f1b917a6f5f3239eb510c2b706383eaf220975c99f69e1626->enter($__internal_86665dd6f3ad1c7f1b917a6f5f3239eb510c2b706383eaf220975c99f69e1626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a357091f15b254459e92e69dd4c84248647c81d522ec95aeb73f89803550b94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a357091f15b254459e92e69dd4c84248647c81d522ec95aeb73f89803550b94f->enter($__internal_a357091f15b254459e92e69dd4c84248647c81d522ec95aeb73f89803550b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a357091f15b254459e92e69dd4c84248647c81d522ec95aeb73f89803550b94f->leave($__internal_a357091f15b254459e92e69dd4c84248647c81d522ec95aeb73f89803550b94f_prof);

        
        $__internal_86665dd6f3ad1c7f1b917a6f5f3239eb510c2b706383eaf220975c99f69e1626->leave($__internal_86665dd6f3ad1c7f1b917a6f5f3239eb510c2b706383eaf220975c99f69e1626_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9814146b9bc1c3bfd3ee8c50105c7c89a1f53f2f381d7b07a76f1ce107179f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9814146b9bc1c3bfd3ee8c50105c7c89a1f53f2f381d7b07a76f1ce107179f9d->enter($__internal_9814146b9bc1c3bfd3ee8c50105c7c89a1f53f2f381d7b07a76f1ce107179f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ad7b63f12fdf262088930b5587783ab546fdbcc1f9d0b39417b3cb74fc458ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7b63f12fdf262088930b5587783ab546fdbcc1f9d0b39417b3cb74fc458ebc->enter($__internal_ad7b63f12fdf262088930b5587783ab546fdbcc1f9d0b39417b3cb74fc458ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_1a6b3e3893820414030c734851a988da383164af051808e449575ed486217c29 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_0949a627e1c75a9efdb6c13b4fe759f1517f9676fda3b3ed5d22ca1efb667161 = "{{") && ('' === $__internal_0949a627e1c75a9efdb6c13b4fe759f1517f9676fda3b3ed5d22ca1efb667161 || 0 === strpos($__internal_1a6b3e3893820414030c734851a988da383164af051808e449575ed486217c29, $__internal_0949a627e1c75a9efdb6c13b4fe759f1517f9676fda3b3ed5d22ca1efb667161)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_ad7b63f12fdf262088930b5587783ab546fdbcc1f9d0b39417b3cb74fc458ebc->leave($__internal_ad7b63f12fdf262088930b5587783ab546fdbcc1f9d0b39417b3cb74fc458ebc_prof);

        
        $__internal_9814146b9bc1c3bfd3ee8c50105c7c89a1f53f2f381d7b07a76f1ce107179f9d->leave($__internal_9814146b9bc1c3bfd3ee8c50105c7c89a1f53f2f381d7b07a76f1ce107179f9d_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_89308a49d647dc1798de281d984b2319b288d996a05ee099ae39b6e1dd562153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89308a49d647dc1798de281d984b2319b288d996a05ee099ae39b6e1dd562153->enter($__internal_89308a49d647dc1798de281d984b2319b288d996a05ee099ae39b6e1dd562153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f3cc8a089750c20d6114c119973af804229814f61dbc5132708c60a138854b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cc8a089750c20d6114c119973af804229814f61dbc5132708c60a138854b5d->enter($__internal_f3cc8a089750c20d6114c119973af804229814f61dbc5132708c60a138854b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f3cc8a089750c20d6114c119973af804229814f61dbc5132708c60a138854b5d->leave($__internal_f3cc8a089750c20d6114c119973af804229814f61dbc5132708c60a138854b5d_prof);

        
        $__internal_89308a49d647dc1798de281d984b2319b288d996a05ee099ae39b6e1dd562153->leave($__internal_89308a49d647dc1798de281d984b2319b288d996a05ee099ae39b6e1dd562153_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_99fe21942b1c3939c8dcc1bb4265df08f1a4cd3cc20dd7e0b56f60d8a2b402e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fe21942b1c3939c8dcc1bb4265df08f1a4cd3cc20dd7e0b56f60d8a2b402e9->enter($__internal_99fe21942b1c3939c8dcc1bb4265df08f1a4cd3cc20dd7e0b56f60d8a2b402e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bc7156ca05b9fc9234492a867fcf0880c8a28a56ccd59585b50d733438ca8ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7156ca05b9fc9234492a867fcf0880c8a28a56ccd59585b50d733438ca8ccb->enter($__internal_bc7156ca05b9fc9234492a867fcf0880c8a28a56ccd59585b50d733438ca8ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_bc7156ca05b9fc9234492a867fcf0880c8a28a56ccd59585b50d733438ca8ccb->leave($__internal_bc7156ca05b9fc9234492a867fcf0880c8a28a56ccd59585b50d733438ca8ccb_prof);

        
        $__internal_99fe21942b1c3939c8dcc1bb4265df08f1a4cd3cc20dd7e0b56f60d8a2b402e9->leave($__internal_99fe21942b1c3939c8dcc1bb4265df08f1a4cd3cc20dd7e0b56f60d8a2b402e9_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3c12472ffd869b896d07683d519428ac9d5dabe516bc346a4564411e3630f64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c12472ffd869b896d07683d519428ac9d5dabe516bc346a4564411e3630f64c->enter($__internal_3c12472ffd869b896d07683d519428ac9d5dabe516bc346a4564411e3630f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d1b27456810e2ecf4decb19f91c7024c6a338a1dc0b343353b6d135a80f70b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b27456810e2ecf4decb19f91c7024c6a338a1dc0b343353b6d135a80f70b2e->enter($__internal_d1b27456810e2ecf4decb19f91c7024c6a338a1dc0b343353b6d135a80f70b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_d1b27456810e2ecf4decb19f91c7024c6a338a1dc0b343353b6d135a80f70b2e->leave($__internal_d1b27456810e2ecf4decb19f91c7024c6a338a1dc0b343353b6d135a80f70b2e_prof);

        
        $__internal_3c12472ffd869b896d07683d519428ac9d5dabe516bc346a4564411e3630f64c->leave($__internal_3c12472ffd869b896d07683d519428ac9d5dabe516bc346a4564411e3630f64c_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_413f77ffbfd8cb52007cedb38cbccdce5d27bb4b3633d964fc2c64291c91f0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413f77ffbfd8cb52007cedb38cbccdce5d27bb4b3633d964fc2c64291c91f0d2->enter($__internal_413f77ffbfd8cb52007cedb38cbccdce5d27bb4b3633d964fc2c64291c91f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_fe3cb4a3c01411acfc052863ee7fcd5b54ce2d511bb0075fe3cd3bb0893a3c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3cb4a3c01411acfc052863ee7fcd5b54ce2d511bb0075fe3cd3bb0893a3c47->enter($__internal_fe3cb4a3c01411acfc052863ee7fcd5b54ce2d511bb0075fe3cd3bb0893a3c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_fe3cb4a3c01411acfc052863ee7fcd5b54ce2d511bb0075fe3cd3bb0893a3c47->leave($__internal_fe3cb4a3c01411acfc052863ee7fcd5b54ce2d511bb0075fe3cd3bb0893a3c47_prof);

        
        $__internal_413f77ffbfd8cb52007cedb38cbccdce5d27bb4b3633d964fc2c64291c91f0d2->leave($__internal_413f77ffbfd8cb52007cedb38cbccdce5d27bb4b3633d964fc2c64291c91f0d2_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_169e41a3b5b42ed590ccbe0c865ed4acfae634da19bd3e4d1d3f4ad8aa2a5026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169e41a3b5b42ed590ccbe0c865ed4acfae634da19bd3e4d1d3f4ad8aa2a5026->enter($__internal_169e41a3b5b42ed590ccbe0c865ed4acfae634da19bd3e4d1d3f4ad8aa2a5026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5571f828b5a47bcda4438d0aef909099b23c31df23d88fde964691bab3dc59d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5571f828b5a47bcda4438d0aef909099b23c31df23d88fde964691bab3dc59d5->enter($__internal_5571f828b5a47bcda4438d0aef909099b23c31df23d88fde964691bab3dc59d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_5571f828b5a47bcda4438d0aef909099b23c31df23d88fde964691bab3dc59d5->leave($__internal_5571f828b5a47bcda4438d0aef909099b23c31df23d88fde964691bab3dc59d5_prof);

        
        $__internal_169e41a3b5b42ed590ccbe0c865ed4acfae634da19bd3e4d1d3f4ad8aa2a5026->leave($__internal_169e41a3b5b42ed590ccbe0c865ed4acfae634da19bd3e4d1d3f4ad8aa2a5026_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0eebe74a1755d57c44343891d48a13e426f10c54a3fe75f2ca98b867ec6cd601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eebe74a1755d57c44343891d48a13e426f10c54a3fe75f2ca98b867ec6cd601->enter($__internal_0eebe74a1755d57c44343891d48a13e426f10c54a3fe75f2ca98b867ec6cd601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_92a7f5e03a5ae66b6cdaad541a34d0244aea88a927c5cc5be8a5178ebb6b252b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a7f5e03a5ae66b6cdaad541a34d0244aea88a927c5cc5be8a5178ebb6b252b->enter($__internal_92a7f5e03a5ae66b6cdaad541a34d0244aea88a927c5cc5be8a5178ebb6b252b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_92a7f5e03a5ae66b6cdaad541a34d0244aea88a927c5cc5be8a5178ebb6b252b->leave($__internal_92a7f5e03a5ae66b6cdaad541a34d0244aea88a927c5cc5be8a5178ebb6b252b_prof);

        
        $__internal_0eebe74a1755d57c44343891d48a13e426f10c54a3fe75f2ca98b867ec6cd601->leave($__internal_0eebe74a1755d57c44343891d48a13e426f10c54a3fe75f2ca98b867ec6cd601_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ffc8980886711e92079f97825c9d527aeb45d2649f9bf9fd65ac90afd54c20d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc8980886711e92079f97825c9d527aeb45d2649f9bf9fd65ac90afd54c20d8->enter($__internal_ffc8980886711e92079f97825c9d527aeb45d2649f9bf9fd65ac90afd54c20d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2acef88f24c0ea01096193c95b787ae977d8992be87e6ad66746ec5dba12d84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acef88f24c0ea01096193c95b787ae977d8992be87e6ad66746ec5dba12d84e->enter($__internal_2acef88f24c0ea01096193c95b787ae977d8992be87e6ad66746ec5dba12d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_2acef88f24c0ea01096193c95b787ae977d8992be87e6ad66746ec5dba12d84e->leave($__internal_2acef88f24c0ea01096193c95b787ae977d8992be87e6ad66746ec5dba12d84e_prof);

        
        $__internal_ffc8980886711e92079f97825c9d527aeb45d2649f9bf9fd65ac90afd54c20d8->leave($__internal_ffc8980886711e92079f97825c9d527aeb45d2649f9bf9fd65ac90afd54c20d8_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_807cf2d082d7042f1db4ce7a77dbe043cd1474ede00dd195c493463a9aeecb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807cf2d082d7042f1db4ce7a77dbe043cd1474ede00dd195c493463a9aeecb31->enter($__internal_807cf2d082d7042f1db4ce7a77dbe043cd1474ede00dd195c493463a9aeecb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e4269d08ae1878f2c6dc93f0723619064a545aac4fe72c8a60db414bf3f6cbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4269d08ae1878f2c6dc93f0723619064a545aac4fe72c8a60db414bf3f6cbd6->enter($__internal_e4269d08ae1878f2c6dc93f0723619064a545aac4fe72c8a60db414bf3f6cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_e4269d08ae1878f2c6dc93f0723619064a545aac4fe72c8a60db414bf3f6cbd6->leave($__internal_e4269d08ae1878f2c6dc93f0723619064a545aac4fe72c8a60db414bf3f6cbd6_prof);

        
        $__internal_807cf2d082d7042f1db4ce7a77dbe043cd1474ede00dd195c493463a9aeecb31->leave($__internal_807cf2d082d7042f1db4ce7a77dbe043cd1474ede00dd195c493463a9aeecb31_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5adf11067e733efc4dcd93582cdf6474936d7481d747c9f737fc1f27fb49b861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adf11067e733efc4dcd93582cdf6474936d7481d747c9f737fc1f27fb49b861->enter($__internal_5adf11067e733efc4dcd93582cdf6474936d7481d747c9f737fc1f27fb49b861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1d655aeb07dc4823ea2de52a3fa4d3a38f7eca5341a780f5494d10f64a875d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d655aeb07dc4823ea2de52a3fa4d3a38f7eca5341a780f5494d10f64a875d7f->enter($__internal_1d655aeb07dc4823ea2de52a3fa4d3a38f7eca5341a780f5494d10f64a875d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_1d655aeb07dc4823ea2de52a3fa4d3a38f7eca5341a780f5494d10f64a875d7f->leave($__internal_1d655aeb07dc4823ea2de52a3fa4d3a38f7eca5341a780f5494d10f64a875d7f_prof);

        
        $__internal_5adf11067e733efc4dcd93582cdf6474936d7481d747c9f737fc1f27fb49b861->leave($__internal_5adf11067e733efc4dcd93582cdf6474936d7481d747c9f737fc1f27fb49b861_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_094793c28d04425fc098a24c97392bca6a561dee52d8262f87a1f23a990ffb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094793c28d04425fc098a24c97392bca6a561dee52d8262f87a1f23a990ffb80->enter($__internal_094793c28d04425fc098a24c97392bca6a561dee52d8262f87a1f23a990ffb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1f83e05cffbb5bc5198381881a6d56937ce9e9a6e1f3f9c6042b5659a6438e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f83e05cffbb5bc5198381881a6d56937ce9e9a6e1f3f9c6042b5659a6438e6f->enter($__internal_1f83e05cffbb5bc5198381881a6d56937ce9e9a6e1f3f9c6042b5659a6438e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1f83e05cffbb5bc5198381881a6d56937ce9e9a6e1f3f9c6042b5659a6438e6f->leave($__internal_1f83e05cffbb5bc5198381881a6d56937ce9e9a6e1f3f9c6042b5659a6438e6f_prof);

        
        $__internal_094793c28d04425fc098a24c97392bca6a561dee52d8262f87a1f23a990ffb80->leave($__internal_094793c28d04425fc098a24c97392bca6a561dee52d8262f87a1f23a990ffb80_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9beb7a1b357b6a0859a0c29673fb82956a0e6b73ebf6a0a26d01d967b32c8385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9beb7a1b357b6a0859a0c29673fb82956a0e6b73ebf6a0a26d01d967b32c8385->enter($__internal_9beb7a1b357b6a0859a0c29673fb82956a0e6b73ebf6a0a26d01d967b32c8385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f6499802db3ebed348d8713dc59570896d11e5362964a7787b01b7925555ce13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6499802db3ebed348d8713dc59570896d11e5362964a7787b01b7925555ce13->enter($__internal_f6499802db3ebed348d8713dc59570896d11e5362964a7787b01b7925555ce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f6499802db3ebed348d8713dc59570896d11e5362964a7787b01b7925555ce13->leave($__internal_f6499802db3ebed348d8713dc59570896d11e5362964a7787b01b7925555ce13_prof);

        
        $__internal_9beb7a1b357b6a0859a0c29673fb82956a0e6b73ebf6a0a26d01d967b32c8385->leave($__internal_9beb7a1b357b6a0859a0c29673fb82956a0e6b73ebf6a0a26d01d967b32c8385_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_21cb8f19dfb4798231454b57168d5e96499a56749dc59094a4319c9802b8356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cb8f19dfb4798231454b57168d5e96499a56749dc59094a4319c9802b8356c->enter($__internal_21cb8f19dfb4798231454b57168d5e96499a56749dc59094a4319c9802b8356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2e17bccd38e27cd06eb9a2100dca5046af43ee30d759edfed74927015f61cbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e17bccd38e27cd06eb9a2100dca5046af43ee30d759edfed74927015f61cbf6->enter($__internal_2e17bccd38e27cd06eb9a2100dca5046af43ee30d759edfed74927015f61cbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2e17bccd38e27cd06eb9a2100dca5046af43ee30d759edfed74927015f61cbf6->leave($__internal_2e17bccd38e27cd06eb9a2100dca5046af43ee30d759edfed74927015f61cbf6_prof);

        
        $__internal_21cb8f19dfb4798231454b57168d5e96499a56749dc59094a4319c9802b8356c->leave($__internal_21cb8f19dfb4798231454b57168d5e96499a56749dc59094a4319c9802b8356c_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_0859c8f1f850242bd54485334e077b42c6d9f3f92a7095cb585b81b390b37197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0859c8f1f850242bd54485334e077b42c6d9f3f92a7095cb585b81b390b37197->enter($__internal_0859c8f1f850242bd54485334e077b42c6d9f3f92a7095cb585b81b390b37197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ff916d2e5dcfc13a740bc5ac04ce987e37625ee38598ce9a7f1af996f760d898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff916d2e5dcfc13a740bc5ac04ce987e37625ee38598ce9a7f1af996f760d898->enter($__internal_ff916d2e5dcfc13a740bc5ac04ce987e37625ee38598ce9a7f1af996f760d898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ff916d2e5dcfc13a740bc5ac04ce987e37625ee38598ce9a7f1af996f760d898->leave($__internal_ff916d2e5dcfc13a740bc5ac04ce987e37625ee38598ce9a7f1af996f760d898_prof);

        
        $__internal_0859c8f1f850242bd54485334e077b42c6d9f3f92a7095cb585b81b390b37197->leave($__internal_0859c8f1f850242bd54485334e077b42c6d9f3f92a7095cb585b81b390b37197_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_82edd82d8dd985f51aad370f587e4b0d705edd45b452a08b2314ff17f3e79151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82edd82d8dd985f51aad370f587e4b0d705edd45b452a08b2314ff17f3e79151->enter($__internal_82edd82d8dd985f51aad370f587e4b0d705edd45b452a08b2314ff17f3e79151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_568672b1ab19f1e16f164725a93ba4f5f45e803815cba902b731455fb56d83a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568672b1ab19f1e16f164725a93ba4f5f45e803815cba902b731455fb56d83a1->enter($__internal_568672b1ab19f1e16f164725a93ba4f5f45e803815cba902b731455fb56d83a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_568672b1ab19f1e16f164725a93ba4f5f45e803815cba902b731455fb56d83a1->leave($__internal_568672b1ab19f1e16f164725a93ba4f5f45e803815cba902b731455fb56d83a1_prof);

        
        $__internal_82edd82d8dd985f51aad370f587e4b0d705edd45b452a08b2314ff17f3e79151->leave($__internal_82edd82d8dd985f51aad370f587e4b0d705edd45b452a08b2314ff17f3e79151_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_23771e837d112db95dc64d11ac0b49b386bc515677cd0d13f85bf3879ba243e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23771e837d112db95dc64d11ac0b49b386bc515677cd0d13f85bf3879ba243e0->enter($__internal_23771e837d112db95dc64d11ac0b49b386bc515677cd0d13f85bf3879ba243e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4d13938e97b6c5963a002161b09877905e1e7ef2e00f10034bd3465e30625061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d13938e97b6c5963a002161b09877905e1e7ef2e00f10034bd3465e30625061->enter($__internal_4d13938e97b6c5963a002161b09877905e1e7ef2e00f10034bd3465e30625061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_4d13938e97b6c5963a002161b09877905e1e7ef2e00f10034bd3465e30625061->leave($__internal_4d13938e97b6c5963a002161b09877905e1e7ef2e00f10034bd3465e30625061_prof);

        
        $__internal_23771e837d112db95dc64d11ac0b49b386bc515677cd0d13f85bf3879ba243e0->leave($__internal_23771e837d112db95dc64d11ac0b49b386bc515677cd0d13f85bf3879ba243e0_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b61ddb8300f28a19960a09abb6a3254aa7cdfe276c8dca44f8bb1fc03f994d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61ddb8300f28a19960a09abb6a3254aa7cdfe276c8dca44f8bb1fc03f994d73->enter($__internal_b61ddb8300f28a19960a09abb6a3254aa7cdfe276c8dca44f8bb1fc03f994d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a465948cfff5314b8b36f3e0b82cdfdd4e36cd70bee6c92fdc119292af2e6e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a465948cfff5314b8b36f3e0b82cdfdd4e36cd70bee6c92fdc119292af2e6e30->enter($__internal_a465948cfff5314b8b36f3e0b82cdfdd4e36cd70bee6c92fdc119292af2e6e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_a465948cfff5314b8b36f3e0b82cdfdd4e36cd70bee6c92fdc119292af2e6e30->leave($__internal_a465948cfff5314b8b36f3e0b82cdfdd4e36cd70bee6c92fdc119292af2e6e30_prof);

        
        $__internal_b61ddb8300f28a19960a09abb6a3254aa7cdfe276c8dca44f8bb1fc03f994d73->leave($__internal_b61ddb8300f28a19960a09abb6a3254aa7cdfe276c8dca44f8bb1fc03f994d73_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d902f542f91e669f9170691b77c7454d3c0fc7c1bb0bb96f1128168fcab265fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d902f542f91e669f9170691b77c7454d3c0fc7c1bb0bb96f1128168fcab265fe->enter($__internal_d902f542f91e669f9170691b77c7454d3c0fc7c1bb0bb96f1128168fcab265fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1366ea23b621442423549f677721a49f1cc1bf3b99df8631a90b0894ff718507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1366ea23b621442423549f677721a49f1cc1bf3b99df8631a90b0894ff718507->enter($__internal_1366ea23b621442423549f677721a49f1cc1bf3b99df8631a90b0894ff718507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1366ea23b621442423549f677721a49f1cc1bf3b99df8631a90b0894ff718507->leave($__internal_1366ea23b621442423549f677721a49f1cc1bf3b99df8631a90b0894ff718507_prof);

        
        $__internal_d902f542f91e669f9170691b77c7454d3c0fc7c1bb0bb96f1128168fcab265fe->leave($__internal_d902f542f91e669f9170691b77c7454d3c0fc7c1bb0bb96f1128168fcab265fe_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2c044e02337ad027c9210be3142a7fef03f7b07c38dff7c111ebee1568ed05de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c044e02337ad027c9210be3142a7fef03f7b07c38dff7c111ebee1568ed05de->enter($__internal_2c044e02337ad027c9210be3142a7fef03f7b07c38dff7c111ebee1568ed05de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7961e6eeddfb5ce429f113b8ee08f378fdd1cac2fe831ebbe52a839080da5258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7961e6eeddfb5ce429f113b8ee08f378fdd1cac2fe831ebbe52a839080da5258->enter($__internal_7961e6eeddfb5ce429f113b8ee08f378fdd1cac2fe831ebbe52a839080da5258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7961e6eeddfb5ce429f113b8ee08f378fdd1cac2fe831ebbe52a839080da5258->leave($__internal_7961e6eeddfb5ce429f113b8ee08f378fdd1cac2fe831ebbe52a839080da5258_prof);

        
        $__internal_2c044e02337ad027c9210be3142a7fef03f7b07c38dff7c111ebee1568ed05de->leave($__internal_2c044e02337ad027c9210be3142a7fef03f7b07c38dff7c111ebee1568ed05de_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9a8cacd05a6de8b8c847f498c53047f2233635526c43ede507cc6244d8a4d6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8cacd05a6de8b8c847f498c53047f2233635526c43ede507cc6244d8a4d6a0->enter($__internal_9a8cacd05a6de8b8c847f498c53047f2233635526c43ede507cc6244d8a4d6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d5851236d1eaabfdb506ef777b5d402dddf11f42d6c45ff667dba3fdd7d320d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5851236d1eaabfdb506ef777b5d402dddf11f42d6c45ff667dba3fdd7d320d6->enter($__internal_d5851236d1eaabfdb506ef777b5d402dddf11f42d6c45ff667dba3fdd7d320d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5851236d1eaabfdb506ef777b5d402dddf11f42d6c45ff667dba3fdd7d320d6->leave($__internal_d5851236d1eaabfdb506ef777b5d402dddf11f42d6c45ff667dba3fdd7d320d6_prof);

        
        $__internal_9a8cacd05a6de8b8c847f498c53047f2233635526c43ede507cc6244d8a4d6a0->leave($__internal_9a8cacd05a6de8b8c847f498c53047f2233635526c43ede507cc6244d8a4d6a0_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fbf0bd9f04346add627bef2cd6270b05b76241e129568ad78b034e78bf49e2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf0bd9f04346add627bef2cd6270b05b76241e129568ad78b034e78bf49e2cb->enter($__internal_fbf0bd9f04346add627bef2cd6270b05b76241e129568ad78b034e78bf49e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_835ef3d2573f77530c1e4a667f811a18d7af2fbd483167445f25f7345c507de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835ef3d2573f77530c1e4a667f811a18d7af2fbd483167445f25f7345c507de0->enter($__internal_835ef3d2573f77530c1e4a667f811a18d7af2fbd483167445f25f7345c507de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_835ef3d2573f77530c1e4a667f811a18d7af2fbd483167445f25f7345c507de0->leave($__internal_835ef3d2573f77530c1e4a667f811a18d7af2fbd483167445f25f7345c507de0_prof);

        
        $__internal_fbf0bd9f04346add627bef2cd6270b05b76241e129568ad78b034e78bf49e2cb->leave($__internal_fbf0bd9f04346add627bef2cd6270b05b76241e129568ad78b034e78bf49e2cb_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5f5a421369f4e25da89556459a14cccc5d38fbb87fba76bacc9d92e3cf9e588e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5a421369f4e25da89556459a14cccc5d38fbb87fba76bacc9d92e3cf9e588e->enter($__internal_5f5a421369f4e25da89556459a14cccc5d38fbb87fba76bacc9d92e3cf9e588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9eaa4ed89cd9ead035720bdab01738103e46655156b0017d188b514f3e4b056a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eaa4ed89cd9ead035720bdab01738103e46655156b0017d188b514f3e4b056a->enter($__internal_9eaa4ed89cd9ead035720bdab01738103e46655156b0017d188b514f3e4b056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_9eaa4ed89cd9ead035720bdab01738103e46655156b0017d188b514f3e4b056a->leave($__internal_9eaa4ed89cd9ead035720bdab01738103e46655156b0017d188b514f3e4b056a_prof);

        
        $__internal_5f5a421369f4e25da89556459a14cccc5d38fbb87fba76bacc9d92e3cf9e588e->leave($__internal_5f5a421369f4e25da89556459a14cccc5d38fbb87fba76bacc9d92e3cf9e588e_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_399f77df1dda2cf0b4f0c7bcc2759324f41ec5d53813a7aa1b17c61491ec9fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399f77df1dda2cf0b4f0c7bcc2759324f41ec5d53813a7aa1b17c61491ec9fd3->enter($__internal_399f77df1dda2cf0b4f0c7bcc2759324f41ec5d53813a7aa1b17c61491ec9fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_106be9d6451b951dda6cc9c09320af997bea2fd46929f458994d3d43c1dfc1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106be9d6451b951dda6cc9c09320af997bea2fd46929f458994d3d43c1dfc1cd->enter($__internal_106be9d6451b951dda6cc9c09320af997bea2fd46929f458994d3d43c1dfc1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_106be9d6451b951dda6cc9c09320af997bea2fd46929f458994d3d43c1dfc1cd->leave($__internal_106be9d6451b951dda6cc9c09320af997bea2fd46929f458994d3d43c1dfc1cd_prof);

        
        $__internal_399f77df1dda2cf0b4f0c7bcc2759324f41ec5d53813a7aa1b17c61491ec9fd3->leave($__internal_399f77df1dda2cf0b4f0c7bcc2759324f41ec5d53813a7aa1b17c61491ec9fd3_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2b24ee78aca54cc7723f2b8d61aa9b8182e08648fe917268c3af9237bbd2985d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24ee78aca54cc7723f2b8d61aa9b8182e08648fe917268c3af9237bbd2985d->enter($__internal_2b24ee78aca54cc7723f2b8d61aa9b8182e08648fe917268c3af9237bbd2985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0e325d915c74706adb6871316a507fc3fc86611a167dd429e21219cde300e17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e325d915c74706adb6871316a507fc3fc86611a167dd429e21219cde300e17d->enter($__internal_0e325d915c74706adb6871316a507fc3fc86611a167dd429e21219cde300e17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0e325d915c74706adb6871316a507fc3fc86611a167dd429e21219cde300e17d->leave($__internal_0e325d915c74706adb6871316a507fc3fc86611a167dd429e21219cde300e17d_prof);

        
        $__internal_2b24ee78aca54cc7723f2b8d61aa9b8182e08648fe917268c3af9237bbd2985d->leave($__internal_2b24ee78aca54cc7723f2b8d61aa9b8182e08648fe917268c3af9237bbd2985d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
