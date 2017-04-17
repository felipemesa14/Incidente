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
        $__internal_073ec2c98c545d4adfe5bc5be80e9ea3581d9391ad2e7d7ab9024cc1d034bbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073ec2c98c545d4adfe5bc5be80e9ea3581d9391ad2e7d7ab9024cc1d034bbef->enter($__internal_073ec2c98c545d4adfe5bc5be80e9ea3581d9391ad2e7d7ab9024cc1d034bbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:nuevo.html.twig"));

        $__internal_6adc63e5f3eeb3265ec93002159304cc2ddbceee88ad008f94139dedc656f60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adc63e5f3eeb3265ec93002159304cc2ddbceee88ad008f94139dedc656f60d->enter($__internal_6adc63e5f3eeb3265ec93002159304cc2ddbceee88ad008f94139dedc656f60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:nuevo.html.twig"));

        // line 1
        echo "<html>
    <body>
        <table width=\"599\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td colspan=\"3\">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=\"3\">
                    <img src=\"http://www.ng.cr/images/software/desarrollo-de-software-en-la-nube-sicla-07.jpg\" width=\"600\" height=\"188\">
                    </td>
                </tr>
                <tr colspan=\"2\">
                    <td width=\"528\" style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                    Tu incidente se ha generado correctamente con el identificador ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 15, $this->getSourceContext()); })()), "codigoIncidenciaPk", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                    Asunto: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 32, $this->getSourceContext()); })()), "titulo", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Fecha: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 43, $this->getSourceContext()); })()), "fechaRegistro", array()), "Y/m/d"), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Prioridad: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 54, $this->getSourceContext()); })()), "prioridadRel", array()), "nombre", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Categoria: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 65, $this->getSourceContext()); })()), "categoriaRel", array()), "nombre", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Descripci&oacute;n: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 76, $this->getSourceContext()); })()), "descripcion", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>";
        
        $__internal_073ec2c98c545d4adfe5bc5be80e9ea3581d9391ad2e7d7ab9024cc1d034bbef->leave($__internal_073ec2c98c545d4adfe5bc5be80e9ea3581d9391ad2e7d7ab9024cc1d034bbef_prof);

        
        $__internal_6adc63e5f3eeb3265ec93002159304cc2ddbceee88ad008f94139dedc656f60d->leave($__internal_6adc63e5f3eeb3265ec93002159304cc2ddbceee88ad008f94139dedc656f60d_prof);

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
        return array (  117 => 76,  103 => 65,  89 => 54,  75 => 43,  61 => 32,  41 => 15,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <table width=\"599\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td colspan=\"3\">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=\"3\">
                    <img src=\"http://www.ng.cr/images/software/desarrollo-de-software-en-la-nube-sicla-07.jpg\" width=\"600\" height=\"188\">
                    </td>
                </tr>
                <tr colspan=\"2\">
                    <td width=\"528\" style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                    Tu incidente se ha generado correctamente con el identificador {{ arIncidencia.codigoIncidenciaPk }} </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                    Asunto: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        {{ arIncidencia.titulo }} </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Fecha: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                    {{ arIncidencia.fechaRegistro | date('Y/m/d') }} </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Prioridad: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        {{ arIncidencia.prioridadRel.nombre }} </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Categoria: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        {{ arIncidencia.categoriaRel.nombre}} </td>
                </tr>
                <tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:22px; color:#03524f; text-align:center; font-weight:bold\">
                        Descripci&oacute;n: </td>
                </tr>
                <tr>
                    <td style=\"font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#666; text-align:center\">
                        {{ arIncidencia.descripcion }} </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>", "AppBundle:Email:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Email/nuevo.html.twig");
    }
}
