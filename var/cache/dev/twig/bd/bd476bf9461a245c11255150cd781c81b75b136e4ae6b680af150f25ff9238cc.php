<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_127c19dda0ab243c772a621e342d400645ee900187891ef4016fc2a8e80459fb extends Twig_Template
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
        $__internal_926d85c9932b2fdedeb4e62e8e6b05075060b6de4528143fd91391615bd2071e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926d85c9932b2fdedeb4e62e8e6b05075060b6de4528143fd91391615bd2071e->enter($__internal_926d85c9932b2fdedeb4e62e8e6b05075060b6de4528143fd91391615bd2071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b5424787da61407d718eac70c2fa75947edcca25f5b57a318382c2a2a8c2b88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5424787da61407d718eac70c2fa75947edcca25f5b57a318382c2a2a8c2b88c->enter($__internal_b5424787da61407d718eac70c2fa75947edcca25f5b57a318382c2a2a8c2b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_926d85c9932b2fdedeb4e62e8e6b05075060b6de4528143fd91391615bd2071e->leave($__internal_926d85c9932b2fdedeb4e62e8e6b05075060b6de4528143fd91391615bd2071e_prof);

        
        $__internal_b5424787da61407d718eac70c2fa75947edcca25f5b57a318382c2a2a8c2b88c->leave($__internal_b5424787da61407d718eac70c2fa75947edcca25f5b57a318382c2a2a8c2b88c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
