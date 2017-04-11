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
        $__internal_6b8a963719a2591fb566baf2856d4751f13ad636930f2b791245bdef2b05dc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8a963719a2591fb566baf2856d4751f13ad636930f2b791245bdef2b05dc48->enter($__internal_6b8a963719a2591fb566baf2856d4751f13ad636930f2b791245bdef2b05dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_310454605e4772599092ce47a7132a487b490386f0d7a3989562304f728fa7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310454605e4772599092ce47a7132a487b490386f0d7a3989562304f728fa7eb->enter($__internal_310454605e4772599092ce47a7132a487b490386f0d7a3989562304f728fa7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6b8a963719a2591fb566baf2856d4751f13ad636930f2b791245bdef2b05dc48->leave($__internal_6b8a963719a2591fb566baf2856d4751f13ad636930f2b791245bdef2b05dc48_prof);

        
        $__internal_310454605e4772599092ce47a7132a487b490386f0d7a3989562304f728fa7eb->leave($__internal_310454605e4772599092ce47a7132a487b490386f0d7a3989562304f728fa7eb_prof);

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
