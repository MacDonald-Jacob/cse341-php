<?php
    // Check to see if logged in. If not send to php main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
    $currentPage = 'Delete Package'; 

    
    ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Delete Package</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/hannahmacphoto/packages/" method="post" id="deletePackageForm">
            <label class="required" for="mediaid">Service:</label><br>
                <label class="required" for="packagename">Package Name:</label><br>
                <input type="text" id="packagename" name="packagename" size="26" readonly
                <?php 
                if(isset($packageName)){
                    echo "value='$packageName'";
                }  
                ?>><br> 
                <label class="required" for="packagedescription">Description:</label><br>
                <textarea id="packagedescription" name="packagedescription" rows="5" cols="26" form="deletePackageForm" readonly><?php
                if(isset($packageDescription)){
                     echo htmlentities($packageDescription, ENT_QUOTES);
                }?></textarea><br><br>
                <input type="submit" name="submit" id="deletePackageebtn" value="Delete Package">
                <input type="hidden" name="action" value="deletePackage">
                <input type="hidden" name="packageid" value="<?php echo $package_id;?>"

            </form>  

        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>