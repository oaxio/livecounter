<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/normalize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/skeleton.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/custom.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/counter.css" media="screen" title="no title" charset="utf-8">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <title> :: home</title>
  </head>
  <body>
    <?php
    $youtuberstart = "VAKOGAMES";
    $api = false;

    if (isset($_POST['channel']) && strlen(trim($_POST['channel'])) || isset($_GET['c']) && strlen(trim($_GET['c']))) {
      if (isset($_POST['channel'])) {
        $inputform = trim(htmlspecialchars($_POST['channel']));
      } else {
        $inputform = trim(htmlspecialchars($_GET['c']));
        $api = true;
      }
      $inputformlower = strtolower($inputform);

      if ($inputformlower == 'ksi') {
        $channel = 'KSIOlajidebt';
      } else {
        $channel = $inputform;
      }
    } else {
      $channel = $youtuberstart;
    }
 ?>
    <script src="js/youtube.js"></script>
    <script src="js/counter.js"></script>

    <div class="section">
  <div class="container">
    <h1><em>Vakogames</em>
      <br>
      <span id="currentLive" class="counter">[LOADING]</span>
      <span id="currentLive" class="counter not-found">NOT FOUND</span>
    </h1>
<input class="inputform u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">

</div>
<div class="container">
          <br>
          <h5 class="center">Friends with <a href="vimexx.nl">Vimexx</a></h5>
        </div>
        <script>
                                        username = '<?php echo $channel ?>'
                                        $("#cpa-form").submit(function(e) {
                                            return false;
                                        });
                                    </script>




</div>
</div>
  </body>
</html>
