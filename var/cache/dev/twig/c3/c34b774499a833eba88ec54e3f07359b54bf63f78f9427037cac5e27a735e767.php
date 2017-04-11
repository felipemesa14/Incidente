<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_cddff569e3cd601c01cb651396761ed5cb928a2d6bd1d977f19f8a75f4845430 extends Twig_Template
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
        $__internal_d3bd051b42be5af95833b1723652df30e0ced6165374c156105b533068de94db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bd051b42be5af95833b1723652df30e0ced6165374c156105b533068de94db->enter($__internal_d3bd051b42be5af95833b1723652df30e0ced6165374c156105b533068de94db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c1520fad55b8e974ea2f45cb4a84c45348a7397a1b071a1371bf745f29a120e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1520fad55b8e974ea2f45cb4a84c45348a7397a1b071a1371bf745f29a120e1->enter($__internal_c1520fad55b8e974ea2f45cb4a84c45348a7397a1b071a1371bf745f29a120e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d3bd051b42be5af95833b1723652df30e0ced6165374c156105b533068de94db->leave($__internal_d3bd051b42be5af95833b1723652df30e0ced6165374c156105b533068de94db_prof);

        
        $__internal_c1520fad55b8e974ea2f45cb4a84c45348a7397a1b071a1371bf745f29a120e1->leave($__internal_c1520fad55b8e974ea2f45cb4a84c45348a7397a1b071a1371bf745f29a120e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
