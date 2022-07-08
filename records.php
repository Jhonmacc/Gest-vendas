<?php
session_start();
include 'config.php';
//print_r($_SESSION);
if ((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['user']);
  unset($_SESSION['senha']);
  header('location: index.php');
}
$logado = $_SESSION['user'];
include 'model.php';




$model = new Model();

if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $rows = $model->date_range($start_date, $end_date);
} else {
    $rows = $model->fetch();
}

echo json_encode($rows);
?>