<div id="cl-wrapper" class="login-container">
	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">Real Estate</h3>
			</div>
			<div>
				<form method="post" style="margin-bottom: 0px !important;" class="form-horizontal" action="<?php echo base_url('home/authentication')?>">
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" id="username" name="username" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Register</button> -->
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
					<div class = "col-sm-12">
			          <center><p><?php if(isset($error)){echo $error;}else{echo "Login Above" ;}?></p></center>
			        </div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2015 Real Estate</a></div>
	</div> 
</div>