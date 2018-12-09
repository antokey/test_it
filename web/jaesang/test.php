<?php
	$phone_name = "아이폰 6";
	if(strpos($phone_name, "아이폰") !== false){
		str_replace("아이폰", "iPhone", $phone_name);
		echo $phone_name;
	}
?>