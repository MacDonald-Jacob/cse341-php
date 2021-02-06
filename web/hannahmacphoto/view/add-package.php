<?php
    // Check to see if logged in. If not send to php main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
?><?php $currentPage = 'Package Management'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Add Package</h1>

            <form action="/hannahmacphoto/packages/" method="post" id="addPackageForm">
                <label class="required" for="packagename">Package Name</label>
                <input type="text" id="packagename" name="packagename" size="26" 
                <?php 
                if(isset($packageName)){
                    echo "value='$packageName'";
                }  
                ?> required>
                <label class="required" for="packageimg">Image Path</label>
                <input type="text" id="packageimg" name="packageimg" size="26" value="/hannahmacphoto/imagesH/bridal.jpg" required>
                <label class="required" for="packageprice">Package Price</label>
                <input type="text" id="packageprice" name="packageprice" size="26"
                <?php 
                if(isset($packagePrice)){
                    echo "value='$packagePrice'";
                }  
                ?> required>
                <label class="required" for="packagehours">Package Hours</label>
                <input type="number" id="packagehours" name="packagehours" min="1" step="any" 
                <?php 
                if(isset($packageHours)){
                    echo "value='$packageHours'";
                }  
                ?> required>
                <label class="required" for="packagelocationcount">Number of Locations</label>
                <input type="number" id="packagelocationcount" name="packagelocationcount" min="1" 
                <?php 
                if(isset($packageLocationCount)){
                    echo "value='$packageLocationCount'";
                }  
                ?> required>
                <label class="required" for="packagedescription">Description</label><br>
                <textarea id="packagedescription" name="packagedescription" rows="5" cols="26" form="addPackageForm" required><?php
                if(isset($_POST['packagedescription'])){
                     echo htmlentities($_POST['packagedescription'], ENT_QUOTES);
                }?></textarea><br><br>
                <input type="submit" name="submit" id="addPackageebtn" value="Add Package">
                <input type="hidden" name="action" value="addPackage">
            </form>  

        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>