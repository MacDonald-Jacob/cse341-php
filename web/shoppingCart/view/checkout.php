<?php session_start() ?>
<?php $currentPage = 'Browse Items'; ?>
<?php require '../commonS/head.php'; ?>
<?php require '../commonS/navBar.php'; ?>
<body>
    <main>
        <h1>Shipping Address</h1>
        <hr>
        <form action="confirmation.php" method="POST">
            <div class="form-group col-md-12">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St" value="<?php if(isset($_SESSION['inputAddress'])){echo $_SESSION['inputAddress'];}?>" required>
            </div>
            <div class="form-group col-md-12">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php if(isset($_SESSION['inputAddress2'])){echo $_SESSION['inputAddress2'];}?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity" value="<?php if(isset($_SESSION['inputCity'])){echo $_SESSION['inputCity'];}?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="inputState" required>
                        <option value="">Choose...</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="inputZip" value="<?php if(isset($_SESSION['inputZip'])){echo $_SESSION['inputZip'];}?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <!-- <button type="submit" name="submit" value="true"></button> -->
                    <input class="form-check-input" type="submit" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    </label>
                </div>
            </div>
        </form>
        <hr>
        <a href="../view/index.php" class="btn btn-info" role="button">Back to Store</a>

    </main>
</body>

<?php require '../commonS/footer.php'; ?>
