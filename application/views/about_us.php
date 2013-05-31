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




            <div id="bg" style="width:597px; padding: 0 10px 20px 10px;">
                
                <h class="about_us_h">Our vision</h>
                <p class="about_us_para">We are a online based organization with a mission to connect people through internet to arrange any type of PARTY or FUNCTION with resource justification. That will reduce valuable time and cost with your combination of desire.</p>
                <br/>
                <h class="about_us_h">Why we do what we do</h>
                <p class="about_us_para">If a person wants to organize a party or function he/she have to gather information from many party center or community center. Then choose one and decide to celebrate finally.  </p>
                <p class="about_us_para">We help those people to take decision according to right choice.</p>
                <br/>
                <h class="about_us_h">How we do it</h>
                <p class="about_us_para">People have to face the problems to set up a party or function as bellow.</p>
                <p class="about_us_para">1.	Huge time. </p>
                <p class="about_us_para">2.	Boring journey.</p>
                <p class="about_us_para">3.	Brigading for price.</p>
                <p class="about_us_para">4.	Lake of information.</p>
                <p class="about_us_para">5.	Booking.</p>
                <p class="about_us_para">6.	High cost.</p>
                <p class="about_us_para">We provide the salvation simply just visit <a style="color:#b80000;" href="www.bdparty24.com">www.bdparty24.com </a></p>
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


