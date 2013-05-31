<head>
     <?php foreach ($value as $value) { echo '<title>'.$value->pc_name.'</title>'; } ?>
        <title><?php echo 'toihid'; ?> </title>
        
        <link rel="stylesheet" type="text/css" href="http://localhost/partyCenter/css/style.css" />

        <meta http-equiv="Content-type" content="text/html ; charset=utf-8">
        <title><?php echo $value->pc_name; ?></title>
        <link rel="stylesheet" href="http://localhost/partyCenter/css/basic.css" type="text/css" />
        <link rel="stylesheet" href="http://localhost/partyCenter/css/galleriffic-1.css" type="text/css" />
        <script type="text/javascript" src="http://localhost/partyCenter/js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="http://localhost/partyCenter/js/jquery.galleriffic.js"></script> 



        <!--colorbox-->
        <link media="screen" rel="stylesheet" href="http://localhost/partyCenter/js/colorbox_js/colorbox.css" />
        <script src="http://localhost/partyCenter/js/jquery.colorbox.js"></script>
        <script>
            $(document).ready(function(){
                //Examples of how to assign the ColorBox event to elements
                //$(".group1").colorbox({rel:'group1'}) ;
                $(".dateBox").click(function(){
                    var thedate = $(this).attr('rel') ;
                    //alert(thedate) ;
                    $('#table-colorbox .anddate').val(thedate) ;
                    $('#table-colorbox .req_date').html(thedate) ;
                    //$('thedate').html(thedate) ;req_date

                    $.colorbox({
                        inline: true,
                        href: "#table-colorbox"
                    }) ;

                })
                $(".dateBoxGray").click(function(){
                    alert('Date Over for booking') ;
                }) ;
                $(".dateBoxRed").click(function(){
                    alert('Already BOOKED') ;
                }) ;


                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.") ;
                    return false ;
                }) ;
            }) ;
        </script>
        <!--colorbox-->

        <!--validition-->

        <script type="text/javascript">
            function validateForm()
            {
                var x=document.formsmyFormfeedback_email.value ;
                var atpos=x.indexOf("@") ;
                var dotpos=x.lastIndexOf(".") ;
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
                {
                    alert("Not a valid e-mail address") ;
                    return false ;
                }
            }
        </script>

        <!--END validition-->



        <script type="text/javascript">


            var baseURL = 'http://localhost/partyCenterSources/' ;

            function showLocation(catid)
            {

                if( catid != "" )
                {
		
                    $("#sb_location").html("LOADING...") ;
		
                    $.ajax({
                        url: baseURL+"location.php?catid="+catid,
                        context: document.body,
                        success: function(data){
		  
                            $('#sb_location').html(data) ;
                        }
                    }) ;
                }
            }



            function showPrice(locationid)
            {

                if( locationid != "" )
                {
		
                    $("#sb_price").html("LOADING...") ;
		
                    $.ajax({
                        url: baseURL+"price.php?locationid="+locationid,
                        context: document.body,
                        success: function(data){
		  
                            $('#sb_price').html(data) ;
                        }
                    }) ;
                }
            }

            function showLoginForm() {
                //Show form
                var form = document.getElementById('loginForm') ;
                form.style.display = block ;

                //Prevent from actually going to /login page
                return false ;
            }

            function showName(locationid)
            {

                if( locationid != "" )
                {
		
                    $("#sb_name").html("LOADING...") ;
		
                    $.ajax({
                        url: baseURL+"name.php?locationid="+locationid,
                        context: document.body,
                        success: function(data){
		  
                            $('#sb_name').html(data) ;
                        }
                    }) ;
                }
            }


            /// manage schedule//
 
            function showScheduleMonth(yearid)
            {

                if( yearid != "" )
                {
		
                    $("#sb_month").html("LOADING...") ;
		
                    $.ajax({
                        url: baseURL+"scheduleMonth.php?yearid="+yearid,
                        context: document.body,
                        success: function(data){
		  
                            $('#sb_month').html(data) ;
                        }
                    }) ;
                }
            }

            function showScheduleShift(monthid)
            {

                if( monthid != "" )
                {
		
                    $("#sb_shift").html("LOADING...") ;
		
                    $.ajax({
                        url: baseURL+"scheduleShift.php?monthid="+monthid,
                        context: document.body,
                        success: function(data){
		  
                            $('#sb_shift').html(data) ;
                        }
                    }) ;
                }
            }
            $(document).ready(function(){
                $('#shift').change(function() {
                    //alert('Handler for .change() called.') ;
                    $('#calender').submit() ;
	  
                }) ;
            }) ;



        </script>






    </head>
