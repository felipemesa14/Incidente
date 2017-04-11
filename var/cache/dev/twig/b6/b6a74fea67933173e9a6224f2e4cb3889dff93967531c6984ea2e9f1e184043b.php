<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7421c61e4a67afe3aaa3b5a1c49dd0641f014615bc878068dfe104008dc6d5e6 extends Twig_Template
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
        $__internal_03c7c60212a72e8ab8d78b514c8737bb8474331a7a990fd7ae1d643a0596faa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c7c60212a72e8ab8d78b514c8737bb8474331a7a990fd7ae1d643a0596faa7->enter($__internal_03c7c60212a72e8ab8d78b514c8737bb8474331a7a990fd7ae1d643a0596faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_13e10342363b9d9d2bd546a5446587a160763d46f85319e4de85af0d8322cf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e10342363b9d9d2bd546a5446587a160763d46f85319e4de85af0d8322cf7e->enter($__internal_13e10342363b9d9d2bd546a5446587a160763d46f85319e4de85af0d8322cf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_03c7c60212a72e8ab8d78b514c8737bb8474331a7a990fd7ae1d643a0596faa7->leave($__internal_03c7c60212a72e8ab8d78b514c8737bb8474331a7a990fd7ae1d643a0596faa7_prof);

        
        $__internal_13e10342363b9d9d2bd546a5446587a160763d46f85319e4de85af0d8322cf7e->leave($__internal_13e10342363b9d9d2bd546a5446587a160763d46f85319e4de85af0d8322cf7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
