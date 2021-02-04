
<?php
require_once '../library/connections.php';
if (($_SERVER['REQUEST_METHOD'] == 'POST'))
{
    print_r($_POST);
    // $rows = $db->query('SELECT * FROM team05.scriptures WHERE book LIKE "%'.$_POST["book"].'%"');
    try {
    $sql = 'SELECT * FROM team05.scriptures WHERE book LIKE :book';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':book', '%'.$_POST['book'].'%', PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();

    foreach ($rows as $row){
        echo "<div><a href=\"scripturesDetails.php?id=" . $row["id"] . "\"><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b></a></div>";
    }
} catch (PDOException $e) {echo $e;}
}
?>

<html>
<form method="POST">
<input type='text' name='book'>
<input type='submit' value='submit'>
</from>
</html>

