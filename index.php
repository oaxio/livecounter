<!doctype html>
<html class="no-assets/js" lang="en" dir="ltr">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Een gratis live abonneeteller voor YouTube. Wij hebben plannen om ook andere sociale media toe te voegen! :)" />
        <meta name="keywords" content="youtube, you, tube, abonnees, abbonnees, abbonees, youtubers, live, games, vlog, beauty, aantal, veel, live, life, snel, iedere, seconde, laden, minecraft" />
        <meta name="author" content="SjoerdK.nl">
        <meta name="robots" content="index, follow" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/foundation.min.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <title>LiveCounter - Roy Vroon</title>
		
		
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84928611-9', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
    <?php
    $youtuberstart = 'PewDiePie';
    if (isset($_POST['channel']) && strlen(trim($_POST['channel'])) || isset($_GET['c'])){
        if (isset($_POST['channel'])) {
            $inputform = trim(htmlspecialchars($_POST['channel']));
        }
        elseif(isset($_GET['c'])){
          $inputform = trim(htmlspecialchars($_GET['c']));
        }
        $channel = ucfirst(strtolower($inputform));
    } else {
        $channel = $youtuberstart;
    }
?>
        <div id="header" class="gradient"></div>
        <main>
            <div class="row">
                <div class="large-12 columns">
                    <form action="" method="POST">
                        <input type="text" class="materialbox" id="inputbig" id="cpa-form" name="channel" placeholder="Voer een YouTube kanaalnaam in " /> </form>
                </div>
            </div>
            <div class="large-12 columns row">
                <div class="callout materialbox"> <img alt="Channellogo" id="avatar" class="image"><img alt="Channellogo" style="visibility: hidden;" id="placeholder" src="user.png" class="image">
            <h4 class="channelname"><?= $channel;?></h4>
          <h1 class="counter odometer" id="odometer">N/A</h1>
              <h3 class="counter" id="not-found" style="display: none; font-size: 100px !important;">Niets gevonden..</h3>


              <script>
    var count = 1;
    function setColor(btn, color) {
        var property = document.getElementById('header');
        if (count == 0) {
            property.style.backgroundColor = ""
            count = 1;
        }
        else {
            $("#header").addClass('kaas');
            count = 0;
        }
    }
</script>
      </span> </div>
      <div class="callout materialbox">
      </div>
                <div class="callout materialbox" style="width: 100%"> &copy; <?= date("Y"); ?> Roy Vroon <span class="right">Proudly hosted by <a href="https://zeit.co" rel="nofollow" target="_blank" class="medium-text-right">Zeit</a> <a id="btn" onclick="setColor('button', '#101010')" href="#">.</a></span> </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="assets/js/odometer.js"></script>
        <script src="assets/js/vendor/jquery.js" async></script>
        <script src="assets/js/vendor/what-input.js" async></script>
        <script src="assets/js/vendor/foundation.js" async></script>
        <script src="assets/js/app.js" async></script>
        <script>username = '<?php echo $channel ?>'; $("#cpa-form").submit(function (e) {return false;});</script>
		
</body>

</html>
