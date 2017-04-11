<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a38b6aefd4d7c74215bb36e03ad543428c192af58d5ae82b1fcfa7a665807ea1 extends Twig_Template
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
        $__internal_d32970500617965d00b706ca2cf60b1ef72c1a5e073596a52b8b461d541e5416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32970500617965d00b706ca2cf60b1ef72c1a5e073596a52b8b461d541e5416->enter($__internal_d32970500617965d00b706ca2cf60b1ef72c1a5e073596a52b8b461d541e5416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_79081ea72960568b7f8051dda3a15b9c7b0d5c1451c123cedf27170be6779302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79081ea72960568b7f8051dda3a15b9c7b0d5c1451c123cedf27170be6779302->enter($__internal_79081ea72960568b7f8051dda3a15b9c7b0d5c1451c123cedf27170be6779302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d32970500617965d00b706ca2cf60b1ef72c1a5e073596a52b8b461d541e5416->leave($__internal_d32970500617965d00b706ca2cf60b1ef72c1a5e073596a52b8b461d541e5416_prof);

        
        $__internal_79081ea72960568b7f8051dda3a15b9c7b0d5c1451c123cedf27170be6779302->leave($__internal_79081ea72960568b7f8051dda3a15b9c7b0d5c1451c123cedf27170be6779302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
