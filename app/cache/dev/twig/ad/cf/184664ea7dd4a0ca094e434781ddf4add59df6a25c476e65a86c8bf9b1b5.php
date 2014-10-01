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
    <h1 class=\"title\">Welcome!</h1>

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
        return array (  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
