<?php
print_r($_POST);
$link = mysqli_connect ("localhost", "root", "", "bankhome");
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$tel = trim($_POST['tel']);
$textarea = trim($_POST['textarea']);

// ВСТАВКА В БАЗУ ДАННЫХ;
$query = "INSERT INTO feedback VALUES('','$name','$email','$tel','$textarea')";
$link->query($query);

