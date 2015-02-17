<?php 
	$brads_query = "SELECT shops.shops_ID, shops.shops_Name, shops.shops_Description, shops.shops_Active , shops.shops_ManagerName, shops.shops_Telephone , shops.shops_Address ,
shopBrand.shopBrand_ID, shopBrand.shopBrand_ShopID, shopBrand.shopBrand_BrandID
FROM `shops` INNER JOIN `shopBrand` 
ON shops.shops_ID = shopBrand.shopBrand_ShopID";


$brads_result = mysqli_query($connection , $brads_query);
	while($brads_row = mysqli_fetch_assoc($brads_result)){
		echo"
		
			<div class='col-md-4'>
				  <div class='view view-fifth'>
					  <img src='images/advertise/".$brads_row['advertiseImages_ImageUrl']."'>
					  <div class='mask'>
						  <h2>".$brads_row['advertises_Title']."</h2>
						  <p>".$brads_row['advertises_Description']."</p>
						  <a href='#' class='info'>ورود</a>
					  </div>
				  </div>
			</div>
		
		";
		
		}
?>