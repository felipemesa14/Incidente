<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8b1ebccae8c1f965c1c3ae5c7d45acd7b9b14ff16612f2277387d1e29a5f61d4 extends Twig_Template
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
        $__internal_e00d688d70fd2e63df5d23b1cb79e7bbc7285f5fe466c16bc071991c4689d378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00d688d70fd2e63df5d23b1cb79e7bbc7285f5fe466c16bc071991c4689d378->enter($__internal_e00d688d70fd2e63df5d23b1cb79e7bbc7285f5fe466c16bc071991c4689d378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_60a91823c191b070c9c3e2e99b9ac4cd10baa05fc6f142964888701f2d4d1e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a91823c191b070c9c3e2e99b9ac4cd10baa05fc6f142964888701f2d4d1e5f->enter($__internal_60a91823c191b070c9c3e2e99b9ac4cd10baa05fc6f142964888701f2d4d1e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e00d688d70fd2e63df5d23b1cb79e7bbc7285f5fe466c16bc071991c4689d378->leave($__internal_e00d688d70fd2e63df5d23b1cb79e7bbc7285f5fe466c16bc071991c4689d378_prof);

        
        $__internal_60a91823c191b070c9c3e2e99b9ac4cd10baa05fc6f142964888701f2d4d1e5f->leave($__internal_60a91823c191b070c9c3e2e99b9ac4cd10baa05fc6f142964888701f2d4d1e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
