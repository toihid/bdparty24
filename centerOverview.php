<?php
//session_start() ;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<?php $base_url ='http://localhost/partyCenter/' ; ?>
<html>
    <head>
        <title>First Site for Party Renter Sources </title>
        <link rel="stylesheet" type="text/css" href="http://localhost/partyCenter/css/style.css" />

        <meta http-equiv="Content-type" content="text/html ; charset=utf-8">
        <title>Galleriffic | Minimal implementation</title>
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

    <body>

        <? //= $this->load->view('functions/function.php') ; ?>
        
        <?= $this->load->view('includes/connection.php') ; ?>
        <?= $this->load->view('includes/connection.php') ; ?>
        <?= $this->load->view('includes/top_search.php') ; ?>
        <?= $this->load->view('includes/menu.php') ; ?>
        <div id="wrapper" style=" width:1015px ;margin: 0 auto ;">
            <?php  foreach ($value as $value) {?>
            <div id="sidebar">
                <div class="logo_block">
    <div class="singleAdd">
        <table cellspacing="0"  cellpadding="0" style="width:200px;">
            <form  method="POST" action="#" id="calender" name="calender"> 					
                <tr  style="color:black; text-align:left;">

                    <td valign="top"   class="dateBoxSelect" style="width:50px; margin-right:10px; background-color:#fff; float:none; text-align:left;">
                        <select  style=" width:55px;" name="year" >
                            <?php for ($i = 2013; $i < 2014; $i++) { ?> <option  value="<?php echo $i; ?>"> <?php echo $i; ?></option><?php } ?>
                        </select>

                        <select name="month"  id="month" style="width:53px;">
                            <option value="none">Month</option>
                            <?php
                            for ($m1 = date("m"); $m1 <= 12; $m1++) {
                                ?>
                                <option  value="<?php echo str_pad($m1, 2, "0", STR_PAD_LEFT); ?>"><?php
                            $mon = str_pad($m1, 2, "0", STR_PAD_LEFT);
                            if ($mon == 01)
                                echo "Jan";
                            elseif ($mon == 02)
                                echo "Feb";
                            elseif ($mon == 03)
                                echo "Mar";
                            elseif ($mon == 04)
                                echo "April";
                            elseif ($mon == 05)
                                echo "May";
                            elseif ($mon == 06)
                                echo "Jun";
                            elseif ($mon == 07)
                                echo "Jul";
                            elseif ($mon == 8)
                                echo "Aug";
                            elseif ($mon == 9)
                                echo "Sep";
                            elseif ($mon == 10)
                                echo "Oct";
                            elseif ($mon == 11)
                                echo "Nov";
                            elseif ($mon == 12)
                                echo "Dec";
                                ?>
                                </option>
                                <?php
                            }
                            ?>

                        </select>
                        <select name="shift"  id="shift" style="width:57px;">
                            <option value="none">Shift</option>
                            <option value="day">day</option>
                            <option value="evening">evening</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <?php
                        $year = (isset($_POST["year"])) ? $_POST["year"] : date("Y", time());
                        $month = (isset($_POST["month"])) ? $_POST["month"] : date("m", time());
                        $shift = (isset($_POST["shift"])) ? $_POST["shift"] : 'day';
                        ?> 
                        <table>
                            <tr>
                                <td  > <?php echo "Y: " . $year . '&nbsp; &nbsp;'; ?> </td>
                                <td  > <?php echo "M: " . $month . '&nbsp; &nbsp;'; ?> </td>
                                <td  > <?php echo "Shift:" . $shift . ' '; ?> </td>	
                            </tr>
                        </table>
                        <?php
                        $pc_id = $this->uri->segment(3);
                        $sql = mysql_query("select * from booking_list where YEAR(date)=$year and MONTH(date)='$month' and shift='$shift' and pc_id = $pc_id");
                                                            
										
                        $date = array();
//$month= array();
                        while ($row = mysql_fetch_assoc($sql)) {
                            $date[] = date("d", strtotime($row["date"]));
                        }
                        for ($i = 1; $i < 32; $i++) {
                            if (in_array($i, $date)) {
                                ?>	
                                <div class="dateBoxRed" style="background-color:#FF0000;">
                                    <?php echo $i; ?> 
                                </div>
                                <?php
                            } elseif ($i + 1 <= date("d") and $month == date("m")) {
                                ?>
                                <div class="dateBoxGray" style="background-color: gray;">
                                    <?php echo $i; ?>
                                </div>	
                                <?php
                            } else {
                                ?>
                                <div class="dateBox" rel="<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </td>

                </tr>

                <tr><td style="color:#E41A1A;"><I><b>Click date for booking .</b></I></td></tr>
                <tr><td style="color:#666;"><I>25% booking money. </I></td></tr>
            </form>
        </table>						

    </div>
</div>
                <?= $this->load->view('includes/search_box_left.php') ; ?>

            </div>

            <div id="bg">
                <div id="bg-left" style="margin-top:0 ;">
			

                    <div id="page">
                        <div id="container">

                            <!-- Start Minimal Gallery Html Containers -->
                            <div id="gallery" class="content">
                                <div id="controls" class="controls"></div>
                                <div class="slideshow-container">
                                    <div id="loading" class="loader"></div>
                                    <div id="slideshow" class="slideshow"></div>
                                </div>
                            </div>
                            <div id="thumbs"  class="navigation">
                               
                                    <?php $image_url = 'http://localhost/partyCenter/upload/';?>
                                <ul class="thumbs noscript">
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic1 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic1 ; ?>">				
                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic2 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic2 ; ?>">				
                                        </a>

                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic3 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic3 ; ?>">				
                                        </a>
                                    </li>


                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic4 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic4 ; ?>">				
                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic5 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic5 ; ?>">				
                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic6 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic6 ; ?>">				
                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic7 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic7 ; ?>">				
                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumb"  href="<?php echo $image_url.$value->pic8 ; ?>				
                                           " title="Title #1"><img class="im-class" src="<?php echo $image_url.$value->pic8 ; ?>">				
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <!-- End Minimal Gallery Html Containers -->
                            <div style="clear: both ;"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        // We only want these styles applied when javascript is enabled
                        $('div.navigation').css({'width' : '300px', 'float' : 'left'}) ;
                        $('div.content').css('display', 'block') ;

                        $(document).ready(function() {				
                            // Initialize Minimal Galleriffic Gallery
                            $('#thumbs').galleriffic({
                                imageContainerSel:      '#slideshow',
                                controlsContainerSel:   '#controls'
                            }) ;
                        }) ;
                    </script>

                </div>
                <div id="bg-right">

                    <p> <span>Name: </span><?php echo $value->pc_name ; ?>	</p>

                    <p> <span>Address: </span><?php echo $value->address . ' Bangladesh.' ; ?>	</p>

                    <p><span>Amount: </span> <?php echo $value->price . ' Taka per shift' ; ?>  </p>

                    <p><span>Cetagory: </span> <?php echo $value->category_name ; ?>  </p>

                    <p> 
                        <span>Party types:</span>
                        <?php echo $value->party_type ; ?> etc.
                    </p>

                    <p>
                        <span>Attractive Points:</span>
                        <?php echo $value->attractive_points ; ?>
                    </p>

                    <div id="facility-list">
                        <p><span>Facilities List:</span>
                            <?php
                            echo $value->space ;
                            echo " S/feet, " ;
                            echo $value->guest_coverage ;
                            echo " Guest coverage, " ;
                            echo $value->bride_stage ;
                            echo " Bride stage, " ;
                            echo $value->dressing_room ;
                            echo "                             Dressing room, " ;
                            echo $value->wash_room ;
                            echo " Wash room, " ;
                            echo $value->rest_room ;
                            echo " Rest room, " ;
                            echo $value->music_stage ;
                            echo " music stage, " ;
                            echo $value->cultural_programme ;
                            echo " Cultural program" ;
                            ?>
                        </p>
                        <p>
                            <span>Services list:</span>
                            <?php
                            echo $value->deshes ;
                            echo " deshes, " ;
                            echo $value->decoration ;
                            echo " decoration, " ;
                            echo $value->parlor_salon ;
                            echo " parlor/salon, " ;
                            ?>
                        </p>
                        <!--<p><span>Food item :</span>Chinese, Thai, Bengali, First food, Indian, Others, External food   </p>-->

                        <p>
                            <span>Food item :</span>
                            <?php echo $value->food_item . "." ;
                            ?>
                        </p>


<!--<p><span>Buffet system:</span> 20 items, self service</p>-->
                        <p><span>Buffet system :</span>
                            <?php
                            echo $value->items ;
                            echo " items, " ;
                            echo $value->service . " ." ;
                            ?>
                        </p>

                        <p>
                            <span>Decoration :</span>
                            <?php
                            echo $value->lighting ;
                            echo " Lighting, " ;
                            echo $value->stage ;
                            echo " Stage, " ;
                            echo $value->dinning ;
                            echo " dinning, " ;
                            echo $value->gate ;
                            echo " gate . " ;
                            ?>
                        </p>
                        <p>
                            <span>Internal Security  :</span> 
                            <?php echo $value->internal_security . " \n " ; ?>
                        </p>
                        <p>
                            <span>External Security :</span>&nbsp ;
                            <?php echo $value->external_security . " \n " ; ?>
                        </p>
                        <p>
                            <span>Special Services :</span>&nbsp ;
                            <?php echo $value->special_service . " ." ; ?>
                        </p>
                    </div>

                </div>
                <div id="bg-bottom">
                    <!--Entertainment List-->
                    <h>Entertainment List </h>
                    <p>
                        <span>Entertainment:</span>
                        DJ, Live concert, Exclusive Record, Dance zone, Kid's zone, others.
                    </p>
                    <p>
                        <span>Multimedia :</span>
                        <?php echo $value->multimedia . " ." ; ?>
                    </p>
                    <!--Other information -->
                    <h>Other information </h>
                    <p>
                        <span>Beauty parlor/salon :</span>
                        <?php echo $value->beauti_parlar_salon ; ?>
                    </p>
                    <p>
                        <span>Government's/important papers :</span>
                        <?php
                        echo "TIN number : " ;
                        echo $value->tin . ',' ;
                        echo " Trade  lenience : " ;
                        echo $value->trade . ", " ;
                        echo $value->papers . " . " ;
                        ?>
                    </p>

                    <!--Emergency Desk -->
                    <p><span>Emergency Desk: </span>  <?php echo $value->emergency . " . " ; ?></p>

                    <!--Booking information -->
                    <p><span>Payment detail :</span> Online, Direct,Payment conditions,Payment  confirm paper .  </p>
                    <p >
                    <div style="width:710px ;color:#0BB1E8 ;  float:left ;">

                        <!-- colorbox form-->
                        <div style="display:none ;">
                            <div id="table-colorbox" style="width:500px ; height:200px ;">
                                <table width="500" cellpadding="0" cellspacing="5" style="background-color:gray ;">
                                    <tr>

                                        <td colspan="1" style="text-align:center ;"><?php echo $value->pc_name ; ?></td>
                                        <td colspan="1" style="text-align:center ;">booking request for &nbsp ;<span class="req_date"> </span><?php
                        echo "-" . $month . "-" . $year ;
                         ;
                        ?>
                                        </td>
                                        <td colspan="1" style="text-align:center ;"><?php echo $shift . " shift" ; ?></td>


                                    </tr>
                                    <form action="#" method="POST" action="">
                                        <tr>
                                            <td style="display:none ;"width="25%" >Party center</td>
                                        </tr>										
                                        <tr>
                                            <td width="25%" >name</td>
                                            <td>
                                                <input type="text" id="name" name="name" style="width:300px ;">

                                            </td>
                                            <td><input  type="text" class="anddate" id="request_date" name="request_date" style="width:300px ;display:none ;" ></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" >email</td>
                                            <td><input type="text" id="email" name="email" style="width:300px ;"></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" >contact</td>
                                            <td><input type="text" id="contact" name="contact" style="width:300px ;"></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" >address</td>
                                            <td>
                                                <textarea name="address" id="address" style="height:30px ; width:300px ;"></textarea>
                                            </td>			
                                        </tr>
                                        <tr>
                                            <td width="25%" >&nbsp ;</td>
                                            <td>
                                                <input  class="submit" value="Request for booking"  type="submit" id="submit" name="submit"                                            onclick="alert('To confarm Please contract . <?php
                                            echo $value->pc_name . " " . " " ;
                                            echo "  Phone : " . $value->contract ;
                        ?>')">
                                            </td>
                                        </tr>
                                    </form>
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $pc_id = $value->pc_id ;
                                        $pcmane = $value->pc_name ;
                                        $name = mysql_real_escape_string($_POST['name']) ;
                                        $email = mysql_real_escape_string($_POST['email']) ;
                                        $contact = mysql_real_escape_string($_POST['contact']) ;
                                        $address = mysql_real_escape_string($_POST['address']) ;
                                        $request_date = $year . "-" . $month . "-" . $_POST['request_date'] ;

                                      $sql = "insert into booking_message(pc_id,pc_name,name,email,contact,address,request_date,shift) 
										values  ( '$pc_id','$pcmane','$name','$email','$contact','$address','$request_date','$shift')" ;
                                        echo $sql ; //die();
                                        $result = mysql_query($sql) ;
                                    }
                                    ?>	
                                </table>
                            </div>
                        </div>
                        <!-- colorbox form-->
                    </div>
                    </p>
                    <!--payments -->

                    <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
                        <p style="border: 1px solid blue ; width:708px ; border:none ;">

                            <span style=" display:block ;">Please write your opinion</span>
                            <textarea  style="width:607px ; height:100px ; margin:20px ;" name="feedback_message"> </textarea>
                            <span style=" display:block ;"> Enter your Email</span>
                            <input  style="display:block ; width:300px ; margin:0 0 20px 20px ;" type="text" name="feedback_email" id="feedback_email">
                            <input  style="display:block ; margin:0 0 20px 20px ;" type="submit" name="feedback_submit">
                        </p>
                        <?php
                        if (isset($_POSTfeedback_submit)) {
                            $feedback_message = mysql_real_escape_string($_POST['feedback_message']) ;

                            $feedback_email = mysql_real_escape_string($_POST['feedback_email']) ;
                            $sql = "insert into feedback(message,email)
							values  ('$feedback_message','$feedback_email')" ;
                            $result = mysql_query($sql) ;
                            if ($result > 0)
                                echo "Thanks for your feedback" ;
                        }
                        ?>
                    </form>
                    
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <div class="clear"> &nbsp ;</div>
        <?= $this->load->view('includes/footer.php') ; ?>
        <br />

    </body>
</html>

