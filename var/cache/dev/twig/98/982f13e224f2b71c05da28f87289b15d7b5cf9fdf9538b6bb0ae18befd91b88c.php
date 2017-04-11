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
        $__internal_32bf4d7c2a9a925cf0f646c29b7816a7a854bc5a35cf56c3e11c07a1583217e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bf4d7c2a9a925cf0f646c29b7816a7a854bc5a35cf56c3e11c07a1583217e4->enter($__internal_32bf4d7c2a9a925cf0f646c29b7816a7a854bc5a35cf56c3e11c07a1583217e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_cba2d0ea09e158d715a196671473580cd6202c403ad04b7814db793130f2fce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba2d0ea09e158d715a196671473580cd6202c403ad04b7814db793130f2fce4->enter($__internal_cba2d0ea09e158d715a196671473580cd6202c403ad04b7814db793130f2fce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32bf4d7c2a9a925cf0f646c29b7816a7a854bc5a35cf56c3e11c07a1583217e4->leave($__internal_32bf4d7c2a9a925cf0f646c29b7816a7a854bc5a35cf56c3e11c07a1583217e4_prof);

        
        $__internal_cba2d0ea09e158d715a196671473580cd6202c403ad04b7814db793130f2fce4->leave($__internal_cba2d0ea09e158d715a196671473580cd6202c403ad04b7814db793130f2fce4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d4fed043a5352b0b4f974f7b7cebaa34316c56f626e1cf734ec5a7a24d83725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4fed043a5352b0b4f974f7b7cebaa34316c56f626e1cf734ec5a7a24d83725->enter($__internal_4d4fed043a5352b0b4f974f7b7cebaa34316c56f626e1cf734ec5a7a24d83725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5cc4f132840d706e888aabede52df787755e4c960278fce0c388052447d1a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cc4f132840d706e888aabede52df787755e4c960278fce0c388052447d1a1d->enter($__internal_e5cc4f132840d706e888aabede52df787755e4c960278fce0c388052447d1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e5cc4f132840d706e888aabede52df787755e4c960278fce0c388052447d1a1d->leave($__internal_e5cc4f132840d706e888aabede52df787755e4c960278fce0c388052447d1a1d_prof);

        
        $__internal_4d4fed043a5352b0b4f974f7b7cebaa34316c56f626e1cf734ec5a7a24d83725->leave($__internal_4d4fed043a5352b0b4f974f7b7cebaa34316c56f626e1cf734ec5a7a24d83725_prof);

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
