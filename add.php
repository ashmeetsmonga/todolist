<?php 

$conn = new mysqli('localhost', 'root', '', 'todolist');
$name = $_POST['name'];

$sql = "INSERT INTO `listajax` (`id`, `task`, `done`) VALUES (NULL, '$name', '0') ";

$conn -> query($sql);