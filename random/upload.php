<?php

error_reporting(0);
@ini_set('display_errors', 0);

//Check if a file has been submitted
if(isset($_FILES['file'])) {
  $file = $_FILES['file'];

  //File information and details
  $filename = $file['name'];
  $filetmp = $file['tmp_name'];
  $filesize = $file['size'];
  $error = $file['error'];
  $maxsize = 41943040;

  //Find file extension for whitelisting
  $extension = explode('.', $filename);
  $extension = strtolower(end($extension));

  //List of allowed exstensions
  $allowed = array('png', 'jpg', 'jpeg', 'gif', 'webm', 'mp4', 'mp3', 'ogg');

  //Check if file is allowed
  if(in_array($extension, $allowed)) {

    //Check if there is an error
    if($error === 0) {

      //Check if size of file is below allowed filesize
      if($filesize <= $maxsize) {

        //Marker in case name exists
        g:

        //Generate unique ID (thanks danielpox for letting me rip off your code)
        $newname = strtoupper(substr(hash("sha256", reset($filename) . (rand() * 100)), 0, 6)) . "." . $extension;

        //Check if name exists
        if (file_exists ("/file/" . $newname)) {
          goto g;
        }

        //Set file location
        $location = 'file/' . $newname;

        //Move file to storage folder
        if(move_uploaded_file($filetmp, $location)) {

          //Redirect to download page
          echo "Your file was added!";
          header( "Refresh:3; url=../random", true, 303);

        }else{echo "Redirect failed. Maybe your file was added, we're unsure :(";}
      }else{echo "This file is too large!";}
    }else{echo "Our server found a problem with this file. Try again";}
  }else{echo "This filetype is not allowed in this section, sorry! If you think it should be. Mention @QuadPiece on Twitter and I'll think about it!";}
}else{echo "We didn't find a file!";}

?>
