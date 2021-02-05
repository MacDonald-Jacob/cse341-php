<?php $currentPage = 'Packages'; ?>
<?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Sign In</h1>
            <?php
            // We are calling the message from the session 
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            if (isset($message)) {
                echo $message;
               }
            ?>
            <!-- method and post in the form tag makes sure the login view is sending the login info to the "accounts" controller.   -->
            <!-- Since index.php is a default name on the server, if we don't specify a file name the server will look for a default name and direct inputs to it. -->
            <form id="signIn" method="post" action="../accounts/">
            <label for="userName">User Name</label> 
                <input type="text" id="userName" name="userName" 
                <?php 
                if(isset($userName)){
                    echo "value='$userName'";
                }  
                ?> required>   
            <br><label for="password">Password</label>
                <input type="password" id="userPassword" name="userPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                <br><input type="submit" value="Sign-in">
                <input type="hidden" name="action" value="Login">
            </form>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>