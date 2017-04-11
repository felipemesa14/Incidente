<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55ba22b45aa9681caf3d2e36ae2f4a7bfc806886bb0ae41645a398b9e5dd7fda extends Twig_Template
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
        $__internal_4454e6e5ee34dc85f66a49f782152671a913562d1f1ed7a2f12b943a18c48390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4454e6e5ee34dc85f66a49f782152671a913562d1f1ed7a2f12b943a18c48390->enter($__internal_4454e6e5ee34dc85f66a49f782152671a913562d1f1ed7a2f12b943a18c48390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_da52dee5622e5acfcbce9a2812a09ab54951b2575dcbd721311f453232385b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da52dee5622e5acfcbce9a2812a09ab54951b2575dcbd721311f453232385b5b->enter($__internal_da52dee5622e5acfcbce9a2812a09ab54951b2575dcbd721311f453232385b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4454e6e5ee34dc85f66a49f782152671a913562d1f1ed7a2f12b943a18c48390->leave($__internal_4454e6e5ee34dc85f66a49f782152671a913562d1f1ed7a2f12b943a18c48390_prof);

        
        $__internal_da52dee5622e5acfcbce9a2812a09ab54951b2575dcbd721311f453232385b5b->leave($__internal_da52dee5622e5acfcbce9a2812a09ab54951b2575dcbd721311f453232385b5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
