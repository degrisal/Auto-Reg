<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];





if($pass != $repeatpass){
        echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO `users` (login ,pass) VALUES ('$login','$pass')";
       if ($conn -> query($sql) === TRUE){
        echo '<div style="    
    position: absolute;
    top: 5.6%;
    right: 5%;
    text-transform: uppercase;
    padding: 5px;
    border: 1px solid red;
    border-radius: 30px;
    font-weight: 600;">'.$login.'</div>';
        echo readfile('index1.php');
        
       } 
   else {
    echo "Ошибка:" . $conn->error;
   }

}
