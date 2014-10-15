<html>

  <head>

    <title>QuadFile - Unlimited free uploads</title>

    <meta name="description" content="Upload as many files as you wish and share them, 100% free and untracked.">

    <link rel="stylesheet" href="static/uploadpage.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="static/colors.css" media="screen" title="no title" charset="utf-8">

  </head>

  <body>

    <p class="dltext title">
      QuadFile
    </p>

    <p class="dltext subtle">
      Max filesize is 40 MB
    </p>

    <p class="dltext subtle">
      Files uploaded here are <b>NOT</b> found in the random section.
    </p>

    <!-- File upload form -->
    <form class="uploadinterface" id="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" class="fileselector">
      <input type="submit" name="uploadbutton" value="upload" class="submitbutton">
    </form>

    <p class="dltext subtle">
      By using this service you agree to the limits located at the 'info' page
    </p>

    <div class="sidebar">

      <a href="static/info.html">
      <div class="button orangeBG"><p class="buttontxt">INFO</p></div>
      </a>

      <a href="http://quad.moe">
      <div class="button orangeBG"><p class="buttontxt">CREATOR</p></div>
      </a>

      <a href="http://github.com/QuadPiece/QuadFile">
      <div class="button orangeBG"><p class="buttontxt">GITHUB</p></div>
      </a>

      <div class="separator"><p class="buttontxt">Sections</p></div>

      <a href="random">
      <div class="button orangeBG"><p class="buttontxt">RANDOM</p></div>
      </a>

      <a href="wallpapers">
      <div class="button orangeBG"><p class="buttontxt">WALLPAPERS</p></div>
      </a>

    </div>

  </body>

</html>
