<?php

/* OmarEscuelaBundle:Grupo:new.html.twig */
class __TwigTemplate_999653ade328d6fbb063140247e6e5f5eb82e401a34a9c8b6a005eac821e882b extends Twig_Template
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
        echo "    <h1>Nuevo grupo</h1>
    <hr/>
\t<br/>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t<hr/>
\t<br/>
    <ul class=\"record_actions\">
\t\t<li>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">
\t\t\t\tRegresar
\t\t\t</a>
\t\t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Grupo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  36 => 7,  31 => 4,  28 => 3,);
    }
}
