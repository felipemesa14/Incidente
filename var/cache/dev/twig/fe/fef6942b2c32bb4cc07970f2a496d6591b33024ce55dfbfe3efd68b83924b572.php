<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a809fb003cf986f5e40e10c9dc9840db8d5b9f6bda07f31b3ea0ffe56bce8e6c extends Twig_Template
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
        $__internal_c362b8d836014e7c994d0e6005ff8cd4267d9a7f6332ab7fb73dc02580fe96e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c362b8d836014e7c994d0e6005ff8cd4267d9a7f6332ab7fb73dc02580fe96e9->enter($__internal_c362b8d836014e7c994d0e6005ff8cd4267d9a7f6332ab7fb73dc02580fe96e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2a404df18473e06399fda36c2a5b050edf92fa7046fb22ee38157b41b3446b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a404df18473e06399fda36c2a5b050edf92fa7046fb22ee38157b41b3446b48->enter($__internal_2a404df18473e06399fda36c2a5b050edf92fa7046fb22ee38157b41b3446b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c362b8d836014e7c994d0e6005ff8cd4267d9a7f6332ab7fb73dc02580fe96e9->leave($__internal_c362b8d836014e7c994d0e6005ff8cd4267d9a7f6332ab7fb73dc02580fe96e9_prof);

        
        $__internal_2a404df18473e06399fda36c2a5b050edf92fa7046fb22ee38157b41b3446b48->leave($__internal_2a404df18473e06399fda36c2a5b050edf92fa7046fb22ee38157b41b3446b48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
