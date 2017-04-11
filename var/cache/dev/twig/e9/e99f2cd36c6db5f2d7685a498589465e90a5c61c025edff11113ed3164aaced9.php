<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3c2063d7db04f820e511114fd0ed76fe258764341dec484e417411453c2fb09d extends Twig_Template
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
        $__internal_aa6d2f3ba5960d37f3bc88d502dc43ac73f6a2c72c2e346595203689c850c6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6d2f3ba5960d37f3bc88d502dc43ac73f6a2c72c2e346595203689c850c6a4->enter($__internal_aa6d2f3ba5960d37f3bc88d502dc43ac73f6a2c72c2e346595203689c850c6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_9128f2d5b049479fc55faec1fee55dc4b62af008c393a141e2d2475cc88a2b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9128f2d5b049479fc55faec1fee55dc4b62af008c393a141e2d2475cc88a2b3c->enter($__internal_9128f2d5b049479fc55faec1fee55dc4b62af008c393a141e2d2475cc88a2b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_aa6d2f3ba5960d37f3bc88d502dc43ac73f6a2c72c2e346595203689c850c6a4->leave($__internal_aa6d2f3ba5960d37f3bc88d502dc43ac73f6a2c72c2e346595203689c850c6a4_prof);

        
        $__internal_9128f2d5b049479fc55faec1fee55dc4b62af008c393a141e2d2475cc88a2b3c->leave($__internal_9128f2d5b049479fc55faec1fee55dc4b62af008c393a141e2d2475cc88a2b3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
