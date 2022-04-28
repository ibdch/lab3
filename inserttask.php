<?php
session_start();
$myPostData = json_decode(file_get_contents('php://input'), true);
// var_dump($myPostData);

if (isset($myPostData)) {

   $taskname=$myPostData['taskname'];
   $wordcount =$myPostData['wordcount'];
   $userid=$_SESSION["user_id"];
   $servername = "localhost";
   $database = "esse";
   $username = "root";
   $password = "root";
   // Создаем соединение
   $conn = mysqli_connect($servername, $username, $password, $database);
   // Проверяем соединение


   $sql = "INSERT INTO task (id_user,name,count_word) values ('$userid','$taskname','$wordcount')";

   if (mysqli_query($conn, $sql)) {
   } else {
      echo mysqli_error($conn);
   }
}
