<?php


// $myFile =  fopen("demo.txt", "w");
// // $read = file("demo.txt", "r");
// // // var_dump($read);
// // // echo $myFile;
// // foreach ($read as $line) {
// //     echo $line;
// // }
// fwrite($myFile, 'hdgaugdaghd');
// fclose($myFile);

// file_put_contents("demo.txt", "do duc cuong");
// $content = file_get_contents("demo.txt");
// echo $content;
$arr = array(
    'name' => "cuong",
    'age' => "31",
    'address' => "hn"
);
$dataJson = json_encode($arr);
file_put_contents("demo.json", $dataJson);
$data = file_get_contents("demo.json");
$result = json_decode($data, true);
echo "<pre>";
var_dump($result);