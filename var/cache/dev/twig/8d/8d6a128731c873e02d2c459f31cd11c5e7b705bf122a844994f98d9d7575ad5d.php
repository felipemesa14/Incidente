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
        $__internal_0f6ed5faea3947b610702d361174c649f24a4f41511c7c45b9d27da738e56d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6ed5faea3947b610702d361174c649f24a4f41511c7c45b9d27da738e56d86->enter($__internal_0f6ed5faea3947b610702d361174c649f24a4f41511c7c45b9d27da738e56d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b3d5aaeda6e9a5fadb79fdf93b9df55ce4c52c95cf1450cbf208e85e3281e2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d5aaeda6e9a5fadb79fdf93b9df55ce4c52c95cf1450cbf208e85e3281e2f6->enter($__internal_b3d5aaeda6e9a5fadb79fdf93b9df55ce4c52c95cf1450cbf208e85e3281e2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0f6ed5faea3947b610702d361174c649f24a4f41511c7c45b9d27da738e56d86->leave($__internal_0f6ed5faea3947b610702d361174c649f24a4f41511c7c45b9d27da738e56d86_prof);

        
        $__internal_b3d5aaeda6e9a5fadb79fdf93b9df55ce4c52c95cf1450cbf208e85e3281e2f6->leave($__internal_b3d5aaeda6e9a5fadb79fdf93b9df55ce4c52c95cf1450cbf208e85e3281e2f6_prof);

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
