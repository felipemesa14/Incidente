<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_03ecd310c3a8c431f2cecd638dfbce72e3c70b3fd91735bf7b7e63ef846a63de extends Twig_Template
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
        $__internal_7aab51ce9375cb15e487cd1dd5aca1f6bc1f248c3767cf60483b88b84912653e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aab51ce9375cb15e487cd1dd5aca1f6bc1f248c3767cf60483b88b84912653e->enter($__internal_7aab51ce9375cb15e487cd1dd5aca1f6bc1f248c3767cf60483b88b84912653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4f807c01d7738d53c36c6ece80dd8d1a46021417b5496f0f72ae278bbd4ec0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f807c01d7738d53c36c6ece80dd8d1a46021417b5496f0f72ae278bbd4ec0ee->enter($__internal_4f807c01d7738d53c36c6ece80dd8d1a46021417b5496f0f72ae278bbd4ec0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7aab51ce9375cb15e487cd1dd5aca1f6bc1f248c3767cf60483b88b84912653e->leave($__internal_7aab51ce9375cb15e487cd1dd5aca1f6bc1f248c3767cf60483b88b84912653e_prof);

        
        $__internal_4f807c01d7738d53c36c6ece80dd8d1a46021417b5496f0f72ae278bbd4ec0ee->leave($__internal_4f807c01d7738d53c36c6ece80dd8d1a46021417b5496f0f72ae278bbd4ec0ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
