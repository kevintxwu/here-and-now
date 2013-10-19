<!DOCTYPE html>
<html>
<head>
<title>Here And Now</title>
<link rel="stylesheet" type="text/css" href="submit.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:200,100' rel='stylesheet' type='text/css'>
</head>
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
		<form id = "form" action = "postsub.php" method = "POST">
		<input type="text" class="input" placeholder="(Event Name)"  name = "event_name"/>
		<div id= "cats">
		<select id = "category" name = "category">
			<option value="">Category</option>
        	<option value="Party">Party</option>
        	<option value="Music">Music</option>
        	<option value="Sports">Sports</option>
        	<option value="Nature">Nature</option>
   		</select>
   		</div>
   		<div id="desc">
   		<p>Description</p>
		<textarea maxlength="180" placeholder="Description of Event" id="description" rows="5" cols="30" name = "descr"/></textarea>
		</div>
		<p>Time</p>
			Start: <input type="datetime-local" class="datetime" name="start_time"><br/>
			End: <input type="datetime-local" class="datetime" name="end_time">
		<p>Address</p>
		<div id="address">
		<input type="text" class="input-small" placeholder="Address" name = "location"/>
		</div>
	</div>

	<input type="submit" id="submit" value="Submit"/>
	</form>

</div>
</body>
</html>
		