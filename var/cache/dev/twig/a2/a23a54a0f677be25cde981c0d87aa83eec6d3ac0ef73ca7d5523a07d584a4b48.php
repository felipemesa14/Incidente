<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8bee1791be9df3af4be600e32d18d5d008a40fa97ae98931b5cb43fe39dd1f76 extends Twig_Template
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
        $__internal_74c8d8ff45d9b559f61845d1d20427fdad98e565f8f0582b8b058e0d5a5bb866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c8d8ff45d9b559f61845d1d20427fdad98e565f8f0582b8b058e0d5a5bb866->enter($__internal_74c8d8ff45d9b559f61845d1d20427fdad98e565f8f0582b8b058e0d5a5bb866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ae34338e22c2cf5617c6d1df7e5d508e40fab7eabb332ad2c48b6f9c68947ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae34338e22c2cf5617c6d1df7e5d508e40fab7eabb332ad2c48b6f9c68947ff9->enter($__internal_ae34338e22c2cf5617c6d1df7e5d508e40fab7eabb332ad2c48b6f9c68947ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_74c8d8ff45d9b559f61845d1d20427fdad98e565f8f0582b8b058e0d5a5bb866->leave($__internal_74c8d8ff45d9b559f61845d1d20427fdad98e565f8f0582b8b058e0d5a5bb866_prof);

        
        $__internal_ae34338e22c2cf5617c6d1df7e5d508e40fab7eabb332ad2c48b6f9c68947ff9->leave($__internal_ae34338e22c2cf5617c6d1df7e5d508e40fab7eabb332ad2c48b6f9c68947ff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
