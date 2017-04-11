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
        $__internal_0657f3acd8a1a5214303770eee287763499a4b62fa0e27c6342b717511483465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0657f3acd8a1a5214303770eee287763499a4b62fa0e27c6342b717511483465->enter($__internal_0657f3acd8a1a5214303770eee287763499a4b62fa0e27c6342b717511483465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e25acab961302a729517152558fd2816f61ad74420e454aad88673cfc697d66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25acab961302a729517152558fd2816f61ad74420e454aad88673cfc697d66e->enter($__internal_e25acab961302a729517152558fd2816f61ad74420e454aad88673cfc697d66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0657f3acd8a1a5214303770eee287763499a4b62fa0e27c6342b717511483465->leave($__internal_0657f3acd8a1a5214303770eee287763499a4b62fa0e27c6342b717511483465_prof);

        
        $__internal_e25acab961302a729517152558fd2816f61ad74420e454aad88673cfc697d66e->leave($__internal_e25acab961302a729517152558fd2816f61ad74420e454aad88673cfc697d66e_prof);

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
