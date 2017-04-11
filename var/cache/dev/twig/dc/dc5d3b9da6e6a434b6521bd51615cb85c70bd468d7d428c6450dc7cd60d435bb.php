<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a38b6aefd4d7c74215bb36e03ad543428c192af58d5ae82b1fcfa7a665807ea1 extends Twig_Template
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
        $__internal_0b54ab799a0f59af9db0489d499b5075e6bc5ba340556bcb3618844678bc7403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b54ab799a0f59af9db0489d499b5075e6bc5ba340556bcb3618844678bc7403->enter($__internal_0b54ab799a0f59af9db0489d499b5075e6bc5ba340556bcb3618844678bc7403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7a039e4599d7d4f5acd932e2734522a73967323cfe0dd4ae104b0762fc47d992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a039e4599d7d4f5acd932e2734522a73967323cfe0dd4ae104b0762fc47d992->enter($__internal_7a039e4599d7d4f5acd932e2734522a73967323cfe0dd4ae104b0762fc47d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0b54ab799a0f59af9db0489d499b5075e6bc5ba340556bcb3618844678bc7403->leave($__internal_0b54ab799a0f59af9db0489d499b5075e6bc5ba340556bcb3618844678bc7403_prof);

        
        $__internal_7a039e4599d7d4f5acd932e2734522a73967323cfe0dd4ae104b0762fc47d992->leave($__internal_7a039e4599d7d4f5acd932e2734522a73967323cfe0dd4ae104b0762fc47d992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
