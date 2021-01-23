<?php session_start() ?>
<?php $currentPage = 'Confirmation'; ?>
<?php require '../commonS/head.php'; ?>
<!-- SANITIZE INPUT -->
<?php
        
    if(isset($_POST['inputAddress']))
        {
            $inputAddress = filter_input(INPUT_POST, 'inputAddress', FILTER_SANITIZE_STRING);
            $_SESSION["inputAddress"] = $inputAddress;
        }
    if(isset($_POST['inputAddress2']))
        {
            $inputAddress2 = filter_input(INPUT_POST, 'inputAddress2', FILTER_SANITIZE_STRING);
            $_SESSION["inputAddress2"] = $inputAddress2;

        }
    if(isset($_POST['inputCity']))
        {
            $inputCity = filter_input(INPUT_POST, 'inputCity', FILTER_SANITIZE_STRING);
            $_SESSION["inputCity"] = $inputCity;
        }
    if(isset($_POST['inputState']))
        {
            $inputState = filter_input(INPUT_POST, 'inputState', FILTER_SANITIZE_STRING);
            $_SESSION["inputState"] = $inputState;

        }
    if(isset($_POST['inputZip']))
        {
            $inputZip = filter_input(INPUT_POST, 'inputZip', FILTER_SANITIZE_STRING);
            $_SESSION["inputZip"] = $inputZip;
        }

?>
<body>
    <main class="text-center" >
        <h1>Thank you for your order</h1><br>

        <h3>Shipping Address</h3>
        <?php
            echo "<div id='confInfo'>Street: $inputAddress<br>";
            if($inputAddress2 != ""){echo "Address 2: $inputAddress2<br>";}
            echo "City: $inputCity<br>";
            echo "State: $inputState<br>";
            echo "Zip: $inputZip<br>";  
        
        
            if(isset($_SESSION["cart"])){
                echo "<h3>Purchase Items</h3>";
                $cart = $_SESSION["cart"];
                foreach ($cart as $key=>$val){
                    echo "$val<br>";
                }
                echo "</div>";
            }
            echo '<br><br><a href="../view/index.php" class="btn btn-info" role="button">Back to Store</a>';
        ?>
    </main>
</body>
</html>