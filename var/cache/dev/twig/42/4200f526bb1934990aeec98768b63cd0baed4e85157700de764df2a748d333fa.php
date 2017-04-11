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
        $__internal_77b92e247ac9d7be88ba0906dc4c8aa77527ac8a89c607e131e32088806f231b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b92e247ac9d7be88ba0906dc4c8aa77527ac8a89c607e131e32088806f231b->enter($__internal_77b92e247ac9d7be88ba0906dc4c8aa77527ac8a89c607e131e32088806f231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_24b10eb28a4da8095cc53d8d0683dd23d5e2830fcc9bd92a615b52fc9c11c1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b10eb28a4da8095cc53d8d0683dd23d5e2830fcc9bd92a615b52fc9c11c1cb->enter($__internal_24b10eb28a4da8095cc53d8d0683dd23d5e2830fcc9bd92a615b52fc9c11c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77b92e247ac9d7be88ba0906dc4c8aa77527ac8a89c607e131e32088806f231b->leave($__internal_77b92e247ac9d7be88ba0906dc4c8aa77527ac8a89c607e131e32088806f231b_prof);

        
        $__internal_24b10eb28a4da8095cc53d8d0683dd23d5e2830fcc9bd92a615b52fc9c11c1cb->leave($__internal_24b10eb28a4da8095cc53d8d0683dd23d5e2830fcc9bd92a615b52fc9c11c1cb_prof);

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
