<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a50c0a18f300f79dbf6ca7b6a3431c20a06cddc56c3b5be0cc61842da066cf99 extends Twig_Template
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
        $__internal_324500f5d85017512580c4af1b522d140d8b737dea65ba6285e2ba306f84398b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324500f5d85017512580c4af1b522d140d8b737dea65ba6285e2ba306f84398b->enter($__internal_324500f5d85017512580c4af1b522d140d8b737dea65ba6285e2ba306f84398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_23793df8e9472feccd9edf4cabc030b0cdef3f2deb3e247e6746887d7904ff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23793df8e9472feccd9edf4cabc030b0cdef3f2deb3e247e6746887d7904ff26->enter($__internal_23793df8e9472feccd9edf4cabc030b0cdef3f2deb3e247e6746887d7904ff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_324500f5d85017512580c4af1b522d140d8b737dea65ba6285e2ba306f84398b->leave($__internal_324500f5d85017512580c4af1b522d140d8b737dea65ba6285e2ba306f84398b_prof);

        
        $__internal_23793df8e9472feccd9edf4cabc030b0cdef3f2deb3e247e6746887d7904ff26->leave($__internal_23793df8e9472feccd9edf4cabc030b0cdef3f2deb3e247e6746887d7904ff26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
