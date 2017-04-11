<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_472d630c78ec154678ff70038489e6c113c1e0aefd619c6e7525a671e8921921 extends Twig_Template
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
        $__internal_c61596278dcba73775cc0f80db3c9eea435e266f2147a4ee0a390d2978b064f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61596278dcba73775cc0f80db3c9eea435e266f2147a4ee0a390d2978b064f0->enter($__internal_c61596278dcba73775cc0f80db3c9eea435e266f2147a4ee0a390d2978b064f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_94e909222c4dc948a5c74a321cda20345a30642af741f88f9ae2ad2abf66133d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e909222c4dc948a5c74a321cda20345a30642af741f88f9ae2ad2abf66133d->enter($__internal_94e909222c4dc948a5c74a321cda20345a30642af741f88f9ae2ad2abf66133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c61596278dcba73775cc0f80db3c9eea435e266f2147a4ee0a390d2978b064f0->leave($__internal_c61596278dcba73775cc0f80db3c9eea435e266f2147a4ee0a390d2978b064f0_prof);

        
        $__internal_94e909222c4dc948a5c74a321cda20345a30642af741f88f9ae2ad2abf66133d->leave($__internal_94e909222c4dc948a5c74a321cda20345a30642af741f88f9ae2ad2abf66133d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
