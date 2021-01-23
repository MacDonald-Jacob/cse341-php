<?php session_start() ?>
<?php $currentPage = 'View Cart'; ?>
<?php require '../commonS/head.php'; ?>
<?php require '../commonS/navBar.php'; ?>
<body>
    <main>
        <h1>Shopping Cart</h1>
        <hr id="thickLine">
        <!-- Filter input -->
        <?php
            if(isset($_POST['scoop1']))
                {
                    $scoop1 = filter_input(INPUT_POST, 'scoop1', FILTER_SANITIZE_STRING);
                    $_SESSION["cart"]["scoop1"] = $scoop1;
                }
            if(isset($_POST['scoop2']))
                {
                    $scoop2 = filter_input(INPUT_POST, 'scoop2', FILTER_SANITIZE_STRING);
                    $_SESSION["cart"]["scoop2"] = $scoop2;
 
                }
            if(isset($_POST['scoop3']))
                {
                    $scoop3 = filter_input(INPUT_POST, 'scoop3', FILTER_SANITIZE_STRING);
                    $_SESSION["cart"]["scoop3"] = $scoop3;
                }
        ?>
        <br>
        <br>
        <!-- Display order -->
        <form action="" method="post">
            <?php
            if(isset($_SESSION["cart"])){
                $cart = $_SESSION["cart"];
                foreach ($cart as $key=>$val){
                    echo $val."<button type='submit' name='$key' class='pull-right'>Remove</button><br><hr><br>";     
                }
            }
            ?>
            <br><button type="submit" name="destroy" value="true">Clear Cart</button>
            <hr id="thickLine">
        </form>
        
        <!-- destroy session -->
        <?php 
            if (isset($_POST["destroy"])){
                session_destroy();
                echo "<meta http-equiv='refresh' content='0'>";
        }?>

        <br>
        <a href="../view/checkout.php" class="btn btn-info" role="button">Checkout</a><br><br>
        <a href="../view/index.php" class="btn btn-info" role="button">Back to Store</a>
    </main>
</body>
<?php require '../commonS/footer.php'; ?>
