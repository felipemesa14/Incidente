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
        $__internal_75ad767c2dea670170c0dd6d6a8a5860b02997f58bc99a1a5af37492780bbef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ad767c2dea670170c0dd6d6a8a5860b02997f58bc99a1a5af37492780bbef7->enter($__internal_75ad767c2dea670170c0dd6d6a8a5860b02997f58bc99a1a5af37492780bbef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_756f8a64ce32b76de2519c7e9c3d2ec0b8dee266600f41cdd6312effcda3f559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756f8a64ce32b76de2519c7e9c3d2ec0b8dee266600f41cdd6312effcda3f559->enter($__internal_756f8a64ce32b76de2519c7e9c3d2ec0b8dee266600f41cdd6312effcda3f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_75ad767c2dea670170c0dd6d6a8a5860b02997f58bc99a1a5af37492780bbef7->leave($__internal_75ad767c2dea670170c0dd6d6a8a5860b02997f58bc99a1a5af37492780bbef7_prof);

        
        $__internal_756f8a64ce32b76de2519c7e9c3d2ec0b8dee266600f41cdd6312effcda3f559->leave($__internal_756f8a64ce32b76de2519c7e9c3d2ec0b8dee266600f41cdd6312effcda3f559_prof);

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
