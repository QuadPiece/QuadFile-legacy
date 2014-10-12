<?php
//Site base URL
$site = "http://example.com";

if($extension == "jpg") {
  echo '<meta property="og:title" content="' . $filename . ' - QuadShot">
		<meta property="og:image" content="' . $site . '/file/' . $filename . '">
		<meta property="og:description" content="Image file uploaded to QuadFile">';
}
elseif($extension == "jpeg") {
  echo '<meta property="og:title" content="' . $filename . ' - QuadShot">
    <meta property="og:image" content="' . $site . '/file/' . $filename . '">
    <meta property="og:description" content="Image file uploaded to QuadFile">';
}
elseif($extension == "png") {
  echo '<meta property="og:title" content="' . $filename . ' - QuadShot">
    <meta property="og:image" content="' . $site . '/file/' . $filename . '">
    <meta property="og:description" content="Image uploaded to QuadFile">';
}
else {
  echo '<meta property="og:title" content="' . $filename . ' - QuadShot">
  <meta property="og:image" content="' . $site . '/static/logo.png">
  <meta property="og:description" content="' . $extension . ' file uploaded to QuadFile">';
}

?>
