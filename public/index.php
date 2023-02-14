<h1>OK</h1>

<?php
use database\Database;
use Src\Models\User;

require_once(dirname(__FILE__, 2 ) . "/src/config/config.php");
require_once(dirname(__FILE__, 2 ) . "/src/models/User.php");


$user = new User([
    "name" => "Evellyn",
    "email" => "evellyn@gmail.com",
    "address" => "Rua das Flores"
]);

echo "<pre>";
print_r($user);
echo "</pre>";
echo " -- end -- ";


