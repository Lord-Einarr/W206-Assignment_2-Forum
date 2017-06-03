<!-- START PAGE CONTENT -->
	<div class="container page-wrapper">

		<!-- LOGIN FORM -->
		<form class="form-signin" action="login.php" method="POST">
			<!-- LOGIN HEADER -->
		<h2 class="form-signin-heading">Welcome back</h2>

		<div class="form-group">
			<!-- LABEL FOR EMAIL INPUT -->
			<label for="email" class="sr-only">Email address</label>
			<!-- EMAIL INPUT -->
			<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus />
		</div>

		<div class="form-group">
			<!-- LABEL FOR PASSWORD INPUT -->
			<label for="password" class="sr-only">Password</label>
			<!-- PASSWORD INPUT -->
			<input type="password" name="password" class="form-control" placeholder="Password" required />
		</div>

	<!-- 	<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div> -->
		
		<div class="form-group">
			<button class="btn btn-lg btn-primary" type="submit">Log In</button>
		</div>
		<p>Dont have a account ? <a href="register.php">Register new user</a></p>
				<!-- ERROR MESSAGE -->
        
	</form>
	<!-- END LOGIN FORM -->

</div>
<!-- END PAGE CONTENT -->