<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2979047830bbf87290a6dc215eb33722609d1bb5a822ca37e259a6a6fac658a9 extends Twig_Template
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
        $__internal_95fbba189cfff6a2371837d3053def6e92fcc8a976d42f30d5ac67f37978038d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fbba189cfff6a2371837d3053def6e92fcc8a976d42f30d5ac67f37978038d->enter($__internal_95fbba189cfff6a2371837d3053def6e92fcc8a976d42f30d5ac67f37978038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c9ac566bc56a39434aa1204536ae6426e302ddbf0613e565346ee8418dcdbe3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ac566bc56a39434aa1204536ae6426e302ddbf0613e565346ee8418dcdbe3d->enter($__internal_c9ac566bc56a39434aa1204536ae6426e302ddbf0613e565346ee8418dcdbe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_95fbba189cfff6a2371837d3053def6e92fcc8a976d42f30d5ac67f37978038d->leave($__internal_95fbba189cfff6a2371837d3053def6e92fcc8a976d42f30d5ac67f37978038d_prof);

        
        $__internal_c9ac566bc56a39434aa1204536ae6426e302ddbf0613e565346ee8418dcdbe3d->leave($__internal_c9ac566bc56a39434aa1204536ae6426e302ddbf0613e565346ee8418dcdbe3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
