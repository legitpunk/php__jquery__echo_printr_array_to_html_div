<?php

include('get_string_between_characters.php');

function	printr_to_html($array)
{
	$wer	=	'';
	$_SESSION['iteration']	=	$_SESSION['iteration']	+	1;
	
	foreach($array as $string)
	{
		if(is_array($string))
		{
			$asd		=		printr_to_html($string);
			$wer	=	$wer.$asd;
		}
		else
		{
			$nbsp	=	'';
			
			for( $a	=	1;	$a <= $_SESSION['iteration'];	$a++ )
			{
				$nbsp	=		$nbsp.'&nbsp;&nbsp;&nbsp;&nbsp;';
			}

			$asd		=		print_r($array, true);
			$asd		=		str_replace('>', '<p class"console_array_right_anglular_bracket_symbol">></p>', $asd);
			$between_square_brackets 	= 	get_string_between_characters($asd, '[', ']');

			foreach($between_square_brackets as $string)
			{
				$asd	=	str_replace($string, '<p class"console_array_indexes">'.$string.'</p>', $asd);
			}

			$asd	=	str_replace('=', '<p class"console_array_equals_symbol">=</p>', $asd);
			$asd	=	str_replace('[', '<br>&nbsp;&nbsp;&nbsp;&nbsp;<p class"console_array_left_square_bracket_symbol">'.$nbsp.'[</p>', $asd);
			$asd	=	str_replace(']', '<p class"console_array_right_square_bracket_symbol">]</p>', $asd);
			$asd	=	str_replace('(', '<p class"console_array_left_curved_bracket_symbol">'.$nbsp.'(</p>', $asd);
			$asd	=	str_replace(')', '<br><br><p class"console_array_right_curved_bracket_symbol">'.$nbsp.')</p>', $asd);
			$asd	=	str_replace('p class', 'p class=', $asd);
			$wer	=	$wer.$asd;
		}
	}
	$_SESSION['iteration']	=	$_SESSION['iteration'];	-	1;
	return	$wer;	
}

?>


<?php

/*

&nbsp;&nbsp;&nbsp;&nbsp;
			$asd		=		print_r($array, true);
			$asd		=		str_replace('>', '<p class"console_array_right_anglular_bracket_symbol">></p>', $asd);

			$between_square_brackets 	= 	get_string_between_characters($asd, '[', ']');

			foreach($between_square_brackets as $string)
			{
				$asd	=	str_replace($string, '<p class"console_array_indexes">'.$string.'</p>', $asd);
			}

			$asd	=	str_replace('=', '<p class"console_array_equals_symbol">=</p>', $asd);
			$asd	=	str_replace('[', '<br>&nbsp;&nbsp;&nbsp;&nbsp;<p class"console_array_left_square_bracket_symbol">[</p>', $asd);
			$asd	=	str_replace(']', '<p class"console_array_right_square_bracket_symbol">]</p>', $asd);
			$asd	=	str_replace('(', '<p class"console_array_left_curved_bracket_symbol">'.$nbsp.'(</p>', $asd);
			$asd	=	str_replace(')', '<br><br><p class"console_array_right_curved_bracket_symbol">'.$nbsp.')</p>', $asd);
			$asd	=	str_replace('p class', 'p class=', $asd);
			
			
$asd		=		printr_to_html($string);

$asd		=		print_r($array, true);
$asd		=		str_replace('>', '<p class"console_array_right_anglular_bracket_symbol">></p>', $asd);

$between_square_brackets 	= 	get_string_between_characters($asd, '[', ']');

foreach($between_square_brackets as $string)
{
	$asd	=	str_replace($string, '<p class"console_array_indexes">'.$string.'</p>', $asd);
}

$asd	=	str_replace('=', '<p class"console_array_equals_symbol">=</p>', $asd);
$asd	=	str_replace('[', '<br>&nbsp;&nbsp;&nbsp;&nbsp;<p class"console_array_left_square_bracket_symbol">[</p>', $asd);
$asd	=	str_replace(']', '<p class"console_array_right_square_bracket_symbol">]</p>', $asd);
$asd	=	str_replace('(', '<p class"console_array_left_curved_bracket_symbol">&nbsp;&nbsp;&nbsp;&nbsp;(</p>', $asd);
$asd	=	str_replace(')', '<br><br><p class"console_array_right_curved_bracket_symbol">&nbsp;&nbsp;&nbsp;&nbsp;)</p>', $asd);
$asd	=	str_replace('p class', 'p class=', $asd);

return	'<pre>'.$asd.'</pre>';

*/


/*
			
			
$asd		=		print_r($array, true);
$asd		=		str_replace('>', '<p class"console_array_right_anglular_bracket_symbol">></p>', $asd);

$between_square_brackets 	= 	get_string_between_characters($asd, '[', ']');

foreach($between_square_brackets as $string)
{
	$asd	=	str_replace($string, '<p class"console_array_indexes">'.$string.'</p>', $asd);
}

$asd	=	str_replace('=', '<p class"console_array_equals_symbol">=</p>', $asd);
$asd	=	str_replace('[', '<br>&nbsp;&nbsp;&nbsp;&nbsp;<p class"console_array_left_square_bracket_symbol">[</p>', $asd);
$asd	=	str_replace(']', '<p class"console_array_right_square_bracket_symbol">]</p>', $asd);
$asd	=	str_replace('(', '<p class"console_array_left_curved_bracket_symbol">(</p>', $asd);
$asd	=	str_replace(')', '<br><br><p class"console_array_right_curved_bracket_symbol">)</p>', $asd);
$asd	=	str_replace('p class', 'p class=', $asd);

return	'<pre>'.$asd.'</pre>';
			$asd		=		str_replace('>', '<p class"console_array_right_anglular_bracket_symbol">></p>', $asd);

			$between_square_brackets 	= 	get_string_between_characters($asd, '[', ']');

			foreach($between_square_brackets as $string)
			{
				$asd	=	str_replace($string, '<p class"console_array_indexes">'.$string.'</p>', $asd);
			}
			
			$nbsp		=	$nbsp.'&nbsp;&nbsp;&nbsp;&nbsp;';
			$asd	=	str_replace('=', '<p class"console_array_equals_symbol">=</p>', $asd);
			$asd	=	str_replace('[', '<br>&nbsp;&nbsp;&nbsp;&nbsp;<p class"console_array_left_square_bracket_symbol">[</p>', $asd);
			$asd	=	str_replace(']', '<p class"console_array_right_square_bracket_symbol">]</p>', $asd);
			$asd	=	str_replace('(', '<p class"console_array_left_curved_bracket_symbol">'.$nbsp.'(</p>', $asd);
			$asd	=	str_replace(')', '<br><br><p class"console_array_right_curved_bracket_symbol">'.$nbsp.')</p>', $asd);
			$asd	=	str_replace('p class', 'p class=', $asd);

*/
			
			