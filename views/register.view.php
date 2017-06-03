<!-- START PAGE CONTENT -->
<div class="container page-wrapper">

    <!-- REGISTER FORM -->
    <form class="form-signin" action="register.php" method="POST">
        
        <!-- LOGIN HEADER -->
        <h2 class="form-signin-heading">Register a new User</h2>
        
        <div class="form-group">
            <!-- LABEL FOR FIRST NAME INPUT -->
            <label for="usertname" class="sr-only">User Name</label>
            <!-- FIRST INPUT -->
            <input type="text" name="username" class="form-control" placeholder="User Name" required autofocus>
        </div>

        <div class="form-group">
            <!-- LABEL FOR FIRST NAME INPUT -->
            <label for="firstname" class="sr-only">First Name</label>
            <!-- FIRST INPUT -->
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required autofocus>
        </div>

        <div class="form-group">
            <!-- LABEL FOR CONFIRM EMAIL INPUT -->
            <label for="lastname" class="sr-only">Last Name</label>
            <!-- EMAIL CONFIRM INPUT -->
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" autofocus>
        </div>

        <div class="form-group">
            <!-- LABEL FOR EMAIL INPUT -->
            <label for="email" class="sr-only">Email Address</label>
            <!-- EMAIL INPUT -->
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
        </div>

        <div class="form-group">
            <!-- LABEL FOR CONFIRM EMAIL INPUT -->
            <label for="confirmmail" class="sr-only">Comfirm Email address</label>
            <!-- EMAIL CONFIRM INPUT -->
            <input type="email" name="confirmEmail" class="form-control" placeholder="Confirm Email" required autofocus>
        </div>

        <div class="form-group">
            <!-- LABEL FOR PASSWORD INPUT -->
            <label for="password" class="sr-only">Password</label>
            <!-- PASSWORD INPUT -->
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group">
            <label for="confirmpassword" class="sr-only">Confirm Password</label>
            <!-- CONFIRM PASSWORD INPUT -->
            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
        </div>
        
        <div class="form-group">
            <!-- SUBMIT BUTTON -->
            <button class="btn btn-lg btn-primary" type="submit">create Account</button>
        </div>    
        <p>Already have a account ? <a href="login.php">Log In</a></p>
        
    </form>
</div>
<!-- END PAGE CONTENT