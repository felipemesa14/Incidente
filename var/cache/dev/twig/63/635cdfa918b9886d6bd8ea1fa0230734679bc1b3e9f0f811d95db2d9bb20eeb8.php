<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_815747fc2d78d0ef812a7e0df2f100e5c2c24af801b31e2d57911f954b88256c extends Twig_Template
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
        $__internal_b76c0be291390436691158c420059bdf583eba2d2b9a0b9e9c292d50b7b510e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76c0be291390436691158c420059bdf583eba2d2b9a0b9e9c292d50b7b510e9->enter($__internal_b76c0be291390436691158c420059bdf583eba2d2b9a0b9e9c292d50b7b510e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_509842c0f2c83e79239b1e16dd6d8710be811543af453d21ea75e49a5ffb10e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509842c0f2c83e79239b1e16dd6d8710be811543af453d21ea75e49a5ffb10e1->enter($__internal_509842c0f2c83e79239b1e16dd6d8710be811543af453d21ea75e49a5ffb10e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b76c0be291390436691158c420059bdf583eba2d2b9a0b9e9c292d50b7b510e9->leave($__internal_b76c0be291390436691158c420059bdf583eba2d2b9a0b9e9c292d50b7b510e9_prof);

        
        $__internal_509842c0f2c83e79239b1e16dd6d8710be811543af453d21ea75e49a5ffb10e1->leave($__internal_509842c0f2c83e79239b1e16dd6d8710be811543af453d21ea75e49a5ffb10e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
