<?php 
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$test = "hellowrld";
if (empty($login)|| empty($pass))
{
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass ='$pass'";
    $result = $conn->query($sql);
    echo '<div style="    
    position: absolute;
    top: 5.6%;
    right: 5%;
    text-transform: uppercase;
    padding: 5px;
    border: 1px solid red;
    border-radius: 30px;
    font-weight: 600;">'.$login.'</div>';

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo readfile('index1.php');
            
            
        }
    } else {
        echo "нет такого пользователя";
    }
}
