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
        $__internal_13452ea1a75509ef74ad09ec36dafb6d2d88d79e89434999a3d6cd60ac99060c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13452ea1a75509ef74ad09ec36dafb6d2d88d79e89434999a3d6cd60ac99060c->enter($__internal_13452ea1a75509ef74ad09ec36dafb6d2d88d79e89434999a3d6cd60ac99060c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4054b374ab318ec25f255b29c300965a0e38c6b83d0fadce21f80b7f9aa7e134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4054b374ab318ec25f255b29c300965a0e38c6b83d0fadce21f80b7f9aa7e134->enter($__internal_4054b374ab318ec25f255b29c300965a0e38c6b83d0fadce21f80b7f9aa7e134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_13452ea1a75509ef74ad09ec36dafb6d2d88d79e89434999a3d6cd60ac99060c->leave($__internal_13452ea1a75509ef74ad09ec36dafb6d2d88d79e89434999a3d6cd60ac99060c_prof);

        
        $__internal_4054b374ab318ec25f255b29c300965a0e38c6b83d0fadce21f80b7f9aa7e134->leave($__internal_4054b374ab318ec25f255b29c300965a0e38c6b83d0fadce21f80b7f9aa7e134_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0d94ad254d2553e7797373330c30ccd60f257b7a9ec8748470356d6eae56b837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d94ad254d2553e7797373330c30ccd60f257b7a9ec8748470356d6eae56b837->enter($__internal_0d94ad254d2553e7797373330c30ccd60f257b7a9ec8748470356d6eae56b837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_741f516bef8308f37488c387ae655bf15955aab51a1626ad5a2b1a58458658e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741f516bef8308f37488c387ae655bf15955aab51a1626ad5a2b1a58458658e2->enter($__internal_741f516bef8308f37488c387ae655bf15955aab51a1626ad5a2b1a58458658e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_741f516bef8308f37488c387ae655bf15955aab51a1626ad5a2b1a58458658e2->leave($__internal_741f516bef8308f37488c387ae655bf15955aab51a1626ad5a2b1a58458658e2_prof);

        
        $__internal_0d94ad254d2553e7797373330c30ccd60f257b7a9ec8748470356d6eae56b837->leave($__internal_0d94ad254d2553e7797373330c30ccd60f257b7a9ec8748470356d6eae56b837_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9503bf3eb280e949252086ae1fd10fa4506acbda4d766f9d3ba999ce996092b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9503bf3eb280e949252086ae1fd10fa4506acbda4d766f9d3ba999ce996092b3->enter($__internal_9503bf3eb280e949252086ae1fd10fa4506acbda4d766f9d3ba999ce996092b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e86c5abbb23fc6f4a1d69c50f05fae2b46b3b7f387eb82887a98dbc5557cdc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86c5abbb23fc6f4a1d69c50f05fae2b46b3b7f387eb82887a98dbc5557cdc90->enter($__internal_e86c5abbb23fc6f4a1d69c50f05fae2b46b3b7f387eb82887a98dbc5557cdc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e86c5abbb23fc6f4a1d69c50f05fae2b46b3b7f387eb82887a98dbc5557cdc90->leave($__internal_e86c5abbb23fc6f4a1d69c50f05fae2b46b3b7f387eb82887a98dbc5557cdc90_prof);

        
        $__internal_9503bf3eb280e949252086ae1fd10fa4506acbda4d766f9d3ba999ce996092b3->leave($__internal_9503bf3eb280e949252086ae1fd10fa4506acbda4d766f9d3ba999ce996092b3_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_018fcd0c6de8f42ad2c9db76d4d8200a2f42ade5352f7586230b1316843f72c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018fcd0c6de8f42ad2c9db76d4d8200a2f42ade5352f7586230b1316843f72c9->enter($__internal_018fcd0c6de8f42ad2c9db76d4d8200a2f42ade5352f7586230b1316843f72c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_27c3c6a0d5d09874471dc23948539adaba2ee640211e5eebe969b63d4b722821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c3c6a0d5d09874471dc23948539adaba2ee640211e5eebe969b63d4b722821->enter($__internal_27c3c6a0d5d09874471dc23948539adaba2ee640211e5eebe969b63d4b722821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_27c3c6a0d5d09874471dc23948539adaba2ee640211e5eebe969b63d4b722821->leave($__internal_27c3c6a0d5d09874471dc23948539adaba2ee640211e5eebe969b63d4b722821_prof);

        
        $__internal_018fcd0c6de8f42ad2c9db76d4d8200a2f42ade5352f7586230b1316843f72c9->leave($__internal_018fcd0c6de8f42ad2c9db76d4d8200a2f42ade5352f7586230b1316843f72c9_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b13950ea1cb004baed8cd33cc8530489fdc72ab179718c33f5acacb2a7650d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13950ea1cb004baed8cd33cc8530489fdc72ab179718c33f5acacb2a7650d15->enter($__internal_b13950ea1cb004baed8cd33cc8530489fdc72ab179718c33f5acacb2a7650d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_37a4e2fb80b37cb476f7abaa067ef38c834304f039362adcb5cf3901723c9922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a4e2fb80b37cb476f7abaa067ef38c834304f039362adcb5cf3901723c9922->enter($__internal_37a4e2fb80b37cb476f7abaa067ef38c834304f039362adcb5cf3901723c9922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e80299f057da2191684fae2c20c1b00be19d7825c7c815dafe02137aee284fff = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_aa2721e8e762fbb786a723fce280f64110bd977f9f1c680ae344f38817b0858b = "{{") && ('' === $__internal_aa2721e8e762fbb786a723fce280f64110bd977f9f1c680ae344f38817b0858b || 0 === strpos($__internal_e80299f057da2191684fae2c20c1b00be19d7825c7c815dafe02137aee284fff, $__internal_aa2721e8e762fbb786a723fce280f64110bd977f9f1c680ae344f38817b0858b)));
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
        
        $__internal_37a4e2fb80b37cb476f7abaa067ef38c834304f039362adcb5cf3901723c9922->leave($__internal_37a4e2fb80b37cb476f7abaa067ef38c834304f039362adcb5cf3901723c9922_prof);

        
        $__internal_b13950ea1cb004baed8cd33cc8530489fdc72ab179718c33f5acacb2a7650d15->leave($__internal_b13950ea1cb004baed8cd33cc8530489fdc72ab179718c33f5acacb2a7650d15_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8f93dba9ea6b99eb7953482b4633ac177ccad1825b73a809a5639ade2d3fa4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f93dba9ea6b99eb7953482b4633ac177ccad1825b73a809a5639ade2d3fa4d1->enter($__internal_8f93dba9ea6b99eb7953482b4633ac177ccad1825b73a809a5639ade2d3fa4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_19a3a52902ebb3612ab1140bcb300bca78d9a4daa15a2740f83042e899b19fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a3a52902ebb3612ab1140bcb300bca78d9a4daa15a2740f83042e899b19fea->enter($__internal_19a3a52902ebb3612ab1140bcb300bca78d9a4daa15a2740f83042e899b19fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_19a3a52902ebb3612ab1140bcb300bca78d9a4daa15a2740f83042e899b19fea->leave($__internal_19a3a52902ebb3612ab1140bcb300bca78d9a4daa15a2740f83042e899b19fea_prof);

        
        $__internal_8f93dba9ea6b99eb7953482b4633ac177ccad1825b73a809a5639ade2d3fa4d1->leave($__internal_8f93dba9ea6b99eb7953482b4633ac177ccad1825b73a809a5639ade2d3fa4d1_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_120464ca391d0beccd2388e5dc0a44238b8f97464d5d3b0301ed9a84363734c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120464ca391d0beccd2388e5dc0a44238b8f97464d5d3b0301ed9a84363734c1->enter($__internal_120464ca391d0beccd2388e5dc0a44238b8f97464d5d3b0301ed9a84363734c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_52459c979f0354148e1113acbcb5cf5c401d4f1893a49997afec3beefd8216e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52459c979f0354148e1113acbcb5cf5c401d4f1893a49997afec3beefd8216e6->enter($__internal_52459c979f0354148e1113acbcb5cf5c401d4f1893a49997afec3beefd8216e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_52459c979f0354148e1113acbcb5cf5c401d4f1893a49997afec3beefd8216e6->leave($__internal_52459c979f0354148e1113acbcb5cf5c401d4f1893a49997afec3beefd8216e6_prof);

        
        $__internal_120464ca391d0beccd2388e5dc0a44238b8f97464d5d3b0301ed9a84363734c1->leave($__internal_120464ca391d0beccd2388e5dc0a44238b8f97464d5d3b0301ed9a84363734c1_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_38669ce37479b4469138bf5d8d6378bd192cb27369007cf433c7f889c4765124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38669ce37479b4469138bf5d8d6378bd192cb27369007cf433c7f889c4765124->enter($__internal_38669ce37479b4469138bf5d8d6378bd192cb27369007cf433c7f889c4765124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ef62bf86aa07bb46b3bc864bc6aea5c330d7aebf0653c2cee996e2cbcd2aab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef62bf86aa07bb46b3bc864bc6aea5c330d7aebf0653c2cee996e2cbcd2aab7f->enter($__internal_ef62bf86aa07bb46b3bc864bc6aea5c330d7aebf0653c2cee996e2cbcd2aab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_ef62bf86aa07bb46b3bc864bc6aea5c330d7aebf0653c2cee996e2cbcd2aab7f->leave($__internal_ef62bf86aa07bb46b3bc864bc6aea5c330d7aebf0653c2cee996e2cbcd2aab7f_prof);

        
        $__internal_38669ce37479b4469138bf5d8d6378bd192cb27369007cf433c7f889c4765124->leave($__internal_38669ce37479b4469138bf5d8d6378bd192cb27369007cf433c7f889c4765124_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_12684e67e9969110e15ed2eff428a9da59cee4d6dfb119137003ae9e90da802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12684e67e9969110e15ed2eff428a9da59cee4d6dfb119137003ae9e90da802e->enter($__internal_12684e67e9969110e15ed2eff428a9da59cee4d6dfb119137003ae9e90da802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_042aad401bf6793ac9f4bf67fa7b088286c628445eab2f02bd538c8aa21d8bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042aad401bf6793ac9f4bf67fa7b088286c628445eab2f02bd538c8aa21d8bc9->enter($__internal_042aad401bf6793ac9f4bf67fa7b088286c628445eab2f02bd538c8aa21d8bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_042aad401bf6793ac9f4bf67fa7b088286c628445eab2f02bd538c8aa21d8bc9->leave($__internal_042aad401bf6793ac9f4bf67fa7b088286c628445eab2f02bd538c8aa21d8bc9_prof);

        
        $__internal_12684e67e9969110e15ed2eff428a9da59cee4d6dfb119137003ae9e90da802e->leave($__internal_12684e67e9969110e15ed2eff428a9da59cee4d6dfb119137003ae9e90da802e_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e20d9d3b1dafb3a1687073280910846f4231a522fb452a74cded9bfcf841adfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20d9d3b1dafb3a1687073280910846f4231a522fb452a74cded9bfcf841adfd->enter($__internal_e20d9d3b1dafb3a1687073280910846f4231a522fb452a74cded9bfcf841adfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5a3de608baadbf3675d62654fe6d10e25d599f51b2003a1f3ac8f7783b1cda02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3de608baadbf3675d62654fe6d10e25d599f51b2003a1f3ac8f7783b1cda02->enter($__internal_5a3de608baadbf3675d62654fe6d10e25d599f51b2003a1f3ac8f7783b1cda02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_5a3de608baadbf3675d62654fe6d10e25d599f51b2003a1f3ac8f7783b1cda02->leave($__internal_5a3de608baadbf3675d62654fe6d10e25d599f51b2003a1f3ac8f7783b1cda02_prof);

        
        $__internal_e20d9d3b1dafb3a1687073280910846f4231a522fb452a74cded9bfcf841adfd->leave($__internal_e20d9d3b1dafb3a1687073280910846f4231a522fb452a74cded9bfcf841adfd_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_50d021f960f03656549e1a834400d6fcfcb14878cc034d47e1b1495b18c76296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d021f960f03656549e1a834400d6fcfcb14878cc034d47e1b1495b18c76296->enter($__internal_50d021f960f03656549e1a834400d6fcfcb14878cc034d47e1b1495b18c76296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ee1a707598a15d602a3666d47d9cc6f2fd1801017faad2ec13fa2ee066abdac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1a707598a15d602a3666d47d9cc6f2fd1801017faad2ec13fa2ee066abdac7->enter($__internal_ee1a707598a15d602a3666d47d9cc6f2fd1801017faad2ec13fa2ee066abdac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_ee1a707598a15d602a3666d47d9cc6f2fd1801017faad2ec13fa2ee066abdac7->leave($__internal_ee1a707598a15d602a3666d47d9cc6f2fd1801017faad2ec13fa2ee066abdac7_prof);

        
        $__internal_50d021f960f03656549e1a834400d6fcfcb14878cc034d47e1b1495b18c76296->leave($__internal_50d021f960f03656549e1a834400d6fcfcb14878cc034d47e1b1495b18c76296_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a86bf3791547e2dcd8778d44f79151318a3f216b8d399d629a27310c59734628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86bf3791547e2dcd8778d44f79151318a3f216b8d399d629a27310c59734628->enter($__internal_a86bf3791547e2dcd8778d44f79151318a3f216b8d399d629a27310c59734628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1012ae239898c3b7245898391cb511dbf78e3465421977de5f67759c7b9a1ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1012ae239898c3b7245898391cb511dbf78e3465421977de5f67759c7b9a1ef1->enter($__internal_1012ae239898c3b7245898391cb511dbf78e3465421977de5f67759c7b9a1ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_1012ae239898c3b7245898391cb511dbf78e3465421977de5f67759c7b9a1ef1->leave($__internal_1012ae239898c3b7245898391cb511dbf78e3465421977de5f67759c7b9a1ef1_prof);

        
        $__internal_a86bf3791547e2dcd8778d44f79151318a3f216b8d399d629a27310c59734628->leave($__internal_a86bf3791547e2dcd8778d44f79151318a3f216b8d399d629a27310c59734628_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0b3b1b62b01f1325b744b0b30f0beabc458ab0cd59657c2cedad13a7231b590e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3b1b62b01f1325b744b0b30f0beabc458ab0cd59657c2cedad13a7231b590e->enter($__internal_0b3b1b62b01f1325b744b0b30f0beabc458ab0cd59657c2cedad13a7231b590e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_38271f82e6afc6d0532c4bff93d3905ca18c91696bb3c107a8cdc09dfaf59c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38271f82e6afc6d0532c4bff93d3905ca18c91696bb3c107a8cdc09dfaf59c38->enter($__internal_38271f82e6afc6d0532c4bff93d3905ca18c91696bb3c107a8cdc09dfaf59c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_38271f82e6afc6d0532c4bff93d3905ca18c91696bb3c107a8cdc09dfaf59c38->leave($__internal_38271f82e6afc6d0532c4bff93d3905ca18c91696bb3c107a8cdc09dfaf59c38_prof);

        
        $__internal_0b3b1b62b01f1325b744b0b30f0beabc458ab0cd59657c2cedad13a7231b590e->leave($__internal_0b3b1b62b01f1325b744b0b30f0beabc458ab0cd59657c2cedad13a7231b590e_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8ebd788c5194627b8aac683abc846e654c956a0e2b64c74ef9294b14348995e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebd788c5194627b8aac683abc846e654c956a0e2b64c74ef9294b14348995e1->enter($__internal_8ebd788c5194627b8aac683abc846e654c956a0e2b64c74ef9294b14348995e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_763bad82d572a0844cfa00341a294c00660534c9bbbee471c433194217a39108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763bad82d572a0844cfa00341a294c00660534c9bbbee471c433194217a39108->enter($__internal_763bad82d572a0844cfa00341a294c00660534c9bbbee471c433194217a39108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_763bad82d572a0844cfa00341a294c00660534c9bbbee471c433194217a39108->leave($__internal_763bad82d572a0844cfa00341a294c00660534c9bbbee471c433194217a39108_prof);

        
        $__internal_8ebd788c5194627b8aac683abc846e654c956a0e2b64c74ef9294b14348995e1->leave($__internal_8ebd788c5194627b8aac683abc846e654c956a0e2b64c74ef9294b14348995e1_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_852048a58b56813d8e8a57c8f2b1c9455e575c5f8e11c094bd58ed254aee3e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852048a58b56813d8e8a57c8f2b1c9455e575c5f8e11c094bd58ed254aee3e51->enter($__internal_852048a58b56813d8e8a57c8f2b1c9455e575c5f8e11c094bd58ed254aee3e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e10c75820edacb5d2067f73b904b64c36defe69b7372fbc363d6e49b3d3d3648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10c75820edacb5d2067f73b904b64c36defe69b7372fbc363d6e49b3d3d3648->enter($__internal_e10c75820edacb5d2067f73b904b64c36defe69b7372fbc363d6e49b3d3d3648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e10c75820edacb5d2067f73b904b64c36defe69b7372fbc363d6e49b3d3d3648->leave($__internal_e10c75820edacb5d2067f73b904b64c36defe69b7372fbc363d6e49b3d3d3648_prof);

        
        $__internal_852048a58b56813d8e8a57c8f2b1c9455e575c5f8e11c094bd58ed254aee3e51->leave($__internal_852048a58b56813d8e8a57c8f2b1c9455e575c5f8e11c094bd58ed254aee3e51_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_be4a20d4579a449daaba4d1451403dc2f0c448e564c4e7f274eb65d29ea9d6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4a20d4579a449daaba4d1451403dc2f0c448e564c4e7f274eb65d29ea9d6b1->enter($__internal_be4a20d4579a449daaba4d1451403dc2f0c448e564c4e7f274eb65d29ea9d6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_927ea566d8a569088930c1ae9374fef84c746e6c85822a3f5fdc9c7d328cb695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ea566d8a569088930c1ae9374fef84c746e6c85822a3f5fdc9c7d328cb695->enter($__internal_927ea566d8a569088930c1ae9374fef84c746e6c85822a3f5fdc9c7d328cb695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_927ea566d8a569088930c1ae9374fef84c746e6c85822a3f5fdc9c7d328cb695->leave($__internal_927ea566d8a569088930c1ae9374fef84c746e6c85822a3f5fdc9c7d328cb695_prof);

        
        $__internal_be4a20d4579a449daaba4d1451403dc2f0c448e564c4e7f274eb65d29ea9d6b1->leave($__internal_be4a20d4579a449daaba4d1451403dc2f0c448e564c4e7f274eb65d29ea9d6b1_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5ba6d223de798264b6df5a7532c8be5e6acd433694b803e6ecb62df1c7ea1db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba6d223de798264b6df5a7532c8be5e6acd433694b803e6ecb62df1c7ea1db6->enter($__internal_5ba6d223de798264b6df5a7532c8be5e6acd433694b803e6ecb62df1c7ea1db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_999bdb614570b85db0245db241579bfa02c3389663224bdcd1e20217a1c6f15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999bdb614570b85db0245db241579bfa02c3389663224bdcd1e20217a1c6f15d->enter($__internal_999bdb614570b85db0245db241579bfa02c3389663224bdcd1e20217a1c6f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_999bdb614570b85db0245db241579bfa02c3389663224bdcd1e20217a1c6f15d->leave($__internal_999bdb614570b85db0245db241579bfa02c3389663224bdcd1e20217a1c6f15d_prof);

        
        $__internal_5ba6d223de798264b6df5a7532c8be5e6acd433694b803e6ecb62df1c7ea1db6->leave($__internal_5ba6d223de798264b6df5a7532c8be5e6acd433694b803e6ecb62df1c7ea1db6_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6504703fa979a1f8b7cafa70d3046101a17f1a80fed98228ba242d11e9a454ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6504703fa979a1f8b7cafa70d3046101a17f1a80fed98228ba242d11e9a454ad->enter($__internal_6504703fa979a1f8b7cafa70d3046101a17f1a80fed98228ba242d11e9a454ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_849811c89e9ae4af94ffde4ef593ac832807ee877e7359b84a2083e680f9447c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849811c89e9ae4af94ffde4ef593ac832807ee877e7359b84a2083e680f9447c->enter($__internal_849811c89e9ae4af94ffde4ef593ac832807ee877e7359b84a2083e680f9447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_849811c89e9ae4af94ffde4ef593ac832807ee877e7359b84a2083e680f9447c->leave($__internal_849811c89e9ae4af94ffde4ef593ac832807ee877e7359b84a2083e680f9447c_prof);

        
        $__internal_6504703fa979a1f8b7cafa70d3046101a17f1a80fed98228ba242d11e9a454ad->leave($__internal_6504703fa979a1f8b7cafa70d3046101a17f1a80fed98228ba242d11e9a454ad_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6828f0c1460e66a0a2cffbef59369e7c22732dbcb1b5f255a0fcedfcc2a43793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6828f0c1460e66a0a2cffbef59369e7c22732dbcb1b5f255a0fcedfcc2a43793->enter($__internal_6828f0c1460e66a0a2cffbef59369e7c22732dbcb1b5f255a0fcedfcc2a43793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ba48ce7d9331bfdb976971622da9d25c4c4b315347aa7c8c1873056e44a27ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba48ce7d9331bfdb976971622da9d25c4c4b315347aa7c8c1873056e44a27ddd->enter($__internal_ba48ce7d9331bfdb976971622da9d25c4c4b315347aa7c8c1873056e44a27ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_ba48ce7d9331bfdb976971622da9d25c4c4b315347aa7c8c1873056e44a27ddd->leave($__internal_ba48ce7d9331bfdb976971622da9d25c4c4b315347aa7c8c1873056e44a27ddd_prof);

        
        $__internal_6828f0c1460e66a0a2cffbef59369e7c22732dbcb1b5f255a0fcedfcc2a43793->leave($__internal_6828f0c1460e66a0a2cffbef59369e7c22732dbcb1b5f255a0fcedfcc2a43793_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_969f2d979d272a3cbe34dc64aa8921cb3893389c4503e4aef5137f1ff288bf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969f2d979d272a3cbe34dc64aa8921cb3893389c4503e4aef5137f1ff288bf8a->enter($__internal_969f2d979d272a3cbe34dc64aa8921cb3893389c4503e4aef5137f1ff288bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_eba704896f7b569c84e0784289dbd6ec12f1d838b6dfe18b11a7fde87ff62cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba704896f7b569c84e0784289dbd6ec12f1d838b6dfe18b11a7fde87ff62cd7->enter($__internal_eba704896f7b569c84e0784289dbd6ec12f1d838b6dfe18b11a7fde87ff62cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_eba704896f7b569c84e0784289dbd6ec12f1d838b6dfe18b11a7fde87ff62cd7->leave($__internal_eba704896f7b569c84e0784289dbd6ec12f1d838b6dfe18b11a7fde87ff62cd7_prof);

        
        $__internal_969f2d979d272a3cbe34dc64aa8921cb3893389c4503e4aef5137f1ff288bf8a->leave($__internal_969f2d979d272a3cbe34dc64aa8921cb3893389c4503e4aef5137f1ff288bf8a_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c802d95613298e28a59c5888da82aefe8368d574eed269d263556cbd8aca7649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c802d95613298e28a59c5888da82aefe8368d574eed269d263556cbd8aca7649->enter($__internal_c802d95613298e28a59c5888da82aefe8368d574eed269d263556cbd8aca7649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_78d30bf0148996928b165407d0ae54f5fff69e92801810116925ac8ebd1258a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d30bf0148996928b165407d0ae54f5fff69e92801810116925ac8ebd1258a8->enter($__internal_78d30bf0148996928b165407d0ae54f5fff69e92801810116925ac8ebd1258a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_78d30bf0148996928b165407d0ae54f5fff69e92801810116925ac8ebd1258a8->leave($__internal_78d30bf0148996928b165407d0ae54f5fff69e92801810116925ac8ebd1258a8_prof);

        
        $__internal_c802d95613298e28a59c5888da82aefe8368d574eed269d263556cbd8aca7649->leave($__internal_c802d95613298e28a59c5888da82aefe8368d574eed269d263556cbd8aca7649_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e4c8837f486d5d646d63812549836f32a10a80d1790ed8b9a37d2a19daf6bb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c8837f486d5d646d63812549836f32a10a80d1790ed8b9a37d2a19daf6bb2f->enter($__internal_e4c8837f486d5d646d63812549836f32a10a80d1790ed8b9a37d2a19daf6bb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_734f81d69298282a0bfb8c978872f787657d376a0517cd6753a0e8ab0d527d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734f81d69298282a0bfb8c978872f787657d376a0517cd6753a0e8ab0d527d54->enter($__internal_734f81d69298282a0bfb8c978872f787657d376a0517cd6753a0e8ab0d527d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_734f81d69298282a0bfb8c978872f787657d376a0517cd6753a0e8ab0d527d54->leave($__internal_734f81d69298282a0bfb8c978872f787657d376a0517cd6753a0e8ab0d527d54_prof);

        
        $__internal_e4c8837f486d5d646d63812549836f32a10a80d1790ed8b9a37d2a19daf6bb2f->leave($__internal_e4c8837f486d5d646d63812549836f32a10a80d1790ed8b9a37d2a19daf6bb2f_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d02ddacdbaee48eb9eee4b27c228ab3927a2d6424ed6871ed85329f4f2359af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02ddacdbaee48eb9eee4b27c228ab3927a2d6424ed6871ed85329f4f2359af9->enter($__internal_d02ddacdbaee48eb9eee4b27c228ab3927a2d6424ed6871ed85329f4f2359af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f9f02f05f971bc5ea31230fb2d454c53cc8b8f3a144118cf9a354dc9ddcd059a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f02f05f971bc5ea31230fb2d454c53cc8b8f3a144118cf9a354dc9ddcd059a->enter($__internal_f9f02f05f971bc5ea31230fb2d454c53cc8b8f3a144118cf9a354dc9ddcd059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f9f02f05f971bc5ea31230fb2d454c53cc8b8f3a144118cf9a354dc9ddcd059a->leave($__internal_f9f02f05f971bc5ea31230fb2d454c53cc8b8f3a144118cf9a354dc9ddcd059a_prof);

        
        $__internal_d02ddacdbaee48eb9eee4b27c228ab3927a2d6424ed6871ed85329f4f2359af9->leave($__internal_d02ddacdbaee48eb9eee4b27c228ab3927a2d6424ed6871ed85329f4f2359af9_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_fc51b9ab92a17895b3f51c66fa710d01cf8a8242a1a7dfe61a8b9e72acb54cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc51b9ab92a17895b3f51c66fa710d01cf8a8242a1a7dfe61a8b9e72acb54cce->enter($__internal_fc51b9ab92a17895b3f51c66fa710d01cf8a8242a1a7dfe61a8b9e72acb54cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dc25eed08637ebd1e05f530069a6063a52da83ea950f7ab1097a68bd4a119cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc25eed08637ebd1e05f530069a6063a52da83ea950f7ab1097a68bd4a119cb1->enter($__internal_dc25eed08637ebd1e05f530069a6063a52da83ea950f7ab1097a68bd4a119cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dc25eed08637ebd1e05f530069a6063a52da83ea950f7ab1097a68bd4a119cb1->leave($__internal_dc25eed08637ebd1e05f530069a6063a52da83ea950f7ab1097a68bd4a119cb1_prof);

        
        $__internal_fc51b9ab92a17895b3f51c66fa710d01cf8a8242a1a7dfe61a8b9e72acb54cce->leave($__internal_fc51b9ab92a17895b3f51c66fa710d01cf8a8242a1a7dfe61a8b9e72acb54cce_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d2b728a25ad250fc8cf28a0479de3129a0dfd56c074b78a85fcef15f10dc5708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b728a25ad250fc8cf28a0479de3129a0dfd56c074b78a85fcef15f10dc5708->enter($__internal_d2b728a25ad250fc8cf28a0479de3129a0dfd56c074b78a85fcef15f10dc5708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8ada7da1f1613870aea75105ce5e0a3c748d7fe9cbbf79e03067996f2bfbd45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ada7da1f1613870aea75105ce5e0a3c748d7fe9cbbf79e03067996f2bfbd45c->enter($__internal_8ada7da1f1613870aea75105ce5e0a3c748d7fe9cbbf79e03067996f2bfbd45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ada7da1f1613870aea75105ce5e0a3c748d7fe9cbbf79e03067996f2bfbd45c->leave($__internal_8ada7da1f1613870aea75105ce5e0a3c748d7fe9cbbf79e03067996f2bfbd45c_prof);

        
        $__internal_d2b728a25ad250fc8cf28a0479de3129a0dfd56c074b78a85fcef15f10dc5708->leave($__internal_d2b728a25ad250fc8cf28a0479de3129a0dfd56c074b78a85fcef15f10dc5708_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2fb3cb67ac67e3073652ec6c93bead77a07cc8369ff87784130ec1deb6f4a01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb3cb67ac67e3073652ec6c93bead77a07cc8369ff87784130ec1deb6f4a01d->enter($__internal_2fb3cb67ac67e3073652ec6c93bead77a07cc8369ff87784130ec1deb6f4a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b9c112848552daf8770e56989ebc4cf857a5d2a8fbd05bacd74415b93103b04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c112848552daf8770e56989ebc4cf857a5d2a8fbd05bacd74415b93103b04d->enter($__internal_b9c112848552daf8770e56989ebc4cf857a5d2a8fbd05bacd74415b93103b04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b9c112848552daf8770e56989ebc4cf857a5d2a8fbd05bacd74415b93103b04d->leave($__internal_b9c112848552daf8770e56989ebc4cf857a5d2a8fbd05bacd74415b93103b04d_prof);

        
        $__internal_2fb3cb67ac67e3073652ec6c93bead77a07cc8369ff87784130ec1deb6f4a01d->leave($__internal_2fb3cb67ac67e3073652ec6c93bead77a07cc8369ff87784130ec1deb6f4a01d_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ccef5c1c980591d747d35a4ee42b799db29a7989651bef0331075eeeea63140e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccef5c1c980591d747d35a4ee42b799db29a7989651bef0331075eeeea63140e->enter($__internal_ccef5c1c980591d747d35a4ee42b799db29a7989651bef0331075eeeea63140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_84d6e8d822305d3ca1584cd0da5a7f00ad96ea78c5cfeb7d254c64990492dfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d6e8d822305d3ca1584cd0da5a7f00ad96ea78c5cfeb7d254c64990492dfb4->enter($__internal_84d6e8d822305d3ca1584cd0da5a7f00ad96ea78c5cfeb7d254c64990492dfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_84d6e8d822305d3ca1584cd0da5a7f00ad96ea78c5cfeb7d254c64990492dfb4->leave($__internal_84d6e8d822305d3ca1584cd0da5a7f00ad96ea78c5cfeb7d254c64990492dfb4_prof);

        
        $__internal_ccef5c1c980591d747d35a4ee42b799db29a7989651bef0331075eeeea63140e->leave($__internal_ccef5c1c980591d747d35a4ee42b799db29a7989651bef0331075eeeea63140e_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d930e23c86a2cb183cf7725d3e0e848c8a37a5cec89070953fead491773b6e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d930e23c86a2cb183cf7725d3e0e848c8a37a5cec89070953fead491773b6e0e->enter($__internal_d930e23c86a2cb183cf7725d3e0e848c8a37a5cec89070953fead491773b6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c4294932861ca4cfaead33bc8e37ff354fd5df8b14f218424157477cc338c7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4294932861ca4cfaead33bc8e37ff354fd5df8b14f218424157477cc338c7de->enter($__internal_c4294932861ca4cfaead33bc8e37ff354fd5df8b14f218424157477cc338c7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c4294932861ca4cfaead33bc8e37ff354fd5df8b14f218424157477cc338c7de->leave($__internal_c4294932861ca4cfaead33bc8e37ff354fd5df8b14f218424157477cc338c7de_prof);

        
        $__internal_d930e23c86a2cb183cf7725d3e0e848c8a37a5cec89070953fead491773b6e0e->leave($__internal_d930e23c86a2cb183cf7725d3e0e848c8a37a5cec89070953fead491773b6e0e_prof);

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
