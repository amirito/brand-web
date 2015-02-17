<div class="container">
<table style="border:solid 1px #000; margin:auto;" dir="rtl" border="1" class="table table-striped table-hover table-bordered peygiri">
  <tr>
    <th>ردیف</th>
    <th>نام فروشگاه</th>
    <th>نوع فروشگاه</th>
    <th>نام صاحب فروشگاه</th>
    <th>تلفن ثابت</th>
    <th>آدرس</th>
    <th colspan="2">کارکرد</th>
  </tr>
  	<?php
			if(isset($_POST['remove'])){
				$remove_id = $_POST['shops_ID'];
				$remove_query = "DELETE FROM `shops` WHERE shops_ID=$remove_id";
				$remove_result = mysqli_query($connection , $remove_query); //$mysqli->query($remove_query);
				}
			if(isset($_POST['edit'])){
				$edit_id = $_POST['shops_ID'];
				$shop_name = $_POST['shops_Name'];
				$shop_des = $_POST['shops_Description'];
				$shop_manager = $_POST['shops_ManagerName'];
				$phone = $_POST['shops_Telephone'];
				$address = $_POST['shops_Address'];
				
				$date = time();

				$edit_query = "UPDATE `shops` SET 			`shops_Name`='$shop_name',`shops_Description`='$shop_des',`shops_ManagerName`='$shop_manager',`shops_Telephone`='$phone',`shops_Address`='$address'  WHERE shops_ID='$edit_id' ; ";
				$edit_result = mysqli_query($connection , $edit_query); //$mysqli->query($edit_query);
				}
				
	$show_query = "SELECT * FROM `shops`";	
	$show_result = mysqli_query($connection,$show_query);
	
		$remove_id = '';
		while ($show_row = mysqli_fetch_assoc($show_result)) {
			
      		echo "
			<form method='post' role='form'>
			<tr>
				<td >$show_row[shops_ID]</td>
				<td ><input type='text' style='height:68px;' value='$show_row[shops_Name]' name='shops_Name' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[shops_Description]' name='shops_Description' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[shops_ManagerName]' name='shops_ManagerName' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[shops_Telephone]' name='shops_Telephone' class='form-control'></td>
				<td  ><textarea style='height:68px;'  name='shops_Address' class='form-control'>$show_row[shops_Address]</textarea></td>
				
				<td style='height:68px;'><input type='submit'  name='remove' value='حذف' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-danger'>
				<input type='hidden' name='shops_ID' value='$show_row[shops_ID]'>
				<input type='submit'  name='edit' value='ویرایش' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-warning'>
				</td>
				<td >
				<select class='form-control'>
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				<input type='submit' name='sms1' value='ارسال' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-primary'>
</td>
			</tr>
			</form>
			
			" ;
			
   		}
	?>

</table>
</div>