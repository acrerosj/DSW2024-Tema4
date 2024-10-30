<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
</head>
<body>
  <h1>Crear producto</h1>
<?php
  if (!empty($_GET['id']) && !empty($_GET['name']) && !empty($_GET['price']) ) {
?>
  <form action="update.php?id=<?=$_GET['id']?>" method="post">
    <p>
      <input type="text" name="name" id="" value="<?=$_GET['name'] ?>" maxlength="30">      
    </p>
    <p>
      <input type="number" name="price" id="" step="0.01" value="<?=$_GET['price'] ?>">
    </p>
    <p>
      <button type="submit">Modificar</button>
    </p>
  </form>
<?php
  }
?>
<p>
  <a href="read.php">Volver a la tabla</a>
</p>

</body>
</html>