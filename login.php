<?php
    session_start();
    // include('config.php');
    $servername = "localhost";
        $database = "esse";
        $username = "root";
        $password = "root";
        // Создаем соединение
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Проверяем соединение
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE log=$username";
        $request = $conn->query($sql);
        // $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        // $query->bindParam("username", $username, PDO::PARAM_STR);
        // $query->execute();
        // $result = $query->fetch(PDO::FETCH_ASSOC);
        while ($result = mysqli_fetch_assoc($request)){
            // echo $result['id'];
        if (!$result) {
            echo '<p class="error">Неверные пароль или имя пользователя!</p>';
        } else {
            if ($password == $result['pass']) {
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['status']=$result["status"];
                $_SESSION['name']=$result["fio"];
                // echo '<p class="success">Поздравляем, вы прошли авторизацию!</p>';
                // echo $_SESSION['user_id'];
                header('Location:/Главная.php');
            } else {
                echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
            }
        }
    }
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​IT Company, ​The backbone for internet business, Company Services, ​Large payments volume or unique business model?, ​What’s included, What We Do, Custom software solutions">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Задания</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Главная.css" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cambay:400,400i,700,700i">
    
</head>


  <section class="container">
    <div class="login">
      <h4>Войти в личный кабинет</h4>
      <form method="post" action="" name="signin-form">
	  
        <p><input type="text" name="username" placeholder="Логин или Email" pattern="[a-zA-Z0-9]+" required /></p>
        <p><input type="password" name="password" placeholder="Пароль" required /></p>
        </p>
        <p class="submit"><input  type="submit" name="login" value="Войти"></p>
      </form>
    </div>

  </section>


