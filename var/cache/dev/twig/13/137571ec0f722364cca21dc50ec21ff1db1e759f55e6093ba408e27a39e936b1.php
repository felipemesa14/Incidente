<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_66a8b68180693263d7f031e29a2629897e8928cc77449052ee05a35fb96aba2d extends Twig_Template
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
        $__internal_ab036b7bcae0371d352b403e75ea34406624f1b6c1d2fa4393a779023552d29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab036b7bcae0371d352b403e75ea34406624f1b6c1d2fa4393a779023552d29b->enter($__internal_ab036b7bcae0371d352b403e75ea34406624f1b6c1d2fa4393a779023552d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_19241aaacd1b2a704ae7fbf1bc68cc6059ec0dfc2ee87cf99244a30603c2ad0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19241aaacd1b2a704ae7fbf1bc68cc6059ec0dfc2ee87cf99244a30603c2ad0b->enter($__internal_19241aaacd1b2a704ae7fbf1bc68cc6059ec0dfc2ee87cf99244a30603c2ad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ab036b7bcae0371d352b403e75ea34406624f1b6c1d2fa4393a779023552d29b->leave($__internal_ab036b7bcae0371d352b403e75ea34406624f1b6c1d2fa4393a779023552d29b_prof);

        
        $__internal_19241aaacd1b2a704ae7fbf1bc68cc6059ec0dfc2ee87cf99244a30603c2ad0b->leave($__internal_19241aaacd1b2a704ae7fbf1bc68cc6059ec0dfc2ee87cf99244a30603c2ad0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
