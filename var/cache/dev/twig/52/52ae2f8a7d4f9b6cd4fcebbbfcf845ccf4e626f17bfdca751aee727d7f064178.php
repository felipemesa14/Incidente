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
        $__internal_399e18fe481baded131477eb148ca4ecdd56078903b55156c339bf88d51b3b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399e18fe481baded131477eb148ca4ecdd56078903b55156c339bf88d51b3b32->enter($__internal_399e18fe481baded131477eb148ca4ecdd56078903b55156c339bf88d51b3b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_431b5f2c9235d0c4fd8c14b3840ae5ca5905afd26e94a977d548a1a9bd12455c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431b5f2c9235d0c4fd8c14b3840ae5ca5905afd26e94a977d548a1a9bd12455c->enter($__internal_431b5f2c9235d0c4fd8c14b3840ae5ca5905afd26e94a977d548a1a9bd12455c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_399e18fe481baded131477eb148ca4ecdd56078903b55156c339bf88d51b3b32->leave($__internal_399e18fe481baded131477eb148ca4ecdd56078903b55156c339bf88d51b3b32_prof);

        
        $__internal_431b5f2c9235d0c4fd8c14b3840ae5ca5905afd26e94a977d548a1a9bd12455c->leave($__internal_431b5f2c9235d0c4fd8c14b3840ae5ca5905afd26e94a977d548a1a9bd12455c_prof);

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
