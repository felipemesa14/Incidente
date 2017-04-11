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
        $__internal_8e0f699e21c7f3ae47106fe78b9f022741bc5e21fe71927b94e928dddf3e761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0f699e21c7f3ae47106fe78b9f022741bc5e21fe71927b94e928dddf3e761e->enter($__internal_8e0f699e21c7f3ae47106fe78b9f022741bc5e21fe71927b94e928dddf3e761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bbfb389339e73d2694143344d6038895ccf36ced912a459d02908a544748e7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfb389339e73d2694143344d6038895ccf36ced912a459d02908a544748e7f3->enter($__internal_bbfb389339e73d2694143344d6038895ccf36ced912a459d02908a544748e7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8e0f699e21c7f3ae47106fe78b9f022741bc5e21fe71927b94e928dddf3e761e->leave($__internal_8e0f699e21c7f3ae47106fe78b9f022741bc5e21fe71927b94e928dddf3e761e_prof);

        
        $__internal_bbfb389339e73d2694143344d6038895ccf36ced912a459d02908a544748e7f3->leave($__internal_bbfb389339e73d2694143344d6038895ccf36ced912a459d02908a544748e7f3_prof);

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
