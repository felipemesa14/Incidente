<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_127c19dda0ab243c772a621e342d400645ee900187891ef4016fc2a8e80459fb extends Twig_Template
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
        $__internal_3bdf616981f824581aded8467b97b9e987ff48c44605187a55d86a060948b96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdf616981f824581aded8467b97b9e987ff48c44605187a55d86a060948b96a->enter($__internal_3bdf616981f824581aded8467b97b9e987ff48c44605187a55d86a060948b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_00ffca27a9650fef3eb6856617da8cd3e371ede04ccbcd67f051b71d5f942f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ffca27a9650fef3eb6856617da8cd3e371ede04ccbcd67f051b71d5f942f09->enter($__internal_00ffca27a9650fef3eb6856617da8cd3e371ede04ccbcd67f051b71d5f942f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3bdf616981f824581aded8467b97b9e987ff48c44605187a55d86a060948b96a->leave($__internal_3bdf616981f824581aded8467b97b9e987ff48c44605187a55d86a060948b96a_prof);

        
        $__internal_00ffca27a9650fef3eb6856617da8cd3e371ede04ccbcd67f051b71d5f942f09->leave($__internal_00ffca27a9650fef3eb6856617da8cd3e371ede04ccbcd67f051b71d5f942f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
