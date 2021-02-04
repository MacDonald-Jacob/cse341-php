
<?php
require_once '../library/connections.php';
if (($_SERVER['REQUEST_METHOD'] == 'POST'))
{
    $rows = $db->query('SELECT * FROM team05.scriptures WHERE book LIKE "%'.$_POST["book"].'%"');
    foreach ($rows as $row){
        echo "<div><a href=\"/scriptureDetails.php?id=" . $row["id"] . "\"><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b></a></div>";
    }
}
?>

<html>
<form method="POST">
<input type='text' name='book'>
<input type='submit' value='submit'>
</from>
</html>

