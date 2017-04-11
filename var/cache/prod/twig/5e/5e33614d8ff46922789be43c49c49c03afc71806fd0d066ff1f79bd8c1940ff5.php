<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_9a2fc3fe15963b8aa2143b72cf19ada16ad4ce11616227c604a7a04128caaa27 extends Twig_Template
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
        $__internal_094396eb87ab3d5e884b78fa2af64d8d480569c04b23d89572b399d1006b2a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094396eb87ab3d5e884b78fa2af64d8d480569c04b23d89572b399d1006b2a20->enter($__internal_094396eb87ab3d5e884b78fa2af64d8d480569c04b23d89572b399d1006b2a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_6c6f0ea45b1af992d2089e8f8ad9ce5302a1fedbe568ccc5661a8b956aa306e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6f0ea45b1af992d2089e8f8ad9ce5302a1fedbe568ccc5661a8b956aa306e7->enter($__internal_6c6f0ea45b1af992d2089e8f8ad9ce5302a1fedbe568ccc5661a8b956aa306e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_094396eb87ab3d5e884b78fa2af64d8d480569c04b23d89572b399d1006b2a20->leave($__internal_094396eb87ab3d5e884b78fa2af64d8d480569c04b23d89572b399d1006b2a20_prof);

        
        $__internal_6c6f0ea45b1af992d2089e8f8ad9ce5302a1fedbe568ccc5661a8b956aa306e7->leave($__internal_6c6f0ea45b1af992d2089e8f8ad9ce5302a1fedbe568ccc5661a8b956aa306e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
