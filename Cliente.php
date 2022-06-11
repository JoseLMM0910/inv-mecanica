<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Cliente.css?version=3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registro de Clientes</title>
</head>
<body>

<h5 class="header text-center">Registro de Clientes</h5>
    
    <div class="box">
       <h6 class="text-center">Datos del Cliente</h6>
       <form action="registerC">
         <label for="nombreC">Nombre del Cliente</label>
         <input type="text" name="nombreC" id="nombreC">

         <label for="nombreC">Cedula o Rif</label>
         <select name="CR" id="CR">
         <option value="Seleccione">Seleccione</option>
         <option value="V">V</option>
         <option value="R">R</option>
         </select>
         <input type="text" name="nombreC" id="nombreC">

         <br>
         <br>

         <label for="direccionC">Direccion</label>
         <input type="text" name="direccionC" id="direccionC" size="60">

         <br>
         <br>

         <label for="cElectronicoC">Correo Electronico</label>
         <input type="text" name="cElectronicoC" id="cElectronico" size="40">
         
         <br>
         <br>

         <label for="tlfnoC">Telefono</label>
         <select name="codigoT" id="codigoT">
         <option value="0414">0414</option>
         <option value="0424">0424</option>
         <option value="0412">0412</option>
         <option value="0426">0426</option>
         </select>
         <input type="number" name="tlfnoC" id="tlfnoC">
         <br>
         <br>
         <button class="btn btn-primary">Registrar</button>
       </form>
    </div>
</body>
</html>