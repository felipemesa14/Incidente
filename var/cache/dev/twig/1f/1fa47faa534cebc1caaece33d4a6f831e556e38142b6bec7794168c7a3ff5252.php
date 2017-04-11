<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_54e096b26283ec0d16eaca8cfc64cd6d05bfb98236ed46c2f3aa2d3c024dc147 extends Twig_Template
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
        $__internal_c46ee637b6ba558c141a9727a91ae6c82c57725865d65b4b466cbd0de203a9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46ee637b6ba558c141a9727a91ae6c82c57725865d65b4b466cbd0de203a9bd->enter($__internal_c46ee637b6ba558c141a9727a91ae6c82c57725865d65b4b466cbd0de203a9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a3a9a723732612558cc8c315e8075e2fa130726ada3f4dfb89031f3255c287f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a9a723732612558cc8c315e8075e2fa130726ada3f4dfb89031f3255c287f1->enter($__internal_a3a9a723732612558cc8c315e8075e2fa130726ada3f4dfb89031f3255c287f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c46ee637b6ba558c141a9727a91ae6c82c57725865d65b4b466cbd0de203a9bd->leave($__internal_c46ee637b6ba558c141a9727a91ae6c82c57725865d65b4b466cbd0de203a9bd_prof);

        
        $__internal_a3a9a723732612558cc8c315e8075e2fa130726ada3f4dfb89031f3255c287f1->leave($__internal_a3a9a723732612558cc8c315e8075e2fa130726ada3f4dfb89031f3255c287f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
