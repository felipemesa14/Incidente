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
        $__internal_9c87bfe52e4ac5c2ed0a3b46432375fc7da551f82cce7f1aedfe8472d647fb2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c87bfe52e4ac5c2ed0a3b46432375fc7da551f82cce7f1aedfe8472d647fb2f->enter($__internal_9c87bfe52e4ac5c2ed0a3b46432375fc7da551f82cce7f1aedfe8472d647fb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d6a81bca3168484b7740b4c9a07bc46701c78e310fd77e9b456fe73b062b2c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a81bca3168484b7740b4c9a07bc46701c78e310fd77e9b456fe73b062b2c2a->enter($__internal_d6a81bca3168484b7740b4c9a07bc46701c78e310fd77e9b456fe73b062b2c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9c87bfe52e4ac5c2ed0a3b46432375fc7da551f82cce7f1aedfe8472d647fb2f->leave($__internal_9c87bfe52e4ac5c2ed0a3b46432375fc7da551f82cce7f1aedfe8472d647fb2f_prof);

        
        $__internal_d6a81bca3168484b7740b4c9a07bc46701c78e310fd77e9b456fe73b062b2c2a->leave($__internal_d6a81bca3168484b7740b4c9a07bc46701c78e310fd77e9b456fe73b062b2c2a_prof);

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
