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
        return array (  97 => 38,  113 => 19,  84 => 14,  81 => 13,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  94 => 28,  89 => 32,  85 => 25,  75 => 17,  68 => 23,  56 => 21,  38 => 4,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 20,  105 => 17,  91 => 27,  62 => 24,  49 => 16,  87 => 25,  31 => 4,  21 => 2,  24 => 3,  93 => 14,  88 => 6,  78 => 27,  46 => 7,  44 => 12,  27 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 31,  69 => 25,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 28,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 16,  98 => 31,  96 => 15,  83 => 25,  74 => 26,  66 => 28,  55 => 15,  52 => 17,  50 => 10,  43 => 11,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 18,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 21,  57 => 11,  54 => 20,  51 => 19,  48 => 8,  45 => 15,  42 => 5,  39 => 9,  36 => 7,  33 => 3,  30 => 7,);
    }
}
