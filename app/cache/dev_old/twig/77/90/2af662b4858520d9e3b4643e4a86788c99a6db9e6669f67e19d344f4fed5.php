<?php

/* OmarEscuelaBundle::layout.html.twig */
class __TwigTemplate_77902af662b4858520d9e3b4643e4a86788c99a6db9e6669f67e19d344f4fed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo "    
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omarescuela/css/bootstrap.css"), "html", null, true);
        echo "\" />    
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Escuela";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo "    

    ";
        // line 12
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "    
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omarescuela/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
    }

    // line 12
    public function block_content_header($context, array $blocks = array())
    {
        // line 13
        echo "        <ul id=\"menu\">
            ";
        // line 14
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 14
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 15
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\">INICIO</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("alumno");
        echo "\">ALTA ALUMNO</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("maestro");
        echo "\">ALTA MAESTRO</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("materia");
        echo "\">ALTA MATERIA</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">CREAR GRUPO</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("horario");
        echo "\">CREAR HORARIO</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OmarEscuelaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  101 => 16,  96 => 15,  93 => 14,  86 => 22,  84 => 14,  81 => 13,  78 => 12,  72 => 31,  68 => 29,  66 => 28,  62 => 26,  60 => 12,  54 => 10,  48 => 8,  42 => 5,  38 => 4,  33 => 3,);
    }
}
