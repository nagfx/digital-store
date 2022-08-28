<?php // SQL_login.php
  $host = 'localhost';
  $data = 'nmnwebprg';
  $user = 'namanweb';         // Change as necessary
  $pass =  '12345678';       // Change as necessary
  $chrs = 'utf8mb4';
  $attr = "mysql:host=$host;dbname=$data;charset=$chrs";
  $tbl_name = 'theusersdatabase';
  $opts =
  [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];
?>
