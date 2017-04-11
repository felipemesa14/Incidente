<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3ab290091a1e564fbd2bc8d3047d7009dd6523c4ba15d4406f56b701d981c95b extends Twig_Template
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
        $__internal_25b746b68bc996e79beaf00baff746788e8f6e82d790fa226fe7df4ba746b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b746b68bc996e79beaf00baff746788e8f6e82d790fa226fe7df4ba746b02b->enter($__internal_25b746b68bc996e79beaf00baff746788e8f6e82d790fa226fe7df4ba746b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b05d1e543275574d8b3fb2eb65ca6e381cc5583ea3ad945f9bdb23f3729a68df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05d1e543275574d8b3fb2eb65ca6e381cc5583ea3ad945f9bdb23f3729a68df->enter($__internal_b05d1e543275574d8b3fb2eb65ca6e381cc5583ea3ad945f9bdb23f3729a68df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_25b746b68bc996e79beaf00baff746788e8f6e82d790fa226fe7df4ba746b02b->leave($__internal_25b746b68bc996e79beaf00baff746788e8f6e82d790fa226fe7df4ba746b02b_prof);

        
        $__internal_b05d1e543275574d8b3fb2eb65ca6e381cc5583ea3ad945f9bdb23f3729a68df->leave($__internal_b05d1e543275574d8b3fb2eb65ca6e381cc5583ea3ad945f9bdb23f3729a68df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
