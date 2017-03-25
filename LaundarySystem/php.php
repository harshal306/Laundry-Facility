<?php

	$name = "harshal";
	$country_code = "09";
	$mob_no = "987";
	$hostel_pg = "select";
	$room_no = "21";
	
	if($name != "" && $country_code != "" && $mob_no != "" && strcasecmp($hostel_pg,"Select") == 0 && $room_no != "")
	{
			echo "OK";
	}
	else{
		echo "fail";
	}
		
?>
