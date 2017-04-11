<?php

/* form_div_layout.html.twig */
class __TwigTemplate_d00a9bcb57e224871b533a37c85b362506dfb92d450d2980b8329d6e33f16a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_438643c1b8bbc2e783059032851b35c6a3ef290bbcf897195fb2be1280e480dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438643c1b8bbc2e783059032851b35c6a3ef290bbcf897195fb2be1280e480dc->enter($__internal_438643c1b8bbc2e783059032851b35c6a3ef290bbcf897195fb2be1280e480dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 151
        $this->displayBlock('number_widget', $context, $blocks);
        // line 157
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 162
        $this->displayBlock('money_widget', $context, $blocks);
        // line 166
        $this->displayBlock('url_widget', $context, $blocks);
        // line 171
        $this->displayBlock('search_widget', $context, $blocks);
        // line 176
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 181
        $this->displayBlock('password_widget', $context, $blocks);
        // line 186
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 191
        $this->displayBlock('email_widget', $context, $blocks);
        // line 196
        $this->displayBlock('range_widget', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 215
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 220
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 227
        $this->displayBlock('form_label', $context, $blocks);
        // line 249
        $this->displayBlock('button_label', $context, $blocks);
        // line 253
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 261
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        $this->displayBlock('button_row', $context, $blocks);
        // line 275
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 281
        $this->displayBlock('form', $context, $blocks);
        // line 287
        $this->displayBlock('form_start', $context, $blocks);
        // line 300
        $this->displayBlock('form_end', $context, $blocks);
        // line 307
        $this->displayBlock('form_errors', $context, $blocks);
        // line 317
        $this->displayBlock('form_rest', $context, $blocks);
        // line 324
        echo "
";
        // line 327
        $this->displayBlock('form_rows', $context, $blocks);
        // line 333
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 349
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 363
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_438643c1b8bbc2e783059032851b35c6a3ef290bbcf897195fb2be1280e480dc->leave($__internal_438643c1b8bbc2e783059032851b35c6a3ef290bbcf897195fb2be1280e480dc_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_993f92b6563d4292b1186afa079c8db00db417907149a4815630bea81d56b7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993f92b6563d4292b1186afa079c8db00db417907149a4815630bea81d56b7a6->enter($__internal_993f92b6563d4292b1186afa079c8db00db417907149a4815630bea81d56b7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_993f92b6563d4292b1186afa079c8db00db417907149a4815630bea81d56b7a6->leave($__internal_993f92b6563d4292b1186afa079c8db00db417907149a4815630bea81d56b7a6_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9fa1a59deebcb2b2dd1b847f769185b73c72d541c52589908f79fdb852819ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa1a59deebcb2b2dd1b847f769185b73c72d541c52589908f79fdb852819ad4->enter($__internal_9fa1a59deebcb2b2dd1b847f769185b73c72d541c52589908f79fdb852819ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_9fa1a59deebcb2b2dd1b847f769185b73c72d541c52589908f79fdb852819ad4->leave($__internal_9fa1a59deebcb2b2dd1b847f769185b73c72d541c52589908f79fdb852819ad4_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d31ef80ef8e1ca15be2ecfd3d57cf07b3875ab29f17231b7d07fc0d940861b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31ef80ef8e1ca15be2ecfd3d57cf07b3875ab29f17231b7d07fc0d940861b68->enter($__internal_d31ef80ef8e1ca15be2ecfd3d57cf07b3875ab29f17231b7d07fc0d940861b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_d31ef80ef8e1ca15be2ecfd3d57cf07b3875ab29f17231b7d07fc0d940861b68->leave($__internal_d31ef80ef8e1ca15be2ecfd3d57cf07b3875ab29f17231b7d07fc0d940861b68_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e2e371144c85992d94048382237e4aa0c8e7e582595f201d0c4c25dbea1061d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e371144c85992d94048382237e4aa0c8e7e582595f201d0c4c25dbea1061d8->enter($__internal_e2e371144c85992d94048382237e4aa0c8e7e582595f201d0c4c25dbea1061d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_e2e371144c85992d94048382237e4aa0c8e7e582595f201d0c4c25dbea1061d8->leave($__internal_e2e371144c85992d94048382237e4aa0c8e7e582595f201d0c4c25dbea1061d8_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_736146630b6f7d88a22550f61bf2bef4fa90187d75cd98bbf3ecb38a4a633c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736146630b6f7d88a22550f61bf2bef4fa90187d75cd98bbf3ecb38a4a633c6e->enter($__internal_736146630b6f7d88a22550f61bf2bef4fa90187d75cd98bbf3ecb38a4a633c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_736146630b6f7d88a22550f61bf2bef4fa90187d75cd98bbf3ecb38a4a633c6e->leave($__internal_736146630b6f7d88a22550f61bf2bef4fa90187d75cd98bbf3ecb38a4a633c6e_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_ccc27fd15f8521e31c25970e343059b9215e5c5ebc5ee9b730d86add2d90b2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc27fd15f8521e31c25970e343059b9215e5c5ebc5ee9b730d86add2d90b2de->enter($__internal_ccc27fd15f8521e31c25970e343059b9215e5c5ebc5ee9b730d86add2d90b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_ccc27fd15f8521e31c25970e343059b9215e5c5ebc5ee9b730d86add2d90b2de->leave($__internal_ccc27fd15f8521e31c25970e343059b9215e5c5ebc5ee9b730d86add2d90b2de_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_270045efc62d96bf80ff6aa45008ee093f931c2e78e3c84cceadd7e7182e8a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270045efc62d96bf80ff6aa45008ee093f931c2e78e3c84cceadd7e7182e8a36->enter($__internal_270045efc62d96bf80ff6aa45008ee093f931c2e78e3c84cceadd7e7182e8a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_270045efc62d96bf80ff6aa45008ee093f931c2e78e3c84cceadd7e7182e8a36->leave($__internal_270045efc62d96bf80ff6aa45008ee093f931c2e78e3c84cceadd7e7182e8a36_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_db67365de986c4abcc6da6d723e656cc924cbb264171ea5cca588b8fe195a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db67365de986c4abcc6da6d723e656cc924cbb264171ea5cca588b8fe195a641->enter($__internal_db67365de986c4abcc6da6d723e656cc924cbb264171ea5cca588b8fe195a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_db67365de986c4abcc6da6d723e656cc924cbb264171ea5cca588b8fe195a641->leave($__internal_db67365de986c4abcc6da6d723e656cc924cbb264171ea5cca588b8fe195a641_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_bc5f1b59afbfe8435b75c49f3dcc0ae75d7923f5cf163c43c2055af757db9659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5f1b59afbfe8435b75c49f3dcc0ae75d7923f5cf163c43c2055af757db9659->enter($__internal_bc5f1b59afbfe8435b75c49f3dcc0ae75d7923f5cf163c43c2055af757db9659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc5f1b59afbfe8435b75c49f3dcc0ae75d7923f5cf163c43c2055af757db9659->leave($__internal_bc5f1b59afbfe8435b75c49f3dcc0ae75d7923f5cf163c43c2055af757db9659_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1cc4ef58cea40536c24e53db2b8584ba3e19e943d323033b4eab146d547aff6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc4ef58cea40536c24e53db2b8584ba3e19e943d323033b4eab146d547aff6f->enter($__internal_1cc4ef58cea40536c24e53db2b8584ba3e19e943d323033b4eab146d547aff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_1cc4ef58cea40536c24e53db2b8584ba3e19e943d323033b4eab146d547aff6f->leave($__internal_1cc4ef58cea40536c24e53db2b8584ba3e19e943d323033b4eab146d547aff6f_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c07da1d8c21ea66f7987730dc068610deb1d125510ec3ef00044d6c90ed07d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07da1d8c21ea66f7987730dc068610deb1d125510ec3ef00044d6c90ed07d24->enter($__internal_c07da1d8c21ea66f7987730dc068610deb1d125510ec3ef00044d6c90ed07d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c07da1d8c21ea66f7987730dc068610deb1d125510ec3ef00044d6c90ed07d24->leave($__internal_c07da1d8c21ea66f7987730dc068610deb1d125510ec3ef00044d6c90ed07d24_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e8e8e29036c99f29a2c1f8feabea640c11c120c75ad4c7392d9d00e6f6afac4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e8e29036c99f29a2c1f8feabea640c11c120c75ad4c7392d9d00e6f6afac4f->enter($__internal_e8e8e29036c99f29a2c1f8feabea640c11c120c75ad4c7392d9d00e6f6afac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_e8e8e29036c99f29a2c1f8feabea640c11c120c75ad4c7392d9d00e6f6afac4f->leave($__internal_e8e8e29036c99f29a2c1f8feabea640c11c120c75ad4c7392d9d00e6f6afac4f_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_56ec12e36b6a9f7c3db1fe0be342ea0726d8e951aa783e04c8374d909bb25c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ec12e36b6a9f7c3db1fe0be342ea0726d8e951aa783e04c8374d909bb25c91->enter($__internal_56ec12e36b6a9f7c3db1fe0be342ea0726d8e951aa783e04c8374d909bb25c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_56ec12e36b6a9f7c3db1fe0be342ea0726d8e951aa783e04c8374d909bb25c91->leave($__internal_56ec12e36b6a9f7c3db1fe0be342ea0726d8e951aa783e04c8374d909bb25c91_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_500ddb26bd25a37f4f74a8f2a519b038cd8fd102f0b12bc9b619480911f8bebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500ddb26bd25a37f4f74a8f2a519b038cd8fd102f0b12bc9b619480911f8bebc->enter($__internal_500ddb26bd25a37f4f74a8f2a519b038cd8fd102f0b12bc9b619480911f8bebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_500ddb26bd25a37f4f74a8f2a519b038cd8fd102f0b12bc9b619480911f8bebc->leave($__internal_500ddb26bd25a37f4f74a8f2a519b038cd8fd102f0b12bc9b619480911f8bebc_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e19c2f425d88dadf7816c4e61099a19e5d5579ca9f5ecc3e3e416b060550a43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19c2f425d88dadf7816c4e61099a19e5d5579ca9f5ecc3e3e416b060550a43e->enter($__internal_e19c2f425d88dadf7816c4e61099a19e5d5579ca9f5ecc3e3e416b060550a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 139, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 139, $this->getSourceContext()); })()), "years", array()), 'widget');
            }
            // line 140
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 140, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->getSourceContext()); })()), "months", array()), 'widget');
            }
            // line 141
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 141, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->getSourceContext()); })()), "weeks", array()), 'widget');
            }
            // line 142
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 142, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "days", array()), 'widget');
            }
            // line 143
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 143, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "hours", array()), 'widget');
            }
            // line 144
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 144, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "minutes", array()), 'widget');
            }
            // line 145
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 145, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "seconds", array()), 'widget');
            }
            // line 146
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 146, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 147
            echo "</div>";
        }
        
        $__internal_e19c2f425d88dadf7816c4e61099a19e5d5579ca9f5ecc3e3e416b060550a43e->leave($__internal_e19c2f425d88dadf7816c4e61099a19e5d5579ca9f5ecc3e3e416b060550a43e_prof);

    }

    // line 151
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_055afd6ef7a001f8668563a2cb8d4f836cd6de8cb84c3c9df92c29a0a72ef668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055afd6ef7a001f8668563a2cb8d4f836cd6de8cb84c3c9df92c29a0a72ef668->enter($__internal_055afd6ef7a001f8668563a2cb8d4f836cd6de8cb84c3c9df92c29a0a72ef668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 153
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 153, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_055afd6ef7a001f8668563a2cb8d4f836cd6de8cb84c3c9df92c29a0a72ef668->leave($__internal_055afd6ef7a001f8668563a2cb8d4f836cd6de8cb84c3c9df92c29a0a72ef668_prof);

    }

    // line 157
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_969ca01dc5196907f848b2d9b2094b5e19d03b3b421107287e1da01fb9d1744f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969ca01dc5196907f848b2d9b2094b5e19d03b3b421107287e1da01fb9d1744f->enter($__internal_969ca01dc5196907f848b2d9b2094b5e19d03b3b421107287e1da01fb9d1744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 158
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 158, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_969ca01dc5196907f848b2d9b2094b5e19d03b3b421107287e1da01fb9d1744f->leave($__internal_969ca01dc5196907f848b2d9b2094b5e19d03b3b421107287e1da01fb9d1744f_prof);

    }

    // line 162
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8e3f042890e100952a783d63b39d7e43047380b5da37f279542aa747d92653a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3f042890e100952a783d63b39d7e43047380b5da37f279542aa747d92653a0->enter($__internal_8e3f042890e100952a783d63b39d7e43047380b5da37f279542aa747d92653a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 163
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 163, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_8e3f042890e100952a783d63b39d7e43047380b5da37f279542aa747d92653a0->leave($__internal_8e3f042890e100952a783d63b39d7e43047380b5da37f279542aa747d92653a0_prof);

    }

    // line 166
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_73a41110ed1971e2d43e7a4316498480f405269b77b9c5175f5182a86bd309eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a41110ed1971e2d43e7a4316498480f405269b77b9c5175f5182a86bd309eb->enter($__internal_73a41110ed1971e2d43e7a4316498480f405269b77b9c5175f5182a86bd309eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 167, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_73a41110ed1971e2d43e7a4316498480f405269b77b9c5175f5182a86bd309eb->leave($__internal_73a41110ed1971e2d43e7a4316498480f405269b77b9c5175f5182a86bd309eb_prof);

    }

    // line 171
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_129700d87cc221d262e2af72a55eeafbad34adab116db696f0404bb62327b169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129700d87cc221d262e2af72a55eeafbad34adab116db696f0404bb62327b169->enter($__internal_129700d87cc221d262e2af72a55eeafbad34adab116db696f0404bb62327b169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 172, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_129700d87cc221d262e2af72a55eeafbad34adab116db696f0404bb62327b169->leave($__internal_129700d87cc221d262e2af72a55eeafbad34adab116db696f0404bb62327b169_prof);

    }

    // line 176
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_121ab0559d079952eabb2c0482897914be2443176eeab85a9bab990beb5e7256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121ab0559d079952eabb2c0482897914be2443176eeab85a9bab990beb5e7256->enter($__internal_121ab0559d079952eabb2c0482897914be2443176eeab85a9bab990beb5e7256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 177
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 177, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 178
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_121ab0559d079952eabb2c0482897914be2443176eeab85a9bab990beb5e7256->leave($__internal_121ab0559d079952eabb2c0482897914be2443176eeab85a9bab990beb5e7256_prof);

    }

    // line 181
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_4cc68a42301a8b93d9595cd87159af15a31656edaca34e23c312ef1313b6a984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc68a42301a8b93d9595cd87159af15a31656edaca34e23c312ef1313b6a984->enter($__internal_4cc68a42301a8b93d9595cd87159af15a31656edaca34e23c312ef1313b6a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 182
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 182, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 183
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4cc68a42301a8b93d9595cd87159af15a31656edaca34e23c312ef1313b6a984->leave($__internal_4cc68a42301a8b93d9595cd87159af15a31656edaca34e23c312ef1313b6a984_prof);

    }

    // line 186
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_7658504d5823b7da0b0fde1b7e7a4fa73d724230cee2388b565f60716409c9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7658504d5823b7da0b0fde1b7e7a4fa73d724230cee2388b565f60716409c9eb->enter($__internal_7658504d5823b7da0b0fde1b7e7a4fa73d724230cee2388b565f60716409c9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 187
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 187, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 188
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7658504d5823b7da0b0fde1b7e7a4fa73d724230cee2388b565f60716409c9eb->leave($__internal_7658504d5823b7da0b0fde1b7e7a4fa73d724230cee2388b565f60716409c9eb_prof);

    }

    // line 191
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_687acc97f6845063ea172e5ac09ebafde980fa4efd88389b994de16119534fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687acc97f6845063ea172e5ac09ebafde980fa4efd88389b994de16119534fc8->enter($__internal_687acc97f6845063ea172e5ac09ebafde980fa4efd88389b994de16119534fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 192
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 192, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 193
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_687acc97f6845063ea172e5ac09ebafde980fa4efd88389b994de16119534fc8->leave($__internal_687acc97f6845063ea172e5ac09ebafde980fa4efd88389b994de16119534fc8_prof);

    }

    // line 196
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_11c61d936e54ebe343e970b3ac43f80dabf636b4bd8958a3f922e40c68e75074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c61d936e54ebe343e970b3ac43f80dabf636b4bd8958a3f922e40c68e75074->enter($__internal_11c61d936e54ebe343e970b3ac43f80dabf636b4bd8958a3f922e40c68e75074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 197
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 197, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 198
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_11c61d936e54ebe343e970b3ac43f80dabf636b4bd8958a3f922e40c68e75074->leave($__internal_11c61d936e54ebe343e970b3ac43f80dabf636b4bd8958a3f922e40c68e75074_prof);

    }

    // line 201
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_864387b93f092cb6ed799b2e0aa40e5ae7d1b177a1e2442bc131d90ccc89187a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864387b93f092cb6ed799b2e0aa40e5ae7d1b177a1e2442bc131d90ccc89187a->enter($__internal_864387b93f092cb6ed799b2e0aa40e5ae7d1b177a1e2442bc131d90ccc89187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 202, $this->getSourceContext()); })()))) {
            // line 203
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 203, $this->getSourceContext()); })()))) {
                // line 204
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 204, $this->getSourceContext()); })()), array("%name%" =>                 // line 205
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 205, $this->getSourceContext()); })()), "%id%" =>                 // line 206
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 206, $this->getSourceContext()); })())));
            } else {
                // line 209
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 209, $this->getSourceContext()); })()));
            }
        }
        // line 212
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 212, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 212, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 212, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 212, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 212, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_864387b93f092cb6ed799b2e0aa40e5ae7d1b177a1e2442bc131d90ccc89187a->leave($__internal_864387b93f092cb6ed799b2e0aa40e5ae7d1b177a1e2442bc131d90ccc89187a_prof);

    }

    // line 215
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_8c735ea121c37f8618acdcf1ec5abcf8a3297c107e6f9efa851f4d24212d63b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c735ea121c37f8618acdcf1ec5abcf8a3297c107e6f9efa851f4d24212d63b1->enter($__internal_8c735ea121c37f8618acdcf1ec5abcf8a3297c107e6f9efa851f4d24212d63b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 216
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 216, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 217
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_8c735ea121c37f8618acdcf1ec5abcf8a3297c107e6f9efa851f4d24212d63b1->leave($__internal_8c735ea121c37f8618acdcf1ec5abcf8a3297c107e6f9efa851f4d24212d63b1_prof);

    }

    // line 220
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_523ecd61fa57720e95b310eccd8c02e4c2ee0fd761901ef36b973800899a7fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523ecd61fa57720e95b310eccd8c02e4c2ee0fd761901ef36b973800899a7fd0->enter($__internal_523ecd61fa57720e95b310eccd8c02e4c2ee0fd761901ef36b973800899a7fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 221
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 221, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 222
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_523ecd61fa57720e95b310eccd8c02e4c2ee0fd761901ef36b973800899a7fd0->leave($__internal_523ecd61fa57720e95b310eccd8c02e4c2ee0fd761901ef36b973800899a7fd0_prof);

    }

    // line 227
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4d27f9bbdcc08d0be588ec5846501b81bb23f12f2492593977f39bcc2cdf7876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d27f9bbdcc08d0be588ec5846501b81bb23f12f2492593977f39bcc2cdf7876->enter($__internal_4d27f9bbdcc08d0be588ec5846501b81bb23f12f2492593977f39bcc2cdf7876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 228
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 228, $this->getSourceContext()); })()) === false)) {
            // line 229
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 229, $this->getSourceContext()); })())) {
                // line 230
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 230, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 230, $this->getSourceContext()); })())));
            }
            // line 232
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 232, $this->getSourceContext()); })())) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 233, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 235
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 235, $this->getSourceContext()); })()))) {
                // line 236
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 236, $this->getSourceContext()); })()))) {
                    // line 237
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 237, $this->getSourceContext()); })()), array("%name%" =>                     // line 238
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 238, $this->getSourceContext()); })()), "%id%" =>                     // line 239
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 239, $this->getSourceContext()); })())));
                } else {
                    // line 242
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 242, $this->getSourceContext()); })()));
                }
            }
            // line 245
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 245, $this->getSourceContext()); })()));
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 245, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 245, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 245, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 245, $this->getSourceContext()); })())))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_4d27f9bbdcc08d0be588ec5846501b81bb23f12f2492593977f39bcc2cdf7876->leave($__internal_4d27f9bbdcc08d0be588ec5846501b81bb23f12f2492593977f39bcc2cdf7876_prof);

    }

    // line 249
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_228f8164be6362104de31af15f8acefd583112a671d7d1b567358f87aba99bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228f8164be6362104de31af15f8acefd583112a671d7d1b567358f87aba99bee->enter($__internal_228f8164be6362104de31af15f8acefd583112a671d7d1b567358f87aba99bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_228f8164be6362104de31af15f8acefd583112a671d7d1b567358f87aba99bee->leave($__internal_228f8164be6362104de31af15f8acefd583112a671d7d1b567358f87aba99bee_prof);

    }

    // line 253
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_5129253278de4537a672b68b3dc06f94cbdb7d812c0fc4acd85353368d96ad0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5129253278de4537a672b68b3dc06f94cbdb7d812c0fc4acd85353368d96ad0a->enter($__internal_5129253278de4537a672b68b3dc06f94cbdb7d812c0fc4acd85353368d96ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 258
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_5129253278de4537a672b68b3dc06f94cbdb7d812c0fc4acd85353368d96ad0a->leave($__internal_5129253278de4537a672b68b3dc06f94cbdb7d812c0fc4acd85353368d96ad0a_prof);

    }

    // line 261
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0cd269c73c97d3e75473bfbf4818dcddac29256b27d339713173f953e4a81cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd269c73c97d3e75473bfbf4818dcddac29256b27d339713173f953e4a81cf9->enter($__internal_0cd269c73c97d3e75473bfbf4818dcddac29256b27d339713173f953e4a81cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 262
        echo "<div>";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->getSourceContext()); })()), 'label');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->getSourceContext()); })()), 'errors');
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 265, $this->getSourceContext()); })()), 'widget');
        // line 266
        echo "</div>";
        
        $__internal_0cd269c73c97d3e75473bfbf4818dcddac29256b27d339713173f953e4a81cf9->leave($__internal_0cd269c73c97d3e75473bfbf4818dcddac29256b27d339713173f953e4a81cf9_prof);

    }

    // line 269
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_20941dd9f23ca0198775554083f231766a3077b6012b64a4e462b7b6ec1119a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20941dd9f23ca0198775554083f231766a3077b6012b64a4e462b7b6ec1119a3->enter($__internal_20941dd9f23ca0198775554083f231766a3077b6012b64a4e462b7b6ec1119a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 270
        echo "<div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 271, $this->getSourceContext()); })()), 'widget');
        // line 272
        echo "</div>";
        
        $__internal_20941dd9f23ca0198775554083f231766a3077b6012b64a4e462b7b6ec1119a3->leave($__internal_20941dd9f23ca0198775554083f231766a3077b6012b64a4e462b7b6ec1119a3_prof);

    }

    // line 275
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_910f40a8de8c5d6194418a3a0aa9cb1ab86dfaff5a151369094146a7c648075f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910f40a8de8c5d6194418a3a0aa9cb1ab86dfaff5a151369094146a7c648075f->enter($__internal_910f40a8de8c5d6194418a3a0aa9cb1ab86dfaff5a151369094146a7c648075f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 276, $this->getSourceContext()); })()), 'widget');
        
        $__internal_910f40a8de8c5d6194418a3a0aa9cb1ab86dfaff5a151369094146a7c648075f->leave($__internal_910f40a8de8c5d6194418a3a0aa9cb1ab86dfaff5a151369094146a7c648075f_prof);

    }

    // line 281
    public function block_form($context, array $blocks = array())
    {
        $__internal_3c90fcec584483f97c8b505dd752cb7251c9b8848f14ca74021779f2c87e6a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c90fcec584483f97c8b505dd752cb7251c9b8848f14ca74021779f2c87e6a6a->enter($__internal_3c90fcec584483f97c8b505dd752cb7251c9b8848f14ca74021779f2c87e6a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 282, $this->getSourceContext()); })()), 'form_start');
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 283, $this->getSourceContext()); })()), 'widget');
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_3c90fcec584483f97c8b505dd752cb7251c9b8848f14ca74021779f2c87e6a6a->leave($__internal_3c90fcec584483f97c8b505dd752cb7251c9b8848f14ca74021779f2c87e6a6a_prof);

    }

    // line 287
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a0a47b372e1851c9eb850376a21244ca71d2d79ef1f8ab7cdcda4afac5196e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a47b372e1851c9eb850376a21244ca71d2d79ef1f8ab7cdcda4afac5196e51->enter($__internal_a0a47b372e1851c9eb850376a21244ca71d2d79ef1f8ab7cdcda4afac5196e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 288
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 288, $this->getSourceContext()); })()));
        // line 289
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 289, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 290
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 290, $this->getSourceContext()); })());
        } else {
            // line 292
            $context["form_method"] = "POST";
        }
        // line 294
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 294, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 294, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 294, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 294, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 295
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 295, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 295, $this->getSourceContext()); })()))) {
            // line 296
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 296, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_a0a47b372e1851c9eb850376a21244ca71d2d79ef1f8ab7cdcda4afac5196e51->leave($__internal_a0a47b372e1851c9eb850376a21244ca71d2d79ef1f8ab7cdcda4afac5196e51_prof);

    }

    // line 300
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_23c92bd32227c13158bc9d433b1bc5d957d6207ca3b715f8fa536b4bec8905db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c92bd32227c13158bc9d433b1bc5d957d6207ca3b715f8fa536b4bec8905db->enter($__internal_23c92bd32227c13158bc9d433b1bc5d957d6207ca3b715f8fa536b4bec8905db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 301
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 301, $this->getSourceContext()); })()))) {
            // line 302
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->getSourceContext()); })()), 'rest');
        }
        // line 304
        echo "</form>";
        
        $__internal_23c92bd32227c13158bc9d433b1bc5d957d6207ca3b715f8fa536b4bec8905db->leave($__internal_23c92bd32227c13158bc9d433b1bc5d957d6207ca3b715f8fa536b4bec8905db_prof);

    }

    // line 307
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2131f3a8e5e0359ae9a60a21bb17262da65e92d1e1544c4a2e47d784a899bbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2131f3a8e5e0359ae9a60a21bb17262da65e92d1e1544c4a2e47d784a899bbec->enter($__internal_2131f3a8e5e0359ae9a60a21bb17262da65e92d1e1544c4a2e47d784a899bbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 308
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 308, $this->getSourceContext()); })())) > 0)) {
            // line 309
            echo "<ul>";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 310, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 311
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "</ul>";
        }
        
        $__internal_2131f3a8e5e0359ae9a60a21bb17262da65e92d1e1544c4a2e47d784a899bbec->leave($__internal_2131f3a8e5e0359ae9a60a21bb17262da65e92d1e1544c4a2e47d784a899bbec_prof);

    }

    // line 317
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_9bcc54e545dd45d7aca94f0e0ae18472ffbcaa56ea4cbd49056c435393438f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcc54e545dd45d7aca94f0e0ae18472ffbcaa56ea4cbd49056c435393438f46->enter($__internal_9bcc54e545dd45d7aca94f0e0ae18472ffbcaa56ea4cbd49056c435393438f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 318, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 319
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 320
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9bcc54e545dd45d7aca94f0e0ae18472ffbcaa56ea4cbd49056c435393438f46->leave($__internal_9bcc54e545dd45d7aca94f0e0ae18472ffbcaa56ea4cbd49056c435393438f46_prof);

    }

    // line 327
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_5e2bdb35215986098897e11cb890e039933a582be15cdc62203e7d579e67fdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2bdb35215986098897e11cb890e039933a582be15cdc62203e7d579e67fdb6->enter($__internal_5e2bdb35215986098897e11cb890e039933a582be15cdc62203e7d579e67fdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 328, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 329
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5e2bdb35215986098897e11cb890e039933a582be15cdc62203e7d579e67fdb6->leave($__internal_5e2bdb35215986098897e11cb890e039933a582be15cdc62203e7d579e67fdb6_prof);

    }

    // line 333
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4a46474f7ee353aec3670e6192ad7138ff666558681f9cfef54cc90d6bc4f5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a46474f7ee353aec3670e6192ad7138ff666558681f9cfef54cc90d6bc4f5a5->enter($__internal_4a46474f7ee353aec3670e6192ad7138ff666558681f9cfef54cc90d6bc4f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 334
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 334, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 334, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 335
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 335, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 336
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 336, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 337, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 338
            echo " ";
            // line 339
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 340, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 340, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 341
$context["attrvalue"] === true)) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 343
$context["attrvalue"] === false)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4a46474f7ee353aec3670e6192ad7138ff666558681f9cfef54cc90d6bc4f5a5->leave($__internal_4a46474f7ee353aec3670e6192ad7138ff666558681f9cfef54cc90d6bc4f5a5_prof);

    }

    // line 349
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_6b6acac0e8fc7a59bb8ef5cf6c75cf507d3ba967b71b039ff5374bdd6ec00e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6acac0e8fc7a59bb8ef5cf6c75cf507d3ba967b71b039ff5374bdd6ec00e15->enter($__internal_6b6acac0e8fc7a59bb8ef5cf6c75cf507d3ba967b71b039ff5374bdd6ec00e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 350
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 350, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 350, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 351, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 352
            echo " ";
            // line 353
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 354, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 354, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 355
$context["attrvalue"] === true)) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 357
$context["attrvalue"] === false)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6b6acac0e8fc7a59bb8ef5cf6c75cf507d3ba967b71b039ff5374bdd6ec00e15->leave($__internal_6b6acac0e8fc7a59bb8ef5cf6c75cf507d3ba967b71b039ff5374bdd6ec00e15_prof);

    }

    // line 363
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2810dee3c8b630a3e9b500d5e51c70703989c052ee7cecb0ab9a6e946de2b63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2810dee3c8b630a3e9b500d5e51c70703989c052ee7cecb0ab9a6e946de2b63d->enter($__internal_2810dee3c8b630a3e9b500d5e51c70703989c052ee7cecb0ab9a6e946de2b63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 364
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 364, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 365, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 368, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 368, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2810dee3c8b630a3e9b500d5e51c70703989c052ee7cecb0ab9a6e946de2b63d->leave($__internal_2810dee3c8b630a3e9b500d5e51c70703989c052ee7cecb0ab9a6e946de2b63d_prof);

    }

    // line 377
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_45c1eaf3b5bafc1fb67abd977f1709fae3ba5334ee3c49d917e53082258413c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c1eaf3b5bafc1fb67abd977f1709fae3ba5334ee3c49d917e53082258413c5->enter($__internal_45c1eaf3b5bafc1fb67abd977f1709fae3ba5334ee3c49d917e53082258413c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 378, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 379
            echo " ";
            // line 380
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 381
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 381, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 381, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 382
$context["attrvalue"] === true)) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 384
$context["attrvalue"] === false)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_45c1eaf3b5bafc1fb67abd977f1709fae3ba5334ee3c49d917e53082258413c5->leave($__internal_45c1eaf3b5bafc1fb67abd977f1709fae3ba5334ee3c49d917e53082258413c5_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1328 => 385,  1326 => 384,  1321 => 383,  1319 => 382,  1314 => 381,  1312 => 380,  1310 => 379,  1306 => 378,  1300 => 377,  1285 => 372,  1283 => 371,  1278 => 370,  1276 => 369,  1271 => 368,  1269 => 367,  1267 => 366,  1263 => 365,  1254 => 364,  1248 => 363,  1233 => 358,  1231 => 357,  1226 => 356,  1224 => 355,  1219 => 354,  1217 => 353,  1215 => 352,  1211 => 351,  1205 => 350,  1199 => 349,  1184 => 344,  1182 => 343,  1177 => 342,  1175 => 341,  1170 => 340,  1168 => 339,  1166 => 338,  1162 => 337,  1158 => 336,  1154 => 335,  1148 => 334,  1142 => 333,  1131 => 329,  1127 => 328,  1121 => 327,  1109 => 320,  1107 => 319,  1103 => 318,  1097 => 317,  1089 => 313,  1081 => 311,  1077 => 310,  1075 => 309,  1073 => 308,  1067 => 307,  1060 => 304,  1057 => 302,  1055 => 301,  1049 => 300,  1039 => 296,  1037 => 295,  1010 => 294,  1007 => 292,  1004 => 290,  1002 => 289,  1000 => 288,  994 => 287,  987 => 284,  985 => 283,  983 => 282,  977 => 281,  970 => 276,  964 => 275,  957 => 272,  955 => 271,  953 => 270,  947 => 269,  940 => 266,  938 => 265,  936 => 264,  934 => 263,  932 => 262,  926 => 261,  919 => 258,  913 => 253,  902 => 249,  879 => 245,  875 => 242,  872 => 239,  871 => 238,  870 => 237,  868 => 236,  866 => 235,  863 => 233,  861 => 232,  858 => 230,  856 => 229,  854 => 228,  848 => 227,  841 => 222,  839 => 221,  833 => 220,  826 => 217,  824 => 216,  818 => 215,  805 => 212,  801 => 209,  798 => 206,  797 => 205,  796 => 204,  794 => 203,  792 => 202,  786 => 201,  779 => 198,  777 => 197,  771 => 196,  764 => 193,  762 => 192,  756 => 191,  749 => 188,  747 => 187,  741 => 186,  734 => 183,  732 => 182,  726 => 181,  718 => 178,  716 => 177,  710 => 176,  703 => 173,  701 => 172,  695 => 171,  688 => 168,  686 => 167,  680 => 166,  673 => 163,  667 => 162,  660 => 159,  658 => 158,  652 => 157,  645 => 154,  643 => 153,  637 => 151,  629 => 147,  625 => 146,  621 => 145,  617 => 144,  613 => 143,  609 => 142,  605 => 141,  601 => 140,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 377,  153 => 363,  151 => 349,  149 => 333,  147 => 327,  144 => 324,  142 => 317,  140 => 307,  138 => 300,  136 => 287,  134 => 281,  132 => 275,  130 => 269,  128 => 261,  126 => 253,  124 => 249,  122 => 227,  120 => 220,  118 => 215,  116 => 201,  114 => 196,  112 => 191,  110 => 186,  108 => 181,  106 => 176,  104 => 171,  102 => 166,  100 => 162,  98 => 157,  96 => 151,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
