<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bb899a0ead028329e8528ab06bfb08611ca3447cce6f53676001e1677423dc5d extends Twig_Template
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
        $__internal_0e439c14ebaec1cfc0907fce1c6881fd6327b4729e1cc43b41114277733f9b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e439c14ebaec1cfc0907fce1c6881fd6327b4729e1cc43b41114277733f9b2a->enter($__internal_0e439c14ebaec1cfc0907fce1c6881fd6327b4729e1cc43b41114277733f9b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f99436fcdd69cec7d6ab4309fb2b60a5760cc7d9bc1f21e7c10ddf20b2454326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99436fcdd69cec7d6ab4309fb2b60a5760cc7d9bc1f21e7c10ddf20b2454326->enter($__internal_f99436fcdd69cec7d6ab4309fb2b60a5760cc7d9bc1f21e7c10ddf20b2454326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0e439c14ebaec1cfc0907fce1c6881fd6327b4729e1cc43b41114277733f9b2a->leave($__internal_0e439c14ebaec1cfc0907fce1c6881fd6327b4729e1cc43b41114277733f9b2a_prof);

        
        $__internal_f99436fcdd69cec7d6ab4309fb2b60a5760cc7d9bc1f21e7c10ddf20b2454326->leave($__internal_f99436fcdd69cec7d6ab4309fb2b60a5760cc7d9bc1f21e7c10ddf20b2454326_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
