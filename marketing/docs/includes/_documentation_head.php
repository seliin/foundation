<? $version = "2.2.1"; ?>
<!DOCTYPE html>	

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta name="description" content="Foundation is an easy to use, powerful, and flexible framework for building rapid prototypes and production code on any kind of device." />
	
	<title>Foundation: <?= $page_title ?></title>
  	<link rel="apple-touch-icon" href="../apple-touch-icon.png" />
	<link rel="icon" type="image/ico" href="../favicon.ico">
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/globals.css">
	<link rel="stylesheet" href="../../css/typography.css">
	<link rel="stylesheet" href="../../css/grid.css">
	<link rel="stylesheet" href="../../css/ui.css">
	<link rel="stylesheet" href="../../css/buttons.css">
	<link rel="stylesheet" href="../../css/tabs.css">
	<link rel="stylesheet" href="../../css/navbar.css">
	<link rel="stylesheet" href="../../css/forms.css">
	<link rel="stylesheet" href="../../css/orbit.css">
	<link rel="stylesheet" href="../../css/reveal.css">
	<link rel="stylesheet" href="../../css/app.css">
	<link rel="stylesheet" href="../../css/mobile.css">
	<link rel="stylesheet" href="../../css/offcanvas.css">
	<link rel="stylesheet" href="http://www.zurb.com/assets/foundation.top-bar.css">
  <link rel="stylesheet" href="http://www.zurb.com/assets/zurb.mega-drop.css">
	<link rel="stylesheet" href="presentation.css">
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="../../css/ie.css">
	<![endif]-->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body class="off-canvas">

  <!-- ZURBar -->
  <div class="container top-bar home-border">
    <div class="attached">
      <div class="name" onclick="void(0);">
        <span><a href="http://foundation.zurb.com">Foundation</a> <a href="#" class="toggle-nav"></a></span>
  		</div>

  		<ul class="right">			
  			<li>
  			  <a href="grid.php" <?php if (isset($featuresTab)) echo 'class="current"'; ?>>Features</a>
  			</li>			
  			<li>
  			  <a href="case-soapbox.php" <?php if (isset($caseStudiesTab)) echo 'class="current"'; ?>>Case Studies</a>
  			</li>
  			<li>
  			  <a href="docs">Documentation</a>
  			</li>
  		  <li>
  		    <a href="http://github.com/zurb/foundation">GitHub</a>
  			</li>
  			<li class="download"><a class="small blue nice button src-download" href="files/foundation-download-2.2.1.zip">Download</a></li>
  		</ul>
  	</div>
  </div>

  <!-- INSERT MEGA DROP DOWN HERE -->
  <?php
  $megadropfile = '../cache/navigation_bar.html';

  if (file_exists($megadropfile)) {
      include $megadropfile;
  }
  ?>

  <!-- /ZURBar -->

	<header id="header" class="row">
	  <div class="eight columns">
	    <h1><a href="index.php">Foundation 3 Documentation</a></h1>
	    <h4 class="subheader">Everything you need to know to build for the future.</h4>
	    
  	  <div class="show-for-small menu-action">
  	    <a class='sidebar-button small secondary button' id='sidebarButton' href="#sidebar" >
    	    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="18px" height="18px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
          <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="8.907" x2="48" y2="8.907"/>
          <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="24.173" x2="48" y2="24.173"/>
          <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="39.439" x2="48" y2="39.439"/>
          </svg>
  	    </a>
  	  </div>
	  </div>	
	</header>
