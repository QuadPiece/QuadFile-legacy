<?php

if($extension == "webm") {
  echo '<link href="../../static/video-js/video-js.css" rel="stylesheet">
  <script src="../../static/video-js/video.js"></script>
  <script>
  videojs.options.flash.swf = "../../static/video-js/video-js.swf"
  </script>';
}
elseif($extension == "mp4") {
  echo '<link href="../../static/video-js/video-js.css" rel="stylesheet">
  <script src="../../static/video-js/video.js"></script>
  <script>
  videojs.options.flash.swf = "../../static/video-js/video-js.swf"
  </script>';
}

?>
