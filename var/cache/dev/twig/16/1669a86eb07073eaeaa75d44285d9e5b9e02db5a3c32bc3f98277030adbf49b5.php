<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bb899a0ead028329e8528ab06bfb08611ca3447cce6f53676001e1677423dc5d extends Twig_Template
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
        $__internal_168f00b2fb0320e4fd650efca52a2591c07c0434164309ee87cf08a12c4e8fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168f00b2fb0320e4fd650efca52a2591c07c0434164309ee87cf08a12c4e8fb6->enter($__internal_168f00b2fb0320e4fd650efca52a2591c07c0434164309ee87cf08a12c4e8fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9c82fecad372e68b7c00958bf527a96fe6cb4780a8258168f5a6e2579feea036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c82fecad372e68b7c00958bf527a96fe6cb4780a8258168f5a6e2579feea036->enter($__internal_9c82fecad372e68b7c00958bf527a96fe6cb4780a8258168f5a6e2579feea036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_168f00b2fb0320e4fd650efca52a2591c07c0434164309ee87cf08a12c4e8fb6->leave($__internal_168f00b2fb0320e4fd650efca52a2591c07c0434164309ee87cf08a12c4e8fb6_prof);

        
        $__internal_9c82fecad372e68b7c00958bf527a96fe6cb4780a8258168f5a6e2579feea036->leave($__internal_9c82fecad372e68b7c00958bf527a96fe6cb4780a8258168f5a6e2579feea036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
