<?php 
session_start();
if($_SESSION['usuario']== null){
  header('Location:index.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
 
  <link rel="stylesheet" type="text/css" href="./styles/stylesdash.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="./img/icono.jpg" alt="" width="40" height="34" class="d-inline-block align-text-top">
      Inventario Taller Automotriz 
    </a>
    <li> Bienvenido: <?php echo $_SESSION['usuario'];?></li>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dash.php">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
        </li>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>


<title>Inventario</title>
  
  
</head>
<body>
  <h1>Inventario</h1>

  <div class="form-container">
    <form id="inventoryForm">
      <div class="input-group">
        <label for="productCode">Código de producto:</label>
        <input type="text" id="productCode" name="productCode" required>
      </div>

      <div class="input-group">
        <label for="productDescription">Descripción del producto:</label>
        <input type="text" id="productDescription" name="productDescription" required>
      </div>

      <div class="input-group">
        <label for="productPrice">Precio del producto:</label>
        <input type="number" id="productPrice" name="productPrice" min="0" step="0.01" required>
      </div>

      <div class="input-group">
        <label for="quantityIn">Cantidad de entrada:</label>
        <input type="number" id="quantityIn" name="quantityIn" min="0" required>
      </div>

      <div class="input-group">
        <label for="quantityOut">Cantidad de salida:</label>
        <input type="number" id="quantityOut" name="quantityOut" min="0" required>
      </div>

      <div class="input-group">
        <label for="registrationDate">Fecha de registro:</label>
        <input type="date" id="registrationDate" name="registrationDate" required>
      </div>

      <div class="button-group">
        <input type="submit" value="Guardar" id="saveButton">
        <input type="submit" value="Modificar" id="modifyButton">
        <input type="submit" value="Eliminar" id="deleteButton">
      </div>

</body>
</html>