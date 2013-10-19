<!DOCTYPE html>
<html>
<head>
<title>Here And Now</title>
<link rel="stylesheet" type="text/css" href="reset.css"/>
<link rel="stylesheet" type="text/css" href="events.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:200,100' rel='stylesheet' type='text/css'>
</head>
<?php
		$sad_life = false;
		$time = $_POST['time'];
		$ampm = $_POST['ampm'];
		$college = $_POST['location'];
		$category = $_POST['category'];
		$date = date("Y-m-d");
		if ($time == 12)
		{
			$time = 0;
		}
		if ($ampm == 'PM')
		{
			$time += 12;
		}
		if ($time < 10)
		{
			$time = '0' . $time;
		}
		$datetime = $date . " {$time}:00:00" ;
		include 'db_connect.php';
		$query = "SELECT * FROM events WHERE college = '{$college}' AND category = '{$category}' AND '{$datetime}' BETWEEN time_start AND time_end" ;
		$result_obj = $connection->query($query);
		if (!$result_obj)
		{
			$sad_life = true;
 		}
?>
<body>
<div id = "logo">
	<a  href = "index.php"><img id  = "logo" src = "img/HandNLogoMini.svg"></a>
</div>
<div id = "banner">
	<img id = "banner" src = "img/HandNRibbon.svg">
</div>
<p id = "banner-text"> Here's what we found for now:</p>

<div id = "container">
<?php
$rows = $result_obj->fetch_all(MYSQLI_ASSOC);

if(!$sad_life && sizeof($rows) > 0)
{
	foreach($rows as $row)
	{
		$start_hour = substr($row['time_start'],11,2);
		$end_hour = substr($row['time_end'],11,2);
		$startampm = 'AM';
		$endampm = 'AM';

		if ($start_hour == 0)
			$start_hour = 12;
		if ($start_hour == 12)
			$startampm = 'PM';
		if ($start_hour > 12)
		{
			$startampm = 'PM';
			$start_hour -= 12;
		}

		if ($end_hour == 0)
			$end_hour = 12;
		if ($end_hour == 12)
			$endampm = 'PM';
		if ($end_hour > 12)
		{
			$endampm = 'PM';
			$end_hour -= 12;
		}

		echo '<div class = "event">';
		echo '<p class = "name">' . $row['event_name'] . '</p>';
		echo '<p class = "category">' . $row['category'] .' </p>';
		echo '<p class = "info">'. $row['event_description'].'</p>';
		echo '<p class = "time">Time: '. $start_hour . $startampm . ' - ' . $end_hour . $endampm .'  </p>';
		echo '<p class = "location">Location: ' . $row['location'] . ' </p>';
		echo '<p class  = "rating"> <span style="color:green">&#8593;'. $row['up'] .'</span>/<span style="color:red">'.$row['down'].'&#8595;</span> </p>';
		echo '</div>';
	}
}
else
{
	echo '<p id = "alternate">Unfortunately, no events of this type are available right now.</p>;';
}

?>
		
</div>
</body>
</html>
		