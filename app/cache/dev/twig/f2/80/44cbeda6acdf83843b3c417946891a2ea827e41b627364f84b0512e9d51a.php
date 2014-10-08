<?php

/* MyOrpglBundle:Default:index.html.twig */
class __TwigTemplate_f28044cbeda6acdf83843b3c417946891a2ea827e41b627364f84b0512e9d51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
   <meta charset=\"utf-8\">
   <title>HTML5-WebGL-NodeJS Multiplayer Game Experiment by E.BOTROS</title>
   <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/styles.css\">  
   <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js\"></script>
   <script type=\"text/javascript\" src=\"../js/jquery.min.js\"></script>
   <script type=\"text/javascript\" src=\"../js/jqueryui.min.js\"></script>
   <script type=\"text/javascript\" src=\"../client.js\"></script>
   <script type=\"text/javascript\" src=\"../nature.js\"></script>
   <script type=\"text/javascript\" src=\"../js/three.js\"></script>   
   <script type=\"text/javascript\" src=\"../js/Core.js\"></script>
   <script type=\"text/javascript\" src=\"../js/loaders/OBJLoader.js\"></script>
   <!--        <script type=\"text/javascript\" src=\"../js/loaders/ColladaLoader.js\"></script>-->
   <script type=\"text/javascript\" src=\"../js/loaders/MD2Character.js\"></script>
   <script type=\"text/javascript\" src=\"../js/shaders/ShaderWater.js\"></script>
   <script type=\"text/javascript\" src=\"../js/shaders/ShaderGrass.js\"></script>
   <script type=\"text/javascript\" src=\"../js/shaders/ShaderTiling.js\"></script>
   <script type=\"text/javascript\" src=\"../js/shaders/ShaderSky.js\"></script>
   <!--        <script type=\"text/javascript\" src=\"../js/physi.js\"></script>-->
<!--    <script type=\"text/javascript\" src=\"../js/gui/dat.gui.min.js\"></script>
    <script type=\"text/javascript\" src=\"../js/gui/threex.rendererstats.js\"></script>-->
    <script type=\"text/javascript\" src=\"../js/tools/ShaderParticles.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/jasmid/stream.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/jasmid/midifile.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/jasmid/replayer.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/jasmid/synth.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/jasmid/audio.js\"></script>
    <script type=\"text/javascript\" src=\"../js/audio/Sound.js\"></script>
    <script type=\"text/javascript\" src=\"../js/controls/Controls.js\"></script>
    <script type=\"text/javascript\" src=\"../js/Game.js\"></script>

    <script>

     angular.module('map', [])
     .config(function(\$interpolateProvider){
         \$interpolateProvider.startSymbol('{[{').endSymbol('}]}')});
     function HudState(\$scope) {

        initScene();

        \$scope.health = 100;
        \$scope.ammo = 0;
        \$scope.clipSize = 50;
        \$scope.logs = [
        \"1:01:01 - You've spotted the beach\",
        ];

        \$scope.style = {
            visible: true,
            update: true,
            transparent: true,
            animated: true,
        };
    }
</script>
<style>
    #customControls {
        margin-left: 20px;
        z-index: 2;
    }

    #canvas-align {
        position: relative;
        width: 100%;
        height: 300px;
        margin: 0px;
    }

    #hud {
        position: absolute;
        top: 0;
        width: 100%;
        height: 300px;
        margin: 0px;
        z-index: 3;
        display: none;
    }

    #hud.visible {
        display: block;
    }

    #health, #ammo, #log {
        position: absolute;
        border: 3px solid #FFF;
        border-radius: 5px;
        color: #FFF;
        font-family: arial;
    }

    #health {
        bottom: 10px;
        left: 10px;
        background: #AA3333;
        font-size: 20pt;
        font-weight: bold;
        padding: 5px;
    }

    #ammo {
        bottom: 10px;
        right: 10px;
        background: #3333AA;
        font-size: 20pt;
        font-weight: bold;
        padding: 5px;
    }

    #log {
        top: 10px;
        left: 10px;
        background: #33AA33;
        overflow: auto;
        width: 300px;
        height: 100px;
        font-size: 11pt;
    }

    #stats {
        float: right;
    }

    .transparent #health {
        background: rgba(120, 20, 20, 0.5);
    }

    .transparent #ammo {
        background: rgba(20, 20, 120, 0.5);
    }

    .transparent #log {
        background: rgba(20, 120, 20, 0.5);
    }
    @-moz-keyframes heartbeat {
        0% { margin-bottom: 0; }

        10% { margin-bottom: 10px; }

        20% { margin-bottom: 0; }

        30% { margin-bottom: 10px; }

        40% { margin-bottom: 0; }
    }

    @-webkit-keyframes heartbeat {
        0% { margin-bottom: 0; }

        10% { margin-bottom: 10px; }

        20% { margin-bottom: 0; }

        30% { margin-bottom: 10px; }

        40% { margin-bottom: 0; }
    }  

    .animated #health, .animated #ammo {
        -webkit-animation-duration: 10s;
        -webkit-animation-name: heartbeat;
        -webkit-animation-iteration-count: infinite;

        -moz-animation-duration: 10s;
        -moz-animation-name: heartbeat;
        -moz-animation-iteration-count: infinite;
    }

    body, html {height:100%;}

    div.wrap {height:100%; overflow:hidden;}

    body {overflow: hidden; }

