<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6bf846d77e5fd80078dcb7608da017989fbaf95173385876e483af79f32dd6c8 extends Twig_Template
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
        $__internal_28a761e93b9401cac5feeb587bd50a8d361157c00ea3901b805e3209c9c71d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a761e93b9401cac5feeb587bd50a8d361157c00ea3901b805e3209c9c71d69->enter($__internal_28a761e93b9401cac5feeb587bd50a8d361157c00ea3901b805e3209c9c71d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a5ccf7903c1f14517baeaf402a5f03b81ee63a15950779ccd0162f69470706a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ccf7903c1f14517baeaf402a5f03b81ee63a15950779ccd0162f69470706a5->enter($__internal_a5ccf7903c1f14517baeaf402a5f03b81ee63a15950779ccd0162f69470706a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_28a761e93b9401cac5feeb587bd50a8d361157c00ea3901b805e3209c9c71d69->leave($__internal_28a761e93b9401cac5feeb587bd50a8d361157c00ea3901b805e3209c9c71d69_prof);

        
        $__internal_a5ccf7903c1f14517baeaf402a5f03b81ee63a15950779ccd0162f69470706a5->leave($__internal_a5ccf7903c1f14517baeaf402a5f03b81ee63a15950779ccd0162f69470706a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
