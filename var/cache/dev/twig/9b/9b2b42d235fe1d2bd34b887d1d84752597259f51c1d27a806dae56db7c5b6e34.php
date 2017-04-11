<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f62dfec5938a07443ddfce27ab615461f1c366910148d9a8737d4b7df2ac4629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f44a833fa5ea20053dc3a71360da67f501e3d29d9e1b926db1350139a8db8c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44a833fa5ea20053dc3a71360da67f501e3d29d9e1b926db1350139a8db8c43->enter($__internal_f44a833fa5ea20053dc3a71360da67f501e3d29d9e1b926db1350139a8db8c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0e649a488e4ce1f02671b75c227c466467e4efddee731c04b1cc12fdb5fdda3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e649a488e4ce1f02671b75c227c466467e4efddee731c04b1cc12fdb5fdda3d->enter($__internal_0e649a488e4ce1f02671b75c227c466467e4efddee731c04b1cc12fdb5fdda3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44a833fa5ea20053dc3a71360da67f501e3d29d9e1b926db1350139a8db8c43->leave($__internal_f44a833fa5ea20053dc3a71360da67f501e3d29d9e1b926db1350139a8db8c43_prof);

        
        $__internal_0e649a488e4ce1f02671b75c227c466467e4efddee731c04b1cc12fdb5fdda3d->leave($__internal_0e649a488e4ce1f02671b75c227c466467e4efddee731c04b1cc12fdb5fdda3d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a5b8a07263fcff60e3de475b76cc4d5273906e5aa41b4a04a518f0203c17fffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b8a07263fcff60e3de475b76cc4d5273906e5aa41b4a04a518f0203c17fffe->enter($__internal_a5b8a07263fcff60e3de475b76cc4d5273906e5aa41b4a04a518f0203c17fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b4b9819fdee2f05be711f44c22cd04e5f52863770f34d90bd81afe5af0eeadfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b9819fdee2f05be711f44c22cd04e5f52863770f34d90bd81afe5af0eeadfe->enter($__internal_b4b9819fdee2f05be711f44c22cd04e5f52863770f34d90bd81afe5af0eeadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b4b9819fdee2f05be711f44c22cd04e5f52863770f34d90bd81afe5af0eeadfe->leave($__internal_b4b9819fdee2f05be711f44c22cd04e5f52863770f34d90bd81afe5af0eeadfe_prof);

        
        $__internal_a5b8a07263fcff60e3de475b76cc4d5273906e5aa41b4a04a518f0203c17fffe->leave($__internal_a5b8a07263fcff60e3de475b76cc4d5273906e5aa41b4a04a518f0203c17fffe_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_532567cd8dd99ca03ae54fbff106f8ecfd7cc83f5b872a840ce6aaa3a9767819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532567cd8dd99ca03ae54fbff106f8ecfd7cc83f5b872a840ce6aaa3a9767819->enter($__internal_532567cd8dd99ca03ae54fbff106f8ecfd7cc83f5b872a840ce6aaa3a9767819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c85c2e4a56bddd43775d0a424511a6a81c84491746c5035f4d471d78790bb5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85c2e4a56bddd43775d0a424511a6a81c84491746c5035f4d471d78790bb5a4->enter($__internal_c85c2e4a56bddd43775d0a424511a6a81c84491746c5035f4d471d78790bb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c85c2e4a56bddd43775d0a424511a6a81c84491746c5035f4d471d78790bb5a4->leave($__internal_c85c2e4a56bddd43775d0a424511a6a81c84491746c5035f4d471d78790bb5a4_prof);

        
        $__internal_532567cd8dd99ca03ae54fbff106f8ecfd7cc83f5b872a840ce6aaa3a9767819->leave($__internal_532567cd8dd99ca03ae54fbff106f8ecfd7cc83f5b872a840ce6aaa3a9767819_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
