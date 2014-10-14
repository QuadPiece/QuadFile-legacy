<?php

//Enable error reporting because this somehow fixed stuff
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//Marker in case of unwanted file
t:

//Get random file
$dir = '../random/file';
$file = scandir($dir);
$r = rand(2, sizeof($file)-1);

//Set to existing variable, because too lazy to rewrite everything
$filename = $file[$r];

//Lol
if($filename == "Thumbs.db") {
  goto t;
}

//Set the variables for the direct link
$filelocation = "../wallpapers/file/" . $filename;

//Find extensions to use for preview
$extension = explode('.', $filename);
$extension = strtolower(end($extension));

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $filename; ?> - QuadFile</title>

    <!-- Stylesheets -->

		<link rel="stylesheet" type="text/css" href="../static/view.css">
		<link rel="stylesheet" type="text/css" href="../static/colors.css">

		<?php
		include_once("../static/includes/video.php")
		?>

	</head>
	<body>

    <!-- Google analytics -->
    <?php include_once("../static/includes/botnet.php") ?>

		<h1 class="dltext">"<?php echo $filename;?>"</h1>

    <div class="buttoncontainer">

      <a href="<?php echo 'perma/' . $filename;?>">
      <div class="button">PERMALINK</div>
      </a>

      <a href="../">
      <div class="button">MAIN PAGE</div>
      </a>

      <p class="dltext subtle">
        Upload a new file to the wallpaper section section
      </p>

      <form class="uploadinterface" id="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" class="fileselector">
        <input type="submit" name="uploadbutton" value="upload" class="submitbutton">
      </form>

    </div>

		<?php include_once("../static/includes/randompreview.php") ?>



	</body>
</html>
