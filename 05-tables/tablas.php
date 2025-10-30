<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo de Tabla</title>
  <style>
    .dani-table tr th,  .dani-table tr td {
      border: 1px solid #fff; 
      padding: 20px;
    }


  </style>
</head>
<body> 
    <?php include "../templates/header.php"; ?>
  <h2>Ejemplo de Tabla en HTML</h2>

  <table style="border-collapse: collapse; width: 60%; text-align: center;" class="dani-table">
    <tr style="background-color: #e185c2;">
      <th>Nombre</th>
      <th>Edad</th>
      <th>Ciudad</th>
    </tr>
    <tr style="background-color: aquamarine;">
      <td>Daniela</td>
      <td>27</td>
      <td>Bogotá</td>
    </tr>
    <tr style="background-color:#a09aba">
      <td>Juan</td>
      <td>30</td>
      <td>Medellín</td>
    </tr>
  </table>

</body>
</html>
