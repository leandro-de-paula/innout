<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));


try {
    $currentTime = date('H:i:s', time());
    $records->innout($currentTime);
    addSuccessMsg('Ponto inserido com sucesso!');
} catch (AppException $e) {
    addErrorMsg($e->getMessage());
}
header('Location: day_records.php');