<?php

/* TwigBundle:Exception:logs.html.twig */
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
        $__internal_e6afd97127bf1919aca8a2d7b3fb18c21c68e6dba42b7e28b8d91ed233c79c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6afd97127bf1919aca8a2d7b3fb18c21c68e6dba42b7e28b8d91ed233c79c44->enter($__internal_e6afd97127bf1919aca8a2d7b3fb18c21c68e6dba42b7e28b8d91ed233c79c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        $__internal_f752bdd1ee247a539e05f588a4970897bdd450f1f02b28111a7274a879ba5b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752bdd1ee247a539e05f588a4970897bdd450f1f02b28111a7274a879ba5b5f->enter($__internal_f752bdd1ee247a539e05f588a4970897bdd450f1f02b28111a7274a879ba5b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

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
        
        $__internal_e6afd97127bf1919aca8a2d7b3fb18c21c68e6dba42b7e28b8d91ed233c79c44->leave($__internal_e6afd97127bf1919aca8a2d7b3fb18c21c68e6dba42b7e28b8d91ed233c79c44_prof);

        
        $__internal_f752bdd1ee247a539e05f588a4970897bdd450f1f02b28111a7274a879ba5b5f->leave($__internal_f752bdd1ee247a539e05f588a4970897bdd450f1f02b28111a7274a879ba5b5f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
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
", "TwigBundle:Exception:logs.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
