<?php
    // Check to see if logged in. If not send to php main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
    $currentPage = 'Update Package'; 
        
    if (!isset($_GET['package_id'])){
        header('Location: /hannahmacphoto/index.php');

    }
    $package_id = htmlspecialchars($_GET['package_id']);
    
    $db = hannahmacphotoConnect();
    $stmt = $db->prepare('SELECT * FROM hmphoto.packages WHERE packageid = :packageid'); 
    $stmt->bindValue(':packageid', $package_id, PDO::PARAM_INT);
    $stmt->execute();
    $package_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $packageName = $package_rows[0]['packagename'];
    $packageImg = $package_rows[0]['packageimg'];
    $packagePrice = $package_rows[0]['packageprice'];
    $packageHours = $package_rows[0]['packagehours'];
    $packageLocationCount = $package_rows[0]['packagelocationcount'];
    $packageDescription = $package_rows[0]['packagedescription'];
    $packageID
?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Update <?php echo $packageName?> Package</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/hannahmacphoto/packages/" method="post" id="updatePackageForm">
            <label class="required" for="mediaid">Service:</label><br>
                <select id="mediaid" name="mediaid" >
                    <option value=1>Photo</option>
                    <option value=2>Video</option>
                    <option value=3>Photo and Video</option>
                </select><br>
                <label class="required" for="packagename">Package Name:</label><br>
                <input type="text" id="packagename" name="packagename" size="26" 
                <?php 
                if(isset($packageName)){
                    echo "value='$packageName'";
                }  
                ?> required><br>
                <label class="required" for="packageimg">Image Path:</label><br>
                <input type="text" id="packageimg" name="packageimg" size="26" placeholder="/hannahmacphoto/imagesH/bridal.jpg" 
                <?php 
                if(isset($packageImg)){
                    echo "value='$packageImg'";
                }  
                ?> required><br>
                <label class="required" for="packageprice">Package Price:</label><br>
                <input type="text" id="packageprice" name="packageprice" size="26"
                <?php 
                if(isset($packagePrice)){
                    echo "value='$packagePrice'";
                }  
                ?> required><br>
                <label class="required" for="packagehours">Package Hours:</label><br>
                <input type="text" id="packagehours" name="packagehours" size="26" 
                <?php 
                if(isset($packageHours)){
                    echo "value='$packageHours'";
                }  
                ?> required><br>
                <label class="required" for="packagelocationcount">Number of Locations:</label><br>
                <input type="number" id="packagelocationcount" name="packagelocationcount" min="1" size="26"
                <?php 
                if(isset($packageLocationCount)){
                    echo "value='$packageLocationCount'";
                }  
                ?> required><br>
                <label class="required" for="packagedescription">Description</label><br>
                <textarea id="packagedescription" name="packagedescription" rows="5" cols="26" form="updatePackageForm" required><?php
                if(isset($packageDescription)){
                     echo htmlentities($packageDescription, ENT_QUOTES);
                }?></textarea><br><br>
                <input type="submit" name="submit" id="updatePackageebtn" value="Update Package">
                <input type="hidden" name="action" value="updatePackage">
                <input type="number" name="packageid" value="<?php echo $package_id?>"
   >
            </form>  

        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>