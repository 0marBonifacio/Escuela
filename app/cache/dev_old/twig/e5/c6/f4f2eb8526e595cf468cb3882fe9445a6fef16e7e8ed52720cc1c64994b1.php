<?php

/* OmarEscuelaBundle:Grupo:edit.html.twig */
class __TwigTemplate_e5c6f4f2eb8526e595cf468cb3882fe9445a6fef16e7e8ed52720cc1c64994b1 extends Twig_Template
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
        echo "    <h1>Editar datos del grupo</h1>
\t<hr/>
\t<br/>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
\t<hr/>
\t<br/>
    <ul class=\"record_actions\">
\t\t<li>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">
\t\t\t\tRegresar
\t\t\t</a>
\t\t</li>\t\t
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Grupo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
