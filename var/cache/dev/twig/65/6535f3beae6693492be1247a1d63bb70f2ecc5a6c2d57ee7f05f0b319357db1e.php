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
        $__internal_80144a2277a7d490a0e8f621694b80db913bfce653d8288794cbef325205cc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80144a2277a7d490a0e8f621694b80db913bfce653d8288794cbef325205cc40->enter($__internal_80144a2277a7d490a0e8f621694b80db913bfce653d8288794cbef325205cc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_12d8ea089dd85ba0e552bf757be061a194a2de1d0250907e36e721765b06e21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d8ea089dd85ba0e552bf757be061a194a2de1d0250907e36e721765b06e21d->enter($__internal_12d8ea089dd85ba0e552bf757be061a194a2de1d0250907e36e721765b06e21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_80144a2277a7d490a0e8f621694b80db913bfce653d8288794cbef325205cc40->leave($__internal_80144a2277a7d490a0e8f621694b80db913bfce653d8288794cbef325205cc40_prof);

        
        $__internal_12d8ea089dd85ba0e552bf757be061a194a2de1d0250907e36e721765b06e21d->leave($__internal_12d8ea089dd85ba0e552bf757be061a194a2de1d0250907e36e721765b06e21d_prof);

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
