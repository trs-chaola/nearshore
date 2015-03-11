<?php 

	 $link = mysql_connect('nearshore.localhost', 'root', '');
	 if (!$link) {
		  die('Could not connect: ' . mysql_error());
	 }
	 

	$db_selected = mysql_select_db('nearshore', $link);
	if (!$db_selected) {
		die ( mysql_error());
	}
?>

