<?php 
session_start();
include('printr_to_html.php');
include('jquery_append_wrapper.php');

?>
<html>

	<head>
	
		<link href="stylesheet.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		
	</head>
	
	<body>
	
		<div id="console">
		
		</div>
		
	<?php
	
	$array		=		array('index_asd' => 'qwerty', 'qweqwasd' => 'gshshd');


	$_SESSION['iteration']	=	0;
	$html		=		printr_to_html($array);
	
	echo 			$html;
	
	$script		=		jquery_append_wrapper($html);
	
	echo 			$script;
	
	$array		=		array('index_asd' => 'qwerty', 'qweqwasd' => 'gshshd', array('index_3' => 'asdf'));

	$html		=		printr_to_html($array);
	
	echo 			'<pre>'.$html.'</pre>';
	
	$script		=		jquery_append_wrapper($html);
	
	echo 			$script;
	
	?>
	
	</body>
	
</html>