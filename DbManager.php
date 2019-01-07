<?php
function getDb(){
  $dsn = 'mysql:dbname=money_manager; host=127.0.0.1; charset=utf8';
  $usr = 'root';
  $passwd = '';

  //DB接続を確率
  $db = new PDO($dsn, $usr, $passwd);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}
