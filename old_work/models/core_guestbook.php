<?php
include	 "configs/config.php";

$link = $connection;

if(@($_POST['submit'])){
    $fio = trim(strip_tags($_POST['fio']));
    $email = trim(strip_tags($_POST['email']));
    $text = trim(strip_tags($_POST['text']));

    $t = "INSERT INTO comments (fio, email, text) VALUES ('%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $fio),mysqli_real_escape_string($link, $email),mysqli_real_escape_string($link, $text));

    $result = mysqli_query($link, $query);

    if(!$result){
        die(mysqli_error($link));
    }else{
        header("Location: index.php?page=feedback");
    }
}

