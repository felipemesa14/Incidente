<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_66a8b68180693263d7f031e29a2629897e8928cc77449052ee05a35fb96aba2d extends Twig_Template
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
        $__internal_c40e98fd0489b86b28be3afececf2ac333b9c820cbec2a8cc462d3d863893fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40e98fd0489b86b28be3afececf2ac333b9c820cbec2a8cc462d3d863893fa5->enter($__internal_c40e98fd0489b86b28be3afececf2ac333b9c820cbec2a8cc462d3d863893fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3c99c050d4d20db2045d70657b8e0c109cc66c34730bdf8755cd724339c2e19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c99c050d4d20db2045d70657b8e0c109cc66c34730bdf8755cd724339c2e19d->enter($__internal_3c99c050d4d20db2045d70657b8e0c109cc66c34730bdf8755cd724339c2e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c40e98fd0489b86b28be3afececf2ac333b9c820cbec2a8cc462d3d863893fa5->leave($__internal_c40e98fd0489b86b28be3afececf2ac333b9c820cbec2a8cc462d3d863893fa5_prof);

        
        $__internal_3c99c050d4d20db2045d70657b8e0c109cc66c34730bdf8755cd724339c2e19d->leave($__internal_3c99c050d4d20db2045d70657b8e0c109cc66c34730bdf8755cd724339c2e19d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
