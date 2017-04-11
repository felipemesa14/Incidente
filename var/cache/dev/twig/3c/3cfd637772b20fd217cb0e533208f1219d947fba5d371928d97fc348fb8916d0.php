<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_161d6dee59d31e0ac337c84e2dfa014d63af49a59f8ede901f2e432482679f65 extends Twig_Template
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
        $__internal_724acff53adebd1911ad379935dcbd23082141b94b0b2aedf3ae40c2e5379f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724acff53adebd1911ad379935dcbd23082141b94b0b2aedf3ae40c2e5379f98->enter($__internal_724acff53adebd1911ad379935dcbd23082141b94b0b2aedf3ae40c2e5379f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3bb8c947b9425509c38da1e6893ac95aec13ee9909ef7c11c0b7672897f385dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb8c947b9425509c38da1e6893ac95aec13ee9909ef7c11c0b7672897f385dd->enter($__internal_3bb8c947b9425509c38da1e6893ac95aec13ee9909ef7c11c0b7672897f385dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_724acff53adebd1911ad379935dcbd23082141b94b0b2aedf3ae40c2e5379f98->leave($__internal_724acff53adebd1911ad379935dcbd23082141b94b0b2aedf3ae40c2e5379f98_prof);

        
        $__internal_3bb8c947b9425509c38da1e6893ac95aec13ee9909ef7c11c0b7672897f385dd->leave($__internal_3bb8c947b9425509c38da1e6893ac95aec13ee9909ef7c11c0b7672897f385dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
