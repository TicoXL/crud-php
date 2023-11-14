<?php
require_once("../Service/Database.php");

$db = new Database();

try {


  /*
  $sql = "insert into user (email, password, name) values ('admin@teste', '123', 'usuario administrador')";
  $db->exec($sql);
*/
  $sql = "select distinct * from user";
  $result = $db->query($sql);

  echo "<table border='1'>";
  echo "<tr>
  <td>Id</td>
  <td>Descrição</td>
  <td>Codigo interno</td>
  <td>Data criação</td><td></td><td></td></tr>";
  foreach($result as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td>".$row['internal_code']."</td>";
    echo "<td>".$row['created_at']."</td>";

    echo "<td><a href=delete-patrimonio.php?id=".$row['id'].">Deletar</a></td>";

     echo "<td><a href=update-patrimonio-form.php?id=".$row['id'].">Atualizar</a></td>";

    echo "</tr>";

  }
  echo "</table>";
  echo "<br>";
  echo "<a href='../index.php'>Voltar</a>";
  echo "<br>";
  echo "<a href='add-patrimonio-form.php'>Novo Patrimonio</a>";

}catch (PDOException $e) {
   echo $ex->getMessage();
}






?>