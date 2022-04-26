<?php include "header.php"; ?>


	<body>

		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- login-area-area start -->	
		<div class="login-area">
			<div class="login-item2">
				<a href="#"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="login-item">
				<div class="login-item-inner">
					<form action="#" method="POST">
						<div class="login-item-inner2">
							<h3>Welcome to <a href="#">Altimate AI</a></h3>
							<div>
								<p>No Account ?<br><a href="#">Sign up</a></p>
							</div>
						</div>
						<h1>Sign in</h1>
						<div class="login-item-inner3">
							<ul>
								<li><a href="#"><img src="images/27.png" alt="" />Sign in with Google</a></li>
								<li><a href="#"><img src="images/28.png" alt="" /></a></li>
								<li><a href="#"><img src="images/29.png" alt="" /></a></li>
							</ul>
						</div>
						<label>Enter your email address</label>
						<input type="email" name="" placeholder="Email address" required />	
					    <label>Enter your Password</label>
						<div class="login-item-inner4">
					        <input type="password" id="txtPassword" class="form-control" name="txtPassword" placeholder="Password" required />
					        <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>
					    </div>
					    <div class="login-item-inner5">
					    	<a href="#">Forgot Password</a>
					    </div>
					    <button type="submit">Sign in</button>
					</form>
				</div>
			</div>
		</div>
		<!-- login-area-area end -->		
		
		
		<?php include "scripts.php"; ?>
		
	</body>
</html>