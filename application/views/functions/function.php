
<?php 

function combobox($sql,$file,$position,$name,$heading,$type){ //echo $sql.$file.$position.$name.$heading.$type ;?>
 
 
	<script>
	
	var file='<?php echo $file.'.php' ;?>';
	var position='<?php echo '#'.$position ; ?>';
	var baseURL = 'http://localhost/partyCenter/';
	function showDetails(val,$file,$position)
	{
		if( val != "" )
		{		
			$(position).html("LOADING...");		
			$.ajax({
			  url: baseURL+file+"?val="+val,
			  context: document.body,
			  success: function(data){
			  $(position).html(data);
			  }
			});
		}
	}
	//alert(position);
	</script>

<?php 
	$result=mysql_query($sql);
	
		?>
		<select style="color:#666666; margin-bottom:0px;" onChange="showDetails(this.value);" name="<?php echo $name ;?>" id="<?php echo $name ;?>">
			<option value="" ><?php echo $heading; ?></option>
			<?php while($row=mysql_fetch_object($result)){ 
				if($type=='id'){ ?> <option value="<?php echo $row->id ; ?>" ><?php echo $row->name ; ?></option> <?php } 
				else { ?> <option value="<?php echo $row->name ; ?>" ><?php echo $row->name ; ?></option>  <?php }
			}
			?>
		</select>
		<?php
}
?>