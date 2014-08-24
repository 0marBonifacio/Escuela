<?php

/* OmarEscuelaBundle:Maestro:show.html.twig */
class __TwigTemplate_a0d53d3b6126fb20de9e4e97af185b3f77120c399c2f47a02a307e378c2e572b extends Twig_Template
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
        echo "    <h1>Maestro</h1>
\t<hr/>
\t<br/>
    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremaestro</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombremaestro"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

\t<div class=\"btn-group\">\t
\t\t<a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("maestro");
        echo "\">
\t\t\tRegresar
\t\t</a>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maestro_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t\tEditar
\t\t</a>
\t\t<a class=\"btn\" ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Maestro:show.html.twig";
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
