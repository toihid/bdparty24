
<?php
//session_start();
//include('function.php');
//include('function_backup.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Party center in Bangladesh</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>
    </head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles_ad.css" />

<!--common js-->
	<script src="<?php echo base_url(); ?>js/jquery-1.6.3.min.js"></script>	
<!--common js-->

<!--for slideshow-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/new_slider/css/layout.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/new_slider/css/style2.css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>js/new_slider/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>js/new_slider/js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>js/new_slider/js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#jslidernews2 .button-previous') ,
						next:$('#jslidernews2 .button-next') };			 
		$('#jslidernews2').lofJSidernews( 
		{ interval:5000,easing:'easeInOutQuad',duration:1200,auto:true,mainWidth:600,mainHeight:300,navigatorHeight: 100,navigatorWidth: 310,maxItemDisplay:3,buttons:buttons } );
	});
</script>
<style>
	ul.lof-main-wapper li {position:relative;}
</style>

<!--for slideshow-->

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

<script>
	$(document).ready(function() {
		
		var options = {};
	
		if (document.location.search) {
			var array = document.location.search.split('=');
			var param = array[0].replace('?', '');
			var value = array[1];
			
			if (param == 'animation') {
				options.animation = value;
			}
			else if (param == 'type_navigation') {
				if (value == 'dots_preview') {
					$('.border_box').css({'marginBottom': '40px'});
					options['dots'] = true;
					options['preview'] = true;
				}
				else {
					options[value] = true;
					if (value == 'dots') $('.border_box').css({'marginBottom': '40px'});
				}
			}
		}
		
		$('.box_skitter_large').skitter(options);
		
		// Highlight
		$('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
		
	});
	


var baseURL = <?php echo base_url(); ?>;


</script>
<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

</style>
</head>
<body>
    
<?= $this->load->view('includes/top_search.php');?> 
		
<?= $this->load->view('includes/menu.php');?> 	
