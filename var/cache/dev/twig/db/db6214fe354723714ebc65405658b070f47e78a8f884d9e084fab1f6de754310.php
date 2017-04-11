<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c6ce0e334d1088d008d2e3e13e2f67ab0d5c8e4676e5d6179e25fb47fdb9c690 extends Twig_Template
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
        $__internal_03751eb34521a42c27e93a266f0203289f3a06988341ae774084f5efaf1fbc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03751eb34521a42c27e93a266f0203289f3a06988341ae774084f5efaf1fbc60->enter($__internal_03751eb34521a42c27e93a266f0203289f3a06988341ae774084f5efaf1fbc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d5cfebd54be82588ae82e8713849f7acd5befc3282fe935101bd0e2927e2fb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cfebd54be82588ae82e8713849f7acd5befc3282fe935101bd0e2927e2fb5a->enter($__internal_d5cfebd54be82588ae82e8713849f7acd5befc3282fe935101bd0e2927e2fb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_03751eb34521a42c27e93a266f0203289f3a06988341ae774084f5efaf1fbc60->leave($__internal_03751eb34521a42c27e93a266f0203289f3a06988341ae774084f5efaf1fbc60_prof);

        
        $__internal_d5cfebd54be82588ae82e8713849f7acd5befc3282fe935101bd0e2927e2fb5a->leave($__internal_d5cfebd54be82588ae82e8713849f7acd5befc3282fe935101bd0e2927e2fb5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
