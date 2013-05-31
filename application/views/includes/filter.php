<div style="margin-top:-8px; float:right;">
            <form name="search" method="post" action="<?php echo base_url(); ?>index.php/pages/search/" >
                <div  class="top_searchitem">
                    <ul id="top_search">

                        <li id="sub_location11">
                            <?php
                            $sql_location = "select DISTINCT pcd.location 
						from party_center_details AS pcd
						INNER JOIN category As c ON c.category_id=pcd.category_id
						 ORDER BY  pcd.location";
                            $result = mysql_query($sql_location);
                            ?>
                            <select style="color:#666666;" name="location" id="location">
                                <option value="">Location</option>
                                <?php
                                while ($row = mysql_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row["location"]; ?>"> <?php echo $row["location"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </li>
                        <li>	<span> Date from &nbsp;</span>					
                            <input type="date" class="inputDate" name="date_from" />
                        </li>
                        <li>						
                            <span>To &nbsp; &nbsp;</span>
                            <input type="date" class="inputDate" name="date_to">
                        </li>						
                        <li>
                            <input type="submit" name="submit_search"  class="searchbtn" value="Search" />
                        </li>
                    </ul>
                </div>
            </form>
        </div>