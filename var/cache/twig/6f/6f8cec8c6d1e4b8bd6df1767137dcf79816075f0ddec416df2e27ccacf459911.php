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
        $__internal_cf826af1e25023a61b9cd1987b82ae0b8cfcabf8b4736264837b7c314f74c769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf826af1e25023a61b9cd1987b82ae0b8cfcabf8b4736264837b7c314f74c769->enter($__internal_cf826af1e25023a61b9cd1987b82ae0b8cfcabf8b4736264837b7c314f74c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_6fd6a291b31354a93c2a2ca9875795c3ebc31d86c9cfcff4a6840ea7873e5aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd6a291b31354a93c2a2ca9875795c3ebc31d86c9cfcff4a6840ea7873e5aa0->enter($__internal_6fd6a291b31354a93c2a2ca9875795c3ebc31d86c9cfcff4a6840ea7873e5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_cf826af1e25023a61b9cd1987b82ae0b8cfcabf8b4736264837b7c314f74c769->leave($__internal_cf826af1e25023a61b9cd1987b82ae0b8cfcabf8b4736264837b7c314f74c769_prof);

        
        $__internal_6fd6a291b31354a93c2a2ca9875795c3ebc31d86c9cfcff4a6840ea7873e5aa0->leave($__internal_6fd6a291b31354a93c2a2ca9875795c3ebc31d86c9cfcff4a6840ea7873e5aa0_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_28b64367cdfbccbe8ec0664dfa905926efd7bdcb1bcac8f31cef4e5f9819fbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b64367cdfbccbe8ec0664dfa905926efd7bdcb1bcac8f31cef4e5f9819fbeb->enter($__internal_28b64367cdfbccbe8ec0664dfa905926efd7bdcb1bcac8f31cef4e5f9819fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0421637b8ecf506d562c2becb37a35003fb8400335997f20efee053aab75fae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0421637b8ecf506d562c2becb37a35003fb8400335997f20efee053aab75fae5->enter($__internal_0421637b8ecf506d562c2becb37a35003fb8400335997f20efee053aab75fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0421637b8ecf506d562c2becb37a35003fb8400335997f20efee053aab75fae5->leave($__internal_0421637b8ecf506d562c2becb37a35003fb8400335997f20efee053aab75fae5_prof);

        
        $__internal_28b64367cdfbccbe8ec0664dfa905926efd7bdcb1bcac8f31cef4e5f9819fbeb->leave($__internal_28b64367cdfbccbe8ec0664dfa905926efd7bdcb1bcac8f31cef4e5f9819fbeb_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3e633a3f4982c42230a552e068f0f45e4118a586edd1788ef818ac0893555aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e633a3f4982c42230a552e068f0f45e4118a586edd1788ef818ac0893555aa2->enter($__internal_3e633a3f4982c42230a552e068f0f45e4118a586edd1788ef818ac0893555aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_19d128309e2de002482e43868d112702d8383aa862b6271a311ddee10a0ef2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d128309e2de002482e43868d112702d8383aa862b6271a311ddee10a0ef2ae->enter($__internal_19d128309e2de002482e43868d112702d8383aa862b6271a311ddee10a0ef2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_19d128309e2de002482e43868d112702d8383aa862b6271a311ddee10a0ef2ae->leave($__internal_19d128309e2de002482e43868d112702d8383aa862b6271a311ddee10a0ef2ae_prof);

        
        $__internal_3e633a3f4982c42230a552e068f0f45e4118a586edd1788ef818ac0893555aa2->leave($__internal_3e633a3f4982c42230a552e068f0f45e4118a586edd1788ef818ac0893555aa2_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9bc7a51bbf16694a97cd0f1b7767b52a220c3d377691f5ea93078b5b8b93df67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc7a51bbf16694a97cd0f1b7767b52a220c3d377691f5ea93078b5b8b93df67->enter($__internal_9bc7a51bbf16694a97cd0f1b7767b52a220c3d377691f5ea93078b5b8b93df67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3c1593f9cc9606ee2cb5edaf276e982939e9bd5fae29cee58f8d1e233f32d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1593f9cc9606ee2cb5edaf276e982939e9bd5fae29cee58f8d1e233f32d487->enter($__internal_3c1593f9cc9606ee2cb5edaf276e982939e9bd5fae29cee58f8d1e233f32d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3c1593f9cc9606ee2cb5edaf276e982939e9bd5fae29cee58f8d1e233f32d487->leave($__internal_3c1593f9cc9606ee2cb5edaf276e982939e9bd5fae29cee58f8d1e233f32d487_prof);

        
        $__internal_9bc7a51bbf16694a97cd0f1b7767b52a220c3d377691f5ea93078b5b8b93df67->leave($__internal_9bc7a51bbf16694a97cd0f1b7767b52a220c3d377691f5ea93078b5b8b93df67_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9cfd55c546b3b38703dcdf28b85935a810c01abf7272de3faf6f75d60754e317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfd55c546b3b38703dcdf28b85935a810c01abf7272de3faf6f75d60754e317->enter($__internal_9cfd55c546b3b38703dcdf28b85935a810c01abf7272de3faf6f75d60754e317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1f9abc62adcea8f7b9de7145d0c518d85e97ac6e82a4836cf8fe25f1666845cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9abc62adcea8f7b9de7145d0c518d85e97ac6e82a4836cf8fe25f1666845cd->enter($__internal_1f9abc62adcea8f7b9de7145d0c518d85e97ac6e82a4836cf8fe25f1666845cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_9d12217b83813bb32b5ff97011bf6f67d56b665d141ee361759ce9c0e619c9bb = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_5eb084c2a8136a448b48ca0d3393a0537a50f1c636aa622e152e646564995917 = "{{") && ('' === $__internal_5eb084c2a8136a448b48ca0d3393a0537a50f1c636aa622e152e646564995917 || 0 === strpos($__internal_9d12217b83813bb32b5ff97011bf6f67d56b665d141ee361759ce9c0e619c9bb, $__internal_5eb084c2a8136a448b48ca0d3393a0537a50f1c636aa622e152e646564995917)));
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
        
        $__internal_1f9abc62adcea8f7b9de7145d0c518d85e97ac6e82a4836cf8fe25f1666845cd->leave($__internal_1f9abc62adcea8f7b9de7145d0c518d85e97ac6e82a4836cf8fe25f1666845cd_prof);

        
        $__internal_9cfd55c546b3b38703dcdf28b85935a810c01abf7272de3faf6f75d60754e317->leave($__internal_9cfd55c546b3b38703dcdf28b85935a810c01abf7272de3faf6f75d60754e317_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d114b2b7621b256782a6eacb6af7464fa986137897b9fc3002c123555f2661a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d114b2b7621b256782a6eacb6af7464fa986137897b9fc3002c123555f2661a7->enter($__internal_d114b2b7621b256782a6eacb6af7464fa986137897b9fc3002c123555f2661a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b4451af41a409ae5d66bf113232be611ebcaa3c107b4454b44d7187f2de4eef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4451af41a409ae5d66bf113232be611ebcaa3c107b4454b44d7187f2de4eef0->enter($__internal_b4451af41a409ae5d66bf113232be611ebcaa3c107b4454b44d7187f2de4eef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b4451af41a409ae5d66bf113232be611ebcaa3c107b4454b44d7187f2de4eef0->leave($__internal_b4451af41a409ae5d66bf113232be611ebcaa3c107b4454b44d7187f2de4eef0_prof);

        
        $__internal_d114b2b7621b256782a6eacb6af7464fa986137897b9fc3002c123555f2661a7->leave($__internal_d114b2b7621b256782a6eacb6af7464fa986137897b9fc3002c123555f2661a7_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_05870e3819daf721a5c9538ba5d2e98bb2badf6b746a56026c8f59e166daf5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05870e3819daf721a5c9538ba5d2e98bb2badf6b746a56026c8f59e166daf5ae->enter($__internal_05870e3819daf721a5c9538ba5d2e98bb2badf6b746a56026c8f59e166daf5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8f9f3eca5ad29e38cd76b26a8e23f41ad815d4a4daf9eaffe686e8569579b1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9f3eca5ad29e38cd76b26a8e23f41ad815d4a4daf9eaffe686e8569579b1de->enter($__internal_8f9f3eca5ad29e38cd76b26a8e23f41ad815d4a4daf9eaffe686e8569579b1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_8f9f3eca5ad29e38cd76b26a8e23f41ad815d4a4daf9eaffe686e8569579b1de->leave($__internal_8f9f3eca5ad29e38cd76b26a8e23f41ad815d4a4daf9eaffe686e8569579b1de_prof);

        
        $__internal_05870e3819daf721a5c9538ba5d2e98bb2badf6b746a56026c8f59e166daf5ae->leave($__internal_05870e3819daf721a5c9538ba5d2e98bb2badf6b746a56026c8f59e166daf5ae_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_227ec1f5482021df43af9e70ee7c241fdd837aeb9e47c3df47cf20e8df1d65b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227ec1f5482021df43af9e70ee7c241fdd837aeb9e47c3df47cf20e8df1d65b7->enter($__internal_227ec1f5482021df43af9e70ee7c241fdd837aeb9e47c3df47cf20e8df1d65b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3b4a3ffeb09b9a374310441f81cf9e9cf59c94eb6cbbc460a9790ef9d32aa51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4a3ffeb09b9a374310441f81cf9e9cf59c94eb6cbbc460a9790ef9d32aa51f->enter($__internal_3b4a3ffeb09b9a374310441f81cf9e9cf59c94eb6cbbc460a9790ef9d32aa51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_3b4a3ffeb09b9a374310441f81cf9e9cf59c94eb6cbbc460a9790ef9d32aa51f->leave($__internal_3b4a3ffeb09b9a374310441f81cf9e9cf59c94eb6cbbc460a9790ef9d32aa51f_prof);

        
        $__internal_227ec1f5482021df43af9e70ee7c241fdd837aeb9e47c3df47cf20e8df1d65b7->leave($__internal_227ec1f5482021df43af9e70ee7c241fdd837aeb9e47c3df47cf20e8df1d65b7_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_84e0c820b629b99b026de026690b06e598288191b3b0f499e45e57a992359e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e0c820b629b99b026de026690b06e598288191b3b0f499e45e57a992359e0b->enter($__internal_84e0c820b629b99b026de026690b06e598288191b3b0f499e45e57a992359e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1c4658b650ba0df309534c668c822fa3c07948124cfb9b8711acc4788b601aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4658b650ba0df309534c668c822fa3c07948124cfb9b8711acc4788b601aff->enter($__internal_1c4658b650ba0df309534c668c822fa3c07948124cfb9b8711acc4788b601aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_1c4658b650ba0df309534c668c822fa3c07948124cfb9b8711acc4788b601aff->leave($__internal_1c4658b650ba0df309534c668c822fa3c07948124cfb9b8711acc4788b601aff_prof);

        
        $__internal_84e0c820b629b99b026de026690b06e598288191b3b0f499e45e57a992359e0b->leave($__internal_84e0c820b629b99b026de026690b06e598288191b3b0f499e45e57a992359e0b_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b40c3bf35e3e254c97c67eaada6102d3ef9e1812ec29024a03fdbe166c829b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40c3bf35e3e254c97c67eaada6102d3ef9e1812ec29024a03fdbe166c829b7b->enter($__internal_b40c3bf35e3e254c97c67eaada6102d3ef9e1812ec29024a03fdbe166c829b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_828cefad75534129ac82b85d2833ad44abfe5dd4210c7f53667666f5470b192b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828cefad75534129ac82b85d2833ad44abfe5dd4210c7f53667666f5470b192b->enter($__internal_828cefad75534129ac82b85d2833ad44abfe5dd4210c7f53667666f5470b192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_828cefad75534129ac82b85d2833ad44abfe5dd4210c7f53667666f5470b192b->leave($__internal_828cefad75534129ac82b85d2833ad44abfe5dd4210c7f53667666f5470b192b_prof);

        
        $__internal_b40c3bf35e3e254c97c67eaada6102d3ef9e1812ec29024a03fdbe166c829b7b->leave($__internal_b40c3bf35e3e254c97c67eaada6102d3ef9e1812ec29024a03fdbe166c829b7b_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c59a4d65687552807d0a90f6dcea71cc5cdb0791a1a559cadd7de65fa6cdb156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59a4d65687552807d0a90f6dcea71cc5cdb0791a1a559cadd7de65fa6cdb156->enter($__internal_c59a4d65687552807d0a90f6dcea71cc5cdb0791a1a559cadd7de65fa6cdb156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_82a78afbde324b7bac2508948486875b1e61b0046f5ea7062a365c0a369ec1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a78afbde324b7bac2508948486875b1e61b0046f5ea7062a365c0a369ec1df->enter($__internal_82a78afbde324b7bac2508948486875b1e61b0046f5ea7062a365c0a369ec1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_82a78afbde324b7bac2508948486875b1e61b0046f5ea7062a365c0a369ec1df->leave($__internal_82a78afbde324b7bac2508948486875b1e61b0046f5ea7062a365c0a369ec1df_prof);

        
        $__internal_c59a4d65687552807d0a90f6dcea71cc5cdb0791a1a559cadd7de65fa6cdb156->leave($__internal_c59a4d65687552807d0a90f6dcea71cc5cdb0791a1a559cadd7de65fa6cdb156_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4fcb311f162b1bde8e380928c8d42c0bd0ce897f7447d7efacab946415aed06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcb311f162b1bde8e380928c8d42c0bd0ce897f7447d7efacab946415aed06d->enter($__internal_4fcb311f162b1bde8e380928c8d42c0bd0ce897f7447d7efacab946415aed06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_331e606f0374baba879b302ec3dcb07efc3936e66d0870ac9dc77a5c6d1bed4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331e606f0374baba879b302ec3dcb07efc3936e66d0870ac9dc77a5c6d1bed4f->enter($__internal_331e606f0374baba879b302ec3dcb07efc3936e66d0870ac9dc77a5c6d1bed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_331e606f0374baba879b302ec3dcb07efc3936e66d0870ac9dc77a5c6d1bed4f->leave($__internal_331e606f0374baba879b302ec3dcb07efc3936e66d0870ac9dc77a5c6d1bed4f_prof);

        
        $__internal_4fcb311f162b1bde8e380928c8d42c0bd0ce897f7447d7efacab946415aed06d->leave($__internal_4fcb311f162b1bde8e380928c8d42c0bd0ce897f7447d7efacab946415aed06d_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_61f402ff2fcbd6d7d3151f9c94c73469063a3b3b896baf29af872ee8a86a59a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f402ff2fcbd6d7d3151f9c94c73469063a3b3b896baf29af872ee8a86a59a8->enter($__internal_61f402ff2fcbd6d7d3151f9c94c73469063a3b3b896baf29af872ee8a86a59a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_986cbb0ee236fe347d2edd18db754ba7f4e8f6c83e102b3f6aa1274441f54d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986cbb0ee236fe347d2edd18db754ba7f4e8f6c83e102b3f6aa1274441f54d0b->enter($__internal_986cbb0ee236fe347d2edd18db754ba7f4e8f6c83e102b3f6aa1274441f54d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_986cbb0ee236fe347d2edd18db754ba7f4e8f6c83e102b3f6aa1274441f54d0b->leave($__internal_986cbb0ee236fe347d2edd18db754ba7f4e8f6c83e102b3f6aa1274441f54d0b_prof);

        
        $__internal_61f402ff2fcbd6d7d3151f9c94c73469063a3b3b896baf29af872ee8a86a59a8->leave($__internal_61f402ff2fcbd6d7d3151f9c94c73469063a3b3b896baf29af872ee8a86a59a8_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_61c22d603f76f7bcc1b871f19243af6111ff60a3d7dd1bcf0ace758637fe28f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c22d603f76f7bcc1b871f19243af6111ff60a3d7dd1bcf0ace758637fe28f2->enter($__internal_61c22d603f76f7bcc1b871f19243af6111ff60a3d7dd1bcf0ace758637fe28f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3d35e841e0c82ac1d915365370538557c7da222d97978e20d1d2c6022b3acfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d35e841e0c82ac1d915365370538557c7da222d97978e20d1d2c6022b3acfb9->enter($__internal_3d35e841e0c82ac1d915365370538557c7da222d97978e20d1d2c6022b3acfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_3d35e841e0c82ac1d915365370538557c7da222d97978e20d1d2c6022b3acfb9->leave($__internal_3d35e841e0c82ac1d915365370538557c7da222d97978e20d1d2c6022b3acfb9_prof);

        
        $__internal_61c22d603f76f7bcc1b871f19243af6111ff60a3d7dd1bcf0ace758637fe28f2->leave($__internal_61c22d603f76f7bcc1b871f19243af6111ff60a3d7dd1bcf0ace758637fe28f2_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3fda17e1e7d1fadbcf031c2890f6b7d53341c746db7a6bd8fb4723c5152c716d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fda17e1e7d1fadbcf031c2890f6b7d53341c746db7a6bd8fb4723c5152c716d->enter($__internal_3fda17e1e7d1fadbcf031c2890f6b7d53341c746db7a6bd8fb4723c5152c716d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e90ded909587798aea6109abae37932b0e5b8a3a47c1b3c63cd10659d78442b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90ded909587798aea6109abae37932b0e5b8a3a47c1b3c63cd10659d78442b6->enter($__internal_e90ded909587798aea6109abae37932b0e5b8a3a47c1b3c63cd10659d78442b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e90ded909587798aea6109abae37932b0e5b8a3a47c1b3c63cd10659d78442b6->leave($__internal_e90ded909587798aea6109abae37932b0e5b8a3a47c1b3c63cd10659d78442b6_prof);

        
        $__internal_3fda17e1e7d1fadbcf031c2890f6b7d53341c746db7a6bd8fb4723c5152c716d->leave($__internal_3fda17e1e7d1fadbcf031c2890f6b7d53341c746db7a6bd8fb4723c5152c716d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c6f4b110ac34641d8e3c37f5720cc6328db7fcffab84bffc3fc0be78563c77e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f4b110ac34641d8e3c37f5720cc6328db7fcffab84bffc3fc0be78563c77e8->enter($__internal_c6f4b110ac34641d8e3c37f5720cc6328db7fcffab84bffc3fc0be78563c77e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_61d7d07e5c08e466f854f45f4fdf491d14a6efd9f239a6bf02513bf9092af598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d7d07e5c08e466f854f45f4fdf491d14a6efd9f239a6bf02513bf9092af598->enter($__internal_61d7d07e5c08e466f854f45f4fdf491d14a6efd9f239a6bf02513bf9092af598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_61d7d07e5c08e466f854f45f4fdf491d14a6efd9f239a6bf02513bf9092af598->leave($__internal_61d7d07e5c08e466f854f45f4fdf491d14a6efd9f239a6bf02513bf9092af598_prof);

        
        $__internal_c6f4b110ac34641d8e3c37f5720cc6328db7fcffab84bffc3fc0be78563c77e8->leave($__internal_c6f4b110ac34641d8e3c37f5720cc6328db7fcffab84bffc3fc0be78563c77e8_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_202627f4fae947f7b8c6051114cdb7f465841e59c2a4739e2595e6aed4ab1b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202627f4fae947f7b8c6051114cdb7f465841e59c2a4739e2595e6aed4ab1b0d->enter($__internal_202627f4fae947f7b8c6051114cdb7f465841e59c2a4739e2595e6aed4ab1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_26a0425b5cc028dd15f0df9d7e263a33de00271b9a10f05a4720abe490e5f26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a0425b5cc028dd15f0df9d7e263a33de00271b9a10f05a4720abe490e5f26c->enter($__internal_26a0425b5cc028dd15f0df9d7e263a33de00271b9a10f05a4720abe490e5f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_26a0425b5cc028dd15f0df9d7e263a33de00271b9a10f05a4720abe490e5f26c->leave($__internal_26a0425b5cc028dd15f0df9d7e263a33de00271b9a10f05a4720abe490e5f26c_prof);

        
        $__internal_202627f4fae947f7b8c6051114cdb7f465841e59c2a4739e2595e6aed4ab1b0d->leave($__internal_202627f4fae947f7b8c6051114cdb7f465841e59c2a4739e2595e6aed4ab1b0d_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_958232510dfc3c28867adc3c0535f336c1a2eb14f006f41c904b042c65881fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958232510dfc3c28867adc3c0535f336c1a2eb14f006f41c904b042c65881fbb->enter($__internal_958232510dfc3c28867adc3c0535f336c1a2eb14f006f41c904b042c65881fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e74f6473106309039682de15d9497757537bef482c36f1edf16c262470abde1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74f6473106309039682de15d9497757537bef482c36f1edf16c262470abde1f->enter($__internal_e74f6473106309039682de15d9497757537bef482c36f1edf16c262470abde1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e74f6473106309039682de15d9497757537bef482c36f1edf16c262470abde1f->leave($__internal_e74f6473106309039682de15d9497757537bef482c36f1edf16c262470abde1f_prof);

        
        $__internal_958232510dfc3c28867adc3c0535f336c1a2eb14f006f41c904b042c65881fbb->leave($__internal_958232510dfc3c28867adc3c0535f336c1a2eb14f006f41c904b042c65881fbb_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_57c1818b0429b31825691f7133510bab7940e0047da19ee150f3d02ab1e9670b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c1818b0429b31825691f7133510bab7940e0047da19ee150f3d02ab1e9670b->enter($__internal_57c1818b0429b31825691f7133510bab7940e0047da19ee150f3d02ab1e9670b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b2be56458e074ffc18559df3bc3003f9f7a847b505ece52a99b5438b740a1599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2be56458e074ffc18559df3bc3003f9f7a847b505ece52a99b5438b740a1599->enter($__internal_b2be56458e074ffc18559df3bc3003f9f7a847b505ece52a99b5438b740a1599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_b2be56458e074ffc18559df3bc3003f9f7a847b505ece52a99b5438b740a1599->leave($__internal_b2be56458e074ffc18559df3bc3003f9f7a847b505ece52a99b5438b740a1599_prof);

        
        $__internal_57c1818b0429b31825691f7133510bab7940e0047da19ee150f3d02ab1e9670b->leave($__internal_57c1818b0429b31825691f7133510bab7940e0047da19ee150f3d02ab1e9670b_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a930aa94b462be4c13585abd523d03e7cd17d37e6452f875c738dfdb62aaba20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a930aa94b462be4c13585abd523d03e7cd17d37e6452f875c738dfdb62aaba20->enter($__internal_a930aa94b462be4c13585abd523d03e7cd17d37e6452f875c738dfdb62aaba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_000c380edc27b381c1622f9e65784dee110d8afbc10aeb69cb97e242481f1d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000c380edc27b381c1622f9e65784dee110d8afbc10aeb69cb97e242481f1d79->enter($__internal_000c380edc27b381c1622f9e65784dee110d8afbc10aeb69cb97e242481f1d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_000c380edc27b381c1622f9e65784dee110d8afbc10aeb69cb97e242481f1d79->leave($__internal_000c380edc27b381c1622f9e65784dee110d8afbc10aeb69cb97e242481f1d79_prof);

        
        $__internal_a930aa94b462be4c13585abd523d03e7cd17d37e6452f875c738dfdb62aaba20->leave($__internal_a930aa94b462be4c13585abd523d03e7cd17d37e6452f875c738dfdb62aaba20_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5fe236274dd8d902d6d100c339ad2e49c81e7dd53b37136a93b8ccb25dc82d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe236274dd8d902d6d100c339ad2e49c81e7dd53b37136a93b8ccb25dc82d7f->enter($__internal_5fe236274dd8d902d6d100c339ad2e49c81e7dd53b37136a93b8ccb25dc82d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a44c275af8843e40052e34ea00d44bd7bc9878854eb704907a3139f65ec14b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44c275af8843e40052e34ea00d44bd7bc9878854eb704907a3139f65ec14b2b->enter($__internal_a44c275af8843e40052e34ea00d44bd7bc9878854eb704907a3139f65ec14b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_a44c275af8843e40052e34ea00d44bd7bc9878854eb704907a3139f65ec14b2b->leave($__internal_a44c275af8843e40052e34ea00d44bd7bc9878854eb704907a3139f65ec14b2b_prof);

        
        $__internal_5fe236274dd8d902d6d100c339ad2e49c81e7dd53b37136a93b8ccb25dc82d7f->leave($__internal_5fe236274dd8d902d6d100c339ad2e49c81e7dd53b37136a93b8ccb25dc82d7f_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c74bf24af6b7cc66d7cd230a615ba3ce46f30959b6b24c257b5e22156c2c282a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74bf24af6b7cc66d7cd230a615ba3ce46f30959b6b24c257b5e22156c2c282a->enter($__internal_c74bf24af6b7cc66d7cd230a615ba3ce46f30959b6b24c257b5e22156c2c282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_bfef43de2d6e8e37d3bb421ca7ec999e53e51f8e81353e74eed37c898c1aa58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfef43de2d6e8e37d3bb421ca7ec999e53e51f8e81353e74eed37c898c1aa58e->enter($__internal_bfef43de2d6e8e37d3bb421ca7ec999e53e51f8e81353e74eed37c898c1aa58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bfef43de2d6e8e37d3bb421ca7ec999e53e51f8e81353e74eed37c898c1aa58e->leave($__internal_bfef43de2d6e8e37d3bb421ca7ec999e53e51f8e81353e74eed37c898c1aa58e_prof);

        
        $__internal_c74bf24af6b7cc66d7cd230a615ba3ce46f30959b6b24c257b5e22156c2c282a->leave($__internal_c74bf24af6b7cc66d7cd230a615ba3ce46f30959b6b24c257b5e22156c2c282a_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e187e1a9c839b2982b6d33165076b10bc40df3a3930f70393cf7938d63a6b31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e187e1a9c839b2982b6d33165076b10bc40df3a3930f70393cf7938d63a6b31f->enter($__internal_e187e1a9c839b2982b6d33165076b10bc40df3a3930f70393cf7938d63a6b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6a23f7981cf411ffd656df95f7b05a62bf2f47da8d9df1b44899d62f8a3da955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a23f7981cf411ffd656df95f7b05a62bf2f47da8d9df1b44899d62f8a3da955->enter($__internal_6a23f7981cf411ffd656df95f7b05a62bf2f47da8d9df1b44899d62f8a3da955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6a23f7981cf411ffd656df95f7b05a62bf2f47da8d9df1b44899d62f8a3da955->leave($__internal_6a23f7981cf411ffd656df95f7b05a62bf2f47da8d9df1b44899d62f8a3da955_prof);

        
        $__internal_e187e1a9c839b2982b6d33165076b10bc40df3a3930f70393cf7938d63a6b31f->leave($__internal_e187e1a9c839b2982b6d33165076b10bc40df3a3930f70393cf7938d63a6b31f_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f875dd3f5ceb57e75e074e63154f1eaf7c4f43ce4cb0426951897c9864efc42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f875dd3f5ceb57e75e074e63154f1eaf7c4f43ce4cb0426951897c9864efc42b->enter($__internal_f875dd3f5ceb57e75e074e63154f1eaf7c4f43ce4cb0426951897c9864efc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_232bcca68eb509f50c240a439c26c5c1a30feda351a6f8b4a5f4b38d79b8ca52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232bcca68eb509f50c240a439c26c5c1a30feda351a6f8b4a5f4b38d79b8ca52->enter($__internal_232bcca68eb509f50c240a439c26c5c1a30feda351a6f8b4a5f4b38d79b8ca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_232bcca68eb509f50c240a439c26c5c1a30feda351a6f8b4a5f4b38d79b8ca52->leave($__internal_232bcca68eb509f50c240a439c26c5c1a30feda351a6f8b4a5f4b38d79b8ca52_prof);

        
        $__internal_f875dd3f5ceb57e75e074e63154f1eaf7c4f43ce4cb0426951897c9864efc42b->leave($__internal_f875dd3f5ceb57e75e074e63154f1eaf7c4f43ce4cb0426951897c9864efc42b_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_95318cab7649221b550803e7795617b2064b9b9ff782ae529dcc5ee8bc0480cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95318cab7649221b550803e7795617b2064b9b9ff782ae529dcc5ee8bc0480cf->enter($__internal_95318cab7649221b550803e7795617b2064b9b9ff782ae529dcc5ee8bc0480cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5aaa0099e3dc58eab5175d018eb136839139884f8a3d48a7d623e6714a784bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aaa0099e3dc58eab5175d018eb136839139884f8a3d48a7d623e6714a784bde->enter($__internal_5aaa0099e3dc58eab5175d018eb136839139884f8a3d48a7d623e6714a784bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5aaa0099e3dc58eab5175d018eb136839139884f8a3d48a7d623e6714a784bde->leave($__internal_5aaa0099e3dc58eab5175d018eb136839139884f8a3d48a7d623e6714a784bde_prof);

        
        $__internal_95318cab7649221b550803e7795617b2064b9b9ff782ae529dcc5ee8bc0480cf->leave($__internal_95318cab7649221b550803e7795617b2064b9b9ff782ae529dcc5ee8bc0480cf_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_33419a23c738446dfbd48215d984146295f964bb1f188cf6556d051f31c03844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33419a23c738446dfbd48215d984146295f964bb1f188cf6556d051f31c03844->enter($__internal_33419a23c738446dfbd48215d984146295f964bb1f188cf6556d051f31c03844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1f66cef13a6d9f5c805788197c3f2413834e0eefd1c67d6c9b8882b4ad8ad95a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f66cef13a6d9f5c805788197c3f2413834e0eefd1c67d6c9b8882b4ad8ad95a->enter($__internal_1f66cef13a6d9f5c805788197c3f2413834e0eefd1c67d6c9b8882b4ad8ad95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_1f66cef13a6d9f5c805788197c3f2413834e0eefd1c67d6c9b8882b4ad8ad95a->leave($__internal_1f66cef13a6d9f5c805788197c3f2413834e0eefd1c67d6c9b8882b4ad8ad95a_prof);

        
        $__internal_33419a23c738446dfbd48215d984146295f964bb1f188cf6556d051f31c03844->leave($__internal_33419a23c738446dfbd48215d984146295f964bb1f188cf6556d051f31c03844_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_07db38d068e47801cb3b3c4e5a9dba569e6ae62559d5344de9e818a9ed35b69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07db38d068e47801cb3b3c4e5a9dba569e6ae62559d5344de9e818a9ed35b69e->enter($__internal_07db38d068e47801cb3b3c4e5a9dba569e6ae62559d5344de9e818a9ed35b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7fe54645f44771536f7a7c2fe8c1029853f3c9c8e6e7d807c60c7b6dfb8ffc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe54645f44771536f7a7c2fe8c1029853f3c9c8e6e7d807c60c7b6dfb8ffc78->enter($__internal_7fe54645f44771536f7a7c2fe8c1029853f3c9c8e6e7d807c60c7b6dfb8ffc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_7fe54645f44771536f7a7c2fe8c1029853f3c9c8e6e7d807c60c7b6dfb8ffc78->leave($__internal_7fe54645f44771536f7a7c2fe8c1029853f3c9c8e6e7d807c60c7b6dfb8ffc78_prof);

        
        $__internal_07db38d068e47801cb3b3c4e5a9dba569e6ae62559d5344de9e818a9ed35b69e->leave($__internal_07db38d068e47801cb3b3c4e5a9dba569e6ae62559d5344de9e818a9ed35b69e_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8c017a329a766d77ae25ecd5032f170f985395efdf939bd561aeff7c6c30d628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c017a329a766d77ae25ecd5032f170f985395efdf939bd561aeff7c6c30d628->enter($__internal_8c017a329a766d77ae25ecd5032f170f985395efdf939bd561aeff7c6c30d628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_25303242c74779d1288d364b84237ecc29b479abf202a77137af7d06fff68938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25303242c74779d1288d364b84237ecc29b479abf202a77137af7d06fff68938->enter($__internal_25303242c74779d1288d364b84237ecc29b479abf202a77137af7d06fff68938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_25303242c74779d1288d364b84237ecc29b479abf202a77137af7d06fff68938->leave($__internal_25303242c74779d1288d364b84237ecc29b479abf202a77137af7d06fff68938_prof);

        
        $__internal_8c017a329a766d77ae25ecd5032f170f985395efdf939bd561aeff7c6c30d628->leave($__internal_8c017a329a766d77ae25ecd5032f170f985395efdf939bd561aeff7c6c30d628_prof);

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
