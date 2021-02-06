<?php
require_once '../library/connections.php';

$rows = $db -> query('SELECT * FROM team05.scriptures WHERE id='.(int)$_GET["id"]);
foreach ($rows as $row){
    echo "<div><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b> - \"" . $row['content'] . "\"</div>";
}


?>