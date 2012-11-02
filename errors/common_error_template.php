<?php

	// Normailze the different variables passed
	
	$title = isset($title) ? $title : '';
	$heading = isset($heading) ? $heading : '';
	$message = isset($message) ? strip_tags($message) : '';

	if(isset($severity) && $severity) $severity = $severity;
	if(isset($filepath) && $filepath) $filepath = $filepath;
	if(isset($line) && $line) $line =  $line;

	if(isset($severity)) :
	
	// This is a PHP error
	
?><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?php echo $severity; ?></p>
<p>Message:  <?php echo $message; ?></p>
<p>Filename: <?php echo $filepath; ?></p>
<p>Line Number: <?php echo $line; ?></p>

</div><?php

	else :
	
	// The other errors 

?><html>
<head>
<title><?php echo $title?></title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			12px;
color:				#000;
}

#content  {
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

h1 {
font-weight:		normal;
font-size:			14px;
color:				#990000;
margin: 			0 0 4px 0;
}
</style>
</head>
<body>
	<div id="content">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html>
<?php

	endif;