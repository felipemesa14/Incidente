<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e79e243286defd6fe911f4f0ac2d0e625470296965235704a6289d9493cf4e40 extends Twig_Template
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
        $__internal_355d081fd476ac7e87a1c74df699a54f6e856ec6b0dc8985380739b3eabc179d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355d081fd476ac7e87a1c74df699a54f6e856ec6b0dc8985380739b3eabc179d->enter($__internal_355d081fd476ac7e87a1c74df699a54f6e856ec6b0dc8985380739b3eabc179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b55b65b766642835ba670c5ab1df45bc217e3192aac546e1582392505fc08c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55b65b766642835ba670c5ab1df45bc217e3192aac546e1582392505fc08c09->enter($__internal_b55b65b766642835ba670c5ab1df45bc217e3192aac546e1582392505fc08c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_355d081fd476ac7e87a1c74df699a54f6e856ec6b0dc8985380739b3eabc179d->leave($__internal_355d081fd476ac7e87a1c74df699a54f6e856ec6b0dc8985380739b3eabc179d_prof);

        
        $__internal_b55b65b766642835ba670c5ab1df45bc217e3192aac546e1582392505fc08c09->leave($__internal_b55b65b766642835ba670c5ab1df45bc217e3192aac546e1582392505fc08c09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
