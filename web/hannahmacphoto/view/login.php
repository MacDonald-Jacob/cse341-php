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
            <form id="signIn" method="post" action="/hannahmacphoto/accounts/">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                <input type="submit" value="Sign-in">
                <input type="hidden" name="action" value="Login">
            </form>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>