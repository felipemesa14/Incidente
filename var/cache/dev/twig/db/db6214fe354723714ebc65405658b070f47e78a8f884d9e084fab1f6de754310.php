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
        $__internal_6cb56b68b2d7367ec5d9a953f02f304512e709a801a77e622543134444ab768c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb56b68b2d7367ec5d9a953f02f304512e709a801a77e622543134444ab768c->enter($__internal_6cb56b68b2d7367ec5d9a953f02f304512e709a801a77e622543134444ab768c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_997872bf628de5cbbc9e68872eae2df90ea3675f71e5ee5b9b32bab6c3e9a239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997872bf628de5cbbc9e68872eae2df90ea3675f71e5ee5b9b32bab6c3e9a239->enter($__internal_997872bf628de5cbbc9e68872eae2df90ea3675f71e5ee5b9b32bab6c3e9a239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6cb56b68b2d7367ec5d9a953f02f304512e709a801a77e622543134444ab768c->leave($__internal_6cb56b68b2d7367ec5d9a953f02f304512e709a801a77e622543134444ab768c_prof);

        
        $__internal_997872bf628de5cbbc9e68872eae2df90ea3675f71e5ee5b9b32bab6c3e9a239->leave($__internal_997872bf628de5cbbc9e68872eae2df90ea3675f71e5ee5b9b32bab6c3e9a239_prof);

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
