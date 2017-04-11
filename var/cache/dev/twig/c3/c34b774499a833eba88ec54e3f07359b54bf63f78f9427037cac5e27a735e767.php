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
        $__internal_edae58e17e284201c4fe1521d507ab2d3189785fe63f2956addfeda734d38f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edae58e17e284201c4fe1521d507ab2d3189785fe63f2956addfeda734d38f5b->enter($__internal_edae58e17e284201c4fe1521d507ab2d3189785fe63f2956addfeda734d38f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_10d1081e6ea1c2b25d89322513db652b35cedfd88a2e9ecbf54ccbd2f08e8c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d1081e6ea1c2b25d89322513db652b35cedfd88a2e9ecbf54ccbd2f08e8c25->enter($__internal_10d1081e6ea1c2b25d89322513db652b35cedfd88a2e9ecbf54ccbd2f08e8c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_edae58e17e284201c4fe1521d507ab2d3189785fe63f2956addfeda734d38f5b->leave($__internal_edae58e17e284201c4fe1521d507ab2d3189785fe63f2956addfeda734d38f5b_prof);

        
        $__internal_10d1081e6ea1c2b25d89322513db652b35cedfd88a2e9ecbf54ccbd2f08e8c25->leave($__internal_10d1081e6ea1c2b25d89322513db652b35cedfd88a2e9ecbf54ccbd2f08e8c25_prof);

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
