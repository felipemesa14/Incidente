<?php

/* AppBundle:Login:registrar.html.twig */
class __TwigTemplate_c0ed15fa30833d635924f63da0041bf7b59af0fd54dca1a419df6c26ee90acd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Login:registrar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Registrar usuario</div>
                    <div class=\"panel-body\">
                        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nombre", array()), 'label');
        echo "
                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre completo")));
        // line 14
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "apellido", array()), 'label');
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "apellido", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido completo")));
        // line 19
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array()), 'label');
        echo "
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electronico")));
        // line 26
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "telefono", array()), 'label');
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono")));
        // line 31
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label>Nombre de usuario</label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        // line 38
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        // line 44
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        // line 48
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Rol de usuario</label>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "rolRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rol")));
        // line 55
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Cliente</label>
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "clienteRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        // line 60
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            </div>
                        </div>
                        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Login:registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 68,  137 => 65,  130 => 60,  128 => 59,  122 => 55,  120 => 54,  112 => 48,  110 => 47,  105 => 44,  103 => 43,  96 => 38,  94 => 37,  86 => 31,  84 => 30,  80 => 29,  75 => 26,  73 => 25,  69 => 24,  62 => 19,  60 => 18,  56 => 17,  51 => 14,  49 => 13,  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Login:registrar.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/registrar.html.twig");
    }
}
