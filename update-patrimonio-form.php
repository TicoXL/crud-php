<html>
  <head>
    <title>Cadastro de Patrimonios </title>
  </head>
  <body>

    <form action="update-patrimonio.php" method="get">
      <?php

      $id = $_GET['id'];
      echo "<input type='hidden' name='id' value='$id'>";

      require_once("../Service/Database.php");

      $db = new Database();
      $sql = "select distinct * from user where id = '$id'";
      $result = $db->query($sql);
      $data = $result->fetch();

     echo '<label for="description" >Descrição</label>

      <input type="text" name="descrição" id="description" 
      value='.$data['description'].' required>
      <br>
      <br>
      <label for="internal_code" >Codigo interno</label>
      <input type="text" name="codigo interno" id="internal_code"
      value='.$data['internal_code'].' required>
      <br>
      <br>
      <label for="created_at" >Data criação</label>
      <input type="time" name="data criação" id="created_at"
      value='.$data['created_at'].' required>
      <br>
      <br>
      <input type="submit" value="Atualizar">
      </form>';

       ?>

  </body>

</html>