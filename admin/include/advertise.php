<?php

	$adv_query = "SELECT advertises.advertises_ID, advertises.advertises_Name, advertises.advertises_Title, advertises.advertises_Description, advertises.advertises_RegisterDate, advertises.advertises_Active, advertises.advertises_BrandID, advertises.advertises_ShopID, advertises.advertises_LikeCount, advertises.advertises_Price, advertises.advertises_HasDiscount, advertises.advertises_PercentDiscount, advertises.advertises_IsSendDetail, advertises.advertise_IsNew , 
advertiseimages.advertiseImages_ID, advertiseimages.advertiseImages_AdvertiseID, advertiseimages.advertiseImages_ImageUrl, advertiseimages.advertiseImages_ImageThumbnailUrl
FROM `advertises` INNER JOIN `advertiseimages` 
ON advertises.advertises_ID = advertiseimages.advertiseImages_AdvertiseID";
	$adv_result = mysqli_query($connection , $adv_query);
	while($adv_row = mysqli_fetch_assoc($adv_result)){
		echo"
		
			<div class='col-md-4'>
				  <div class='view view-fifth'>
					  <img src='images/advertise/".$adv_row['advertiseImages_ImageUrl']."'>
					  <div class='mask'>
						  <h2>".$adv_row['advertises_Title']."</h2>
						  <p>".$adv_row['advertises_Description']."</p>
						  <a href='#' class='info'>ورود</a>
					  </div>
				  </div>
			</div>
		
		";
		
		}

?>

