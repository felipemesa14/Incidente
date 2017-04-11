<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_691644803691778e8f67c3237db71ec052b17252c9324450da83ad935148e1c9 extends Twig_Template
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
        $__internal_a4ffe24ed3e4190cc68bbc44ddce153fca4a73f265d2dfee73e907612b23a689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ffe24ed3e4190cc68bbc44ddce153fca4a73f265d2dfee73e907612b23a689->enter($__internal_a4ffe24ed3e4190cc68bbc44ddce153fca4a73f265d2dfee73e907612b23a689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_10776860c1ff92595bf540f83653ab24e1b02f3e75aa41a0dac71219ddbaa3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10776860c1ff92595bf540f83653ab24e1b02f3e75aa41a0dac71219ddbaa3db->enter($__internal_10776860c1ff92595bf540f83653ab24e1b02f3e75aa41a0dac71219ddbaa3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a4ffe24ed3e4190cc68bbc44ddce153fca4a73f265d2dfee73e907612b23a689->leave($__internal_a4ffe24ed3e4190cc68bbc44ddce153fca4a73f265d2dfee73e907612b23a689_prof);

        
        $__internal_10776860c1ff92595bf540f83653ab24e1b02f3e75aa41a0dac71219ddbaa3db->leave($__internal_10776860c1ff92595bf540f83653ab24e1b02f3e75aa41a0dac71219ddbaa3db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
