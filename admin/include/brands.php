<?php

	$adv_query = "SELECT * FROM `brands`";
	$adv_result = mysqli_query($connection , $adv_query);
	while($adv_row = mysqli_fetch_assoc($adv_result)){
		
		var_dump($adv_row);
		
		}

?>