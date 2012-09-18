<?php
	
	$player = $_POST['post_player'];
	$location = $_POST['post_location'];
	
	$con = mysql_connect("localhost","malthusian","malthusian");
	
	if (!$con)
  	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("malthusian", $con);
	
	$sql = "INSERT INTO checkins (location, player) VALUES ('$location', '$player')";
	
	if (!mysql_query($sql, $con))
	{
		die('Error: ' . mysql_error());
	}

?>