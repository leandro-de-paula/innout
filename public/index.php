<h1>OK</h1>

<?php
use database\Database;
require_once(dirname(__FILE__, 2 ) . "/src/config/Database.php");

$sql = "SELECT * FROM users";
$result = Database::getResultFromQuery($sql);

while ($row = $result->fetch_assoc()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    echo "<br>";
}


