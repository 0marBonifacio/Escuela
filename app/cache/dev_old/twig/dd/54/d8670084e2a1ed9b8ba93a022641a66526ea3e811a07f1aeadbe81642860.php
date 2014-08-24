<?php

/* OmarEscuelaBundle:Materia:index.html.twig */
class __TwigTemplate_dd54d8670084e2a1ed9b8ba93a022641a66526ea3e811a07f1aeadbe81642860 extends Twig_Template
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
        echo "    <h1>Lista de Materias</h1>
\t<hr/>
\t<br/>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de la Materia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombremateria"), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t<div class=\"btn-group btn-group-xs\">\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Ver</a>\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a>
\t\t\t\t\t</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
\t<br/>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("materia_new");
        echo "\">
                Agregar nueva materia
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Materia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  79 => 28,  68 => 23,  64 => 22,  58 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,);
    }
}
