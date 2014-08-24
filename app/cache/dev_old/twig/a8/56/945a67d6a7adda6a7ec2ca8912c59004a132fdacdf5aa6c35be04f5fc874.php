<?php

/* OmarEscuelaBundle:Default:index.html.twig */
class __TwigTemplate_a856945a67d6a7adda6a7ec2ca8912c59004a132fdacdf5aa6c35be04f5fc874 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<h1 class=\"title\">Bienvenido al sistema escolar !</h1>

\t\t
\t";
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
