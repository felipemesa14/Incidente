<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3375934019ba6fcf081f0e46b7efce745043b9b35ae915bff0d771fa4624fae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a03d05cb9a69e5f0146462c8c3b4f8a77768df4cc8d6aa27a42c0be50bb1b61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03d05cb9a69e5f0146462c8c3b4f8a77768df4cc8d6aa27a42c0be50bb1b61d->enter($__internal_a03d05cb9a69e5f0146462c8c3b4f8a77768df4cc8d6aa27a42c0be50bb1b61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_45e104184f55d4944de109970cb78ccc3ec51e8ee4a93d5b6712449d90223bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e104184f55d4944de109970cb78ccc3ec51e8ee4a93d5b6712449d90223bf4->enter($__internal_45e104184f55d4944de109970cb78ccc3ec51e8ee4a93d5b6712449d90223bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a03d05cb9a69e5f0146462c8c3b4f8a77768df4cc8d6aa27a42c0be50bb1b61d->leave($__internal_a03d05cb9a69e5f0146462c8c3b4f8a77768df4cc8d6aa27a42c0be50bb1b61d_prof);

        
        $__internal_45e104184f55d4944de109970cb78ccc3ec51e8ee4a93d5b6712449d90223bf4->leave($__internal_45e104184f55d4944de109970cb78ccc3ec51e8ee4a93d5b6712449d90223bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
