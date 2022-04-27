<?php
$myPostData = json_decode(file_get_contents('php://input'), true);
// var_dump($myPostData);

if (isset($myPostData)) {
   $text = $myPostData['text'];

   $naus = $myPostData['nausiam'];
   $taskid=$myPostData['taskid'];
   $wordcount =$myPostData['wordcount'];
   $servername = "localhost";
   $database = "esse";
   $username = "root";
   $password = "";
   // Создаем соединение
   $conn = mysqli_connect($servername, $username, $password, $database);
   // Проверяем соединение


   $sql = "INSERT INTO esse (text,toshnota,id_task,wordcount) values ('$text','$naus','$taskid','$wordcount')";

   if (mysqli_query($conn, $sql)) {
   } else {
      echo mysqli_error($conn);
   }
}
