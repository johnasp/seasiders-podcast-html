<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-webapp-capable" content="yes"/> <!-- Hide URL bar for iOS devices -->
<meta name="author" content="John Aspinall, @seasiderspod">
<title>Seasiders Podcast V2 redesign</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700|Roboto+Condensed:700|Fjalla+One' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/global.css" >
<!-- Apple touch icons -->
<link rel="apple-touch-icon" href="images/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="images/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="images/touch-icon-ipad-retina.png" />

<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-775962-19', 'measuredprogress.co.uk');
  ga('send', 'pageview');

</script>

<!-- Jquery from CDN -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- Conditionizr -->
<script src="js/conditionizr.js"></script>
<script>
	conditionizr({
		debug      : true,
		scriptSrc  : 'js/conditionizr/',
		styleSrc   : 'css/conditionizr/',
		ieLessThan : { active: true, version: '9', scripts: true, styles: true, classes: true, customScript: false},
		chrome     : { scripts: true, styles: true, classes: true, customScript: false },
		safari     : { scripts: true, styles: true, classes: true, customScript: false },
		opera      : { scripts: true, styles: true, classes: true, customScript: false },
		firefox    : { scripts: true, styles: true, classes: true, customScript: false },
		ie10       : { scripts: true, styles: true, classes: true, customScript: false },
		ie9        : { scripts: true, styles: true, classes: true, customScript: false },
		ie8        : { scripts: true, styles: true, classes: true, customScript: false },
		ie7        : { scripts: true, styles: true, classes: true, customScript: false },
		ie6        : { scripts: true, styles: true, classes: true, customScript: false },
		retina     : { scripts: true, styles: true, classes: true, customScript: false },
		touch      : { scripts: true, styles: true, classes: true, customScript: false },
		mac        : true,
		win        : true,
		x11        : true,
		linux      : true
	});
</script>


</head>