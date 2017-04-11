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
        $__internal_5e7495404ed6d3b34d8dcbee32fdd167cd6c69707f7f7c0485cf4324d358bb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7495404ed6d3b34d8dcbee32fdd167cd6c69707f7f7c0485cf4324d358bb66->enter($__internal_5e7495404ed6d3b34d8dcbee32fdd167cd6c69707f7f7c0485cf4324d358bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c5b5129fc342c3a85887e280858dc356ab0ba74c2825086a35d75d07bae43e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b5129fc342c3a85887e280858dc356ab0ba74c2825086a35d75d07bae43e6b->enter($__internal_c5b5129fc342c3a85887e280858dc356ab0ba74c2825086a35d75d07bae43e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_5e7495404ed6d3b34d8dcbee32fdd167cd6c69707f7f7c0485cf4324d358bb66->leave($__internal_5e7495404ed6d3b34d8dcbee32fdd167cd6c69707f7f7c0485cf4324d358bb66_prof);

        
        $__internal_c5b5129fc342c3a85887e280858dc356ab0ba74c2825086a35d75d07bae43e6b->leave($__internal_c5b5129fc342c3a85887e280858dc356ab0ba74c2825086a35d75d07bae43e6b_prof);

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
