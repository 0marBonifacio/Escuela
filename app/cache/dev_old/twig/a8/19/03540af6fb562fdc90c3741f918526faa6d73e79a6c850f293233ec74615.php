<?php

/* OmarEscuelaBundle:Grupo:show.html.twig */
class __TwigTemplate_a81903540af6fb562fdc90c3741f918526faa6d73e79a6c850f293233ec74615 extends Twig_Template
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
        echo "    <h1>Grupo</h1>
    <hr/>
    <br/>
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
                <th>Nombregrupo</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombregrupo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>\t
    <br/>
    <div class=\"btn-group\">\t\t
\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">Regresar</a>
\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t\t\tEditar
\t\t\t</a>\t\t
\t\t\t<a class=\"btn\">";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Grupo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  60 => 22,  56 => 21,  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
