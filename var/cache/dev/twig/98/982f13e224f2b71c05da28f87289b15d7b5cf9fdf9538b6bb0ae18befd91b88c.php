<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dea2a5ccf48e75eec3b99fa37636c260d7ecec4a8fa80649b433aef4f709f6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2684da707aa23232898bcccf06406be301ac59fd6a910ab20def46365295a953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2684da707aa23232898bcccf06406be301ac59fd6a910ab20def46365295a953->enter($__internal_2684da707aa23232898bcccf06406be301ac59fd6a910ab20def46365295a953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_56003ad39601c3d3668e1e2e1ada8703f6f1d1d351960f1ef6e965d0455c7c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56003ad39601c3d3668e1e2e1ada8703f6f1d1d351960f1ef6e965d0455c7c78->enter($__internal_56003ad39601c3d3668e1e2e1ada8703f6f1d1d351960f1ef6e965d0455c7c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2684da707aa23232898bcccf06406be301ac59fd6a910ab20def46365295a953->leave($__internal_2684da707aa23232898bcccf06406be301ac59fd6a910ab20def46365295a953_prof);

        
        $__internal_56003ad39601c3d3668e1e2e1ada8703f6f1d1d351960f1ef6e965d0455c7c78->leave($__internal_56003ad39601c3d3668e1e2e1ada8703f6f1d1d351960f1ef6e965d0455c7c78_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d7b9b69760b5ecde084963b3eb80bb472836b5df9d5fe45304a5b4e40a553dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7b9b69760b5ecde084963b3eb80bb472836b5df9d5fe45304a5b4e40a553dc->enter($__internal_5d7b9b69760b5ecde084963b3eb80bb472836b5df9d5fe45304a5b4e40a553dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1479b756627988f2e5256dbb70a6215e12660b3a527e32c8f341772cbffc697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1479b756627988f2e5256dbb70a6215e12660b3a527e32c8f341772cbffc697->enter($__internal_b1479b756627988f2e5256dbb70a6215e12660b3a527e32c8f341772cbffc697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b1479b756627988f2e5256dbb70a6215e12660b3a527e32c8f341772cbffc697->leave($__internal_b1479b756627988f2e5256dbb70a6215e12660b3a527e32c8f341772cbffc697_prof);

        
        $__internal_5d7b9b69760b5ecde084963b3eb80bb472836b5df9d5fe45304a5b4e40a553dc->leave($__internal_5d7b9b69760b5ecde084963b3eb80bb472836b5df9d5fe45304a5b4e40a553dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
