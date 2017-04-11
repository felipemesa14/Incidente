<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a01563300d3168d84424f22a3305b440ec384a53d519784819e1c85045ea0204 extends Twig_Template
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
        $__internal_d11658d39177ee5f0f855183e249e4d267fe49e5bd837eb5122ef65146aad4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11658d39177ee5f0f855183e249e4d267fe49e5bd837eb5122ef65146aad4ad->enter($__internal_d11658d39177ee5f0f855183e249e4d267fe49e5bd837eb5122ef65146aad4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_badc73a7ea354a0c2f3247ea68f7f411aff7543670b840d4ddf9435e4c8aff69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badc73a7ea354a0c2f3247ea68f7f411aff7543670b840d4ddf9435e4c8aff69->enter($__internal_badc73a7ea354a0c2f3247ea68f7f411aff7543670b840d4ddf9435e4c8aff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d11658d39177ee5f0f855183e249e4d267fe49e5bd837eb5122ef65146aad4ad->leave($__internal_d11658d39177ee5f0f855183e249e4d267fe49e5bd837eb5122ef65146aad4ad_prof);

        
        $__internal_badc73a7ea354a0c2f3247ea68f7f411aff7543670b840d4ddf9435e4c8aff69->leave($__internal_badc73a7ea354a0c2f3247ea68f7f411aff7543670b840d4ddf9435e4c8aff69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
