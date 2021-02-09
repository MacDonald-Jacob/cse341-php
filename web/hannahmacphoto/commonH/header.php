<header>
<div id="header">
    <!-- Change link to /hannahmacphoto/ for heroku and /cs313-php/web/hannahmacphoto/ for local -->
    <img src="/hannahmacphoto/imagesH/logo.png" alt="my website Logo" id="siteLogo">
    <img src="/hannahmacphoto/imagesH/name.png" alt="my website name" id="headerName">
    <?php     
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo "<div> $signOut <br> $adminPage</div>";
        } else{
            echo $signIn;
        } 
    ?>
</div>
</header>
 