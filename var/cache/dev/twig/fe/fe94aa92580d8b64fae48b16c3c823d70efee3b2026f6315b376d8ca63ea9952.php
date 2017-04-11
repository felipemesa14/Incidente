<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_102a1dbf8a28e1a4c075dc350e4bf60727dcd45a44e6534f7245cd2fcd5bb939 extends Twig_Template
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
        $__internal_06032fe3a50de28b7ea88e047ef8b90b6c8b29d20449098ac49b62f087e9f81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06032fe3a50de28b7ea88e047ef8b90b6c8b29d20449098ac49b62f087e9f81d->enter($__internal_06032fe3a50de28b7ea88e047ef8b90b6c8b29d20449098ac49b62f087e9f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_77a035ecf030dbdbfefbed9c0192b0779c83d53fe35cb4bceec2efd44ca65e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a035ecf030dbdbfefbed9c0192b0779c83d53fe35cb4bceec2efd44ca65e2b->enter($__internal_77a035ecf030dbdbfefbed9c0192b0779c83d53fe35cb4bceec2efd44ca65e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_06032fe3a50de28b7ea88e047ef8b90b6c8b29d20449098ac49b62f087e9f81d->leave($__internal_06032fe3a50de28b7ea88e047ef8b90b6c8b29d20449098ac49b62f087e9f81d_prof);

        
        $__internal_77a035ecf030dbdbfefbed9c0192b0779c83d53fe35cb4bceec2efd44ca65e2b->leave($__internal_77a035ecf030dbdbfefbed9c0192b0779c83d53fe35cb4bceec2efd44ca65e2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
