<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a3fdaceedc2f191788816d8df925875637ee03ce429bd3198bd09ad5793d760f extends Twig_Template
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
        $__internal_ea8aac8eb81d31bc3640587b6d4339bb9361385420208b786dd06410230b164a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8aac8eb81d31bc3640587b6d4339bb9361385420208b786dd06410230b164a->enter($__internal_ea8aac8eb81d31bc3640587b6d4339bb9361385420208b786dd06410230b164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_45cac7343f3c0bdcd4a6d7cec6643b40783f95c8306075a4f151c70251dbfed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cac7343f3c0bdcd4a6d7cec6643b40783f95c8306075a4f151c70251dbfed8->enter($__internal_45cac7343f3c0bdcd4a6d7cec6643b40783f95c8306075a4f151c70251dbfed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ea8aac8eb81d31bc3640587b6d4339bb9361385420208b786dd06410230b164a->leave($__internal_ea8aac8eb81d31bc3640587b6d4339bb9361385420208b786dd06410230b164a_prof);

        
        $__internal_45cac7343f3c0bdcd4a6d7cec6643b40783f95c8306075a4f151c70251dbfed8->leave($__internal_45cac7343f3c0bdcd4a6d7cec6643b40783f95c8306075a4f151c70251dbfed8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
