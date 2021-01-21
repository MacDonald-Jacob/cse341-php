
<?php include 'library.php'; ?>
<?php $currentPage = 'PHP Test'; ?>
<?php require '../../commonT/head.php'; ?>
<?php require '../../commonT/navBar.php'; ?>
  <body>
      <h1>Form</h1>
    <form action="response.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name"> <br>
        <label for="Email">Email: </label>
        <input type="text" id="Email" name="email"> <br>
        
        Major: <br>
        <?php foreach ($list_of_majors as $key => $value) {
                echo "<label><input type='radio' name='major' value='$key'>$value</label><br>";
        } ?>
​
        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="3"></textarea><br>
​
        Continents you have visited: <br>
        <?php foreach ($list_of_continents as $key => $continent) { ?>
             <label><input type="checkbox" name="continents[]" value="<?=$key?>"><?=$continent?></label><br>
        <?php } ?>
​
        <input type="submit" value="Submit">
    </form>
  </body>
<?php require '../../commonT/footer.php'; ?>