<?php
/******************************************
This file contains the varisou email bodies
*******************************************/

function candidate_application($jobTitle, $jobLocation){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">Application Successful<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">We have received your application for the role of:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px; font-weight: bold;"><?php echo $jobTitle; ?> based in <?php echo $jobLocation; ?>.</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">A member of our team will be in touch with you shorlty.<br>If however you have not heard from us within 7 days please assume your application has been unsuccessful.</span></p>									
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};


function new_candidate_application($jobTitle, $jobLocation, $fullName, $email, $telephone, $message){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Candidate Application<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Application received for the role of:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px; font-weight: bold;"><?php echo $jobTitle; ?> based in <?php echo $jobLocation; ?>.</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate name: <?php echo $fullName; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate email: <?php echo $email; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate telephone: <?php echo $telephone; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Message:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $message; ?></span></p>									
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};

function new_user_registration($username, $loginUrl){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Candidate Registration<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Welcome to Greenfield IT Recruitment</span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Your login details:</span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Username: <?php echo $username; ?></span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Login <a href="<?php echo $loginUrl; ?>" title="Greenfield IT Recruitment">here</a> and update your candidate profile. You can also take advantage of our 1 Click Apply feature.</span></p>																		
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};

function new_talent_form($name, $number, $company, $email, $message){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Talent Form Submission<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">An employer is looking for a new candidate</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>		
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Name: <?php echo $name; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Company: <?php echo $company; ?></span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Number: <?php echo $number; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Email: <?php echo $email; ?></span></p>							
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Message:</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;"><?php echo $message; ?></span></p>																											
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};
