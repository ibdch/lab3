<?

$esseid = $_GET['id'];
$servername = "localhost";
$database = "esse";
$username = "root";
$password = "root";
$text="";
$name="";
$taskname="";

// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select * from esse inner join users on users.id=esse.id_stud inner join task on task.id=esse.id_task where esse.id=$esseid";
$request = $conn->query($sql);

while ($result = mysqli_fetch_assoc($request)) {
    $text = $result["text"];
    $name =$result["fio"];
    $taskname=$result["name"];
}

$filename =$name.'_'.$taskname.'.doc';


// Открываем файл, флаг W означает - файл открыт на запись
$f_hdl = fopen("./files/".$filename, 'w');

// Записываем в файл $text
fwrite($f_hdl, $text);
// 
// Закрывает открытый файл
fclose($f_hdl);

 Header('Content-Type:text/html; charset=utf-8');

Header('Content-Length: ' . strlen($text));
Header('Content-disposition: attachment; filename="'.$filename.'"');
echo $text;


exit();
