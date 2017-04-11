<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6bf846d77e5fd80078dcb7608da017989fbaf95173385876e483af79f32dd6c8 extends Twig_Template
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
        $__internal_bfb6c539f42f36ee74165c2e2b7385683e2da15243b58c989bceb690b6181357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb6c539f42f36ee74165c2e2b7385683e2da15243b58c989bceb690b6181357->enter($__internal_bfb6c539f42f36ee74165c2e2b7385683e2da15243b58c989bceb690b6181357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_416e710bd9b172bc680bde15986f1759ae19d2ad1dd691711f1bb1043078b942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416e710bd9b172bc680bde15986f1759ae19d2ad1dd691711f1bb1043078b942->enter($__internal_416e710bd9b172bc680bde15986f1759ae19d2ad1dd691711f1bb1043078b942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bfb6c539f42f36ee74165c2e2b7385683e2da15243b58c989bceb690b6181357->leave($__internal_bfb6c539f42f36ee74165c2e2b7385683e2da15243b58c989bceb690b6181357_prof);

        
        $__internal_416e710bd9b172bc680bde15986f1759ae19d2ad1dd691711f1bb1043078b942->leave($__internal_416e710bd9b172bc680bde15986f1759ae19d2ad1dd691711f1bb1043078b942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
