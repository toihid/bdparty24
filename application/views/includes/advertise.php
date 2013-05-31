<div id="advertise">
						<?php
						$sponsors = array(
						array('PranFoods','The biggest food product companny in the Bangladesh.','http://www.pranfoods.net/'),
						array('prince food','Real test of Foods.','http://www.princefoodbd.com/'),
						array('agora','One of the top software companies of the world.','http://www.agorabd.com/'),
						array('womansworld','efficient and latest Beauty Parlar','http://www.womansworldbd.com/new/'),
						);
						// Randomizing the order of sponsors:
						shuffle($sponsors);
						?>
						<div id="main">
							<div class="sponsorListHolder">
			
					
					<?php
						
						// Looping through the array:
						
						foreach($sponsors as $company)
						{
							echo'
							<div class="sponsor" title="Click to flip">
								<div class="sponsorFlip"> 
									<img src="http://localhost/partyCenter/images/img_ad/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
								</div>
								
								<div class="sponsorData">
									<div class="sponsorDescription">
										'.$company[1].'
									</div>
									<div class="sponsorURL">
										<a href="'.$company[2].'">'.$company[2].'</a>
									</div>
								</div>
							</div>
							
							';
						}
					
					?>
			
					
					
					<div class="clear"></div>
				</div>
						</div>
					</div>