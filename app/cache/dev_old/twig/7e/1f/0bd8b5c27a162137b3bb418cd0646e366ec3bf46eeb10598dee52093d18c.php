<?php

/* OmarEscuelaBundle:Alumno:new.html.twig */
class __TwigTemplate_7e1f0bd8b5c27a162137b3bb418cd0646e366ec3bf46eeb10598dee52093d18c extends Twig_Template
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
        echo "    <h1>Agregar nuevo alumno</h1>
\t<hr/>
\t<br/>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t<br/>
    <ul class=\"record_actions\">
\t\t<li>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("alumno");
        echo "\">
\t\t\t\tRegresar a la lista
\t\t\t</a>
\t\t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Alumno:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
