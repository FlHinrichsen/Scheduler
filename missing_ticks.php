<?php

	$max = $_GET['count'];
	
	define('IN_SCHEDULER', true); 
	for($i=0; $i<$max; $i++)
	{
		unset($sdl);
		unset($db);
		unset($game);
		include("main.php");
	}
?>