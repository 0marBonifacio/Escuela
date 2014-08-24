<?php

/* OmarEscuelaBundle:Materia:show.html.twig */
class __TwigTemplate_57ce93102661a4cf2c67c28dbb0585fa131822128d21a8aa1fc45411f3e21fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OmarEscuelaBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OmarEscuelaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Materia</h1>
\t<hr/>
\t<br/>
\t<table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremateria</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombremateria"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group\">\t
\t\t<a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("materia");
        echo "\">
\t\t\tRegresar a la lista
\t\t</a>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t\tEditar
\t\t</a>\t\t
\t\t<a class=\"btn\" >";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Materia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  62 => 24,  56 => 21,  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
