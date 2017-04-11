<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7c971c63910ff00b9eaf39f6790ecda918dd0ecf98c0f7930ef444df604ae00b extends Twig_Template
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
        $__internal_76b352b043a158ee19056bc6855b8c3820e303bbba31a24b37e239756f00418b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b352b043a158ee19056bc6855b8c3820e303bbba31a24b37e239756f00418b->enter($__internal_76b352b043a158ee19056bc6855b8c3820e303bbba31a24b37e239756f00418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_38ab3d340cc81ebbc0bb5ae5eb273b23665b4b899a530e35526d9b7137fb6b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ab3d340cc81ebbc0bb5ae5eb273b23665b4b899a530e35526d9b7137fb6b15->enter($__internal_38ab3d340cc81ebbc0bb5ae5eb273b23665b4b899a530e35526d9b7137fb6b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_76b352b043a158ee19056bc6855b8c3820e303bbba31a24b37e239756f00418b->leave($__internal_76b352b043a158ee19056bc6855b8c3820e303bbba31a24b37e239756f00418b_prof);

        
        $__internal_38ab3d340cc81ebbc0bb5ae5eb273b23665b4b899a530e35526d9b7137fb6b15->leave($__internal_38ab3d340cc81ebbc0bb5ae5eb273b23665b4b899a530e35526d9b7137fb6b15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
