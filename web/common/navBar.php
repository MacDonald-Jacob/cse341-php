
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <span <?php if ($currentPage === 'aboutMe') {echo 'class="active"';} ?>><a class="navbar-left" href="/cs313-php/web/view/aboutMe.php"><img src="../images/nameCropped.png" alt="my website Logo" id="siteLogo"></a></span>
        
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li <?php if ($currentPage === 'homePage') {echo 'class="active"';} ?>><a href="/cs313-php/web/view/homepage.php">Home</a></li>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul> -->
        </div>
    </div>
</nav>
