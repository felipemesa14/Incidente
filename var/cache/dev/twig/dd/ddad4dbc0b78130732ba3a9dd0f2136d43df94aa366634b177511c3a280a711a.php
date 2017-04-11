<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b7d43a40824c52c1fee37adbb2eec784a27ddbf71a3ea15a83460398df480c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a02b3d1234d23eb1f8dc3c3bc2ed244f45567b455a3032c840664a4bd052f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a02b3d1234d23eb1f8dc3c3bc2ed244f45567b455a3032c840664a4bd052f4a->enter($__internal_3a02b3d1234d23eb1f8dc3c3bc2ed244f45567b455a3032c840664a4bd052f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_03ee7c355f011899122f635ac1a0f9b9a90147bd03ee1386a8243c8fb61b8693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ee7c355f011899122f635ac1a0f9b9a90147bd03ee1386a8243c8fb61b8693->enter($__internal_03ee7c355f011899122f635ac1a0f9b9a90147bd03ee1386a8243c8fb61b8693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a02b3d1234d23eb1f8dc3c3bc2ed244f45567b455a3032c840664a4bd052f4a->leave($__internal_3a02b3d1234d23eb1f8dc3c3bc2ed244f45567b455a3032c840664a4bd052f4a_prof);

        
        $__internal_03ee7c355f011899122f635ac1a0f9b9a90147bd03ee1386a8243c8fb61b8693->leave($__internal_03ee7c355f011899122f635ac1a0f9b9a90147bd03ee1386a8243c8fb61b8693_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4babb248afefc64d0c5a017b17eb86b874546b032b5cbf58bcbb1cd5cf98f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4babb248afefc64d0c5a017b17eb86b874546b032b5cbf58bcbb1cd5cf98f6b->enter($__internal_a4babb248afefc64d0c5a017b17eb86b874546b032b5cbf58bcbb1cd5cf98f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_206b6c908aafa37cf36257bc90baef8f0acaaad1e5c7804d23324bad1d21f012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206b6c908aafa37cf36257bc90baef8f0acaaad1e5c7804d23324bad1d21f012->enter($__internal_206b6c908aafa37cf36257bc90baef8f0acaaad1e5c7804d23324bad1d21f012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_206b6c908aafa37cf36257bc90baef8f0acaaad1e5c7804d23324bad1d21f012->leave($__internal_206b6c908aafa37cf36257bc90baef8f0acaaad1e5c7804d23324bad1d21f012_prof);

        
        $__internal_a4babb248afefc64d0c5a017b17eb86b874546b032b5cbf58bcbb1cd5cf98f6b->leave($__internal_a4babb248afefc64d0c5a017b17eb86b874546b032b5cbf58bcbb1cd5cf98f6b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d6ee4fe7a915204cf525ea7b473045de658adff76d090171fce0ef879e9bac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ee4fe7a915204cf525ea7b473045de658adff76d090171fce0ef879e9bac2->enter($__internal_7d6ee4fe7a915204cf525ea7b473045de658adff76d090171fce0ef879e9bac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ca5423ed4e0f1ed13cf49e2dddd466d17fb31301c84a86bf109a4449264170d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca5423ed4e0f1ed13cf49e2dddd466d17fb31301c84a86bf109a4449264170d->enter($__internal_0ca5423ed4e0f1ed13cf49e2dddd466d17fb31301c84a86bf109a4449264170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_0ca5423ed4e0f1ed13cf49e2dddd466d17fb31301c84a86bf109a4449264170d->leave($__internal_0ca5423ed4e0f1ed13cf49e2dddd466d17fb31301c84a86bf109a4449264170d_prof);

        
        $__internal_7d6ee4fe7a915204cf525ea7b473045de658adff76d090171fce0ef879e9bac2->leave($__internal_7d6ee4fe7a915204cf525ea7b473045de658adff76d090171fce0ef879e9bac2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
