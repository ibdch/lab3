<?php

$url = "https://api.advego.com/json/antiplagiat/get/";
$data = array("jsonrpc" => "2.0",
"method"=>"unique_check",
"params" => array ("token" => "bdf6add8-5993-4ffd-ad0e-ea1489a94d92" ,
    "key"=>"1",
    "get_text" => "1",
    "report_json" => "1"),
"id"=>"1" );

$postdata = json_encode($data);

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);

print_r ($result);
curl_close($ch);
echo $result
?>
	
