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
        $__internal_cd73051cd1077057516509d4811058e7f52c6e962c3f5ca017eba1ba268d7038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd73051cd1077057516509d4811058e7f52c6e962c3f5ca017eba1ba268d7038->enter($__internal_cd73051cd1077057516509d4811058e7f52c6e962c3f5ca017eba1ba268d7038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8ded91a42394ba5aae5896786d2a2e05919572a6a2b4d1c77b3a7a3e8040f86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ded91a42394ba5aae5896786d2a2e05919572a6a2b4d1c77b3a7a3e8040f86a->enter($__internal_8ded91a42394ba5aae5896786d2a2e05919572a6a2b4d1c77b3a7a3e8040f86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cd73051cd1077057516509d4811058e7f52c6e962c3f5ca017eba1ba268d7038->leave($__internal_cd73051cd1077057516509d4811058e7f52c6e962c3f5ca017eba1ba268d7038_prof);

        
        $__internal_8ded91a42394ba5aae5896786d2a2e05919572a6a2b4d1c77b3a7a3e8040f86a->leave($__internal_8ded91a42394ba5aae5896786d2a2e05919572a6a2b4d1c77b3a7a3e8040f86a_prof);

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
