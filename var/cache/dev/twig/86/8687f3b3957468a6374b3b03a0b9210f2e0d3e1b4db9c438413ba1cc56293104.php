<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_991bc37f7d104e65a5391e6faf1b76e859e73c4601a5a3ebb921df118e549e7f extends Twig_Template
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
        $__internal_0ea8da80ee402992ba9b75ddd36e3c385ee0e68ec64a7b1289eda7afe3c2d27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea8da80ee402992ba9b75ddd36e3c385ee0e68ec64a7b1289eda7afe3c2d27a->enter($__internal_0ea8da80ee402992ba9b75ddd36e3c385ee0e68ec64a7b1289eda7afe3c2d27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8438ef51e38267ebcb802cbc4c10b8fea60a577bb2cea68625bbb7aabb8136c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8438ef51e38267ebcb802cbc4c10b8fea60a577bb2cea68625bbb7aabb8136c9->enter($__internal_8438ef51e38267ebcb802cbc4c10b8fea60a577bb2cea68625bbb7aabb8136c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0ea8da80ee402992ba9b75ddd36e3c385ee0e68ec64a7b1289eda7afe3c2d27a->leave($__internal_0ea8da80ee402992ba9b75ddd36e3c385ee0e68ec64a7b1289eda7afe3c2d27a_prof);

        
        $__internal_8438ef51e38267ebcb802cbc4c10b8fea60a577bb2cea68625bbb7aabb8136c9->leave($__internal_8438ef51e38267ebcb802cbc4c10b8fea60a577bb2cea68625bbb7aabb8136c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
