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
								<p>Have an Account ?<br><a href="#">Sign in</a></p>
							</div>
						</div>
						<h1>Sign up</h1>
						<label>Enter your email address</label>
						<input type="email" name="" placeholder="Email address" required />	
						<label>Enter your name</label>
						<input type="text" name="" placeholder="Name" required>
					    <label>Enter your Password</label>
						<div class="login-item-inner4">
					        <input type="password" id="txtPassword" name="txtPassword" placeholder="Password" required />
					        <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>
					    </div>
					    <label>Confirm  Password</label>
						<div class="login-item-inner4">
							<div><i id="icon" class="far fa-eye"></i></div>
  							<input id="password" type="password" placeholder="Password">
					    </div>
					    <span>Passwords must match</span>
					    <button type="submit">Sign up</button>
					</form>
				</div>
			</div>
		</div>
		<!-- login-area-area end -->		
		
		
		<?php include "scripts.php"; ?>
		
	</body>
</html>