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
        return array (  113 => 19,  84 => 14,  81 => 13,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 29,  56 => 9,  38 => 4,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 20,  105 => 17,  91 => 27,  62 => 26,  49 => 17,  87 => 25,  31 => 4,  21 => 2,  24 => 3,  93 => 14,  88 => 6,  78 => 12,  46 => 7,  44 => 12,  27 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 31,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 28,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 16,  98 => 31,  96 => 15,  83 => 25,  74 => 14,  66 => 28,  55 => 15,  52 => 18,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 18,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 22,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 12,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 16,  42 => 5,  39 => 9,  36 => 5,  33 => 3,  30 => 7,);
    }
}
