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
        $__internal_e5b6955a8ffffba17e93af58e09cf51c2918005fec3c1bf7196273888ebc31ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b6955a8ffffba17e93af58e09cf51c2918005fec3c1bf7196273888ebc31ed->enter($__internal_e5b6955a8ffffba17e93af58e09cf51c2918005fec3c1bf7196273888ebc31ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_15939c6fad0f7c28d3e8414e6726d1c030a776b330922440c4cb52189217596b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15939c6fad0f7c28d3e8414e6726d1c030a776b330922440c4cb52189217596b->enter($__internal_15939c6fad0f7c28d3e8414e6726d1c030a776b330922440c4cb52189217596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e5b6955a8ffffba17e93af58e09cf51c2918005fec3c1bf7196273888ebc31ed->leave($__internal_e5b6955a8ffffba17e93af58e09cf51c2918005fec3c1bf7196273888ebc31ed_prof);

        
        $__internal_15939c6fad0f7c28d3e8414e6726d1c030a776b330922440c4cb52189217596b->leave($__internal_15939c6fad0f7c28d3e8414e6726d1c030a776b330922440c4cb52189217596b_prof);

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
