<html lang="en">
  <head>
    <meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container"> 
          <main role="main" class="inner cover">
          <h1 class="cover-heading"><?php echo $baslik ?></h1>
            <p class="lead"><?php echo $icerik ?>
          </main>
          <footer class="mastfoot">
            <div class="inner">
              <p><a href="<?php echo URL ?>"><b><?php echo SITE_ADI ?></b></a></p>
            </div>
          </footer>
        </div>

      </div>

    </div>
  </body>
</html>