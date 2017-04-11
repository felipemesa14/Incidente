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
        $__internal_18148a43e87bb96c6a0f133a4efd434e7b6999e4116e540b5d63c71401ddda06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18148a43e87bb96c6a0f133a4efd434e7b6999e4116e540b5d63c71401ddda06->enter($__internal_18148a43e87bb96c6a0f133a4efd434e7b6999e4116e540b5d63c71401ddda06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5301076e0670895e3ef08c841aeb8e0f0fca680d4b6f91f627a54542817c6bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5301076e0670895e3ef08c841aeb8e0f0fca680d4b6f91f627a54542817c6bf9->enter($__internal_5301076e0670895e3ef08c841aeb8e0f0fca680d4b6f91f627a54542817c6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_18148a43e87bb96c6a0f133a4efd434e7b6999e4116e540b5d63c71401ddda06->leave($__internal_18148a43e87bb96c6a0f133a4efd434e7b6999e4116e540b5d63c71401ddda06_prof);

        
        $__internal_5301076e0670895e3ef08c841aeb8e0f0fca680d4b6f91f627a54542817c6bf9->leave($__internal_5301076e0670895e3ef08c841aeb8e0f0fca680d4b6f91f627a54542817c6bf9_prof);

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
