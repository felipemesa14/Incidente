<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_b4e5d4b0589b69b439c8e4ef7c465cf5412bbc485cb8f079434e7e3bbd4f1b5d extends Twig_Template
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
        $__internal_27c61cbd8e063181bf90abb9960de26f429f3fb3969af419a76c3290a03d7cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c61cbd8e063181bf90abb9960de26f429f3fb3969af419a76c3290a03d7cbb->enter($__internal_27c61cbd8e063181bf90abb9960de26f429f3fb3969af419a76c3290a03d7cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_8994a1ca25c3edf7163b5c57dc710afb8f0e89089bfcfc68235d439eca376824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8994a1ca25c3edf7163b5c57dc710afb8f0e89089bfcfc68235d439eca376824->enter($__internal_8994a1ca25c3edf7163b5c57dc710afb8f0e89089bfcfc68235d439eca376824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_27c61cbd8e063181bf90abb9960de26f429f3fb3969af419a76c3290a03d7cbb->leave($__internal_27c61cbd8e063181bf90abb9960de26f429f3fb3969af419a76c3290a03d7cbb_prof);

        
        $__internal_8994a1ca25c3edf7163b5c57dc710afb8f0e89089bfcfc68235d439eca376824->leave($__internal_8994a1ca25c3edf7163b5c57dc710afb8f0e89089bfcfc68235d439eca376824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
