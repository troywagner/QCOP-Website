						<?php require_once('./config.php'); ?>
							<form class="form-horizontal" role="form" action="./charge.php" method="post">
								<div class="form-group">
									
									<label class="col-sm-2 control-label">Full Name:</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" required maxlength="250" name="name_textbox" />
									</div>
								</div>
								<div class="form-group">
									
									<label class="col-sm-2 control-label">Email:</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" required maxlength="250" name="email_textbox" />
									</div>
								</div>
								<?php
									echo '<input type="text" hidden readonly required name="appCode" value="' . $appCode . '"/>';
									echo '<input type="text" hidden readonly required name="code" value="' . $code . '"/>';
								?>
									
							
								
								<div class="form-group">
									<div class="col-sm-12 text-center">
										<?php
											
											//echo '<input type="text" hidden readonly name="t" value="'
											if($type == "Delegate Fee + Accommodation"){
												echo '<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_live_1HfWl4WB8d5v9xgpijPtdsAn" data-image="./imgs/qcop.png" data-name="QCOP 2015" data-description="" data-amount="21800"></script>';
											}else if($type == "Delegate Fee (no Accommodation)"){
												echo '<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_live_1HfWl4WB8d5v9xgpijPtdsAn" data-image="./imgs/qcop.png" data-name="QCOP 2015" data-description="" data-amount="12300"></script>';
											}else{
												die("Error 1007: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
											}
											
										?>
										
									</div>
								</div>
							</form>
						