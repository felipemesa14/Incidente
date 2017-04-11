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
        $__internal_429d73ba6617720d1966f5902f5018bc95583ad0d3c231215f2a42d474f9ad02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429d73ba6617720d1966f5902f5018bc95583ad0d3c231215f2a42d474f9ad02->enter($__internal_429d73ba6617720d1966f5902f5018bc95583ad0d3c231215f2a42d474f9ad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b69dd24879f3d942bfcbc5df3e968dc5f40a42389e658bc52b336bd5f49d2359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69dd24879f3d942bfcbc5df3e968dc5f40a42389e658bc52b336bd5f49d2359->enter($__internal_b69dd24879f3d942bfcbc5df3e968dc5f40a42389e658bc52b336bd5f49d2359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_429d73ba6617720d1966f5902f5018bc95583ad0d3c231215f2a42d474f9ad02->leave($__internal_429d73ba6617720d1966f5902f5018bc95583ad0d3c231215f2a42d474f9ad02_prof);

        
        $__internal_b69dd24879f3d942bfcbc5df3e968dc5f40a42389e658bc52b336bd5f49d2359->leave($__internal_b69dd24879f3d942bfcbc5df3e968dc5f40a42389e658bc52b336bd5f49d2359_prof);

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
