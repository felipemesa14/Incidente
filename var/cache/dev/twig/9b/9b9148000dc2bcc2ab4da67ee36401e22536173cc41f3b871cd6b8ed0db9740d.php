<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5f463592f107370d9bac6aa474d7f3d962e31ce22e496922e3b00b7c3ac1dfa7 extends Twig_Template
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
        $__internal_985437593c5ead9506a806d1da87fb99e95dbebdb5fa90d0cdc6985ec003d56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985437593c5ead9506a806d1da87fb99e95dbebdb5fa90d0cdc6985ec003d56c->enter($__internal_985437593c5ead9506a806d1da87fb99e95dbebdb5fa90d0cdc6985ec003d56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0c65c2c8436644217406f6b334f5fc43ea068d4679ea7583b1c1d49b5e7c7aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c65c2c8436644217406f6b334f5fc43ea068d4679ea7583b1c1d49b5e7c7aee->enter($__internal_0c65c2c8436644217406f6b334f5fc43ea068d4679ea7583b1c1d49b5e7c7aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_985437593c5ead9506a806d1da87fb99e95dbebdb5fa90d0cdc6985ec003d56c->leave($__internal_985437593c5ead9506a806d1da87fb99e95dbebdb5fa90d0cdc6985ec003d56c_prof);

        
        $__internal_0c65c2c8436644217406f6b334f5fc43ea068d4679ea7583b1c1d49b5e7c7aee->leave($__internal_0c65c2c8436644217406f6b334f5fc43ea068d4679ea7583b1c1d49b5e7c7aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
