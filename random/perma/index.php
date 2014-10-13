<?php

//Get filename from URL
if (isset($_GET["filename"]) && $_GET["filename"] != "" && $_GET["filename"] != " ") {
    $filename = htmlentities($_GET["filename"]);
}
//404 if no value
else {
    $filename = "404.webm";
}

//404 if file doesn't exist
if (file_exists ("../file/" . $filename)) {
}
else {
    header("HTTP/1.0 404 Not Found");
    $filename = "404.webm";
}

//Set the variables for the direct link
$filelocation = "../file/" . $filename;

//Find extensions to use for preview
$extension = explode('.', $filename);
$extension = strtolower(end($extension));

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $filename; ?> - QuadFile</title>

    <!-- Twitter cards -->

    <?php
    include_once("../../static/includes/randomcards.php")
    ?>

    <!-- OpenGraph for Facebook -->

    <?php
    include_once("../../static/includes/randomopengraph.php")
    ?>

    <!-- Stylesheets -->

		<link rel="stylesheet" type="text/css" href="../../static/view.css">
		<link rel="stylesheet" type="text/css" href="../../static/colors.css">

    <?php
    include_once("../../static/includes/video.php")
    ?>

	</head>
	<body>

    <!-- Google analytics because deal with it -->
    <?php include_once("../../static/includes/botnet.php") ?>

		<h1 class="dltext">"<?php echo $filename;?>"</h1>

    <div class="buttoncontainer">

      <a href="<?php echo $filelocation;?>">
      <div class="button">DOWNLOAD</div>
      </a>

      <a href="../">
      <div class="button">RANDOM FILE</div>
      </a>

    </div>

    <p class="dltext subtle">
      You can share this page. It will always go directly to this file.
    </p>

		<?php include_once("../../static/includes/preview.php") ?>



	</body>
</html>
