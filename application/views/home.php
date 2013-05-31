<?php $image_url = base_url() . 'upload/'; ?>
<?= $this->load->view('templates/header.php'); ?>
<div style=" width:1015px; margin:0 auto;">
    <div id="wrapper">
        <div id="sidebar">

            <?= $this->load->view('includes/single_add.php'); ?>
            <?= $this->load->view('includes/search_box_left.php'); ?>

        </div>
        <div id="content">	

            <?= $this->load->view('includes/slider.php'); ?>





            <div id="bg" style="width:597px;">
                <?= $this->load->view('includes/filter.php'); ?>
                <div style="clear: both;"></div>


                <ul id="navigation"> 

                    <?php
                    
                    
                        if( count($results) == 0){ echo '<h1>No data found</h1>' ; }
                        foreach ($results as $data) {
                            $id_im = $data->pc_id;
                            ?>
                            <li class="color">
                                <a href="<?php echo base_url(); ?>index.php/pages/centerOverview/<?php echo $data->pc_id; ?> ">
                                    <?php
                                    ?>
                                    <img class="imSize"  src="<?php echo $image_url . $data->pic1; ?>"  />
                                </a>

                                <p class="linkPara" style="margin-top:10px;">
                                    <?php
                                    echo 'Address :&nbsp;' . $data->pc_name . ',&nbsp;&nbsp;';
                                    echo $data->location . ',&nbsp;&nbsp;';
                                    
                                    if($data->space_rent > 0){  echo $data->space_rent. " TK per head. "; }
                                    else{ echo $data->menu1_price. " TK per shipt. ";} 
                                    
                                    ?>
                                </p>
                                <p class="linkPara">										
                                    <?php
                                    echo $data->space;
                                    echo " S/feet, ";
                                    echo $data->guest_coverage;
                                    echo " Guest coverage, ";
                                    echo $data->bride_stage;
                                    echo " Bride stage, ";
                                    echo $data->dressing_room;
                                    echo "Dressing room, ";
                                    echo $data->wash_room;
                                    echo " Wash room, ";
                                    echo $data->rest_room;
                                    echo " Rest room, ";
                                    echo $data->music_stage;
                                    echo " music stage, ";
                                    echo $data->cultural_programme;
                                    echo " Cultural program";
                                    ?>
                                    <a href="<?php echo base_url(); ?>index.php/pages/centerOverview/<?php echo $data->pc_id; ?> "><input class="morebtn" type="button" name="more" value="Read more" /></a>
                                </p>

                            </li>
                            <br>

                            <?php
                        }
                   
                    ?>	
                </ul>
                <div class="links"><?php echo $links; ?></div>



            </div> 


            <?= $this->load->view('includes/advertise.php'); ?>
        </div>
    </div>
</div>

<div class="clear"> &nbsp;</div>


<?= $this->load->view('includes/footer.php'); ?>
<br />

</div>
</body>

</body>
</html>


