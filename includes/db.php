<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = 'root';
$db['db_name'] = 'cms';

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if (mysqli_connect_errno()) {
  echo '<script>console.log("DB Connection Error: '.mysqli_connect_error(). '")</script>';
} else {
    echo "<script>console.log('DB connection successful!')</script>";
}