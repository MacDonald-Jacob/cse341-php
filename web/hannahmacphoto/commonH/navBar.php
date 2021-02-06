
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>        
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <!-- Change link to /hannahmacphoto/ for heroku and /cs313-php/web/hannahmacphoto/ for local -->
            <li <?php if ($currentPage === 'home') {echo 'class="active"';} ?>><a href="/hannahmacphoto/">Home</a></li>
            <li <?php if ($currentPage === 'packages') {echo 'class="active"';}?>><?php echo $packagePage?></li>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul> -->
        </div>
    </div>
</nav>
