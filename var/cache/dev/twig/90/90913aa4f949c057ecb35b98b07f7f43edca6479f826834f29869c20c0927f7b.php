<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_27f1b6c70421a7742374e030396f69a2455a54202b92dc1bbbcd6a17ade57e6f extends Twig_Template
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
        $__internal_474d90d1cceb17b5a2852e44d61b27008e729c3ea41f6723c2dbd4ee4b7b3578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474d90d1cceb17b5a2852e44d61b27008e729c3ea41f6723c2dbd4ee4b7b3578->enter($__internal_474d90d1cceb17b5a2852e44d61b27008e729c3ea41f6723c2dbd4ee4b7b3578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9dc22be333660c677ff5265e772c6db6d944835f08eaa0d5038ce2b6aac0cda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc22be333660c677ff5265e772c6db6d944835f08eaa0d5038ce2b6aac0cda3->enter($__internal_9dc22be333660c677ff5265e772c6db6d944835f08eaa0d5038ce2b6aac0cda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_474d90d1cceb17b5a2852e44d61b27008e729c3ea41f6723c2dbd4ee4b7b3578->leave($__internal_474d90d1cceb17b5a2852e44d61b27008e729c3ea41f6723c2dbd4ee4b7b3578_prof);

        
        $__internal_9dc22be333660c677ff5265e772c6db6d944835f08eaa0d5038ce2b6aac0cda3->leave($__internal_9dc22be333660c677ff5265e772c6db6d944835f08eaa0d5038ce2b6aac0cda3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
