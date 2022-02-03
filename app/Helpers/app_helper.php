<?php

// Function: used to convert a string to revese in order
if (!function_exists("status")) {
	function status($statusId)
	{
		return ($statusId== 1) ? ("<div class='badge badge-success fw-bolder'>Actif</div>") : ("<div class='badge badge-danger fw-bolder'>InActif</div>"); 
	}
}
if (!function_exists("deleteUser")) {
	function deleteUser($statusId)
	{
		return ($statusId== 1) ? ("<span class='text-danger'>Bannir</span>") : ("<span class='text-success'>Activer</span>"); 
	}
}


?>
