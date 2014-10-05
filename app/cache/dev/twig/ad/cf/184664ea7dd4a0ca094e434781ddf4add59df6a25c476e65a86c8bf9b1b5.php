<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_adcf184664ea7dd4a0ca094e434781ddf4add59df6a25c476e65a86c8bf9b1b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</h1>

<div id=\"chat\">
</div>

<input type=\"text\" name=\"tx\" id=\"tx\" /> <input type=\"button\" value=\"send\" id=\"btn\" />
<script>

document.getElementById('btn').onclick=function(){conn.send(document.getElementById('tx').value);};

var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    var et = document.getElementById('chat');
    et.innerHTML+=\"Connection established!\";
};

conn.onmessage = function(e) {
    var et = document.getElementById('chat');
    et.innerHTML+=e.data;
};
</script>
<div style=\"position:relative;\">
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_0.jpg\" style=\"position:absolute;top:    0px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_1.jpg\" style=\"position:absolute;top:    0px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_2.jpg\" style=\"position:absolute;top:    0px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_3.jpg\" style=\"position:absolute;top:    0px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_4.jpg\" style=\"position:absolute;top:    0px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_5.jpg\" style=\"position:absolute;top:    0px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_6.jpg\" style=\"position:absolute;top:    0px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_7.jpg\" style=\"position:absolute;top:    0px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_8.jpg\" style=\"position:absolute;top:    0px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_0_9.jpg\" style=\"position:absolute;top:    0px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_0.jpg\" style=\"position:absolute;top:    20px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_1.jpg\" style=\"position:absolute;top:    20px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_2.jpg\" style=\"position:absolute;top:    20px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_3.jpg\" style=\"position:absolute;top:    20px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_4.jpg\" style=\"position:absolute;top:    20px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_5.jpg\" style=\"position:absolute;top:    20px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_6.jpg\" style=\"position:absolute;top:    20px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_7.jpg\" style=\"position:absolute;top:    20px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_8.jpg\" style=\"position:absolute;top:    20px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_1_9.jpg\" style=\"position:absolute;top:    20px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_0.jpg\" style=\"position:absolute;top:    40px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_1.jpg\" style=\"position:absolute;top:    40px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_2.jpg\" style=\"position:absolute;top:    40px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_3.jpg\" style=\"position:absolute;top:    40px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_4.jpg\" style=\"position:absolute;top:    40px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_5.jpg\" style=\"position:absolute;top:    40px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_6.jpg\" style=\"position:absolute;top:    40px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_7.jpg\" style=\"position:absolute;top:    40px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_8.jpg\" style=\"position:absolute;top:    40px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_2_9.jpg\" style=\"position:absolute;top:    40px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_0.jpg\" style=\"position:absolute;top:    60px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_1.jpg\" style=\"position:absolute;top:    60px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_2.jpg\" style=\"position:absolute;top:    60px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_3.jpg\" style=\"position:absolute;top:    60px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_4.jpg\" style=\"position:absolute;top:    60px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_5.jpg\" style=\"position:absolute;top:    60px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_6.jpg\" style=\"position:absolute;top:    60px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_7.jpg\" style=\"position:absolute;top:    60px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_8.jpg\" style=\"position:absolute;top:    60px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_3_9.jpg\" style=\"position:absolute;top:    60px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_0.jpg\" style=\"position:absolute;top:    80px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_1.jpg\" style=\"position:absolute;top:    80px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_2.jpg\" style=\"position:absolute;top:    80px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_3.jpg\" style=\"position:absolute;top:    80px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_4.jpg\" style=\"position:absolute;top:    80px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_5.jpg\" style=\"position:absolute;top:    80px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_6.jpg\" style=\"position:absolute;top:    80px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_7.jpg\" style=\"position:absolute;top:    80px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_8.jpg\" style=\"position:absolute;top:    80px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_4_9.jpg\" style=\"position:absolute;top:    80px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_0.jpg\" style=\"position:absolute;top:    100px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_1.jpg\" style=\"position:absolute;top:    100px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_2.jpg\" style=\"position:absolute;top:    100px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_3.jpg\" style=\"position:absolute;top:    100px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_4.jpg\" style=\"position:absolute;top:    100px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_5.jpg\" style=\"position:absolute;top:    100px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_6.jpg\" style=\"position:absolute;top:    100px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_7.jpg\" style=\"position:absolute;top:    100px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_8.jpg\" style=\"position:absolute;top:    100px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_5_9.jpg\" style=\"position:absolute;top:    100px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_0.jpg\" style=\"position:absolute;top:    120px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_1.jpg\" style=\"position:absolute;top:    120px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_2.jpg\" style=\"position:absolute;top:    120px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_3.jpg\" style=\"position:absolute;top:    120px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_4.jpg\" style=\"position:absolute;top:    120px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_5.jpg\" style=\"position:absolute;top:    120px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_6.jpg\" style=\"position:absolute;top:    120px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_7.jpg\" style=\"position:absolute;top:    120px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_8.jpg\" style=\"position:absolute;top:    120px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_6_9.jpg\" style=\"position:absolute;top:    120px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_0.jpg\" style=\"position:absolute;top:    140px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_1.jpg\" style=\"position:absolute;top:    140px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_2.jpg\" style=\"position:absolute;top:    140px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_3.jpg\" style=\"position:absolute;top:    140px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_4.jpg\" style=\"position:absolute;top:    140px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_5.jpg\" style=\"position:absolute;top:    140px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_6.jpg\" style=\"position:absolute;top:    140px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_7.jpg\" style=\"position:absolute;top:    140px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_8.jpg\" style=\"position:absolute;top:    140px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_7_9.jpg\" style=\"position:absolute;top:    140px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_0.jpg\" style=\"position:absolute;top:    160px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_1.jpg\" style=\"position:absolute;top:    160px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_2.jpg\" style=\"position:absolute;top:    160px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_3.jpg\" style=\"position:absolute;top:    160px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_4.jpg\" style=\"position:absolute;top:    160px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_5.jpg\" style=\"position:absolute;top:    160px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_6.jpg\" style=\"position:absolute;top:    160px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_7.jpg\" style=\"position:absolute;top:    160px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_8.jpg\" style=\"position:absolute;top:    160px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_8_9.jpg\" style=\"position:absolute;top:    160px;left:   180px;width:  20px;height:  20px;\"/>

<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_0.jpg\" style=\"position:absolute;top:    180px;left:   0px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_1.jpg\" style=\"position:absolute;top:    180px;left:   20px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_2.jpg\" style=\"position:absolute;top:    180px;left:   40px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_3.jpg\" style=\"position:absolute;top:    180px;left:   60px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_4.jpg\" style=\"position:absolute;top:    180px;left:   80px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_5.jpg\" style=\"position:absolute;top:    180px;left:   100px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_6.jpg\" style=\"position:absolute;top:    180px;left:   120px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_7.jpg\" style=\"position:absolute;top:    180px;left:   140px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_8.jpg\" style=\"position:absolute;top:    180px;left:   160px;width:  20px;height:  20px;\"/>
<img src=\"http://localhost:81/sf/project/web/orpgl-mapgen/images/tile_9_9.jpg\" style=\"position:absolute;top:    180px;left:   180px;width:  20px;height:  20px;\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  127 => 28,  110 => 22,  90 => 32,  84 => 29,  76 => 17,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 19,  67 => 15,  63 => 15,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 23,  49 => 13,  24 => 4,  25 => 35,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 10,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
