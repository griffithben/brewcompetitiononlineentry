<?php 
echo "<h2>Performing Database Updates for Version ".$current_version.". Please stand by.</h2>";
	
// THE INCLUDES MUST BE IN THIS ORDER! DO NOT CHANGE!!
	
include ('current/create_tables.php');
include ('current/alter_tables.php');
// include ('current/data_updates_brewer.php');
// include ('current/data_updates_styles.php');
include ('current/data_updates_brewing.php');
include ('current/data_updates_misc.php');
// include ('current/data_updates_archives.php');
	
?>