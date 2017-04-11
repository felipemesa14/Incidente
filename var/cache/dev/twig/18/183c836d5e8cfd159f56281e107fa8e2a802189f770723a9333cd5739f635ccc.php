<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d52243829cefa4a9c25bf5adbc23154dd49d09b5a03d46adeda006783df239c1 extends Twig_Template
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
        $__internal_46eb6e1d261f9ffeea9d53b5cfdf50b81c17813001b012dd6c249b63d2098313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46eb6e1d261f9ffeea9d53b5cfdf50b81c17813001b012dd6c249b63d2098313->enter($__internal_46eb6e1d261f9ffeea9d53b5cfdf50b81c17813001b012dd6c249b63d2098313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e28e25a9410ca1bb00691fc5cec76ccc29e7fc6e2e3bd11cbb36e61dd21c55bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28e25a9410ca1bb00691fc5cec76ccc29e7fc6e2e3bd11cbb36e61dd21c55bf->enter($__internal_e28e25a9410ca1bb00691fc5cec76ccc29e7fc6e2e3bd11cbb36e61dd21c55bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_46eb6e1d261f9ffeea9d53b5cfdf50b81c17813001b012dd6c249b63d2098313->leave($__internal_46eb6e1d261f9ffeea9d53b5cfdf50b81c17813001b012dd6c249b63d2098313_prof);

        
        $__internal_e28e25a9410ca1bb00691fc5cec76ccc29e7fc6e2e3bd11cbb36e61dd21c55bf->leave($__internal_e28e25a9410ca1bb00691fc5cec76ccc29e7fc6e2e3bd11cbb36e61dd21c55bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
