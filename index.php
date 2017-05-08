<?php 
	$contentFileName = $_SERVER['REQUEST_URI'];
	$contentFileName = str_replace('/', '', $contentFileName);
	if($contentFileName == '')
	{
		$contentFileName = 'home';
	}
	$contentFile = __DIR__ . "/includes/$contentFileName.php";
	if(! file_exists("$contentFile"))
	{
		$contentFile = __DIR__ . "/includes/404.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>marchodler.ch</title>
    <!-- 
	FAVICON: Generiertes Favicon unter root einfügen ODER in einem Folder und href="xxx" anpassen
	 
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" href="/style.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<header>
		<nav class="navbar navbar-light bg-faded">

  			<a class="navbar-brand" href="/">
  				
  				<!--<img width="70" src="/logo.png">--> <span class="name hidden-sm-down">MARC HODLER</span>
  			</a>

  			<div class="navbar-nocollapse" id="mhNavbar">
    			<ul class="nav navbar-nav ml-auto">
      				<li class="nav-item">
        				<a class="nav-link" href="/">HOME</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="/about">ABOUT</a>
      				</li>

      				<li class="nav-item hire">
        				<a class="nav-link" href="/hire-me">HIRE ME</a>
      				</li>
    			</ul>
  			</div>
		</nav>
	</header>

	<section class="content">
		<?php include("$contentFile"); ?>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
	<script>
	WebFont.load({
	  google: {
	    families: ['Open Sans', 'Cardo']
	  }
	});
	</script>

	<script src="https://use.fontawesome.com/f27345e93c.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>