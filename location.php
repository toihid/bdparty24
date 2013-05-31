
<?php 

//$this->load->database();
 $val=$_REQUEST["val"];

echo $sql1 = "select DISTINCT pcd.location 
			from party_center_details AS pcd
			INNER JOIN category As c ON c.category_id=pcd.category_id
			where c.category_id ='$val' ORDER BY  pcd.location";
			
			echo $result1 = mysql_query($sql1);
                       print_r ($result1);
                      // $result = $this->db->query ($sql1);
					  // echo 'kkkkkkkkkkkkkkkkk';

?>
<select style="color:#666666;" name="location" id="location">
<?php

while( $row = mysql_fetch_assoc($result) )
{ 
print_r($row);
?>
	<option value="<?php echo $row["location"]; ?>"> <?php echo $row["location"]; ?></option>
<?php	
}

?>

</select>

