<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
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
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>

    <script>
        function send_text(){
          let textarr = document.getElementById('textarr')
          let text = textarr.value.replace(/(\.)([A-ZА-Я])/g, '$1 $2');
          textarr.value=text
          console.log(text)
        }
    </script>
    <!-- <script src="get_task.php"></script> -->
    <meta name="theme-color" content="#4d6eaa">
    <meta property="og:title" content="Задания">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-d9ff"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://www.nkzu.kz/?lang=ru" class="u-image u-logo u-image-1" title="СКГУ" data-image-width="457" data-image-height="99">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="главная.php" style="padding: 10px 20px;">Задания</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="esse.php" style="padding: 10px 20px;">Эссе</a>

</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.php">Задания</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="esse.php">Эссе</a>

</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            
          </div>
        </nav>
      </div>
    </header>
   <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Добавил задание</th>
          <th>Тема эссе</th>
          <th>Количество слов</th>
          <th>Уникальность</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $servername = "localhost";
        $database = "esse";
        $username = "root";
        $password = "";
        // Создаем соединение
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Проверяем соединение
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $getfio="";
        $sql = "SELECT * FROM task";
        
        $request = $conn->query($sql);
        
        while($result = mysqli_fetch_assoc($request)) {
            $getfio= $result['id_user'];
            $sql1="SELECT * FROM users WHERE id = $getfio";
            $requestfio=$conn->query($sql1);
           
            while( $resultfio=mysqli_fetch_assoc($requestfio)) {
              
            echo "<tr>";
            echo "<td>".$resultfio['fio']."</td>";
            echo "<td>".$result['name']."</td>";
            echo "<td>".$result['count_word']."</td>";
            echo "<td>".$result['unic']."</td>";
            echo '<td><a href="/esseread.php?id='.$result["id"].'">Выполнить</a></td>';
            // echo '<td><a href="/inception.php?id='.$result["id"].'">Заселить</a></td>';
            echo "</tr>";
            }
          }
        ?>
      </tbody>
    </table>
     </div>

    <section class="u-backlink u-clearfix ">

    </section>
  </body>
</html>