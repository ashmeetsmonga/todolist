<?php 

$conn = new mysqli('localhost', 'root', '', 'todolist');
$name = $_POST['task'];
if($name != '') {
    $sql = "INSERT INTO `listajax` (`id`, `task`, `done`) VALUES (NULL, '$name', '0') ";
    $conn -> query($sql);
}

$sql = 'select * from listajax';
    $result = $conn -> query($sql);
    echo json_encode($result->fetch_all());