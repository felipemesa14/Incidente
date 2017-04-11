<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d52243829cefa4a9c25bf5adbc23154dd49d09b5a03d46adeda006783df239c1 extends Twig_Template
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
        $__internal_93c61b516cb4b816880d5208f3c60e3a7d2512fa91d5cd06180f5de1ad5b8573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c61b516cb4b816880d5208f3c60e3a7d2512fa91d5cd06180f5de1ad5b8573->enter($__internal_93c61b516cb4b816880d5208f3c60e3a7d2512fa91d5cd06180f5de1ad5b8573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fc8267c0097409bfa7a53a28a250200987184fa3d743505dc14963d3a0257d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8267c0097409bfa7a53a28a250200987184fa3d743505dc14963d3a0257d0b->enter($__internal_fc8267c0097409bfa7a53a28a250200987184fa3d743505dc14963d3a0257d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_93c61b516cb4b816880d5208f3c60e3a7d2512fa91d5cd06180f5de1ad5b8573->leave($__internal_93c61b516cb4b816880d5208f3c60e3a7d2512fa91d5cd06180f5de1ad5b8573_prof);

        
        $__internal_fc8267c0097409bfa7a53a28a250200987184fa3d743505dc14963d3a0257d0b->leave($__internal_fc8267c0097409bfa7a53a28a250200987184fa3d743505dc14963d3a0257d0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
