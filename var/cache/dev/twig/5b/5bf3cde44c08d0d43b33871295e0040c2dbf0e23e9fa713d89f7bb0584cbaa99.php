<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_11b9675953ca6b2ee089637fa58d61f457cf042eea6c5568b9ebb4ab4766bb62 extends Twig_Template
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
        $__internal_e25c919654c0f7fc9f6a0a9d19181f769c7531e0c1ecb85f5404a8b3f5895e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25c919654c0f7fc9f6a0a9d19181f769c7531e0c1ecb85f5404a8b3f5895e6e->enter($__internal_e25c919654c0f7fc9f6a0a9d19181f769c7531e0c1ecb85f5404a8b3f5895e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_44e34be26110aa1cc16a843467ebe05db68e5a936eb2fef547228049f23bac95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e34be26110aa1cc16a843467ebe05db68e5a936eb2fef547228049f23bac95->enter($__internal_44e34be26110aa1cc16a843467ebe05db68e5a936eb2fef547228049f23bac95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e25c919654c0f7fc9f6a0a9d19181f769c7531e0c1ecb85f5404a8b3f5895e6e->leave($__internal_e25c919654c0f7fc9f6a0a9d19181f769c7531e0c1ecb85f5404a8b3f5895e6e_prof);

        
        $__internal_44e34be26110aa1cc16a843467ebe05db68e5a936eb2fef547228049f23bac95->leave($__internal_44e34be26110aa1cc16a843467ebe05db68e5a936eb2fef547228049f23bac95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
