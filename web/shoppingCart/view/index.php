<?php session_start() ?>
<?php $currentPage = 'Browse Items'; ?>
<?php require '../commonS/head.php'; ?>
<?php require '../commonS/navBar.php'; ?>

<body>
    <main>
        <h1>Browse Items</h1>
        <hr>
        <form action="viewCart.php" method="POST">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ProductID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Add to Cart</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1 Scoop</td>
                    <td>$1.00</td>
                    <td><label><input type='checkbox' name='scoop1' value='1 Scoop' <?php if(isset($_SESSION['cart']['scoop1']) && $_SESSION['cart']['scoop1'] != ""){echo "checked";}?>></label></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>2 Scoops</td>
                    <td>$2.00</td>
                    <td><label><input type='checkbox' name='scoop2' value='2 Scoops' <?php if(isset($_SESSION['cart']['scoop2']) && $_SESSION['cart']['scoop2'] != ""){echo "checked";}?>></label></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>3 Scoops</td>
                    <td>$3.00</td>
                    <td><label><input type='checkbox' name='scoop3' value='3 Scoops' <?php if(isset($_SESSION['cart']['scoop3']) && $_SESSION['cart']['scoop3'] != ""){echo "checked";}?>></label></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="submit" value="true">View Cart</button>
        </form>

        <!--This will destory all items in session-->
        <form action="" method="post">
           <br><button type="submit" name="clear" value="true">Clear Cart</button>
        </form>
        ​
        ​<?php
        //Clear Session variables
        if (isset($_POST["clear"])){
            session_unset();
            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>
    </main>
</body>

<?php require '../commonS/footer.php'; ?>
