<!doctype html>

<!--
320 and Up by Andy Clarke
Version: 3.0
URL: http://stuffandnonsense.co.uk/projects/320andup/
Apache License: v2.0. http://www.apache.org/licenses/LICENSE-2.0
-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Tatico Track</title>

<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">

<!-- For all browsers -->
<!-- link rel="stylesheet" href="css/320andup.css" -->
<link rel="stylesheet/less" type="text/css" href="less/320andup.less">
<script src="js/less-1.3.0.min.js" type="text/javascript"></script>
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="js/modernizr-2.5.3-min.js"></script>

<!-- Icons -->

<!-- 16x16 -->
<link rel="shortcut icon" href="/favicon.ico">
<!-- 32x32 -->
<link rel="shortcut icon" href="/favicon.png">
<!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
<!-- <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png"> -->
<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png"> -->
<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png"> -->
<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->

<!--iOS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="apple-mobile-web-app-title" content="320 and Up"> -->
<!-- <meta name="viewport" content="initial-scale=1.0"> (Use if apple-mobile-web-app-capable below is set to yes) -->
<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->

<!-- Startup images -->

<!-- iPhone 3GS, pre-2011 iPod Touch -->
<!-- <link rel="apple-touch-startup-image" href="img/startup/startup-320x460.png" media="screen and (max-device-width:320px)"> -->
<!-- iPhone 4, 4S and 2011 iPod Touch-->
<!-- <link rel="apple-touch-startup-image" href="img/startup/startup-640x920.png" media="(max-device-width:480px) and (-webkit-min-device-pixel-ratio:2)"> -->
<!-- iPhone 5 and 2012 iPod Touch -->
<!-- <link rel="apple-touch-startup-image" href="img/startup/startup-640x1096.png" media="(max-device-width:548px) and (-webkit-min-device-pixel-ratio:2)"> -->
<!-- iPad landscape -->
<!-- <link rel="apple-touch-startup-image" sizes="1024x748" href="img/startup/startup-1024x748.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:landscape)"> -->
<!-- iPad Portrait -->
<!-- <link rel="apple-touch-startup-image" sizes="768x1004" href="img/startup/startup-768x1004.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:portrait)"> -->

<!-- Windows 8 / RT -->
<meta name="msapplication-TileImage" content="img/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#000">
<meta http-equiv="cleartype" content="on">
</head>

<body class="clearfix">

<!--header role="banner" class="clearfix">
<h1><a href="http://stuffandnonsense.co.uk/projects/320andup/">320 and Up</a></h1>
</header -->
<nav>
	<ul>
		<li class="activo">Trazas</li>
		<li>Agregar Trazas</li>
	</ul>
</nav>
<div class="content clearfix">
<?php
$op = "";
if(isset($_GET['op'])){
	$op = $_GET['op'];
}
switch ($op) {
	case 'track':
		echo "<iframe src=\"gpx.php?track=$_GET[track]\">";
		//require_once(dirname(__FILE__) . "/gpx.php");
		echo "</iframe>";
		break;

	default:
		require_once(dirname(__FILE__) . "/inicio.php");
		break;
}
?>
</div><!-- / content -->

<footer role="contentinfo">
<small>Powered by TATICO</small>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/helper.js"></script>
<script>
var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</body>
</html>