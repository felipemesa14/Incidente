<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a01563300d3168d84424f22a3305b440ec384a53d519784819e1c85045ea0204 extends Twig_Template
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
        $__internal_707b8bd05ff0eec77b9a9721fab0120ed585787b979d5e5133f36ba6cb661297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707b8bd05ff0eec77b9a9721fab0120ed585787b979d5e5133f36ba6cb661297->enter($__internal_707b8bd05ff0eec77b9a9721fab0120ed585787b979d5e5133f36ba6cb661297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a46762d718cd565e78473fe84d3073853e01c309bc1df33cea7df1e0fcd3f6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46762d718cd565e78473fe84d3073853e01c309bc1df33cea7df1e0fcd3f6b0->enter($__internal_a46762d718cd565e78473fe84d3073853e01c309bc1df33cea7df1e0fcd3f6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_707b8bd05ff0eec77b9a9721fab0120ed585787b979d5e5133f36ba6cb661297->leave($__internal_707b8bd05ff0eec77b9a9721fab0120ed585787b979d5e5133f36ba6cb661297_prof);

        
        $__internal_a46762d718cd565e78473fe84d3073853e01c309bc1df33cea7df1e0fcd3f6b0->leave($__internal_a46762d718cd565e78473fe84d3073853e01c309bc1df33cea7df1e0fcd3f6b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
