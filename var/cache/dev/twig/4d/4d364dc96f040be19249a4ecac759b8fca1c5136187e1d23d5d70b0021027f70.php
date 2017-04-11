<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3ab290091a1e564fbd2bc8d3047d7009dd6523c4ba15d4406f56b701d981c95b extends Twig_Template
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
        $__internal_765565a6cfad353a2b5d618ad8089d4801ce6a0cf45422983b7d6defba214005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765565a6cfad353a2b5d618ad8089d4801ce6a0cf45422983b7d6defba214005->enter($__internal_765565a6cfad353a2b5d618ad8089d4801ce6a0cf45422983b7d6defba214005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4c0d72ddbb804428313b4263f490bc783273122148569d7d0795f69e5e805cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0d72ddbb804428313b4263f490bc783273122148569d7d0795f69e5e805cd5->enter($__internal_4c0d72ddbb804428313b4263f490bc783273122148569d7d0795f69e5e805cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_765565a6cfad353a2b5d618ad8089d4801ce6a0cf45422983b7d6defba214005->leave($__internal_765565a6cfad353a2b5d618ad8089d4801ce6a0cf45422983b7d6defba214005_prof);

        
        $__internal_4c0d72ddbb804428313b4263f490bc783273122148569d7d0795f69e5e805cd5->leave($__internal_4c0d72ddbb804428313b4263f490bc783273122148569d7d0795f69e5e805cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
