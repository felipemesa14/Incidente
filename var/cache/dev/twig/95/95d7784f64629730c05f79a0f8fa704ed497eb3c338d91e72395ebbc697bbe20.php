<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_aa3c7c5caf4e0fd7ba477e505a427cd5117995c591e367c5eec7b9e5e99cb0dc extends Twig_Template
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
        $__internal_74c7f97c275e7cf757aeb3ecd3896622d2ca92711b54f154a454b3db8515a2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c7f97c275e7cf757aeb3ecd3896622d2ca92711b54f154a454b3db8515a2b0->enter($__internal_74c7f97c275e7cf757aeb3ecd3896622d2ca92711b54f154a454b3db8515a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_71cd0930110a802de9d9934c865fc6226064d8e2640239135d4db2fc70e8a691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cd0930110a802de9d9934c865fc6226064d8e2640239135d4db2fc70e8a691->enter($__internal_71cd0930110a802de9d9934c865fc6226064d8e2640239135d4db2fc70e8a691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_74c7f97c275e7cf757aeb3ecd3896622d2ca92711b54f154a454b3db8515a2b0->leave($__internal_74c7f97c275e7cf757aeb3ecd3896622d2ca92711b54f154a454b3db8515a2b0_prof);

        
        $__internal_71cd0930110a802de9d9934c865fc6226064d8e2640239135d4db2fc70e8a691->leave($__internal_71cd0930110a802de9d9934c865fc6226064d8e2640239135d4db2fc70e8a691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
