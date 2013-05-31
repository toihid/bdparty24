<?php include('header.php');
//$select = $_REQUEST["select"]; category
 $category = $_REQUEST["category"];
$location = $_REQUEST["location"];
 $date_from = $_REQUEST["date_from"];
$date_to = $_REQUEST["date_to"];
$res = " 1";
if( $category !=''){ $res.="  AND pcd.category_id = $category"; }
if( $location !=''){ $res.="  AND pcd.location = '".$location."'";}

if ($date_from == '') {
    $date_from = date('Y-m-t');
}
if ($date_to == '') {
    $date_to = date('Y-m-t');
}
$res.=" OR bl.date not between '$date_from' and '$date_to'";
?>
	<div style=" width:1015px; margin:0 auto;">
			<div id="wrapper">
				<div id="sidebar">
					<?php include('single_add.php');?>
					<?php include('search_box_left.php');?>
		 		 </div>
				<div id="content">	
						<?php include('slider.php');?>		
					<div id="bg" style="width:597px;">
						<ul id="navigation">
							<?php
					$sql = "select pcd.pc_id,pcd.pc_name,location,price,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,cultural_programme
									from party_center_details AS pcd
									LEFT JOIN booking_list AS bl ON pcd.pc_id = bl.pc_id
									WHERE $res GROUP BY pcd.pc_id ORDER BY pcd.category_id";
								$result = mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{	
									$id_im = $row["pc_id"];
							?>
									 <li class="color">
										<a href="centerOverview.php?pc_id=<?php echo $row["pc_id"]; ?> ">
										<?php 
										$sql_im = "select pic1
										from images where pc_id =  $id_im " ;
										$result_im = mysql_query($sql_im);
										$images = mysql_fetch_assoc($result_im);
										 ?>
										<img class="imSize"  src="admin/upload/<?php echo $images["pic1"]; ?>"  />
										 </a>
										<p class="linkPara">
										<?php
											echo 'Address :&nbsp;'.$row["pc_name"].',&nbsp;&nbsp;';  
											echo $row["location"].',&nbsp;&nbsp;'; 
											echo $row["price"]." TK " ;
										?>
										</p>
										<p class="linkPara">										
										<?php  
										echo $row["space"];echo " S/feet, ";  echo $row["guest_coverage"];echo " Guest coverage, "; echo $row["bride_stage"];echo " Bride stage, "; 											                                        echo $row["dressing_room"];echo "Dressing room, "; echo $row["wash_room"];echo " Wash room, "; echo $row["rest_room"]; echo " Rest room, ";                                        echo $row["music_stage"];echo " music stage, "; echo $row["cultural_programme"];echo " Cultural program"; 
						 				?>
										<a href="centerOverview.php?pc_id=<?php echo $row["id"]; ?> "><input class="morebtn" type="button" name="more" value="Read more" /></a>
										</p>
										
									</li>
									<br>
							<?php
								} 
							?>	
					  </ul>
		   			</div>
					<?php  include('advertise.php'); ?>
				</div>
		  	</div>
	</div>
	
	<div class="clear"> &nbsp;</div>
	
		<?php include('footer.php')?>
		<br />
	
</div>
</body>

</body>
</html>

			
