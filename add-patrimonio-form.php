<html>
  <head>
    <title>Cadastro de patrimonios </title>
  </head>
  <body>

    <form action="add-patrimonio.php" method="get">
      <label for="id" >ID</label>
      <input type="int" name="id" id="id" required>
      <br>
      <br>
      <label for="description" >Descrição</label>
      <input type="text" name="Descrição" id="description" required>
      <br>
      <br>
      <label for="internal_code" >Codigo interno</label>
      <input type="text" name="codigo_interno" id="internal_code" required>
      <br>
      <br>
      <label for="created_at" >Data criação</label>
      <input type="time" name="data criação" id="created_at" required>
      <br>
      <br>
      <input type="submit" value="Adicionar">
  </body>

</html>