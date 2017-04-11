<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_33198e4bec5822447448b9fef7ee329ad98ceeeec07935faf68d7e056459660f extends Twig_Template
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
        $__internal_a00efb972657d9dcf9dbd40607d1fdb55313d7c142a9a03f8102d89df4e48d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00efb972657d9dcf9dbd40607d1fdb55313d7c142a9a03f8102d89df4e48d79->enter($__internal_a00efb972657d9dcf9dbd40607d1fdb55313d7c142a9a03f8102d89df4e48d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4183a3b808a37f5d0fee956bcf9e3d99532053a5bf21f7d350b9262d300824ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4183a3b808a37f5d0fee956bcf9e3d99532053a5bf21f7d350b9262d300824ed->enter($__internal_4183a3b808a37f5d0fee956bcf9e3d99532053a5bf21f7d350b9262d300824ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a00efb972657d9dcf9dbd40607d1fdb55313d7c142a9a03f8102d89df4e48d79->leave($__internal_a00efb972657d9dcf9dbd40607d1fdb55313d7c142a9a03f8102d89df4e48d79_prof);

        
        $__internal_4183a3b808a37f5d0fee956bcf9e3d99532053a5bf21f7d350b9262d300824ed->leave($__internal_4183a3b808a37f5d0fee956bcf9e3d99532053a5bf21f7d350b9262d300824ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
