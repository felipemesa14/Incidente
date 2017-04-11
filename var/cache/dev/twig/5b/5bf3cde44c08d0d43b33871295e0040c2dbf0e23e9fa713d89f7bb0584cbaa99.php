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
        $__internal_89027f8cacafe09cb32a28e064457bc1b27ff29c83642e8a8be10f1fba80ec5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89027f8cacafe09cb32a28e064457bc1b27ff29c83642e8a8be10f1fba80ec5a->enter($__internal_89027f8cacafe09cb32a28e064457bc1b27ff29c83642e8a8be10f1fba80ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_52d1145bd4a5db6b96d9660f8915405ed62cf3e5221a01e0d196ee2c930138e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d1145bd4a5db6b96d9660f8915405ed62cf3e5221a01e0d196ee2c930138e0->enter($__internal_52d1145bd4a5db6b96d9660f8915405ed62cf3e5221a01e0d196ee2c930138e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_89027f8cacafe09cb32a28e064457bc1b27ff29c83642e8a8be10f1fba80ec5a->leave($__internal_89027f8cacafe09cb32a28e064457bc1b27ff29c83642e8a8be10f1fba80ec5a_prof);

        
        $__internal_52d1145bd4a5db6b96d9660f8915405ed62cf3e5221a01e0d196ee2c930138e0->leave($__internal_52d1145bd4a5db6b96d9660f8915405ed62cf3e5221a01e0d196ee2c930138e0_prof);

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
