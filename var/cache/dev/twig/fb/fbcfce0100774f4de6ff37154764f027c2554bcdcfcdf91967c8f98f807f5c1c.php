<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2979047830bbf87290a6dc215eb33722609d1bb5a822ca37e259a6a6fac658a9 extends Twig_Template
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
        $__internal_ddd7d0902b7e5cecd04e5b62e88715945f2eb604026f11d1cb5e28c18432fbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd7d0902b7e5cecd04e5b62e88715945f2eb604026f11d1cb5e28c18432fbd7->enter($__internal_ddd7d0902b7e5cecd04e5b62e88715945f2eb604026f11d1cb5e28c18432fbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e37ae0d661fc3bc307c1d815a8c544c5ffc8fa8caba44d75646593aeec1af4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37ae0d661fc3bc307c1d815a8c544c5ffc8fa8caba44d75646593aeec1af4a6->enter($__internal_e37ae0d661fc3bc307c1d815a8c544c5ffc8fa8caba44d75646593aeec1af4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddd7d0902b7e5cecd04e5b62e88715945f2eb604026f11d1cb5e28c18432fbd7->leave($__internal_ddd7d0902b7e5cecd04e5b62e88715945f2eb604026f11d1cb5e28c18432fbd7_prof);

        
        $__internal_e37ae0d661fc3bc307c1d815a8c544c5ffc8fa8caba44d75646593aeec1af4a6->leave($__internal_e37ae0d661fc3bc307c1d815a8c544c5ffc8fa8caba44d75646593aeec1af4a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
