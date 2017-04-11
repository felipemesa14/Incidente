<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_10fa23dc9c7a329dcfad3116c7fd077ed9e86875474282d0233cd79a315c77dd extends Twig_Template
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
        $__internal_50c2a3d854eb65585dd563dcded19283f93854ec57af5cab9562970d84ae38c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c2a3d854eb65585dd563dcded19283f93854ec57af5cab9562970d84ae38c9->enter($__internal_50c2a3d854eb65585dd563dcded19283f93854ec57af5cab9562970d84ae38c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b64c4cec67659941d8c8e3dcd2a782db0d9f6a7237f4cd2edb2e531bc5d026f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64c4cec67659941d8c8e3dcd2a782db0d9f6a7237f4cd2edb2e531bc5d026f9->enter($__internal_b64c4cec67659941d8c8e3dcd2a782db0d9f6a7237f4cd2edb2e531bc5d026f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_50c2a3d854eb65585dd563dcded19283f93854ec57af5cab9562970d84ae38c9->leave($__internal_50c2a3d854eb65585dd563dcded19283f93854ec57af5cab9562970d84ae38c9_prof);

        
        $__internal_b64c4cec67659941d8c8e3dcd2a782db0d9f6a7237f4cd2edb2e531bc5d026f9->leave($__internal_b64c4cec67659941d8c8e3dcd2a782db0d9f6a7237f4cd2edb2e531bc5d026f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
