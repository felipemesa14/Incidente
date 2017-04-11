<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8618b79921966665795c7e52517096c7267cfa1006b31e19cc1bcbce1588d9ce extends Twig_Template
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
        $__internal_22c354a327aead453930d667464fb2847d5af648d069b4fb11d103dd10de1c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c354a327aead453930d667464fb2847d5af648d069b4fb11d103dd10de1c03->enter($__internal_22c354a327aead453930d667464fb2847d5af648d069b4fb11d103dd10de1c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6259cb6dcd5461ce4700049960af8981a713958a5aa617f58540c284563a4200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6259cb6dcd5461ce4700049960af8981a713958a5aa617f58540c284563a4200->enter($__internal_6259cb6dcd5461ce4700049960af8981a713958a5aa617f58540c284563a4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_22c354a327aead453930d667464fb2847d5af648d069b4fb11d103dd10de1c03->leave($__internal_22c354a327aead453930d667464fb2847d5af648d069b4fb11d103dd10de1c03_prof);

        
        $__internal_6259cb6dcd5461ce4700049960af8981a713958a5aa617f58540c284563a4200->leave($__internal_6259cb6dcd5461ce4700049960af8981a713958a5aa617f58540c284563a4200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
