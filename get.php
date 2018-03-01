<?php
//*************************************************************
ini_set('max_execution_time', 600);
function curl_get($host, $referer = null){
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_USERAGENT, "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.51");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_URL, $host);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $html = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);
    return $html;
}
//***************************************************************
// test datas // $result = curl_get("https://maps.googleapis.com/maps/api/directions/json?origin=55.573721,%2037.566561&destination=55.574037,%2037.590637&key=AIzaSyBe23DtCnNlwWxEvl1K1Z_DF8DL2jy48Pg");

$xs = $_REQUEST['xs'];
$ys = $_REQUEST['ys'];
$xe = $_REQUEST['xe'];
$ye = $_REQUEST['ye'];
$alter = $_REQUEST['alter'];
$str_uri = "https://maps.googleapis.com/maps/api/directions/json?origin=$xs,$ys&destination=$xe,$ye&alternatives=$alter&key=AIzaSyBe23DtCnNlwWxEvl1K1Z_DF8DL2jy48Pg";
$result = curl_get($str_uri);
echo $result;
?>
