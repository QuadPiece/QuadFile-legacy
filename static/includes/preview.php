<?php

// //Echo previews for supported formats (This gon be messy son)
// if($extension == "webm") {
//   echo '<video class="video-js vjs-default-skin videoprev" width="854" height="480" controls data-setup=' . "'" . '{"example_option":true}' . "'" . '><source src="../file/' . $filename . '" type="video/webm">Get a browser that supports WebM fag.</video>';
// }
// elseif($extension == "mp4") {
//   echo '<video class="video-js vjs-default-skin videoprev" width="854" height="480" controls data-setup=' . "'" . '{"example_option":true}' . "'" . '><source src="../file/' . $filename . '" type="video/webm">Get a browser that supports WebM fag.</video>
//   <p class="dltext subtle">Some MP4 files will play, some will not. There is unfortunately nothing we can do about this.</p>';
// }
// elseif($extension == "jpg") {
//   echo '<img src="../file/' . $filename . '">';
// }
// elseif($extension == "jpeg") {
//   echo '<img src="../file/' . $filename . '">';
// }
// elseif($extension == "png") {
//   echo '<img src="../file/' . $filename . '">';
// }
// elseif($extension == "gif") {
//   echo '<img src="../file/' . $filename . '">';
// }
// elseif($extension == "mp3") {
//   echo '<audio class="audioprev" src="../file/' . $filename . '" controls>';
// }
// elseif($extension == "ogg") {
//   echo '<audio class="audioprev" src="../file/' . $filename . '" controls>';
// }
// else {
//   echo '<p class="dltext subtle">We do not support previews for this filetype.</p>';
// }


switch($extension) {
  case "webm":
    echo '<video class="video-js vjs-default-skin videoprev" width="854" height="480" controls data-setup=' . "'" . '{"example_option":true}' . "'" . '><source src="../file/' . $filename . '" type="video/webm">Get a browser that supports WebM fag.</video>';
    break;

  case "mp4":
    echo '<video class="video-js vjs-default-skin videoprev" width="854" height="480" controls data-setup=' . "'" . '{"example_option":true}' . "'" . '><source src="../file/' . $filename . '" type="video/webm">Get a browser that supports WebM fag.</video>
    <p class="dltext subtle">Some MP4 files will play, some will not. There is unfortunately nothing we can do about this.</p>';
    break;

  case "jpg":
  case "jpeg":
  case "png":
  case "gif":
    echo '<img src="../file/' . $filename . '">';
    break;

  case "mp3":
  case "ogg":
    echo '<audio class="audioprev" src="../file/' . $filename . '" controls>';
    break;

  case "txt":
    $textcontent = file_get_contents('../file/' . $filename);
    echo '<p class="filetext">';
    echo strip_tags($textcontent);
    echo '</p>' . "\n";
    echo '<p class="dltext subtle">Some content may have been stripped from the file. Click download to see the original.</p>';
    break;

  default:
   echo '<p class="dltext subtle">We do not support previews for this filetype.</p>';
}

?>
