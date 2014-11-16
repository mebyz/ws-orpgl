// IMAGE
var loadImage = function(url) {
    return THREE.ImageUtils.loadTexture(url,null,function(){});
}

// GET HEIGHT
function getHeight(x,z,cam){

    var h = 0;
    if (x<=5 || z<=5 || x>=9995 || z>=9995) {
        return -68;
    }
    var idx=x+'x'+z;
    if(typeof localStorage!='undefined') {
        var hh = localStorage.getItem(idx);
        if(hh!=null) {
            h = parseInt(hh);
        } else {
            var tileX = Math.abs(Math.round((x-512)/1007)%10);
            var tileZ = Math.abs(-Math.round(-(z-512)/1007)%10);
            var idx = tileZ + tileX*10; 
            var ctx = document.getElementById('tile_'+tileX+'_'+tileZ).getContext('2d');
            ctx.imageSmoothingEnabled = false;
            ctx.mozImageSmoothingEnabled = false;
            ctx.oImageSmoothingEnabled = false;
            ctx.webkitImageSmoothingEnabled = false;

            if (app.Config.currentTile !=idx) {
                app.Config.currentTile = idx;
            }
            var imageData = ctx.getImageData(0, 0, 512,512);


            var imgX = (Math.abs(Math.floor(((x-tileX*1007)/2))))%508+1;
            var imgZ = (Math.abs(Math.floor(((z-tileZ*1007)/2))))%508+1;


            var index = 4 * (imgZ * 512 + imgX);
            var height = imageData.data[index];
            
            if (imgX>0 && imgX<=512 && imgZ>0 && imgZ<=512) 
                h=height*(app.Config.heightScale/300)-60;
            h = h +((h*h)/900)

            h=h-20;
            localStorage.setItem(idx,h);
        }
    }
    if (h<=-64) h=-68;
    return h;
}


// LENS FLARE
function addLight(h, s, l, x, y, z,texture,application) {

    application.Config.Sunlight = new THREE.PointLight(0xffffff, 500, 50);
    application.Config.Sunlight.color.setHSL(h, s, l);
    application.Config.Sunlight.position.set(x, y, z);
    application.Config.scene.add(application.Config.Sunlight);

    var flareColor = new THREE.Color(0xffffff);
    flareColor.setHSL(h, s, l + 0.5);

    application.Config.lensFlare = new THREE.LensFlare(texture, 700, 0.0, THREE.AdditiveBlending, flareColor);
    application.Config.lensFlare.customUpdateCallback = lensFlareUpdateCallback;
    application.Config.lensFlare.position = application.Config.Sunlight.position;

    application.Config.scene.add(application.Config.lensFlare);
    application.Config.light = new THREE.DirectionalLight(0xaaaaaa,1);
      application.Config.light.position = new THREE.Vector3(-50,-50,-50);
       this.Config.scene.add(application.Config.light);


}

function lensFlareUpdateCallback(object) {

    var f, fl = object.lensFlares.length;
    var flare;
    var vecX = -object.positionScreen.x * 2;
    var vecY = -object.positionScreen.y * 2;

    for(f = 0; f < fl; f++) {

        flare = object.lensFlares[ f ];

        flare.x = object.positionScreen.x + vecX * flare.distance;
        flare.y = object.positionScreen.y + vecY * flare.distance;

        flare.rotation = 0;
    }
}

// UTILS

function animate() {
    requestAnimationFrame(animate);
    render();
}

function replacer(key, value) {
    if(typeof value === 'number' && !isFinite(value)) {
        return String(value);
    }
    return value;
}

// INDEX

 var dragging = false;
  $(function() {
    $( ".draggable" ).draggable().mouseover(function(event, ui) {dragging=true;})
    .mouseout(function(event, ui) {dragging=false;});
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
          dragging=false;
      }
    });
  });
      function loadRemote(path, callback) {
        var fetch = new XMLHttpRequest();
        fetch.open('GET', path);
        fetch.overrideMimeType("text/plain; charset=x-user-defined");
        fetch.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            /* munge response into a binary string */
            var t = this.responseText || "" ;
            var ff = [];
            var mx = t.length;
            var scc= String.fromCharCode;
            for (var z = 0; z < mx; z++) {
              ff[z] = scc(t.charCodeAt(z) & 255);
            }
            callback(ff.join(""));
          }
        }
        fetch.send();
      }
      
      function play(file) {
        loadRemote(file, function(data) {
          midiFile = MidiFile(data);
          synth = Synth(44100);
          replayer = Replayer(midiFile, synth);
          audio = AudioPlayer(replayer);
        })
      }

// MULTILINE
function multiline(f) {
  return f.toString().
      replace(/^[^\/]+\/\*!?/, '').
      replace(/\*\/[^\/]+$/, '');
}

