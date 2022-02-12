<?
session_start();
$pages = ['pupils' => 'name', 'main' => 'name', 'profile' => 'name', 'pupil-info' => 'name'];
$path = $_GET['page'] ? $_GET['page'] : 'main';
?>