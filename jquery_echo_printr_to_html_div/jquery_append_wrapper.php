<?php

include('Wse2.php');

function	jquery_append_wrapper($string)
{
	$string		=		'<script>$("#console").append(\''.$string.'\');</script>';
	
	return 		Wse2($string);
}