<?php $image_url = 'http://localhost/partyCenter/upload/'; ?>
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

                <ul id="navigation">
                    <?php
                    foreach ($results as $data) {
                        $id_im = $data->pc_id;
                        ?>
                        <li class="party_list">

                            <a href="http://localhost/partyCenter/index.php/pages/centerOverview/<?php echo $data->pc_id; ?> ">
                                <p class="list_para" style="margin-top:10px;">
                                    <?php
                                    echo $data->pc_name . ',&nbsp;';
                                    echo $data->location . ',&nbsp;';
                                    ?>     
                                </p>
                            </a>
                        </li>


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


