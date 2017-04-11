<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_841481ba93d3d384361ff3ddc3f8d7973a92aa45f45711965f690995812a2370 extends Twig_Template
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
        $__internal_d93e3ea61a918452a33e608c0012385f3e2a3d791c5a92047053f5b805a81f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93e3ea61a918452a33e608c0012385f3e2a3d791c5a92047053f5b805a81f6d->enter($__internal_d93e3ea61a918452a33e608c0012385f3e2a3d791c5a92047053f5b805a81f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_42774d30fe4cc84c2b6562717c4cf235d8b29651cf72f1a3a0dc8233c657fc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42774d30fe4cc84c2b6562717c4cf235d8b29651cf72f1a3a0dc8233c657fc68->enter($__internal_42774d30fe4cc84c2b6562717c4cf235d8b29651cf72f1a3a0dc8233c657fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d93e3ea61a918452a33e608c0012385f3e2a3d791c5a92047053f5b805a81f6d->leave($__internal_d93e3ea61a918452a33e608c0012385f3e2a3d791c5a92047053f5b805a81f6d_prof);

        
        $__internal_42774d30fe4cc84c2b6562717c4cf235d8b29651cf72f1a3a0dc8233c657fc68->leave($__internal_42774d30fe4cc84c2b6562717c4cf235d8b29651cf72f1a3a0dc8233c657fc68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
