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
        $__internal_6f389c0adc7c1ecd377477ce29be2a617fe0bab6818c27f48b1d79a8e295f0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f389c0adc7c1ecd377477ce29be2a617fe0bab6818c27f48b1d79a8e295f0ff->enter($__internal_6f389c0adc7c1ecd377477ce29be2a617fe0bab6818c27f48b1d79a8e295f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a70292b9a896136f58c6c48e057def4b7acfcbf1d6fb07d16f9a586dfc27b079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70292b9a896136f58c6c48e057def4b7acfcbf1d6fb07d16f9a586dfc27b079->enter($__internal_a70292b9a896136f58c6c48e057def4b7acfcbf1d6fb07d16f9a586dfc27b079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6f389c0adc7c1ecd377477ce29be2a617fe0bab6818c27f48b1d79a8e295f0ff->leave($__internal_6f389c0adc7c1ecd377477ce29be2a617fe0bab6818c27f48b1d79a8e295f0ff_prof);

        
        $__internal_a70292b9a896136f58c6c48e057def4b7acfcbf1d6fb07d16f9a586dfc27b079->leave($__internal_a70292b9a896136f58c6c48e057def4b7acfcbf1d6fb07d16f9a586dfc27b079_prof);

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
