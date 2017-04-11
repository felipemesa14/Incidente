<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e79e243286defd6fe911f4f0ac2d0e625470296965235704a6289d9493cf4e40 extends Twig_Template
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
        $__internal_1f6cc535d08b9cde937980b4b7ac8293a89c15f8c7374b9876341e3c69579604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6cc535d08b9cde937980b4b7ac8293a89c15f8c7374b9876341e3c69579604->enter($__internal_1f6cc535d08b9cde937980b4b7ac8293a89c15f8c7374b9876341e3c69579604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_75caf91b8c4ad37354a36bd7b8ea36b9694683af22541c9d772d7c658f379897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75caf91b8c4ad37354a36bd7b8ea36b9694683af22541c9d772d7c658f379897->enter($__internal_75caf91b8c4ad37354a36bd7b8ea36b9694683af22541c9d772d7c658f379897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1f6cc535d08b9cde937980b4b7ac8293a89c15f8c7374b9876341e3c69579604->leave($__internal_1f6cc535d08b9cde937980b4b7ac8293a89c15f8c7374b9876341e3c69579604_prof);

        
        $__internal_75caf91b8c4ad37354a36bd7b8ea36b9694683af22541c9d772d7c658f379897->leave($__internal_75caf91b8c4ad37354a36bd7b8ea36b9694683af22541c9d772d7c658f379897_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
