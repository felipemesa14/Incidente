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
        $__internal_290a154259c964ab6ef48bf9e66540cbb7a9772b242b7de64dc9f8c750f6e5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290a154259c964ab6ef48bf9e66540cbb7a9772b242b7de64dc9f8c750f6e5bd->enter($__internal_290a154259c964ab6ef48bf9e66540cbb7a9772b242b7de64dc9f8c750f6e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_324e147c9b8db296ef51de8fee1cd7de232297708e66b59304e2aa5692d4fc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324e147c9b8db296ef51de8fee1cd7de232297708e66b59304e2aa5692d4fc4a->enter($__internal_324e147c9b8db296ef51de8fee1cd7de232297708e66b59304e2aa5692d4fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_290a154259c964ab6ef48bf9e66540cbb7a9772b242b7de64dc9f8c750f6e5bd->leave($__internal_290a154259c964ab6ef48bf9e66540cbb7a9772b242b7de64dc9f8c750f6e5bd_prof);

        
        $__internal_324e147c9b8db296ef51de8fee1cd7de232297708e66b59304e2aa5692d4fc4a->leave($__internal_324e147c9b8db296ef51de8fee1cd7de232297708e66b59304e2aa5692d4fc4a_prof);

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
