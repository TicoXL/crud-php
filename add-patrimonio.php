<?php
require_once("../Service/Database.php");

$db = new Database();

$id = $_GET['id'];
$description = $_GET['description'];
$internal_code = $_GET['internal_code'];
$created_at	 = $_GET['created_at'];

//var_dump($_GET);
try {

  // SQL 
  $res = $db->exec(
    "CREATE TABLE IF NOT EXISTS user (
      id INTEGER PRIMARY KEY AUTOINCREMENT, 
      description TEXT, 
      internal_code TEXT,
      created_at TIME
    )"
  );

  $sql = "INSERT INTO user (id, descrição, codigo interno, data criação) 
          VALUES ('$id', '$description', '$internal_code' '$created_at')";

 $db->exec($sql);

  echo "<script>
  window.location.replace('list-patrimonio.php');
  </script>";

}catch(PDOException $e ) {
  var_dump($e->getMessage());
}


