<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Trabajo.css?version=9">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registro de Trabajos</title>
</head>
<body>
  
  <h5 class="title header text-center">Registro de Trabajos</h5>

  <div class="cajas box-1">
  <h6 class="title text-center">Datos Principales</h6>
  <br>
  <br>

  <label for="nTrabajo">Nombre del Trabajo</label>
  <input type="text" name="nTrabajo" id="nTrabajo">
  <br>
  <br>

  <label for="dTrabajo">Descripción del Trabajo</label>
  <input type="text" name="dTrabajo" id="dTrabajo" size="100">
  </div>

  <div class="cajas box-2">
  <h6 class="title text-center">Datos del Cliente</h6>
  <br>
  <br>

  <label for="idC">ID del Cliente</label>
  <select name="idC" id="idC">
  <option value="Seleccione">Seleccione</option>
  <option value="25621214">25621214</option>
  <option value="789452146">789452146</option>
  </select>
  <br>
  <br>

  <label for="nCliente">Nombre del Cliente</label>
  <input type="text" readonly id="nCliente" name="nCliente">
  <label for="tlfnoC">Telefono</label>
  <input type="number" readonly id="tlfnoC" name="tlfnoC">
  <br>
  <br>
  
  <label for="dCliente">Dirección</label>
  <input type="text" readonly id="dCliente" name="dCliente">
  </div>
  
  <div class="Material-tabla" style="margin-bottom: 20px;">
        <div class="Material">
           <h6 class="title text-center">Material #?</h6>
           <form action="Añadir.php">
          <label for="idMaterial">ID</label>
          <input type="text" readonly name="idMaterial" id="idMaterial" style="margin-left:105px">
          <br>

          <label for="nMaterial">Nombre</label>
          <input type="text" readonly name="nMaterial" id="nMaterial" style="margin-left:65px">
          <br>

          <label for="Medida">Medida</label>
          <input type="text" readonly name="Medida" id="Medida" style="margin-left:70px">
          <br>

          <label for="Tipo">Tipo</label>
          <input type="text" readonly name="Tipo" id="Tipo" style="margin-left:95px">
          <br>

           <label for="cDisponible">Disponible</label>
          <input type="number" readonly name="cDisponible" id="cDisponible" style="margin-left:55px">
          <br>

          <label for="cUso">Cantidad a Usar</label>
          <input type="number"  name="cUsar" id="cUsar" style="margin-left:20px">
          <br>
          <button class="btn btn-primary" style="margin-left: 45%;">Añadir</button>
          </form>   
        </div>

        <div class="tabla-1">
          <table class="subtable">
              <tr>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th>Medida</th>
                 <th>Tipo</th>
                 <th>Cantidad</th>
                 
               </tr>
               <tr>
                 <td>1</td>
                 <td>Tubo</td>
                 <td>400x400</td>
                 <td>Inoxidable</td>
                 <td>25</td>
               </tr>
          
            </table>
         </div>
  </div>
  <br>
  
  <div class="tabla-T"  style="margin-bottom: 20px;">
       <h6 class="title text-center">Materiales del Trabajo</h6>
        <table class="tabla mx-auto">
              <tr>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th>Medida</th>
                 <th>Tipo</th>
                 <th>Cantidad</th>
               </tr>
               <tr>
               <td>1</td>
                 <td>Tubo</td>
                 <td>400x400</td>
                 <td>Inoxidable</td>
                 <td>25</td>
               </tr>
         </table>        
    </div>
  
    <div class="Maquinaria-tabla"  style="margin-bottom: 20px;">
        <div class="Maquinaria">
           <h6 class="title text-center">Maquinaria #?</h6>
           <form action="Añadir.php" class="AMaquina">
          <label for="SMaquina">Serial</label>
          <input type="text" readonly name="SMaquina" id="SMaquina" style="margin-left: 120px;">
          <br>

          <label for="nMaquina">Nombre</label>
          <input type="text" readonly name="nMaquina" id="nMaquina" style="margin-left: 110px;">
          <br>

          <label for="Modelo">Modelo</label>
          <input type="text" readonly name="Modelo" id="Modelo" style="margin-left: 120px;">
          <br>

          <label for="Capacidad">Capacidad</label>
          <input type="text" readonly name="Capacidad" id="Capacidad" style="margin-left: 100px;">
          <br>

          <button class="btn btn-primary" style="margin-left: 45%;">Añadir</button>
          </form>   
        </div>

        <div class="tabla-2">
          <table  class="subtable">
              <tr>
                 <th>Serial</th>
                 <th>Nombre</th>
                 <th>Modelo</th>
                 <th>Capacidad</th>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Tubo</td>
                 <td>400x400</td>
                 <td>Inoxidable</td>
               </tr>
            </table>
         </div>
  </div>

  <div class="tabla-T"  style="margin-bottom: 20px;">
       <h6 class="title text-center">Maquinas del Trabajo</h6>
       <div >
          <table class="tabla mx-auto">
              <tr>
                 <th>Serial</th>
                 <th>Nombre</th>
                 <th>Modelo</th>
                 <th>Capacidad</th>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Tubo</td>
                 <td>400x400</td>
                 <td>Inoxidable</td>
               </tr>
            </table>
         </div>
    </div>

    <div class="cajas box-3">
         <h6 class="title text-center">Datos Bancarios</h6>
        <form action="registrarT.php">
        <label for="subTotal">Subtotal a pagar (Bs)</label>
   <input  type="number" name="subTotal" id="subTotal" value="0"  style="margin-left:40px">
   <br>
   <br>
   <label for="subTotalD">Subtotal a pagar ($)</label>
   <input readonly type="number" name="subTotalD" id="subTotalD" value="0" style="margin-left:40px">
   <br>
   <br>
   <label for="tpago">Tipo de pago</label>
   <select name="tpago" id="tpago" style="margin-left:100px">
      <option value="Seleccione">Seleccione</option>
      <option value="Transferencia">Transferencia</option>
      <option value="Pago movil">Pago movil</option>
   </select>
   <br>
   <br>
   <label for="tBanco">Banco</label>
   <select name="tBanco" id="tBanco" style="margin-left:130px">
      <option value="Seleccione">Seleccione</option>
      <option value="Banco Mercantil">Banco Mercantil</option>
      <option value="Banco del Tesoro">Banco del Tesoro</option>
   </select>
   <br>
   <br>
   <label for="nReferencia">Numero de Referencia</label>
   <input type="number" name="nReferencia" id="nReferencia" style="margin-left:10px">
   <br>
   <br>
   <label for="fEntrega">Fecha de Entrega</label>
   <input type="Date" name="fEntrega" id="fEntrega" style="margin-left:40px">
   <br>
   <br>
   <button type="submit" class="btn btn-primary" id="rPedido" style="margin-left:40%">Registrar Trabajo</button>
        </form>
     </div>
    
</body>
</html>