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
        $__internal_68f98542c724a9d97b20b186f10c9531c6247d42fcfb920ab1962fe7fa390d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f98542c724a9d97b20b186f10c9531c6247d42fcfb920ab1962fe7fa390d0e->enter($__internal_68f98542c724a9d97b20b186f10c9531c6247d42fcfb920ab1962fe7fa390d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a357b50d668d1769c83c920df8e9814d5d087d5a88353327b0b83c804b38e78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a357b50d668d1769c83c920df8e9814d5d087d5a88353327b0b83c804b38e78b->enter($__internal_a357b50d668d1769c83c920df8e9814d5d087d5a88353327b0b83c804b38e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_68f98542c724a9d97b20b186f10c9531c6247d42fcfb920ab1962fe7fa390d0e->leave($__internal_68f98542c724a9d97b20b186f10c9531c6247d42fcfb920ab1962fe7fa390d0e_prof);

        
        $__internal_a357b50d668d1769c83c920df8e9814d5d087d5a88353327b0b83c804b38e78b->leave($__internal_a357b50d668d1769c83c920df8e9814d5d087d5a88353327b0b83c804b38e78b_prof);

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
