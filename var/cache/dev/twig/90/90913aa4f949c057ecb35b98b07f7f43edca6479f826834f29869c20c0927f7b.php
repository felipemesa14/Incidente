<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_27f1b6c70421a7742374e030396f69a2455a54202b92dc1bbbcd6a17ade57e6f extends Twig_Template
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
        $__internal_83882b3a66ac595a33341c1ea57926ff3393dfa31f4cc010cde8e395274ba667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83882b3a66ac595a33341c1ea57926ff3393dfa31f4cc010cde8e395274ba667->enter($__internal_83882b3a66ac595a33341c1ea57926ff3393dfa31f4cc010cde8e395274ba667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a57cfd63d2a80d347fd68bd59c543f735c6ac80cf90fd478129a20a6a50c1d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57cfd63d2a80d347fd68bd59c543f735c6ac80cf90fd478129a20a6a50c1d9a->enter($__internal_a57cfd63d2a80d347fd68bd59c543f735c6ac80cf90fd478129a20a6a50c1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_83882b3a66ac595a33341c1ea57926ff3393dfa31f4cc010cde8e395274ba667->leave($__internal_83882b3a66ac595a33341c1ea57926ff3393dfa31f4cc010cde8e395274ba667_prof);

        
        $__internal_a57cfd63d2a80d347fd68bd59c543f735c6ac80cf90fd478129a20a6a50c1d9a->leave($__internal_a57cfd63d2a80d347fd68bd59c543f735c6ac80cf90fd478129a20a6a50c1d9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
