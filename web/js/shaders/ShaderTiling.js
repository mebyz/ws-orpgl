
var tiledVertexShader = 
"uniform sampler2D heightMap;"+
"uniform float heightScale;"+

"varying float vAmount;"+
"varying vec2 vUV;"+

"uniform float time;"+

"void main()"+
"{"+
"vUV = uv;"+
"vec4 tx = texture2D( heightMap, vUV);"+
"vAmount = tx.g;"+
"vec3 newPosition = position + normal  * vAmount * heightScale;"+

"gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );"+
"}";
var tiledFragmentShader = [
"uniform sampler2D oceanTexture;",
"uniform sampler2D sandyTexture;",
"uniform sampler2D grassTexture;",
"uniform sampler2D rockyTexture;",
"uniform sampler2D snowyTexture;",

"varying vec2 vUV;",
THREE.ShaderChunk[ "fog_pars_fragment" ],
"varying float vAmount;",

"void main()", 
"{",
"vec4 water = (smoothstep(0.01, 0.20, vAmount) - smoothstep(0.16, 0.20, vAmount)) * texture2D( oceanTexture, vUV * 10.0 );",
"vec4 sandy = (smoothstep(0.14, 0.20, vAmount) - smoothstep(0.22, 0.28, vAmount)) * texture2D( sandyTexture, vUV * 10.0 );",
"vec4 grass = (smoothstep(0.22, 0.28, vAmount) - smoothstep(0.30, 0.40, vAmount)) * texture2D( grassTexture, vUV * 20.0 );",
"vec4 rocky = (smoothstep(0.30, 0.40, vAmount) - smoothstep(0.50, 0.60, vAmount)) * texture2D( rockyTexture, vUV * 20.0 );",
"vec4 snowy = (smoothstep(0.40, 0.75, vAmount))                                   * texture2D( snowyTexture, vUV * 10.0 );",
"gl_FragColor = vec4(0.0, 0.0, 0.0, 1.0) + water  + sandy  + grass + rocky  + snowy ; //, 1.0);",
THREE.ShaderChunk[ "fog_fragment" ],
"}"
].join("\n");

var tiledVertexShader2= [

      "#define PHONG",

      "uniform sampler2D tNoise;",
      "varying vec3 vViewPosition;",
      "varying vec3 vNormal;",

"varying float vAmount;",
"varying vec2 vUV;",

      THREE.ShaderChunk[ "map_pars_vertex" ],
      THREE.ShaderChunk[ "lightmap_pars_vertex" ],
      THREE.ShaderChunk[ "envmap_pars_vertex" ],
      THREE.ShaderChunk[ "lights_phong_pars_vertex" ],
      THREE.ShaderChunk[ "color_pars_vertex" ],
      THREE.ShaderChunk[ "morphtarget_pars_vertex" ],
      THREE.ShaderChunk[ "skinning_pars_vertex" ],
      THREE.ShaderChunk[ "shadowmap_pars_vertex" ],
      THREE.ShaderChunk[ "logdepthbuf_pars_vertex" ],

      "void main() {",

        THREE.ShaderChunk[ "map_vertex" ],
        THREE.ShaderChunk[ "lightmap_vertex" ],
        THREE.ShaderChunk[ "color_vertex" ],

        THREE.ShaderChunk[ "morphnormal_vertex" ],
        THREE.ShaderChunk[ "skinbase_vertex" ],
        THREE.ShaderChunk[ "skinnormal_vertex" ],
        THREE.ShaderChunk[ "defaultnormal_vertex" ],
"vUV = uv;",
		"vec4 tx = texture2D( tNoise, vUV);",
		"vAmount = tx.g;",
       " vNormal = normalize( transformedNormal );",
        THREE.ShaderChunk[ "morphtarget_vertex" ],
        THREE.ShaderChunk[ "skinning_vertex" ],
        THREE.ShaderChunk[ "default_vertex" ],
        THREE.ShaderChunk[ "logdepthbuf_vertex" ],
  
        " vViewPosition = mvPosition.xyz;",

        ' gl_Position.y += texture2D(tNoise, vUv).x*1000.0;',
"vec3 newPosition = position + normal  * vAmount * 600.0;",

"gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );",

        THREE.ShaderChunk[ "worldpos_vertex" ],
        THREE.ShaderChunk[ "envmap_vertex" ],
        THREE.ShaderChunk[ "lights_phong_vertex" ],
        THREE.ShaderChunk[ "shadowmap_vertex" ],

      "}"

    ].join("\n");

  var tiledFragmentShader2= [
          "uniform vec3 diffuse;",
          "uniform float opacity;",

          "uniform vec3 ambient;",
          "uniform vec3 emissive;",
          "uniform vec3 specular;",
          "uniform float shininess;",

"varying vec2 vUV;",
"varying float vAmount;",

          THREE.ShaderChunk[ "color_pars_fragment" ],
          THREE.ShaderChunk[ "map_pars_fragment" ],
          THREE.ShaderChunk[ "lightmap_pars_fragment" ],
          THREE.ShaderChunk[ "envmap_pars_fragment" ],
          THREE.ShaderChunk[ "fog_pars_fragment" ],
          THREE.ShaderChunk[ "lights_phong_pars_fragment" ],
          THREE.ShaderChunk[ "shadowmap_pars_fragment" ],
          THREE.ShaderChunk[ "bumpmap_pars_fragment" ],
          THREE.ShaderChunk[ "normalmap_pars_fragment" ],
          THREE.ShaderChunk[ "specularmap_pars_fragment" ],

          "uniform sampler2D tNoise;",

          "uniform sampler2D oceanTexture;",
"uniform sampler2D sandyTexture;",
"uniform sampler2D grassTexture;",
"uniform sampler2D rockyTexture;",
"uniform sampler2D snowyTexture;",
          "void main() {",

"vec4 water = (smoothstep(0.01, 0.20, vAmount) - smoothstep(0.16, 0.20, vAmount)) * texture2D( oceanTexture, vUV * 10.0 );",
"vec4 sandy = (smoothstep(0.14, 0.20, vAmount) - smoothstep(0.22, 0.28, vAmount)) * texture2D( sandyTexture, vUV * 10.0 );",
"vec4 grass = (smoothstep(0.22, 0.28, vAmount) - smoothstep(0.30, 0.40, vAmount)) * texture2D( grassTexture, vUV * 20.0 );",
"vec4 rocky = (smoothstep(0.30, 0.40, vAmount) - smoothstep(0.50, 0.60, vAmount)) * texture2D( rockyTexture, vUV * 20.0 );",
"vec4 snowy = (smoothstep(0.40, 0.75, vAmount))                                   * texture2D( snowyTexture, vUV * 10.0 );",
"gl_FragColor = vec4(0.0, 0.0, 0.0, 1.0) + water  + sandy  + grass + rocky  + snowy ; //, 1.0);",

       //      + noise * 0.1);",

            THREE.ShaderChunk[ "alphatest_fragment" ],
            THREE.ShaderChunk[ "specularmap_fragment" ],

            THREE.ShaderChunk[ "lights_phong_fragment" ],

            THREE.ShaderChunk[ "lightmap_fragment" ],
            THREE.ShaderChunk[ "color_fragment" ],
            THREE.ShaderChunk[ "envmap_fragment" ],
            THREE.ShaderChunk[ "shadowmap_fragment" ],

            THREE.ShaderChunk[ "linear_to_gamma_fragment" ],

            THREE.ShaderChunk[ "fog_fragment" ],

          "}"
        ].join('\n');