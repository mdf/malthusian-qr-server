<?php
	
	$con = mysql_connect("localhost","malthusian","malthusian");
	
	if (!$con)
  	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("malthusian", $con);
	
	$sql = "SELECT * FROM checkins ORDER BY timestamp DESC";
	
	$rows = array();
	$res = mysql_query($sql, $con);
	
	while($r = mysql_fetch_assoc($res))
	{
		$rows[] = $r;
	}
	
	echo json_encode($rows);

?>