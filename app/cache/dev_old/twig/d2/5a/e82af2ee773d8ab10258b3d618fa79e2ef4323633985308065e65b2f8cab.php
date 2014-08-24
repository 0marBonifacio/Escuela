<?php

/* OmarEscuelaBundle:Alumno:show.html.twig */
class __TwigTemplate_d25ae82af2ee773d8ab10258b3d618fa79e2ef4323633985308065e65b2f8cab extends Twig_Template
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
        echo "    <h1>Alumno</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricula</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matricula"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrealumno</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrealumno"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Semestre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "semestre"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

\t<div class=\"btn-group\">\t
\t\t<a class=\"btn btn-default\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("alumno");
        echo "\">
\t\t\tRegesar
\t\t</a>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t\tEditar
\t\t</a>\t\t
\t\t<a class=\"btn\">";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Alumno:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  75 => 31,  69 => 28,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
