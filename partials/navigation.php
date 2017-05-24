<!-- Start of Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" id="main-nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="index.php">
                        Forum
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['username'])): ?>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="logout.php">Logout</a>
                        <?php else: ?>
                            <li><a href="login.php">Login</a>
                            <li><a href="register.php">Register</a>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation -->



<!--         if(!isset($_SESSION['username'])){
    header('location:index.php');
}
else {
    echo ("you are already loged in");
}
?> -->