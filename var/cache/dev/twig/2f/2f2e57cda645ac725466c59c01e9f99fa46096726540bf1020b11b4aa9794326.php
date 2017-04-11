<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_aaf915b9b80234b151840318d9dd6bc329eab58e8bffe4cde9bac9b4e32536eb extends Twig_Template
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
        $__internal_1759d7cba393c2ad9b2102006c50171fad9b8bc6fe108f3c8cd5c8ee7371aafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1759d7cba393c2ad9b2102006c50171fad9b8bc6fe108f3c8cd5c8ee7371aafb->enter($__internal_1759d7cba393c2ad9b2102006c50171fad9b8bc6fe108f3c8cd5c8ee7371aafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e730dd0954eed71dfaec00e6d1a226c4c2cd7ae760a930763a08d4fc722cb087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e730dd0954eed71dfaec00e6d1a226c4c2cd7ae760a930763a08d4fc722cb087->enter($__internal_e730dd0954eed71dfaec00e6d1a226c4c2cd7ae760a930763a08d4fc722cb087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1759d7cba393c2ad9b2102006c50171fad9b8bc6fe108f3c8cd5c8ee7371aafb->leave($__internal_1759d7cba393c2ad9b2102006c50171fad9b8bc6fe108f3c8cd5c8ee7371aafb_prof);

        
        $__internal_e730dd0954eed71dfaec00e6d1a226c4c2cd7ae760a930763a08d4fc722cb087->leave($__internal_e730dd0954eed71dfaec00e6d1a226c4c2cd7ae760a930763a08d4fc722cb087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
