<!DOCTYPE html>
<html>
<head>
<title>Here And Now</title>
<link rel="stylesheet" type="text/css" href="reset.css"/>
<link rel="stylesheet" type="text/css" href="submit.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:200,100' rel='stylesheet' type='text/css'>
</head>
<?php
	include 'db_connect.php';
	$name = filter_var($_POST['event_name'], FILTER_SANITIZE_STRING);
	$start_time = filter_var($_POST['start_time'], FILTER_SANITIZE_STRING);
	$end_time = filter_var($_POST['end_time'], FILTER_SANITIZE_STRING);
	$descr = filter_var($_POST['descr'], FILTER_SANITIZE_STRING);
	$location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
	$category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
	$fail = false;
	if (empty($category) || empty($location) || empty($descr) || empty($name))
		$fail = true;
	else
	{
		$query = "INSERT INTO events (event_name, event_description, time_start, time_end, location, category, college, up, down ) VALUES('{$name}', '{$descr}', '{$start_time}', '{$end_time}', '{$location}', '{$category}', 'Berkeley', 0, 0)";
		if ($connection->query($query))
		{
			$fail = false;
		}

	}

?>
<body>
<div id = "logo">
	<a  href = "index.php"><img id  = "logo" src = "img/HandNLogoMini.svg"></a>
</div>
<div id = "banner">
	<img id = "banner" src = "img/HandNRibbon.svg">
</div>
<p id = "banner-text"> You can make an event here.</p>
<div id = "container">
	<div class = "event">
		<p style="font-size: 30px; line-height: 0; margin-top: 125px">
			<?php 
			if (!$fail)
				echo 'Thank you for submitting an event.';
			else
				echo "Sorry, we've encountered an error.";
			?>
		</p>
	</div>

	<input type="button" id = "button" value = "Return" onClick="parent.location='index.php'"/>
</body>
</html>
		