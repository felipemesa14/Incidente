<?php

/* AppBundle:Email:nuevo.html.twig */
class __TwigTemplate_f87ce58aa48a1dbe2224e4f3c0118ff24d7ff0d0f0bc5ea1256b57de4db49e31 extends Twig_Template
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
        $__internal_911a59ebd06009ad62a5c2b08e484c945bf971abe47bb90af0e0eb6422218f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911a59ebd06009ad62a5c2b08e484c945bf971abe47bb90af0e0eb6422218f0f->enter($__internal_911a59ebd06009ad62a5c2b08e484c945bf971abe47bb90af0e0eb6422218f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:nuevo.html.twig"));

        $__internal_760ec8985432c28ed5dd9603d14ba11cd0c0a5644ce43fc08ac97124f1837483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760ec8985432c28ed5dd9603d14ba11cd0c0a5644ce43fc08ac97124f1837483->enter($__internal_760ec8985432c28ed5dd9603d14ba11cd0c0a5644ce43fc08ac97124f1837483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:nuevo.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h1>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["descripcion"]) || array_key_exists("descripcion", $context) ? $context["descripcion"] : (function () { throw new Twig_Error_Runtime('Variable "descripcion" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
    </body>
</html>";
        
        $__internal_911a59ebd06009ad62a5c2b08e484c945bf971abe47bb90af0e0eb6422218f0f->leave($__internal_911a59ebd06009ad62a5c2b08e484c945bf971abe47bb90af0e0eb6422218f0f_prof);

        
        $__internal_760ec8985432c28ed5dd9603d14ba11cd0c0a5644ce43fc08ac97124f1837483->leave($__internal_760ec8985432c28ed5dd9603d14ba11cd0c0a5644ce43fc08ac97124f1837483_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <h1>{{ descripcion }}</h1>
    </body>
</html>", "AppBundle:Email:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Email/nuevo.html.twig");
    }
}
