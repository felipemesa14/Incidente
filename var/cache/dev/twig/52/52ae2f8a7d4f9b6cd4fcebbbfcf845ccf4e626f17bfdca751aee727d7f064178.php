<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_92b1fc9bddf08bea472e7168900a50a11544dbece9a424b11c01f208b97f3f39 extends Twig_Template
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
        $__internal_cab27547dcc205d286d04961e05deea7a0c576909845c09710d68c9b918930a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab27547dcc205d286d04961e05deea7a0c576909845c09710d68c9b918930a8->enter($__internal_cab27547dcc205d286d04961e05deea7a0c576909845c09710d68c9b918930a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5ad5bcf6d1dde6383bca43b62c13882c84fef374405ce83c8beec2025b88fc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad5bcf6d1dde6383bca43b62c13882c84fef374405ce83c8beec2025b88fc69->enter($__internal_5ad5bcf6d1dde6383bca43b62c13882c84fef374405ce83c8beec2025b88fc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cab27547dcc205d286d04961e05deea7a0c576909845c09710d68c9b918930a8->leave($__internal_cab27547dcc205d286d04961e05deea7a0c576909845c09710d68c9b918930a8_prof);

        
        $__internal_5ad5bcf6d1dde6383bca43b62c13882c84fef374405ce83c8beec2025b88fc69->leave($__internal_5ad5bcf6d1dde6383bca43b62c13882c84fef374405ce83c8beec2025b88fc69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
