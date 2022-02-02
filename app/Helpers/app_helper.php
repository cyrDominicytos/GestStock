<?php

// Function: used to convert a string to revese in order
if (!function_exists("status")) {
	function status($statusId)
	{
		return ($statusId== 1) ? ("<div class='badge badge-success fw-bolder'>Actif</div>") : ("<div class='badge badge-danger fw-bolder'>InActif</div>"); 
	}
}


?>
