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