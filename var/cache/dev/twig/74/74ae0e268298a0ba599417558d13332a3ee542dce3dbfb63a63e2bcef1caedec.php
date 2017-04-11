<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_26240a58826d386c45a4bccc591b9bc030fb1e595f3219ca82d0d735d0857cd4 extends Twig_Template
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
        $__internal_8a385db3b6f085611c45cae4c1a24b0bb3671efd6e4135299ff6850d61d63630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a385db3b6f085611c45cae4c1a24b0bb3671efd6e4135299ff6850d61d63630->enter($__internal_8a385db3b6f085611c45cae4c1a24b0bb3671efd6e4135299ff6850d61d63630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_cd7214ea6d1c7e44b03a0a2d1524afe5a6210c12c5021c0f4389c215db2e9da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7214ea6d1c7e44b03a0a2d1524afe5a6210c12c5021c0f4389c215db2e9da6->enter($__internal_cd7214ea6d1c7e44b03a0a2d1524afe5a6210c12c5021c0f4389c215db2e9da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8a385db3b6f085611c45cae4c1a24b0bb3671efd6e4135299ff6850d61d63630->leave($__internal_8a385db3b6f085611c45cae4c1a24b0bb3671efd6e4135299ff6850d61d63630_prof);

        
        $__internal_cd7214ea6d1c7e44b03a0a2d1524afe5a6210c12c5021c0f4389c215db2e9da6->leave($__internal_cd7214ea6d1c7e44b03a0a2d1524afe5a6210c12c5021c0f4389c215db2e9da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
