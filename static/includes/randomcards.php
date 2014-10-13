<?php
//Site base URL
$site = "http://file.quad.moe";

if($extension == "jpg") {
  echo '<meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@QuadPiece" />
  <meta name="twitter:title" content="QuadFile" />
  <meta name="twitter:description" content="Image uploaded to QuadFile" />
  <meta name="twitter:image" content="' . $site . '/random/file/' . $filename . '" />
  <meta name="twitter:url" content="' . $site . '/random/perma/' . $filename . '" />';
}
elseif($extension == "jpeg") {
  echo '<meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@QuadPiece" />
  <meta name="twitter:title" content="QuadFile" />
  <meta name="twitter:description" content="File uploaded to QuadFile" />
  <meta name="twitter:image" content="' . $site . '/random/file/' . $filename . '" />
  <meta name="twitter:url" content="' . $site . '/random/perma/' . $filename . '" />';
}
elseif($extension == "png") {
  echo '<meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@QuadPiece" />
  <meta name="twitter:title" content="QuadFile" />
  <meta name="twitter:description" content="File uploaded to QuadFile" />
  <meta name="twitter:image" content="' . $site . '/random/file/' . $filename . '" />
  <meta name="twitter:url" content="' . $site . '/random/perma/' . $filename . '" />';
}
else {
  echo '<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@QuadPiece" />
<meta name="twitter:title" content="QuadFile" />
<meta name="twitter:description" content="' . $extension . ' file uploaded to QuadFile" />
<meta name="twitter:image" content="' . $site . '/static/logo.png" />
<meta name="twitter:url" content="' . $site . '/random/perma/' . $filename . '" />';
}

?>
