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
?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Updage <?php echo $packageName?> Package</h1>

            <form action="/hannahmacphoto/packages/" method="post" id="addPackageForm">
                <label class="required" for="packagename">Package Name</label>
                <input type="text" id="packagename" name="packagename" size="26" 
                <?php 
                if(isset($packageName)){
                    echo "value='$packageName'";
                }  
                ?> required><br>
                <label class="required" for="packageimg">Image Path</label>
                <input type="text" id="packageimg" name="packageimg" size="26" placeholder="/hannahmacphoto/imagesH/bridal.jpg" 
                <?php 
                if(isset($packageImg)){
                    echo "value='$packageImg'";
                }  
                ?> required><br>
                <label class="required" for="packageprice">Package Price</label>
                <input type="text" id="packageprice" name="packageprice" size="26"
                <?php 
                if(isset($packagePrice)){
                    echo "value='$packagePrice'";
                }  
                ?> required><br>
                <label class="required" for="packagehours">Package Hours</label>
                <input type="text" id="packagehours" name="packagehours" size="26" 
                <?php 
                if(isset($packageHours)){
                    echo "value='$packageHours'";
                }  
                ?> required><br>
                <label class="required" for="packagelocationcount">Number of Locations</label>
                <input type="number" id="packagelocationcount" name="packagelocationcount" min="1" 
                <?php 
                if(isset($packageLocationCount)){
                    echo "value='$packageLocationCount'";
                }  
                ?> required><br>
                <label class="required" for="packagedescription">Description</label><br>
                <textarea id="packagedescription" name="packagedescription" rows="5" cols="50" form="addPackageForm" required><?php
                if(isset($packageDescription)){
                     echo htmlentities($packageDescription, ENT_QUOTES);
                }?></textarea><br><br>
                <input type="submit" name="submit" id="addPackageebtn" value="Add Package">
                <input type="hidden" name="action" value="addPackage">
            </form>  

        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>