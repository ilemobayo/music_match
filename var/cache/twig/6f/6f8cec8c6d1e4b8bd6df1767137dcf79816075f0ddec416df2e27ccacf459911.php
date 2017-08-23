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
        $__internal_985de3ad90063a0640971c4af2a18be8cdd84c7fa30a2e65d8bf3d8792283aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985de3ad90063a0640971c4af2a18be8cdd84c7fa30a2e65d8bf3d8792283aee->enter($__internal_985de3ad90063a0640971c4af2a18be8cdd84c7fa30a2e65d8bf3d8792283aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ea337722304195a6afafc6d6631f2fff1e42338c9f16fae6e5be1ed898aa2e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea337722304195a6afafc6d6631f2fff1e42338c9f16fae6e5be1ed898aa2e7d->enter($__internal_ea337722304195a6afafc6d6631f2fff1e42338c9f16fae6e5be1ed898aa2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_985de3ad90063a0640971c4af2a18be8cdd84c7fa30a2e65d8bf3d8792283aee->leave($__internal_985de3ad90063a0640971c4af2a18be8cdd84c7fa30a2e65d8bf3d8792283aee_prof);

        
        $__internal_ea337722304195a6afafc6d6631f2fff1e42338c9f16fae6e5be1ed898aa2e7d->leave($__internal_ea337722304195a6afafc6d6631f2fff1e42338c9f16fae6e5be1ed898aa2e7d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a184a878fbc746e7146593ad9eae99d24f18255655cf39adbacdf87bf11e29cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a184a878fbc746e7146593ad9eae99d24f18255655cf39adbacdf87bf11e29cd->enter($__internal_a184a878fbc746e7146593ad9eae99d24f18255655cf39adbacdf87bf11e29cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c0be30bdec55d65792a432a6e274a77a68fd32f7db201d3e8e9427d2c736cdd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0be30bdec55d65792a432a6e274a77a68fd32f7db201d3e8e9427d2c736cdd6->enter($__internal_c0be30bdec55d65792a432a6e274a77a68fd32f7db201d3e8e9427d2c736cdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c0be30bdec55d65792a432a6e274a77a68fd32f7db201d3e8e9427d2c736cdd6->leave($__internal_c0be30bdec55d65792a432a6e274a77a68fd32f7db201d3e8e9427d2c736cdd6_prof);

        
        $__internal_a184a878fbc746e7146593ad9eae99d24f18255655cf39adbacdf87bf11e29cd->leave($__internal_a184a878fbc746e7146593ad9eae99d24f18255655cf39adbacdf87bf11e29cd_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c0cc80183d0123da44d4f14a2ecb868e95dd24793b4e17a265b1c46647d72850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cc80183d0123da44d4f14a2ecb868e95dd24793b4e17a265b1c46647d72850->enter($__internal_c0cc80183d0123da44d4f14a2ecb868e95dd24793b4e17a265b1c46647d72850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2a7518904f27471f9a4dfe95dcb6145ca1e9f71dca806dfce7c4d029528cbe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7518904f27471f9a4dfe95dcb6145ca1e9f71dca806dfce7c4d029528cbe44->enter($__internal_2a7518904f27471f9a4dfe95dcb6145ca1e9f71dca806dfce7c4d029528cbe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2a7518904f27471f9a4dfe95dcb6145ca1e9f71dca806dfce7c4d029528cbe44->leave($__internal_2a7518904f27471f9a4dfe95dcb6145ca1e9f71dca806dfce7c4d029528cbe44_prof);

        
        $__internal_c0cc80183d0123da44d4f14a2ecb868e95dd24793b4e17a265b1c46647d72850->leave($__internal_c0cc80183d0123da44d4f14a2ecb868e95dd24793b4e17a265b1c46647d72850_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_74823e34460e82cea6d6a227775f379ed23beaa26f9aba025bb63f585cb49e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74823e34460e82cea6d6a227775f379ed23beaa26f9aba025bb63f585cb49e85->enter($__internal_74823e34460e82cea6d6a227775f379ed23beaa26f9aba025bb63f585cb49e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fa910c8c1abae26e710acd7fcf23ed7957d9e08691b8eb2c27047cb7db624524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa910c8c1abae26e710acd7fcf23ed7957d9e08691b8eb2c27047cb7db624524->enter($__internal_fa910c8c1abae26e710acd7fcf23ed7957d9e08691b8eb2c27047cb7db624524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fa910c8c1abae26e710acd7fcf23ed7957d9e08691b8eb2c27047cb7db624524->leave($__internal_fa910c8c1abae26e710acd7fcf23ed7957d9e08691b8eb2c27047cb7db624524_prof);

        
        $__internal_74823e34460e82cea6d6a227775f379ed23beaa26f9aba025bb63f585cb49e85->leave($__internal_74823e34460e82cea6d6a227775f379ed23beaa26f9aba025bb63f585cb49e85_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3c34658d4fbb3ba2b3c5d8e306cc2b444c9cb9823cd7c1f767c5048087680418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c34658d4fbb3ba2b3c5d8e306cc2b444c9cb9823cd7c1f767c5048087680418->enter($__internal_3c34658d4fbb3ba2b3c5d8e306cc2b444c9cb9823cd7c1f767c5048087680418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1badbcc2c3cec63e24f6e2768ceb5564d2fe9796e83f41c39adf1347dafffe90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1badbcc2c3cec63e24f6e2768ceb5564d2fe9796e83f41c39adf1347dafffe90->enter($__internal_1badbcc2c3cec63e24f6e2768ceb5564d2fe9796e83f41c39adf1347dafffe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_1adcaa5bbc8b3ccab19804257cc2ac289b05c1a0f58f6b3cbd66ab61e13fc402 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_dd380420e9474e4e7eff5842efeac53e96fe76b8cc5bec9d4fbc660ce5dbf591 = "{{") && ('' === $__internal_dd380420e9474e4e7eff5842efeac53e96fe76b8cc5bec9d4fbc660ce5dbf591 || 0 === strpos($__internal_1adcaa5bbc8b3ccab19804257cc2ac289b05c1a0f58f6b3cbd66ab61e13fc402, $__internal_dd380420e9474e4e7eff5842efeac53e96fe76b8cc5bec9d4fbc660ce5dbf591)));
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
        
        $__internal_1badbcc2c3cec63e24f6e2768ceb5564d2fe9796e83f41c39adf1347dafffe90->leave($__internal_1badbcc2c3cec63e24f6e2768ceb5564d2fe9796e83f41c39adf1347dafffe90_prof);

        
        $__internal_3c34658d4fbb3ba2b3c5d8e306cc2b444c9cb9823cd7c1f767c5048087680418->leave($__internal_3c34658d4fbb3ba2b3c5d8e306cc2b444c9cb9823cd7c1f767c5048087680418_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fa7ced32bcda4db16eb522fe2e82e10337d27f928c32807024aee7830a7719ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7ced32bcda4db16eb522fe2e82e10337d27f928c32807024aee7830a7719ec->enter($__internal_fa7ced32bcda4db16eb522fe2e82e10337d27f928c32807024aee7830a7719ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_774b9a7cc2a861f0f2fd32ff58c8d4fa7ae7cc47b2cb80d22b82c334c1cba0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774b9a7cc2a861f0f2fd32ff58c8d4fa7ae7cc47b2cb80d22b82c334c1cba0b7->enter($__internal_774b9a7cc2a861f0f2fd32ff58c8d4fa7ae7cc47b2cb80d22b82c334c1cba0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_774b9a7cc2a861f0f2fd32ff58c8d4fa7ae7cc47b2cb80d22b82c334c1cba0b7->leave($__internal_774b9a7cc2a861f0f2fd32ff58c8d4fa7ae7cc47b2cb80d22b82c334c1cba0b7_prof);

        
        $__internal_fa7ced32bcda4db16eb522fe2e82e10337d27f928c32807024aee7830a7719ec->leave($__internal_fa7ced32bcda4db16eb522fe2e82e10337d27f928c32807024aee7830a7719ec_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2f5e8b5480b8cbe8af34c86d6439c184c4413666e06d751bf66e67b87cde37f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5e8b5480b8cbe8af34c86d6439c184c4413666e06d751bf66e67b87cde37f7->enter($__internal_2f5e8b5480b8cbe8af34c86d6439c184c4413666e06d751bf66e67b87cde37f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_11129dabb01033c3f757baa7e194bec385242937df9377b73b95a5df657f3693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11129dabb01033c3f757baa7e194bec385242937df9377b73b95a5df657f3693->enter($__internal_11129dabb01033c3f757baa7e194bec385242937df9377b73b95a5df657f3693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_11129dabb01033c3f757baa7e194bec385242937df9377b73b95a5df657f3693->leave($__internal_11129dabb01033c3f757baa7e194bec385242937df9377b73b95a5df657f3693_prof);

        
        $__internal_2f5e8b5480b8cbe8af34c86d6439c184c4413666e06d751bf66e67b87cde37f7->leave($__internal_2f5e8b5480b8cbe8af34c86d6439c184c4413666e06d751bf66e67b87cde37f7_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_590053a591ac44a0a4b636e73d9becfcf2fbc30f893cd0e272d57d3fb1e82dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590053a591ac44a0a4b636e73d9becfcf2fbc30f893cd0e272d57d3fb1e82dd9->enter($__internal_590053a591ac44a0a4b636e73d9becfcf2fbc30f893cd0e272d57d3fb1e82dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1fcafcdde197cd7bdb66776eceac16ad188322eef27c891be4f9355f376128c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcafcdde197cd7bdb66776eceac16ad188322eef27c891be4f9355f376128c2->enter($__internal_1fcafcdde197cd7bdb66776eceac16ad188322eef27c891be4f9355f376128c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1fcafcdde197cd7bdb66776eceac16ad188322eef27c891be4f9355f376128c2->leave($__internal_1fcafcdde197cd7bdb66776eceac16ad188322eef27c891be4f9355f376128c2_prof);

        
        $__internal_590053a591ac44a0a4b636e73d9becfcf2fbc30f893cd0e272d57d3fb1e82dd9->leave($__internal_590053a591ac44a0a4b636e73d9becfcf2fbc30f893cd0e272d57d3fb1e82dd9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b6f152ff5eca35333c1f76a5360295cd80795c68f0a052af5ad612d907896e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f152ff5eca35333c1f76a5360295cd80795c68f0a052af5ad612d907896e18->enter($__internal_b6f152ff5eca35333c1f76a5360295cd80795c68f0a052af5ad612d907896e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_51fee557ee10cfcdf4c741404c1f7523428ec46ce7c33e99b9462b1d135a407c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fee557ee10cfcdf4c741404c1f7523428ec46ce7c33e99b9462b1d135a407c->enter($__internal_51fee557ee10cfcdf4c741404c1f7523428ec46ce7c33e99b9462b1d135a407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_51fee557ee10cfcdf4c741404c1f7523428ec46ce7c33e99b9462b1d135a407c->leave($__internal_51fee557ee10cfcdf4c741404c1f7523428ec46ce7c33e99b9462b1d135a407c_prof);

        
        $__internal_b6f152ff5eca35333c1f76a5360295cd80795c68f0a052af5ad612d907896e18->leave($__internal_b6f152ff5eca35333c1f76a5360295cd80795c68f0a052af5ad612d907896e18_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9f6bf085106928e58717ba1c39a6c0fbeac7e968d75f7543ca0ffb7860b16485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6bf085106928e58717ba1c39a6c0fbeac7e968d75f7543ca0ffb7860b16485->enter($__internal_9f6bf085106928e58717ba1c39a6c0fbeac7e968d75f7543ca0ffb7860b16485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_20c3a8f93a7d51b0139e9d3809a72a77875a820244ed133a86bb9ea0f574cae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c3a8f93a7d51b0139e9d3809a72a77875a820244ed133a86bb9ea0f574cae0->enter($__internal_20c3a8f93a7d51b0139e9d3809a72a77875a820244ed133a86bb9ea0f574cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_20c3a8f93a7d51b0139e9d3809a72a77875a820244ed133a86bb9ea0f574cae0->leave($__internal_20c3a8f93a7d51b0139e9d3809a72a77875a820244ed133a86bb9ea0f574cae0_prof);

        
        $__internal_9f6bf085106928e58717ba1c39a6c0fbeac7e968d75f7543ca0ffb7860b16485->leave($__internal_9f6bf085106928e58717ba1c39a6c0fbeac7e968d75f7543ca0ffb7860b16485_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f473815a0a0188a18ce49bb01be70a65e6a6679ddac9c64bc832d12d4131c48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f473815a0a0188a18ce49bb01be70a65e6a6679ddac9c64bc832d12d4131c48d->enter($__internal_f473815a0a0188a18ce49bb01be70a65e6a6679ddac9c64bc832d12d4131c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cf6373773521b6943d0761490b5c504a1856e16440cf670f43f5e7e21a52cd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6373773521b6943d0761490b5c504a1856e16440cf670f43f5e7e21a52cd33->enter($__internal_cf6373773521b6943d0761490b5c504a1856e16440cf670f43f5e7e21a52cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_cf6373773521b6943d0761490b5c504a1856e16440cf670f43f5e7e21a52cd33->leave($__internal_cf6373773521b6943d0761490b5c504a1856e16440cf670f43f5e7e21a52cd33_prof);

        
        $__internal_f473815a0a0188a18ce49bb01be70a65e6a6679ddac9c64bc832d12d4131c48d->leave($__internal_f473815a0a0188a18ce49bb01be70a65e6a6679ddac9c64bc832d12d4131c48d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4d73552440f9a67b20b0be47b572fb012b9abd861c12a8221583403ab1c1a729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d73552440f9a67b20b0be47b572fb012b9abd861c12a8221583403ab1c1a729->enter($__internal_4d73552440f9a67b20b0be47b572fb012b9abd861c12a8221583403ab1c1a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_86367ce1f0220a3d3f2ceced9d2ce36240072d7fd70932719979642082ee9b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86367ce1f0220a3d3f2ceced9d2ce36240072d7fd70932719979642082ee9b2a->enter($__internal_86367ce1f0220a3d3f2ceced9d2ce36240072d7fd70932719979642082ee9b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_86367ce1f0220a3d3f2ceced9d2ce36240072d7fd70932719979642082ee9b2a->leave($__internal_86367ce1f0220a3d3f2ceced9d2ce36240072d7fd70932719979642082ee9b2a_prof);

        
        $__internal_4d73552440f9a67b20b0be47b572fb012b9abd861c12a8221583403ab1c1a729->leave($__internal_4d73552440f9a67b20b0be47b572fb012b9abd861c12a8221583403ab1c1a729_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_196b28663e01cc97e4159ea699947abd4321f69339dfe94daea39267b8556d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196b28663e01cc97e4159ea699947abd4321f69339dfe94daea39267b8556d35->enter($__internal_196b28663e01cc97e4159ea699947abd4321f69339dfe94daea39267b8556d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cb13b4f199be6ab66ff99d4546882eefd718e992bc4afe3e6676ba2a8599607a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb13b4f199be6ab66ff99d4546882eefd718e992bc4afe3e6676ba2a8599607a->enter($__internal_cb13b4f199be6ab66ff99d4546882eefd718e992bc4afe3e6676ba2a8599607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_cb13b4f199be6ab66ff99d4546882eefd718e992bc4afe3e6676ba2a8599607a->leave($__internal_cb13b4f199be6ab66ff99d4546882eefd718e992bc4afe3e6676ba2a8599607a_prof);

        
        $__internal_196b28663e01cc97e4159ea699947abd4321f69339dfe94daea39267b8556d35->leave($__internal_196b28663e01cc97e4159ea699947abd4321f69339dfe94daea39267b8556d35_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_52e2c07d2856279f819de49f77fd386aaa9ca451378ca9dc45712869b30cad6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e2c07d2856279f819de49f77fd386aaa9ca451378ca9dc45712869b30cad6c->enter($__internal_52e2c07d2856279f819de49f77fd386aaa9ca451378ca9dc45712869b30cad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2bdf5e3471fac787cedb0a59357ce6d6a08b695e005e6b6b172d240402aa34af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdf5e3471fac787cedb0a59357ce6d6a08b695e005e6b6b172d240402aa34af->enter($__internal_2bdf5e3471fac787cedb0a59357ce6d6a08b695e005e6b6b172d240402aa34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_2bdf5e3471fac787cedb0a59357ce6d6a08b695e005e6b6b172d240402aa34af->leave($__internal_2bdf5e3471fac787cedb0a59357ce6d6a08b695e005e6b6b172d240402aa34af_prof);

        
        $__internal_52e2c07d2856279f819de49f77fd386aaa9ca451378ca9dc45712869b30cad6c->leave($__internal_52e2c07d2856279f819de49f77fd386aaa9ca451378ca9dc45712869b30cad6c_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bedfdca38f38301b67689f9e2ec1694eac7ae781b472a4a96bd043705ba2151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedfdca38f38301b67689f9e2ec1694eac7ae781b472a4a96bd043705ba2151d->enter($__internal_bedfdca38f38301b67689f9e2ec1694eac7ae781b472a4a96bd043705ba2151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4fca1e50d5af2faf17dce9f68467ef312e7cce18cee7cf26de5121cec1bdda08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fca1e50d5af2faf17dce9f68467ef312e7cce18cee7cf26de5121cec1bdda08->enter($__internal_4fca1e50d5af2faf17dce9f68467ef312e7cce18cee7cf26de5121cec1bdda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4fca1e50d5af2faf17dce9f68467ef312e7cce18cee7cf26de5121cec1bdda08->leave($__internal_4fca1e50d5af2faf17dce9f68467ef312e7cce18cee7cf26de5121cec1bdda08_prof);

        
        $__internal_bedfdca38f38301b67689f9e2ec1694eac7ae781b472a4a96bd043705ba2151d->leave($__internal_bedfdca38f38301b67689f9e2ec1694eac7ae781b472a4a96bd043705ba2151d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_541e5a1c629e402afe8133c864bd84f6f1ffbd6ba4b169d240b2d73b96ad0951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e5a1c629e402afe8133c864bd84f6f1ffbd6ba4b169d240b2d73b96ad0951->enter($__internal_541e5a1c629e402afe8133c864bd84f6f1ffbd6ba4b169d240b2d73b96ad0951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_10d504fd4d6f6ffe9c31d1b06604aae62c50e3302b72001e9652ade488ee2ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d504fd4d6f6ffe9c31d1b06604aae62c50e3302b72001e9652ade488ee2ff7->enter($__internal_10d504fd4d6f6ffe9c31d1b06604aae62c50e3302b72001e9652ade488ee2ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_10d504fd4d6f6ffe9c31d1b06604aae62c50e3302b72001e9652ade488ee2ff7->leave($__internal_10d504fd4d6f6ffe9c31d1b06604aae62c50e3302b72001e9652ade488ee2ff7_prof);

        
        $__internal_541e5a1c629e402afe8133c864bd84f6f1ffbd6ba4b169d240b2d73b96ad0951->leave($__internal_541e5a1c629e402afe8133c864bd84f6f1ffbd6ba4b169d240b2d73b96ad0951_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a4579aa211b3dc270e0fd599c60f26f0c618ff2cce382928f7674df4b0e249b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4579aa211b3dc270e0fd599c60f26f0c618ff2cce382928f7674df4b0e249b4->enter($__internal_a4579aa211b3dc270e0fd599c60f26f0c618ff2cce382928f7674df4b0e249b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_695625f72cd6b098fd336ab8ba8f6e9eab36f32c8705ea156b39432642e5ce86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695625f72cd6b098fd336ab8ba8f6e9eab36f32c8705ea156b39432642e5ce86->enter($__internal_695625f72cd6b098fd336ab8ba8f6e9eab36f32c8705ea156b39432642e5ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_695625f72cd6b098fd336ab8ba8f6e9eab36f32c8705ea156b39432642e5ce86->leave($__internal_695625f72cd6b098fd336ab8ba8f6e9eab36f32c8705ea156b39432642e5ce86_prof);

        
        $__internal_a4579aa211b3dc270e0fd599c60f26f0c618ff2cce382928f7674df4b0e249b4->leave($__internal_a4579aa211b3dc270e0fd599c60f26f0c618ff2cce382928f7674df4b0e249b4_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a163fc4837946f95a8dc8f6659747a4c250f9e8c247dec8051794d8701c68616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a163fc4837946f95a8dc8f6659747a4c250f9e8c247dec8051794d8701c68616->enter($__internal_a163fc4837946f95a8dc8f6659747a4c250f9e8c247dec8051794d8701c68616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d1cdd30cbd3b1dcd6bdb5a01d22a04043511c328c137455d1f7714ffec14ebcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cdd30cbd3b1dcd6bdb5a01d22a04043511c328c137455d1f7714ffec14ebcf->enter($__internal_d1cdd30cbd3b1dcd6bdb5a01d22a04043511c328c137455d1f7714ffec14ebcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d1cdd30cbd3b1dcd6bdb5a01d22a04043511c328c137455d1f7714ffec14ebcf->leave($__internal_d1cdd30cbd3b1dcd6bdb5a01d22a04043511c328c137455d1f7714ffec14ebcf_prof);

        
        $__internal_a163fc4837946f95a8dc8f6659747a4c250f9e8c247dec8051794d8701c68616->leave($__internal_a163fc4837946f95a8dc8f6659747a4c250f9e8c247dec8051794d8701c68616_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c016dd735152659a7113dcc59c7b8984bb5716f0f783723b7a35d45721df219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c016dd735152659a7113dcc59c7b8984bb5716f0f783723b7a35d45721df219c->enter($__internal_c016dd735152659a7113dcc59c7b8984bb5716f0f783723b7a35d45721df219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b469232527128232c3a8b59ff4101af8edcd53b2986bc50a0f4750ddbf69a665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b469232527128232c3a8b59ff4101af8edcd53b2986bc50a0f4750ddbf69a665->enter($__internal_b469232527128232c3a8b59ff4101af8edcd53b2986bc50a0f4750ddbf69a665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_b469232527128232c3a8b59ff4101af8edcd53b2986bc50a0f4750ddbf69a665->leave($__internal_b469232527128232c3a8b59ff4101af8edcd53b2986bc50a0f4750ddbf69a665_prof);

        
        $__internal_c016dd735152659a7113dcc59c7b8984bb5716f0f783723b7a35d45721df219c->leave($__internal_c016dd735152659a7113dcc59c7b8984bb5716f0f783723b7a35d45721df219c_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d70e3ed778046c0cee9a5e6d4cfec30875dcdd2ff0022cb28dc647a3ce8566ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70e3ed778046c0cee9a5e6d4cfec30875dcdd2ff0022cb28dc647a3ce8566ee->enter($__internal_d70e3ed778046c0cee9a5e6d4cfec30875dcdd2ff0022cb28dc647a3ce8566ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f550b1f22cfb53f30f383c68bd93eec67579cf81d5b1768522e843ebf697e942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f550b1f22cfb53f30f383c68bd93eec67579cf81d5b1768522e843ebf697e942->enter($__internal_f550b1f22cfb53f30f383c68bd93eec67579cf81d5b1768522e843ebf697e942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f550b1f22cfb53f30f383c68bd93eec67579cf81d5b1768522e843ebf697e942->leave($__internal_f550b1f22cfb53f30f383c68bd93eec67579cf81d5b1768522e843ebf697e942_prof);

        
        $__internal_d70e3ed778046c0cee9a5e6d4cfec30875dcdd2ff0022cb28dc647a3ce8566ee->leave($__internal_d70e3ed778046c0cee9a5e6d4cfec30875dcdd2ff0022cb28dc647a3ce8566ee_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ee9815be18a04aac336af219be9f78e9e2ddbd1e5b887419479311764bdb9a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9815be18a04aac336af219be9f78e9e2ddbd1e5b887419479311764bdb9a7b->enter($__internal_ee9815be18a04aac336af219be9f78e9e2ddbd1e5b887419479311764bdb9a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c1736577eb30f24461d9b0f378e181f260338d01c6ea20c694efdd4068de4c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1736577eb30f24461d9b0f378e181f260338d01c6ea20c694efdd4068de4c25->enter($__internal_c1736577eb30f24461d9b0f378e181f260338d01c6ea20c694efdd4068de4c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_c1736577eb30f24461d9b0f378e181f260338d01c6ea20c694efdd4068de4c25->leave($__internal_c1736577eb30f24461d9b0f378e181f260338d01c6ea20c694efdd4068de4c25_prof);

        
        $__internal_ee9815be18a04aac336af219be9f78e9e2ddbd1e5b887419479311764bdb9a7b->leave($__internal_ee9815be18a04aac336af219be9f78e9e2ddbd1e5b887419479311764bdb9a7b_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ca43831c5e376c7a360b2dfb102e15002a196385ee46b511626b4ef3bec59037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca43831c5e376c7a360b2dfb102e15002a196385ee46b511626b4ef3bec59037->enter($__internal_ca43831c5e376c7a360b2dfb102e15002a196385ee46b511626b4ef3bec59037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_bab27f6b267237db0f4714f3203bcda86482ef25627019697f7c5bc18fc95412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab27f6b267237db0f4714f3203bcda86482ef25627019697f7c5bc18fc95412->enter($__internal_bab27f6b267237db0f4714f3203bcda86482ef25627019697f7c5bc18fc95412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bab27f6b267237db0f4714f3203bcda86482ef25627019697f7c5bc18fc95412->leave($__internal_bab27f6b267237db0f4714f3203bcda86482ef25627019697f7c5bc18fc95412_prof);

        
        $__internal_ca43831c5e376c7a360b2dfb102e15002a196385ee46b511626b4ef3bec59037->leave($__internal_ca43831c5e376c7a360b2dfb102e15002a196385ee46b511626b4ef3bec59037_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_832039e923f55ce8423dda7db45504a7d26b90b3ed9920bb9095f503d8575a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832039e923f55ce8423dda7db45504a7d26b90b3ed9920bb9095f503d8575a4d->enter($__internal_832039e923f55ce8423dda7db45504a7d26b90b3ed9920bb9095f503d8575a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e290417bdefe71d03a9b2f00d6ea703234a8edafd2787f316ea270c26088c426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e290417bdefe71d03a9b2f00d6ea703234a8edafd2787f316ea270c26088c426->enter($__internal_e290417bdefe71d03a9b2f00d6ea703234a8edafd2787f316ea270c26088c426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e290417bdefe71d03a9b2f00d6ea703234a8edafd2787f316ea270c26088c426->leave($__internal_e290417bdefe71d03a9b2f00d6ea703234a8edafd2787f316ea270c26088c426_prof);

        
        $__internal_832039e923f55ce8423dda7db45504a7d26b90b3ed9920bb9095f503d8575a4d->leave($__internal_832039e923f55ce8423dda7db45504a7d26b90b3ed9920bb9095f503d8575a4d_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ba882c2d5cc8e51debfe38c35b88640ddb70dfe77fa3122811172f5022ed2e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba882c2d5cc8e51debfe38c35b88640ddb70dfe77fa3122811172f5022ed2e76->enter($__internal_ba882c2d5cc8e51debfe38c35b88640ddb70dfe77fa3122811172f5022ed2e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a0c2edb4f5ee25a9bafa83daf1c43c560d48a0786510cd3bc4e1479cee0aa752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c2edb4f5ee25a9bafa83daf1c43c560d48a0786510cd3bc4e1479cee0aa752->enter($__internal_a0c2edb4f5ee25a9bafa83daf1c43c560d48a0786510cd3bc4e1479cee0aa752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a0c2edb4f5ee25a9bafa83daf1c43c560d48a0786510cd3bc4e1479cee0aa752->leave($__internal_a0c2edb4f5ee25a9bafa83daf1c43c560d48a0786510cd3bc4e1479cee0aa752_prof);

        
        $__internal_ba882c2d5cc8e51debfe38c35b88640ddb70dfe77fa3122811172f5022ed2e76->leave($__internal_ba882c2d5cc8e51debfe38c35b88640ddb70dfe77fa3122811172f5022ed2e76_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_025ca9f70523d0d9418261b3216a8506f0f46a562348bd7bfd5957d8532e0e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025ca9f70523d0d9418261b3216a8506f0f46a562348bd7bfd5957d8532e0e4e->enter($__internal_025ca9f70523d0d9418261b3216a8506f0f46a562348bd7bfd5957d8532e0e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_abb89dc023b1d68f33f248f89578c37e9bb18415cd82243f408d4409e3bc8326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb89dc023b1d68f33f248f89578c37e9bb18415cd82243f408d4409e3bc8326->enter($__internal_abb89dc023b1d68f33f248f89578c37e9bb18415cd82243f408d4409e3bc8326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_abb89dc023b1d68f33f248f89578c37e9bb18415cd82243f408d4409e3bc8326->leave($__internal_abb89dc023b1d68f33f248f89578c37e9bb18415cd82243f408d4409e3bc8326_prof);

        
        $__internal_025ca9f70523d0d9418261b3216a8506f0f46a562348bd7bfd5957d8532e0e4e->leave($__internal_025ca9f70523d0d9418261b3216a8506f0f46a562348bd7bfd5957d8532e0e4e_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_40051a48f1dbe2185f52e493c6def48b3e397540e6897ef7a6959c273ce696e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40051a48f1dbe2185f52e493c6def48b3e397540e6897ef7a6959c273ce696e3->enter($__internal_40051a48f1dbe2185f52e493c6def48b3e397540e6897ef7a6959c273ce696e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e58f3d8f7f27ba1d5f4c2c79c25a8b9ca3e86056f73d9563622adac0ca77237d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58f3d8f7f27ba1d5f4c2c79c25a8b9ca3e86056f73d9563622adac0ca77237d->enter($__internal_e58f3d8f7f27ba1d5f4c2c79c25a8b9ca3e86056f73d9563622adac0ca77237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_e58f3d8f7f27ba1d5f4c2c79c25a8b9ca3e86056f73d9563622adac0ca77237d->leave($__internal_e58f3d8f7f27ba1d5f4c2c79c25a8b9ca3e86056f73d9563622adac0ca77237d_prof);

        
        $__internal_40051a48f1dbe2185f52e493c6def48b3e397540e6897ef7a6959c273ce696e3->leave($__internal_40051a48f1dbe2185f52e493c6def48b3e397540e6897ef7a6959c273ce696e3_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_65912e2e2714e09056cd87c3d98e70c7e98b4b3bf65b0c51fd74859bd8ed5cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65912e2e2714e09056cd87c3d98e70c7e98b4b3bf65b0c51fd74859bd8ed5cd3->enter($__internal_65912e2e2714e09056cd87c3d98e70c7e98b4b3bf65b0c51fd74859bd8ed5cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c94fd868fbb5abcfc6d28ef3e353db3644ffe0122ac3b8e456ebd3e770d20c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94fd868fbb5abcfc6d28ef3e353db3644ffe0122ac3b8e456ebd3e770d20c23->enter($__internal_c94fd868fbb5abcfc6d28ef3e353db3644ffe0122ac3b8e456ebd3e770d20c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_c94fd868fbb5abcfc6d28ef3e353db3644ffe0122ac3b8e456ebd3e770d20c23->leave($__internal_c94fd868fbb5abcfc6d28ef3e353db3644ffe0122ac3b8e456ebd3e770d20c23_prof);

        
        $__internal_65912e2e2714e09056cd87c3d98e70c7e98b4b3bf65b0c51fd74859bd8ed5cd3->leave($__internal_65912e2e2714e09056cd87c3d98e70c7e98b4b3bf65b0c51fd74859bd8ed5cd3_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_713044854fca18f41a4cfca7404998b8ed0fc1c63ca1beaf47519cace3f72185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713044854fca18f41a4cfca7404998b8ed0fc1c63ca1beaf47519cace3f72185->enter($__internal_713044854fca18f41a4cfca7404998b8ed0fc1c63ca1beaf47519cace3f72185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9f164b25507f16a57ea14e00b19da9510975a6d56ef3fc34e2dfe979dcbc9aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f164b25507f16a57ea14e00b19da9510975a6d56ef3fc34e2dfe979dcbc9aa2->enter($__internal_9f164b25507f16a57ea14e00b19da9510975a6d56ef3fc34e2dfe979dcbc9aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9f164b25507f16a57ea14e00b19da9510975a6d56ef3fc34e2dfe979dcbc9aa2->leave($__internal_9f164b25507f16a57ea14e00b19da9510975a6d56ef3fc34e2dfe979dcbc9aa2_prof);

        
        $__internal_713044854fca18f41a4cfca7404998b8ed0fc1c63ca1beaf47519cace3f72185->leave($__internal_713044854fca18f41a4cfca7404998b8ed0fc1c63ca1beaf47519cace3f72185_prof);

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
