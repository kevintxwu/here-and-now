<!DOCTYPE html>
<html>
<head>
<title>Here And Now</title>
<link rel="stylesheet" type="text/css" href="reset.css"/>
<link rel="stylesheet" type="text/css" href="index.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
</head>
<body>
<div id = "logobox">
  <input type="button" id = "logo" value = ""/>
</div>
<div id = "ribbonbox">
  <p id = "sentence"> It's  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and I want to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
  <input type="button" id = "ribbon" value = ""/>
  <form id = "form" action = "events.php" method = "post">
    <select id = "time" name = "time">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <select id = "ampm" name = "ampm">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
    </select>
    <select id = "location" name = "location">
        <option value="Berkeley">Berkeley</option>
    </select>
    <select id = "category" name = "category">
        <option value="">Category</option>
        <option value="Party">Party</option>
        <option value="Music">Music</option>
        <option value="Sports">Sports</option>
        <option value="Nature">Nature</option>
        <option value="Random">Random</option>
    </select>
    <input type="submit" id="submit" value=">>"/>
</div>
<div id = "addevent">
     <input type="button" id = "adder" value = "I want to add an event!" onClick="parent.location='submit.php'"/>
</div>
</form>
</body>
</html>