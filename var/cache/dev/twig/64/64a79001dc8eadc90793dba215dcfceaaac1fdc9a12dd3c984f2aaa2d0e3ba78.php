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
        $__internal_f6c923a0f8513c5fa01337a0c0cf559ee47265fe94f2bcd02bac870847987690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c923a0f8513c5fa01337a0c0cf559ee47265fe94f2bcd02bac870847987690->enter($__internal_f6c923a0f8513c5fa01337a0c0cf559ee47265fe94f2bcd02bac870847987690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_22aa46eee1ec82bb598ee74bfa6f8cd5be9bc94a690c2abf321fa09226be5980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22aa46eee1ec82bb598ee74bfa6f8cd5be9bc94a690c2abf321fa09226be5980->enter($__internal_22aa46eee1ec82bb598ee74bfa6f8cd5be9bc94a690c2abf321fa09226be5980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f6c923a0f8513c5fa01337a0c0cf559ee47265fe94f2bcd02bac870847987690->leave($__internal_f6c923a0f8513c5fa01337a0c0cf559ee47265fe94f2bcd02bac870847987690_prof);

        
        $__internal_22aa46eee1ec82bb598ee74bfa6f8cd5be9bc94a690c2abf321fa09226be5980->leave($__internal_22aa46eee1ec82bb598ee74bfa6f8cd5be9bc94a690c2abf321fa09226be5980_prof);

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
