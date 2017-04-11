<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_102a1dbf8a28e1a4c075dc350e4bf60727dcd45a44e6534f7245cd2fcd5bb939 extends Twig_Template
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
        $__internal_b5af7b0a33c0199ea4d4187b6014323ef8409a4980bf5a4f5320e62051a93e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5af7b0a33c0199ea4d4187b6014323ef8409a4980bf5a4f5320e62051a93e05->enter($__internal_b5af7b0a33c0199ea4d4187b6014323ef8409a4980bf5a4f5320e62051a93e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0948a18f1950e81e877d04fdb0723f6c2299d8e24c460908442fb1a90c967a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0948a18f1950e81e877d04fdb0723f6c2299d8e24c460908442fb1a90c967a89->enter($__internal_0948a18f1950e81e877d04fdb0723f6c2299d8e24c460908442fb1a90c967a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b5af7b0a33c0199ea4d4187b6014323ef8409a4980bf5a4f5320e62051a93e05->leave($__internal_b5af7b0a33c0199ea4d4187b6014323ef8409a4980bf5a4f5320e62051a93e05_prof);

        
        $__internal_0948a18f1950e81e877d04fdb0723f6c2299d8e24c460908442fb1a90c967a89->leave($__internal_0948a18f1950e81e877d04fdb0723f6c2299d8e24c460908442fb1a90c967a89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
