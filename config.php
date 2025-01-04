<?php

$host = 'localhost';
$port = 3306;
$dbname = 'pictourny';
$username = 'pictourny';
$password = '1234';

// Create a mysqli connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}



// ข้อมูลการเชื่อมต่อฐานข้อมูลจาก JSON
// $databaseInfo = json_decode('{
//   "database": {
//     "1715084481388": {
//       "host": "localhost",
//       "port": 3306,
//       "user": "pictourny",
//       "password": "1234",
//       "dbType": "MySQL",
//       "database": "pictourny"
//     }
//   }
// }', true);

// // ข้อมูลการเชื่อมต่อฐานข้อมูล
// $servername = $databaseInfo['database']['1715084481388']['host'];
// $port = $databaseInfo['database']['1715084481388']['port'];
// $username = $databaseInfo['database']['1715084481388']['user'];
// $password = $databaseInfo['database']['1715084481388']['password'];
// $database = $databaseInfo['database']['1715084481388']['database'];

// // เชื่อมต่อกับ MySQL
// $conn = new mysqli($servername, $username, $password, $database, $port);

// // ตรวจสอบการเชื่อมต่อ
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }




?>
