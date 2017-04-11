<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7c971c63910ff00b9eaf39f6790ecda918dd0ecf98c0f7930ef444df604ae00b extends Twig_Template
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
        $__internal_543f521c49f19d926f2540442a05a4d6976b6db2a6c1a81bfcfaa535a1088f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543f521c49f19d926f2540442a05a4d6976b6db2a6c1a81bfcfaa535a1088f62->enter($__internal_543f521c49f19d926f2540442a05a4d6976b6db2a6c1a81bfcfaa535a1088f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_778a6d4a561412849f502452a4d7826fbb40cca52def8c2d89278d874436cb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778a6d4a561412849f502452a4d7826fbb40cca52def8c2d89278d874436cb13->enter($__internal_778a6d4a561412849f502452a4d7826fbb40cca52def8c2d89278d874436cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_543f521c49f19d926f2540442a05a4d6976b6db2a6c1a81bfcfaa535a1088f62->leave($__internal_543f521c49f19d926f2540442a05a4d6976b6db2a6c1a81bfcfaa535a1088f62_prof);

        
        $__internal_778a6d4a561412849f502452a4d7826fbb40cca52def8c2d89278d874436cb13->leave($__internal_778a6d4a561412849f502452a4d7826fbb40cca52def8c2d89278d874436cb13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
