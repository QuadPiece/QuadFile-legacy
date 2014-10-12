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
    include_once("../static/includes/cards.php")
    ?>

    <!-- OpenGraph for Facebook -->

    <?php
    include_once("../static/includes/opengraph.php")
    ?>

    <!-- Stylesheets -->

		<link rel="stylesheet" type="text/css" href="../static/view.css">
		<link rel="stylesheet" type="text/css" href="../static/colors.css">

	</head>
	<body>

    <!-- Google analytics because deal with it -->
    <?php include_once("../static/includes/botnet.php") ?>

		<h1 class="dltext">"<?php echo $filename;?>"</h1>

    <div class="buttoncontainer">

      <a href="<?php echo $filelocation;?>">
      <div class="button">DOWNLOAD</div>
      </a>

      <a href="../">
      <div class="button">UPLOAD A FILE</div>
      </a>

    </div>

		<?php include_once("../static/includes/preview.php") ?>



	</body>
</html>
