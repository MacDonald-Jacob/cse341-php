<?php
require_once '../library/connections.php';

$row = $db -> query('SELECT * FROM team05.scriptures WHERE id='.$_GET["id"]);
echo "<div><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b> - \"" . $row['content'] . "\"</div>";



?>