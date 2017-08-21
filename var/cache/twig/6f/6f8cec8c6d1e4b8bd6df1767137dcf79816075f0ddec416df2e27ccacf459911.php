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
        $__internal_d3922ddc9eff83af74b9cf15fdc9c355bb8a0932b50000f8399034ea80a9a6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3922ddc9eff83af74b9cf15fdc9c355bb8a0932b50000f8399034ea80a9a6ea->enter($__internal_d3922ddc9eff83af74b9cf15fdc9c355bb8a0932b50000f8399034ea80a9a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4fbbea8d97589d1c5eefa1a4dfb725e60d1847988a20b71bcbfb43b5b0620edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbbea8d97589d1c5eefa1a4dfb725e60d1847988a20b71bcbfb43b5b0620edf->enter($__internal_4fbbea8d97589d1c5eefa1a4dfb725e60d1847988a20b71bcbfb43b5b0620edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_d3922ddc9eff83af74b9cf15fdc9c355bb8a0932b50000f8399034ea80a9a6ea->leave($__internal_d3922ddc9eff83af74b9cf15fdc9c355bb8a0932b50000f8399034ea80a9a6ea_prof);

        
        $__internal_4fbbea8d97589d1c5eefa1a4dfb725e60d1847988a20b71bcbfb43b5b0620edf->leave($__internal_4fbbea8d97589d1c5eefa1a4dfb725e60d1847988a20b71bcbfb43b5b0620edf_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_92537ed272e70977bf8d6395064fc1d03c40bb781b6e540e0340de6536161052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92537ed272e70977bf8d6395064fc1d03c40bb781b6e540e0340de6536161052->enter($__internal_92537ed272e70977bf8d6395064fc1d03c40bb781b6e540e0340de6536161052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_810ff490481564a9f2124fcbc8fef97c65502256c361ebd994000409362c5d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810ff490481564a9f2124fcbc8fef97c65502256c361ebd994000409362c5d60->enter($__internal_810ff490481564a9f2124fcbc8fef97c65502256c361ebd994000409362c5d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_810ff490481564a9f2124fcbc8fef97c65502256c361ebd994000409362c5d60->leave($__internal_810ff490481564a9f2124fcbc8fef97c65502256c361ebd994000409362c5d60_prof);

        
        $__internal_92537ed272e70977bf8d6395064fc1d03c40bb781b6e540e0340de6536161052->leave($__internal_92537ed272e70977bf8d6395064fc1d03c40bb781b6e540e0340de6536161052_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d0aa5d6a6aa16a663286a1629a7e634fc3b3d539747cedec4d452a14943a57dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0aa5d6a6aa16a663286a1629a7e634fc3b3d539747cedec4d452a14943a57dd->enter($__internal_d0aa5d6a6aa16a663286a1629a7e634fc3b3d539747cedec4d452a14943a57dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_da4d6091ac4638a89efd0688f056a12ac2d276574bc55da4c1d32a4a30d8f4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4d6091ac4638a89efd0688f056a12ac2d276574bc55da4c1d32a4a30d8f4fc->enter($__internal_da4d6091ac4638a89efd0688f056a12ac2d276574bc55da4c1d32a4a30d8f4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_da4d6091ac4638a89efd0688f056a12ac2d276574bc55da4c1d32a4a30d8f4fc->leave($__internal_da4d6091ac4638a89efd0688f056a12ac2d276574bc55da4c1d32a4a30d8f4fc_prof);

        
        $__internal_d0aa5d6a6aa16a663286a1629a7e634fc3b3d539747cedec4d452a14943a57dd->leave($__internal_d0aa5d6a6aa16a663286a1629a7e634fc3b3d539747cedec4d452a14943a57dd_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_50aabd8bd3c40a7291551aa6d5a3c9b3cbff721f6ba29db5b981bbde7b2b7a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50aabd8bd3c40a7291551aa6d5a3c9b3cbff721f6ba29db5b981bbde7b2b7a46->enter($__internal_50aabd8bd3c40a7291551aa6d5a3c9b3cbff721f6ba29db5b981bbde7b2b7a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_218c317bcc2e193d9ac2045906787431d13cc599f1d881013a53bee69ccdad4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218c317bcc2e193d9ac2045906787431d13cc599f1d881013a53bee69ccdad4d->enter($__internal_218c317bcc2e193d9ac2045906787431d13cc599f1d881013a53bee69ccdad4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_218c317bcc2e193d9ac2045906787431d13cc599f1d881013a53bee69ccdad4d->leave($__internal_218c317bcc2e193d9ac2045906787431d13cc599f1d881013a53bee69ccdad4d_prof);

        
        $__internal_50aabd8bd3c40a7291551aa6d5a3c9b3cbff721f6ba29db5b981bbde7b2b7a46->leave($__internal_50aabd8bd3c40a7291551aa6d5a3c9b3cbff721f6ba29db5b981bbde7b2b7a46_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_12c959e3ab734ede1d643194565015d05276c4d8f6f383de4fcef281f08bbc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c959e3ab734ede1d643194565015d05276c4d8f6f383de4fcef281f08bbc99->enter($__internal_12c959e3ab734ede1d643194565015d05276c4d8f6f383de4fcef281f08bbc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c21eae50b6820fb77c09817b46dbe2a47721344eabaa0a363c730f2fc2e12cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21eae50b6820fb77c09817b46dbe2a47721344eabaa0a363c730f2fc2e12cfa->enter($__internal_c21eae50b6820fb77c09817b46dbe2a47721344eabaa0a363c730f2fc2e12cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_b9ac23ff8e378b22e45645211e2f5154d974362de2dcf86a9fa9dc3554a9104c = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b9d4dcb626d65c99ba11c667494350c5ffed6a421cde1d857527d96747a5abac = "{{") && ('' === $__internal_b9d4dcb626d65c99ba11c667494350c5ffed6a421cde1d857527d96747a5abac || 0 === strpos($__internal_b9ac23ff8e378b22e45645211e2f5154d974362de2dcf86a9fa9dc3554a9104c, $__internal_b9d4dcb626d65c99ba11c667494350c5ffed6a421cde1d857527d96747a5abac)));
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
        
        $__internal_c21eae50b6820fb77c09817b46dbe2a47721344eabaa0a363c730f2fc2e12cfa->leave($__internal_c21eae50b6820fb77c09817b46dbe2a47721344eabaa0a363c730f2fc2e12cfa_prof);

        
        $__internal_12c959e3ab734ede1d643194565015d05276c4d8f6f383de4fcef281f08bbc99->leave($__internal_12c959e3ab734ede1d643194565015d05276c4d8f6f383de4fcef281f08bbc99_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_75d592a375124701d8d57ca7611d96b8d99c21c62088e4b9638e98c32b868618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d592a375124701d8d57ca7611d96b8d99c21c62088e4b9638e98c32b868618->enter($__internal_75d592a375124701d8d57ca7611d96b8d99c21c62088e4b9638e98c32b868618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_382f57cf218865d99a0c2dffd5e7e798c7742a2170bd11ba04e1dd29379bd919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382f57cf218865d99a0c2dffd5e7e798c7742a2170bd11ba04e1dd29379bd919->enter($__internal_382f57cf218865d99a0c2dffd5e7e798c7742a2170bd11ba04e1dd29379bd919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_382f57cf218865d99a0c2dffd5e7e798c7742a2170bd11ba04e1dd29379bd919->leave($__internal_382f57cf218865d99a0c2dffd5e7e798c7742a2170bd11ba04e1dd29379bd919_prof);

        
        $__internal_75d592a375124701d8d57ca7611d96b8d99c21c62088e4b9638e98c32b868618->leave($__internal_75d592a375124701d8d57ca7611d96b8d99c21c62088e4b9638e98c32b868618_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d0efeb2e46ad88a6d5a4cf541f274c26db207e3c47e56d1a5eba91e6cd8e5efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0efeb2e46ad88a6d5a4cf541f274c26db207e3c47e56d1a5eba91e6cd8e5efe->enter($__internal_d0efeb2e46ad88a6d5a4cf541f274c26db207e3c47e56d1a5eba91e6cd8e5efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_63b542be3b8e9e82248e989076fc57c37486b8528c5155b5d332240a44f5e64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b542be3b8e9e82248e989076fc57c37486b8528c5155b5d332240a44f5e64b->enter($__internal_63b542be3b8e9e82248e989076fc57c37486b8528c5155b5d332240a44f5e64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_63b542be3b8e9e82248e989076fc57c37486b8528c5155b5d332240a44f5e64b->leave($__internal_63b542be3b8e9e82248e989076fc57c37486b8528c5155b5d332240a44f5e64b_prof);

        
        $__internal_d0efeb2e46ad88a6d5a4cf541f274c26db207e3c47e56d1a5eba91e6cd8e5efe->leave($__internal_d0efeb2e46ad88a6d5a4cf541f274c26db207e3c47e56d1a5eba91e6cd8e5efe_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3631069c23354af9030b47262ea0024e348b39b1df3953c5a3474b11c16fe95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3631069c23354af9030b47262ea0024e348b39b1df3953c5a3474b11c16fe95a->enter($__internal_3631069c23354af9030b47262ea0024e348b39b1df3953c5a3474b11c16fe95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_febdd514645b4cac83a8a338066db23c6d408e13aed99c61fdc502b39e081d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febdd514645b4cac83a8a338066db23c6d408e13aed99c61fdc502b39e081d55->enter($__internal_febdd514645b4cac83a8a338066db23c6d408e13aed99c61fdc502b39e081d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_febdd514645b4cac83a8a338066db23c6d408e13aed99c61fdc502b39e081d55->leave($__internal_febdd514645b4cac83a8a338066db23c6d408e13aed99c61fdc502b39e081d55_prof);

        
        $__internal_3631069c23354af9030b47262ea0024e348b39b1df3953c5a3474b11c16fe95a->leave($__internal_3631069c23354af9030b47262ea0024e348b39b1df3953c5a3474b11c16fe95a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_04f65b841927067891c02308516dbc2a31cae0a1826313f585dd8d915e5220f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f65b841927067891c02308516dbc2a31cae0a1826313f585dd8d915e5220f4->enter($__internal_04f65b841927067891c02308516dbc2a31cae0a1826313f585dd8d915e5220f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bb8bb263b2ef72d6c7e3a717ec426361e07296949d450394d466602eb01f9c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8bb263b2ef72d6c7e3a717ec426361e07296949d450394d466602eb01f9c8e->enter($__internal_bb8bb263b2ef72d6c7e3a717ec426361e07296949d450394d466602eb01f9c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_bb8bb263b2ef72d6c7e3a717ec426361e07296949d450394d466602eb01f9c8e->leave($__internal_bb8bb263b2ef72d6c7e3a717ec426361e07296949d450394d466602eb01f9c8e_prof);

        
        $__internal_04f65b841927067891c02308516dbc2a31cae0a1826313f585dd8d915e5220f4->leave($__internal_04f65b841927067891c02308516dbc2a31cae0a1826313f585dd8d915e5220f4_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_8626677e1d8bba2b1a059e22d34c12dca1a48d161ebb5d0dcab4e9cda2c4c16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8626677e1d8bba2b1a059e22d34c12dca1a48d161ebb5d0dcab4e9cda2c4c16c->enter($__internal_8626677e1d8bba2b1a059e22d34c12dca1a48d161ebb5d0dcab4e9cda2c4c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_d9e8e1be751ca7db3784acf1db4ff09776a43d452d1b1d7bb90759628f389dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e8e1be751ca7db3784acf1db4ff09776a43d452d1b1d7bb90759628f389dc3->enter($__internal_d9e8e1be751ca7db3784acf1db4ff09776a43d452d1b1d7bb90759628f389dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_d9e8e1be751ca7db3784acf1db4ff09776a43d452d1b1d7bb90759628f389dc3->leave($__internal_d9e8e1be751ca7db3784acf1db4ff09776a43d452d1b1d7bb90759628f389dc3_prof);

        
        $__internal_8626677e1d8bba2b1a059e22d34c12dca1a48d161ebb5d0dcab4e9cda2c4c16c->leave($__internal_8626677e1d8bba2b1a059e22d34c12dca1a48d161ebb5d0dcab4e9cda2c4c16c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_15a2630ca724d3b0173b24607010094ab115469bde3eab60731d51b5878eb3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a2630ca724d3b0173b24607010094ab115469bde3eab60731d51b5878eb3d7->enter($__internal_15a2630ca724d3b0173b24607010094ab115469bde3eab60731d51b5878eb3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bba22cf6b41cfc9130506bdfa0feef16fc962dcfcbeb7c5ead761287f99cfd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba22cf6b41cfc9130506bdfa0feef16fc962dcfcbeb7c5ead761287f99cfd8a->enter($__internal_bba22cf6b41cfc9130506bdfa0feef16fc962dcfcbeb7c5ead761287f99cfd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bba22cf6b41cfc9130506bdfa0feef16fc962dcfcbeb7c5ead761287f99cfd8a->leave($__internal_bba22cf6b41cfc9130506bdfa0feef16fc962dcfcbeb7c5ead761287f99cfd8a_prof);

        
        $__internal_15a2630ca724d3b0173b24607010094ab115469bde3eab60731d51b5878eb3d7->leave($__internal_15a2630ca724d3b0173b24607010094ab115469bde3eab60731d51b5878eb3d7_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c6579e6dddaeb1f8cf1743c8826636b71794fd523761e994be55bd0d256b97a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6579e6dddaeb1f8cf1743c8826636b71794fd523761e994be55bd0d256b97a2->enter($__internal_c6579e6dddaeb1f8cf1743c8826636b71794fd523761e994be55bd0d256b97a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2c6aa3981339a5b41be5369be54f324ffbb0c7ad1cf7e8a7495c734cd2947b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6aa3981339a5b41be5369be54f324ffbb0c7ad1cf7e8a7495c734cd2947b0c->enter($__internal_2c6aa3981339a5b41be5369be54f324ffbb0c7ad1cf7e8a7495c734cd2947b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_2c6aa3981339a5b41be5369be54f324ffbb0c7ad1cf7e8a7495c734cd2947b0c->leave($__internal_2c6aa3981339a5b41be5369be54f324ffbb0c7ad1cf7e8a7495c734cd2947b0c_prof);

        
        $__internal_c6579e6dddaeb1f8cf1743c8826636b71794fd523761e994be55bd0d256b97a2->leave($__internal_c6579e6dddaeb1f8cf1743c8826636b71794fd523761e994be55bd0d256b97a2_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_51ead89dac2933a06c44b5a15e4e8259b1f0cbb8b07f5859dff0d8f6715ade69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ead89dac2933a06c44b5a15e4e8259b1f0cbb8b07f5859dff0d8f6715ade69->enter($__internal_51ead89dac2933a06c44b5a15e4e8259b1f0cbb8b07f5859dff0d8f6715ade69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1b0f0a1d3384aa33c61eeb1374b38fdc940507b8971f156f0468ae0066436b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0f0a1d3384aa33c61eeb1374b38fdc940507b8971f156f0468ae0066436b81->enter($__internal_1b0f0a1d3384aa33c61eeb1374b38fdc940507b8971f156f0468ae0066436b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1b0f0a1d3384aa33c61eeb1374b38fdc940507b8971f156f0468ae0066436b81->leave($__internal_1b0f0a1d3384aa33c61eeb1374b38fdc940507b8971f156f0468ae0066436b81_prof);

        
        $__internal_51ead89dac2933a06c44b5a15e4e8259b1f0cbb8b07f5859dff0d8f6715ade69->leave($__internal_51ead89dac2933a06c44b5a15e4e8259b1f0cbb8b07f5859dff0d8f6715ade69_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_05fbb389ea9d39e5610dd2d67d1d67951978376e718be2a31a2d72d6ce3a4f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fbb389ea9d39e5610dd2d67d1d67951978376e718be2a31a2d72d6ce3a4f13->enter($__internal_05fbb389ea9d39e5610dd2d67d1d67951978376e718be2a31a2d72d6ce3a4f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0944b5a2a4f1308c14542cf131c387d043c5dec59b3530fee9524d301b8f6bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0944b5a2a4f1308c14542cf131c387d043c5dec59b3530fee9524d301b8f6bd5->enter($__internal_0944b5a2a4f1308c14542cf131c387d043c5dec59b3530fee9524d301b8f6bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0944b5a2a4f1308c14542cf131c387d043c5dec59b3530fee9524d301b8f6bd5->leave($__internal_0944b5a2a4f1308c14542cf131c387d043c5dec59b3530fee9524d301b8f6bd5_prof);

        
        $__internal_05fbb389ea9d39e5610dd2d67d1d67951978376e718be2a31a2d72d6ce3a4f13->leave($__internal_05fbb389ea9d39e5610dd2d67d1d67951978376e718be2a31a2d72d6ce3a4f13_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d7d024d23985ccb384467ba97a58f96967204bb17ca8883cf144e306e1c82a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d024d23985ccb384467ba97a58f96967204bb17ca8883cf144e306e1c82a52->enter($__internal_d7d024d23985ccb384467ba97a58f96967204bb17ca8883cf144e306e1c82a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_78286bcd7d26e0e6e58518364c761c6f19cedad324ca60baa93e2cf408e915b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78286bcd7d26e0e6e58518364c761c6f19cedad324ca60baa93e2cf408e915b5->enter($__internal_78286bcd7d26e0e6e58518364c761c6f19cedad324ca60baa93e2cf408e915b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_78286bcd7d26e0e6e58518364c761c6f19cedad324ca60baa93e2cf408e915b5->leave($__internal_78286bcd7d26e0e6e58518364c761c6f19cedad324ca60baa93e2cf408e915b5_prof);

        
        $__internal_d7d024d23985ccb384467ba97a58f96967204bb17ca8883cf144e306e1c82a52->leave($__internal_d7d024d23985ccb384467ba97a58f96967204bb17ca8883cf144e306e1c82a52_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3fb5530adc6097fb635700d3027d031707195cb08ad4a09db69ca3d0f703b869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb5530adc6097fb635700d3027d031707195cb08ad4a09db69ca3d0f703b869->enter($__internal_3fb5530adc6097fb635700d3027d031707195cb08ad4a09db69ca3d0f703b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ef10a09a0c01daead587a7f18532230f9d41a0a3ea51b26d0d318e93508c5588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef10a09a0c01daead587a7f18532230f9d41a0a3ea51b26d0d318e93508c5588->enter($__internal_ef10a09a0c01daead587a7f18532230f9d41a0a3ea51b26d0d318e93508c5588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ef10a09a0c01daead587a7f18532230f9d41a0a3ea51b26d0d318e93508c5588->leave($__internal_ef10a09a0c01daead587a7f18532230f9d41a0a3ea51b26d0d318e93508c5588_prof);

        
        $__internal_3fb5530adc6097fb635700d3027d031707195cb08ad4a09db69ca3d0f703b869->leave($__internal_3fb5530adc6097fb635700d3027d031707195cb08ad4a09db69ca3d0f703b869_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0f1d11c711c8d758e1315d2f269363eb5250cf1bc5bc4d9f03df2bee4b943ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d11c711c8d758e1315d2f269363eb5250cf1bc5bc4d9f03df2bee4b943ca6->enter($__internal_0f1d11c711c8d758e1315d2f269363eb5250cf1bc5bc4d9f03df2bee4b943ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_83e973d7fa18b8206a612f4838323a277ca33ced3433d10ab29e92c94caa710a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e973d7fa18b8206a612f4838323a277ca33ced3433d10ab29e92c94caa710a->enter($__internal_83e973d7fa18b8206a612f4838323a277ca33ced3433d10ab29e92c94caa710a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_83e973d7fa18b8206a612f4838323a277ca33ced3433d10ab29e92c94caa710a->leave($__internal_83e973d7fa18b8206a612f4838323a277ca33ced3433d10ab29e92c94caa710a_prof);

        
        $__internal_0f1d11c711c8d758e1315d2f269363eb5250cf1bc5bc4d9f03df2bee4b943ca6->leave($__internal_0f1d11c711c8d758e1315d2f269363eb5250cf1bc5bc4d9f03df2bee4b943ca6_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_39f360d7bdb1cd0d3092534694cdf6d821aa1e9557e4d41a05fd69f5652c7b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f360d7bdb1cd0d3092534694cdf6d821aa1e9557e4d41a05fd69f5652c7b7d->enter($__internal_39f360d7bdb1cd0d3092534694cdf6d821aa1e9557e4d41a05fd69f5652c7b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a44b5840774b44f797d2b853f6257bf5f0bfbf4c8ac37a5799166264dc2f6a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44b5840774b44f797d2b853f6257bf5f0bfbf4c8ac37a5799166264dc2f6a76->enter($__internal_a44b5840774b44f797d2b853f6257bf5f0bfbf4c8ac37a5799166264dc2f6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a44b5840774b44f797d2b853f6257bf5f0bfbf4c8ac37a5799166264dc2f6a76->leave($__internal_a44b5840774b44f797d2b853f6257bf5f0bfbf4c8ac37a5799166264dc2f6a76_prof);

        
        $__internal_39f360d7bdb1cd0d3092534694cdf6d821aa1e9557e4d41a05fd69f5652c7b7d->leave($__internal_39f360d7bdb1cd0d3092534694cdf6d821aa1e9557e4d41a05fd69f5652c7b7d_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2a7c817a8d31a72a6e9d0b5c025623f3609d2fa794cbf4c49a9b8836916b6fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7c817a8d31a72a6e9d0b5c025623f3609d2fa794cbf4c49a9b8836916b6fcb->enter($__internal_2a7c817a8d31a72a6e9d0b5c025623f3609d2fa794cbf4c49a9b8836916b6fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2541590533bc9cbed5c58c3bf1460d70329367f9ff3daeb79e69ba53dd1c677f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2541590533bc9cbed5c58c3bf1460d70329367f9ff3daeb79e69ba53dd1c677f->enter($__internal_2541590533bc9cbed5c58c3bf1460d70329367f9ff3daeb79e69ba53dd1c677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2541590533bc9cbed5c58c3bf1460d70329367f9ff3daeb79e69ba53dd1c677f->leave($__internal_2541590533bc9cbed5c58c3bf1460d70329367f9ff3daeb79e69ba53dd1c677f_prof);

        
        $__internal_2a7c817a8d31a72a6e9d0b5c025623f3609d2fa794cbf4c49a9b8836916b6fcb->leave($__internal_2a7c817a8d31a72a6e9d0b5c025623f3609d2fa794cbf4c49a9b8836916b6fcb_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5125a47e082563185f509b69147b5716a0d597537b47ab0c3e0f007bf8da5e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5125a47e082563185f509b69147b5716a0d597537b47ab0c3e0f007bf8da5e53->enter($__internal_5125a47e082563185f509b69147b5716a0d597537b47ab0c3e0f007bf8da5e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_86fd671fe851471276d9efef2c3c28864664f038b47ffdbfe28b8332cc52cccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fd671fe851471276d9efef2c3c28864664f038b47ffdbfe28b8332cc52cccc->enter($__internal_86fd671fe851471276d9efef2c3c28864664f038b47ffdbfe28b8332cc52cccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_86fd671fe851471276d9efef2c3c28864664f038b47ffdbfe28b8332cc52cccc->leave($__internal_86fd671fe851471276d9efef2c3c28864664f038b47ffdbfe28b8332cc52cccc_prof);

        
        $__internal_5125a47e082563185f509b69147b5716a0d597537b47ab0c3e0f007bf8da5e53->leave($__internal_5125a47e082563185f509b69147b5716a0d597537b47ab0c3e0f007bf8da5e53_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_133c38a347dd422fe999de03b2a1ad85b29e5d103ae02d22b417976bdf923418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133c38a347dd422fe999de03b2a1ad85b29e5d103ae02d22b417976bdf923418->enter($__internal_133c38a347dd422fe999de03b2a1ad85b29e5d103ae02d22b417976bdf923418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cb1eba393a94d3211133355cd9a098afb2bf7a64118e44c3620bf09627cdd6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1eba393a94d3211133355cd9a098afb2bf7a64118e44c3620bf09627cdd6b9->enter($__internal_cb1eba393a94d3211133355cd9a098afb2bf7a64118e44c3620bf09627cdd6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_cb1eba393a94d3211133355cd9a098afb2bf7a64118e44c3620bf09627cdd6b9->leave($__internal_cb1eba393a94d3211133355cd9a098afb2bf7a64118e44c3620bf09627cdd6b9_prof);

        
        $__internal_133c38a347dd422fe999de03b2a1ad85b29e5d103ae02d22b417976bdf923418->leave($__internal_133c38a347dd422fe999de03b2a1ad85b29e5d103ae02d22b417976bdf923418_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e331d280def3837313af893130cfbe57d103db18bc3320a2be2c7077d53afee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e331d280def3837313af893130cfbe57d103db18bc3320a2be2c7077d53afee1->enter($__internal_e331d280def3837313af893130cfbe57d103db18bc3320a2be2c7077d53afee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_577badba5ccdd8ba6aba642daaa3b7b1246c91fb4527df7a1e7756eecec4cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577badba5ccdd8ba6aba642daaa3b7b1246c91fb4527df7a1e7756eecec4cb78->enter($__internal_577badba5ccdd8ba6aba642daaa3b7b1246c91fb4527df7a1e7756eecec4cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_577badba5ccdd8ba6aba642daaa3b7b1246c91fb4527df7a1e7756eecec4cb78->leave($__internal_577badba5ccdd8ba6aba642daaa3b7b1246c91fb4527df7a1e7756eecec4cb78_prof);

        
        $__internal_e331d280def3837313af893130cfbe57d103db18bc3320a2be2c7077d53afee1->leave($__internal_e331d280def3837313af893130cfbe57d103db18bc3320a2be2c7077d53afee1_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d257dba9f9929e979dbc5b60e1f24261d5b84d00bbe1681d126a34988dbc90a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d257dba9f9929e979dbc5b60e1f24261d5b84d00bbe1681d126a34988dbc90a7->enter($__internal_d257dba9f9929e979dbc5b60e1f24261d5b84d00bbe1681d126a34988dbc90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_150c4024e3aaf659d099ab87d2cb5cd9896d2e5a08afa547ce92f0db2a9bf862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150c4024e3aaf659d099ab87d2cb5cd9896d2e5a08afa547ce92f0db2a9bf862->enter($__internal_150c4024e3aaf659d099ab87d2cb5cd9896d2e5a08afa547ce92f0db2a9bf862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_150c4024e3aaf659d099ab87d2cb5cd9896d2e5a08afa547ce92f0db2a9bf862->leave($__internal_150c4024e3aaf659d099ab87d2cb5cd9896d2e5a08afa547ce92f0db2a9bf862_prof);

        
        $__internal_d257dba9f9929e979dbc5b60e1f24261d5b84d00bbe1681d126a34988dbc90a7->leave($__internal_d257dba9f9929e979dbc5b60e1f24261d5b84d00bbe1681d126a34988dbc90a7_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0291a47cfde429ffb021ecff4071c25cdc63c062e980ddbd2ad37ea36edd16f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0291a47cfde429ffb021ecff4071c25cdc63c062e980ddbd2ad37ea36edd16f2->enter($__internal_0291a47cfde429ffb021ecff4071c25cdc63c062e980ddbd2ad37ea36edd16f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_142a4f3b395b33a90f53986c0d60477bf3facddbd5bde85b0adf7a5f55b72332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142a4f3b395b33a90f53986c0d60477bf3facddbd5bde85b0adf7a5f55b72332->enter($__internal_142a4f3b395b33a90f53986c0d60477bf3facddbd5bde85b0adf7a5f55b72332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_142a4f3b395b33a90f53986c0d60477bf3facddbd5bde85b0adf7a5f55b72332->leave($__internal_142a4f3b395b33a90f53986c0d60477bf3facddbd5bde85b0adf7a5f55b72332_prof);

        
        $__internal_0291a47cfde429ffb021ecff4071c25cdc63c062e980ddbd2ad37ea36edd16f2->leave($__internal_0291a47cfde429ffb021ecff4071c25cdc63c062e980ddbd2ad37ea36edd16f2_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b71224939f9f303e6654464fb7e23ee12c62db9971a5a8d8ecb7eae0f40eafbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71224939f9f303e6654464fb7e23ee12c62db9971a5a8d8ecb7eae0f40eafbd->enter($__internal_b71224939f9f303e6654464fb7e23ee12c62db9971a5a8d8ecb7eae0f40eafbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4bf457f223999d2310f2cc6ea831c58e6f7d10215d8be67fba8ceb4b5ba62947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf457f223999d2310f2cc6ea831c58e6f7d10215d8be67fba8ceb4b5ba62947->enter($__internal_4bf457f223999d2310f2cc6ea831c58e6f7d10215d8be67fba8ceb4b5ba62947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4bf457f223999d2310f2cc6ea831c58e6f7d10215d8be67fba8ceb4b5ba62947->leave($__internal_4bf457f223999d2310f2cc6ea831c58e6f7d10215d8be67fba8ceb4b5ba62947_prof);

        
        $__internal_b71224939f9f303e6654464fb7e23ee12c62db9971a5a8d8ecb7eae0f40eafbd->leave($__internal_b71224939f9f303e6654464fb7e23ee12c62db9971a5a8d8ecb7eae0f40eafbd_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1b3f21acbe7ac03911ac4bfc9254b38e28d7fe1c52e0f15d2523b47d98cdbf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3f21acbe7ac03911ac4bfc9254b38e28d7fe1c52e0f15d2523b47d98cdbf9a->enter($__internal_1b3f21acbe7ac03911ac4bfc9254b38e28d7fe1c52e0f15d2523b47d98cdbf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_63377f20b336d846e7405f2472b39353bf748be31d3550b147663fee4d0420f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63377f20b336d846e7405f2472b39353bf748be31d3550b147663fee4d0420f9->enter($__internal_63377f20b336d846e7405f2472b39353bf748be31d3550b147663fee4d0420f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_63377f20b336d846e7405f2472b39353bf748be31d3550b147663fee4d0420f9->leave($__internal_63377f20b336d846e7405f2472b39353bf748be31d3550b147663fee4d0420f9_prof);

        
        $__internal_1b3f21acbe7ac03911ac4bfc9254b38e28d7fe1c52e0f15d2523b47d98cdbf9a->leave($__internal_1b3f21acbe7ac03911ac4bfc9254b38e28d7fe1c52e0f15d2523b47d98cdbf9a_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cf7df80fa6580d84b54aec093b100c3203a10cb5b90f519fa9c23a69467b2c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7df80fa6580d84b54aec093b100c3203a10cb5b90f519fa9c23a69467b2c22->enter($__internal_cf7df80fa6580d84b54aec093b100c3203a10cb5b90f519fa9c23a69467b2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_19ac2c3769374ef2688c1b435c328a4ff84793363937e6c245109e0f8d5dee29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ac2c3769374ef2688c1b435c328a4ff84793363937e6c245109e0f8d5dee29->enter($__internal_19ac2c3769374ef2688c1b435c328a4ff84793363937e6c245109e0f8d5dee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_19ac2c3769374ef2688c1b435c328a4ff84793363937e6c245109e0f8d5dee29->leave($__internal_19ac2c3769374ef2688c1b435c328a4ff84793363937e6c245109e0f8d5dee29_prof);

        
        $__internal_cf7df80fa6580d84b54aec093b100c3203a10cb5b90f519fa9c23a69467b2c22->leave($__internal_cf7df80fa6580d84b54aec093b100c3203a10cb5b90f519fa9c23a69467b2c22_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_db1fada618dcb1111a04e8402edf9488dabcd168f9e791d280634f4cbd0ac374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1fada618dcb1111a04e8402edf9488dabcd168f9e791d280634f4cbd0ac374->enter($__internal_db1fada618dcb1111a04e8402edf9488dabcd168f9e791d280634f4cbd0ac374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_dc0c0256b355297366485a840134beb4f9df56e33dbb771ac70f2edb7707cc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0c0256b355297366485a840134beb4f9df56e33dbb771ac70f2edb7707cc4a->enter($__internal_dc0c0256b355297366485a840134beb4f9df56e33dbb771ac70f2edb7707cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_dc0c0256b355297366485a840134beb4f9df56e33dbb771ac70f2edb7707cc4a->leave($__internal_dc0c0256b355297366485a840134beb4f9df56e33dbb771ac70f2edb7707cc4a_prof);

        
        $__internal_db1fada618dcb1111a04e8402edf9488dabcd168f9e791d280634f4cbd0ac374->leave($__internal_db1fada618dcb1111a04e8402edf9488dabcd168f9e791d280634f4cbd0ac374_prof);

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
