<?php
if ($go != "mods") {
	foreach ($mods_display as $mbid) {
		$mods = mod_display($mbid,$section,$go,$row_user['userLevel'],0,$section);
		if ($mods != "") include($mods);
	} 
}
?>