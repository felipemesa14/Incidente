<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_2ea133dc03fbe0e149d9a24f8f72600e6baf026e3b6f1d9c66ff3b90bce0074a extends Twig_Template
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
        $__internal_e4a11fc96f17ece23aacbbe5e75fb794e71a22bae20865ad74abe2b1635c1693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a11fc96f17ece23aacbbe5e75fb794e71a22bae20865ad74abe2b1635c1693->enter($__internal_e4a11fc96f17ece23aacbbe5e75fb794e71a22bae20865ad74abe2b1635c1693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_90669d00b1553e30087dc1e1abc29ac9f2a30695481a793666ecf233c3451ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90669d00b1553e30087dc1e1abc29ac9f2a30695481a793666ecf233c3451ea1->enter($__internal_90669d00b1553e30087dc1e1abc29ac9f2a30695481a793666ecf233c3451ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e4a11fc96f17ece23aacbbe5e75fb794e71a22bae20865ad74abe2b1635c1693->leave($__internal_e4a11fc96f17ece23aacbbe5e75fb794e71a22bae20865ad74abe2b1635c1693_prof);

        
        $__internal_90669d00b1553e30087dc1e1abc29ac9f2a30695481a793666ecf233c3451ea1->leave($__internal_90669d00b1553e30087dc1e1abc29ac9f2a30695481a793666ecf233c3451ea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
