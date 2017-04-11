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
        $__internal_07912889acd374a190ddda0c2f29f358b2d265f816b51f5213925d7068174b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07912889acd374a190ddda0c2f29f358b2d265f816b51f5213925d7068174b53->enter($__internal_07912889acd374a190ddda0c2f29f358b2d265f816b51f5213925d7068174b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_68f11048f2d217ecbedf2df3151215036135d9690826da9a79fca6942b9d561d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f11048f2d217ecbedf2df3151215036135d9690826da9a79fca6942b9d561d->enter($__internal_68f11048f2d217ecbedf2df3151215036135d9690826da9a79fca6942b9d561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_07912889acd374a190ddda0c2f29f358b2d265f816b51f5213925d7068174b53->leave($__internal_07912889acd374a190ddda0c2f29f358b2d265f816b51f5213925d7068174b53_prof);

        
        $__internal_68f11048f2d217ecbedf2df3151215036135d9690826da9a79fca6942b9d561d->leave($__internal_68f11048f2d217ecbedf2df3151215036135d9690826da9a79fca6942b9d561d_prof);

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
