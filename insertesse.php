<?php
echo json_encode($_POST);
if (isset ($_POST)){
   $text=$_POST['text'];
   
   $naus=$_POST['nausiam'];
    $servername = "localhost";
    $database = "esse";
    $username = "root";
    $password = "root";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение
    
    
    $sql = "INSERT INTO esse (text,toshnota) values ($text,$naus)";
    
    if (mysqli_query($conn, $sql)) {
    
    } else {
       echo mysqli_error($conn);
        
    }
    echo json_encode($_POST);
}

?>