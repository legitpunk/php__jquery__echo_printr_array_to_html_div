<?php

Function get_string_between_characters($String, $Tag_Open, $Tag_Close)
{
	foreach (explode($Tag_Open, $String) as $key => $Value) 
	{
		if(strpos($Value, $Tag_Close) !== FALSE)
		{
			$Result[] = substr($Value, 0, strpos($Value, $Tag_Close));
		}
		else
		{
			
		}
	}
	if(isset($Result))
	{
		return $Result;
	}
	else
	{
		$Result =	"there_were_no_tags";
		return $Result;
	}
	
	
}

