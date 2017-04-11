<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_03ecd310c3a8c431f2cecd638dfbce72e3c70b3fd91735bf7b7e63ef846a63de extends Twig_Template
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
        $__internal_f5309ca11c2d9c61f56e5c88437f8fda2cf22604748847c2266040462a24512f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5309ca11c2d9c61f56e5c88437f8fda2cf22604748847c2266040462a24512f->enter($__internal_f5309ca11c2d9c61f56e5c88437f8fda2cf22604748847c2266040462a24512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_72967b81c49be276ca243a93375e0dc47019fba247dee22103ace18396b7626c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72967b81c49be276ca243a93375e0dc47019fba247dee22103ace18396b7626c->enter($__internal_72967b81c49be276ca243a93375e0dc47019fba247dee22103ace18396b7626c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f5309ca11c2d9c61f56e5c88437f8fda2cf22604748847c2266040462a24512f->leave($__internal_f5309ca11c2d9c61f56e5c88437f8fda2cf22604748847c2266040462a24512f_prof);

        
        $__internal_72967b81c49be276ca243a93375e0dc47019fba247dee22103ace18396b7626c->leave($__internal_72967b81c49be276ca243a93375e0dc47019fba247dee22103ace18396b7626c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
