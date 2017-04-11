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
        $__internal_66a71a78768585bc23ad780caebab03a78f111b23e2a2a00a16414b1f7ba1c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a71a78768585bc23ad780caebab03a78f111b23e2a2a00a16414b1f7ba1c05->enter($__internal_66a71a78768585bc23ad780caebab03a78f111b23e2a2a00a16414b1f7ba1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a7b79628acc476afbad09ef259a38f3bff73e7561b1bd1c4140b2d49ce9d4b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b79628acc476afbad09ef259a38f3bff73e7561b1bd1c4140b2d49ce9d4b16->enter($__internal_a7b79628acc476afbad09ef259a38f3bff73e7561b1bd1c4140b2d49ce9d4b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_66a71a78768585bc23ad780caebab03a78f111b23e2a2a00a16414b1f7ba1c05->leave($__internal_66a71a78768585bc23ad780caebab03a78f111b23e2a2a00a16414b1f7ba1c05_prof);

        
        $__internal_a7b79628acc476afbad09ef259a38f3bff73e7561b1bd1c4140b2d49ce9d4b16->leave($__internal_a7b79628acc476afbad09ef259a38f3bff73e7561b1bd1c4140b2d49ce9d4b16_prof);

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
