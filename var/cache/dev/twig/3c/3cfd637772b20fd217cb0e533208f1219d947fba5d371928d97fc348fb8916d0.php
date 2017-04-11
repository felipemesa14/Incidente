<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_161d6dee59d31e0ac337c84e2dfa014d63af49a59f8ede901f2e432482679f65 extends Twig_Template
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
        $__internal_aa422fcb3cfcb1f6ca9dce03e9ace6f0acda9573d493e5bcedaf5a1134b960e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa422fcb3cfcb1f6ca9dce03e9ace6f0acda9573d493e5bcedaf5a1134b960e9->enter($__internal_aa422fcb3cfcb1f6ca9dce03e9ace6f0acda9573d493e5bcedaf5a1134b960e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8ad3d65f25f38f3e8111a616f393a03e4051483e47d9b5be6b59bc0614ff7c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad3d65f25f38f3e8111a616f393a03e4051483e47d9b5be6b59bc0614ff7c17->enter($__internal_8ad3d65f25f38f3e8111a616f393a03e4051483e47d9b5be6b59bc0614ff7c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_aa422fcb3cfcb1f6ca9dce03e9ace6f0acda9573d493e5bcedaf5a1134b960e9->leave($__internal_aa422fcb3cfcb1f6ca9dce03e9ace6f0acda9573d493e5bcedaf5a1134b960e9_prof);

        
        $__internal_8ad3d65f25f38f3e8111a616f393a03e4051483e47d9b5be6b59bc0614ff7c17->leave($__internal_8ad3d65f25f38f3e8111a616f393a03e4051483e47d9b5be6b59bc0614ff7c17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