</style>
</head>
<body ng-app=\"map\">
    <div class='wrap'>
        <div id=\"webgl\" style=\"position:absolute;top:0px;left:0px;\"></div>
        <div id=\"content-frame\" ng-controller=\"HudState\">
            <div id=\"canvas-container\">
                <div id=\"canvas-align\">
                    <div id=\"hud\" ng-class=\"{visible: style.visible, transparent: style.transparent, animated: style.animated}\">
                        <div id=\"health\">
                            <b>HP:</b> {[{health}]}
                        </div>
                        <div id=\"ammo\">
                            <b>Scrolls:</b> {[{ammo}]}
                        </div>
                        <div id=\"log\">
                            <div ng-repeat=\"log in logs\">{[{log}]}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id=\"wait\" class=\"wait\" style=\"display: none;\">Please wait for the engine to initialize ..</div>

        <div id=\"app\">
          <div id=\"log\"></div>
      </div>



      <div id=\"painDiv\" style=\"position:absolute;top:0px;left:0px;width:100%;height:100%;background: url(&quot;../textures/blood.png&quot;) repeat scroll 0 0 transparent; opacity:0.2; visibility:hidden;\"></<div style=\"position:absolute;\">
        <div id=\"underwaterDiv\" style=\"position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0.8; visibility: hidden;\"></div>

        <div class=\"droppable myBox ui-droppable\" style=\"position:absolute;bottom:10px;left:10px;\"><center><br>USE</center></div>

        <div class=\"draggable ui-draggable\" id=\"I_Scroll02\" style=\"position:absolute;top:50px;left:5px;background: #eeeeee url(&quot;../textures/items/I_Scroll02.png&quot;);visibility:hidden;\"></div>
        <div class=\"draggable ui-draggable\" id=\"I_Antidote\" style=\"position:absolute;top:90px;left:5px;background: #eeeeee url(&quot;../textures/items/I_Antidote.png&quot;);visibility:hidden;\"></div>
        <div class=\"draggable ui-draggable\" id=\"P_Medicine06\" style=\"position:absolute;top:130px;left:5px;background: #eeeeee url(&quot;../textures/items/P_Medicine06.png&quot;);visibility:hidden;\"></div>
        <div class=\"draggable ui-draggable\" id=\"S_Holy06\" style=\"position:absolute;top:170px;left:5px;background: #eeeeee url(&quot;../textures/items/S_Holy06.png&quot;);visibility:hidden;\"></div>


        <canvas id=\"tile_0_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_0_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_1_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_1_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_2_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_2_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_3_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_3_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_4_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_4_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_5_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_5_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_6_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_6_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_7_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_7_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_8_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_8_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>

        <canvas id=\"tile_9_0\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_1\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_2\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_3\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_4\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_5\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_6\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_7\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_8\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>
        <canvas id=\"tile_9_9\" width=\"512\" height=\"512\" style=\"visibility:hidden;z-index:0;position:absolute;\"></canvas>


    </div>
    <div id=\"chat\">
    </div>

    <input type=\"text\" name=\"tx\" id=\"tx\" /> <input type=\"button\" value=\"send\" id=\"btn\" />
    <script>
        function readCookie(name) {
            var nameEQ = name + \"=\";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        document.getElementById('btn').onclick=function(){conn.send(document.getElementById('tx').value);};

        var conn = new WebSocket('ws://localhost:8080/launch');
       
        conn.onerror = function(error) {
            document.location='http://localhost:81/sf/project/web/app_dev.php/login_check';
}

        conn.onmessage = function(e) {
            console.log(e.data);
            var scope = angular.element(document.getElementById(\"content-frame\")).scope();
            scope.\$apply(function() {
              if (e.data.substring(0, 4)=='POS:')
              {
                var res = e.data.substring(4).split(\",\");
                scope.logs[scope.logs.length] = e.data;
                setTimeout(function(){
                    app.Config.yawObject.position.x=(res[0]-1);
                    app.Config.yawObject.position.y=(res[1]-1);
                    app.Config.yawObject.position.z=(res[2]-1);
                },1000);
            }
            else {

var  v= e.data.split(\":\");
v=v[1];
v=v.split(\",\");

                    app.Config.character.root.position.x=(v[0]);
                    app.Config.character.root.position.y=(v[1]);
                    app.Config.character.root.position.z=(v[2]);
//    var name =readCookie('name');
//    console.log(name+\" | \"+e.data);
}
});

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
</body></html>

";
    }

    public function getTemplateName()
    {
        return "MyOrpglBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
