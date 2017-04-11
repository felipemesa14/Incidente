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
        $__internal_fbf3dca4710786c127fe2e2445e093105f6945ed9594f36b35b8e64f36b3867b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf3dca4710786c127fe2e2445e093105f6945ed9594f36b35b8e64f36b3867b->enter($__internal_fbf3dca4710786c127fe2e2445e093105f6945ed9594f36b35b8e64f36b3867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7bce8acca9b6a47b10655f90a709efdcecee469de34c4efb5feab7bf2c0d2ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bce8acca9b6a47b10655f90a709efdcecee469de34c4efb5feab7bf2c0d2ee7->enter($__internal_7bce8acca9b6a47b10655f90a709efdcecee469de34c4efb5feab7bf2c0d2ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fbf3dca4710786c127fe2e2445e093105f6945ed9594f36b35b8e64f36b3867b->leave($__internal_fbf3dca4710786c127fe2e2445e093105f6945ed9594f36b35b8e64f36b3867b_prof);

        
        $__internal_7bce8acca9b6a47b10655f90a709efdcecee469de34c4efb5feab7bf2c0d2ee7->leave($__internal_7bce8acca9b6a47b10655f90a709efdcecee469de34c4efb5feab7bf2c0d2ee7_prof);

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
