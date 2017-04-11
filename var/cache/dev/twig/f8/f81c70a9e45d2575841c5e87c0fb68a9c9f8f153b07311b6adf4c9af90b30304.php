<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ef951c292493b63657296844d865dadc4b51137e9b366c0bcba2dbfd9ec510f8 extends Twig_Template
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
        $__internal_d0f5c7674f4563e2531e08607d414a94e5370d511b9f6fb46a9cbb20e33ca801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f5c7674f4563e2531e08607d414a94e5370d511b9f6fb46a9cbb20e33ca801->enter($__internal_d0f5c7674f4563e2531e08607d414a94e5370d511b9f6fb46a9cbb20e33ca801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f432849075c548ee5b7836d4ce873a9a25fd89e8b245b99c68f670ab016a2e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f432849075c548ee5b7836d4ce873a9a25fd89e8b245b99c68f670ab016a2e15->enter($__internal_f432849075c548ee5b7836d4ce873a9a25fd89e8b245b99c68f670ab016a2e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d0f5c7674f4563e2531e08607d414a94e5370d511b9f6fb46a9cbb20e33ca801->leave($__internal_d0f5c7674f4563e2531e08607d414a94e5370d511b9f6fb46a9cbb20e33ca801_prof);

        
        $__internal_f432849075c548ee5b7836d4ce873a9a25fd89e8b245b99c68f670ab016a2e15->leave($__internal_f432849075c548ee5b7836d4ce873a9a25fd89e8b245b99c68f670ab016a2e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
