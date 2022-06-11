<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/maquinariA1.css?version=8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Pedidos</title>
</head>
<body>
<div class="maquinaria">
<h5 class="header text-center"><i class="bi bi-cart-fill"></i> Pedidos de Maquinaria</h5>


<div class="datos-principales">
      <h6 class="titulo">Datos Principales de compra</h6>
      <br>
      
    <form action="submit">
       <label for="nEmpleado">Nombre del Empleado</label>
       <input readonly type="text" name="nEmpleado" id="nEmpleado" value="Jose Leonardo">

       <label for="cEmpleado">Cedula del Empleado</label>
       <input type="text" name="cEmpleado" id="nEmpleado" value="25621214">
       <br>
       <br>
       <label for="Fecha">Fecha de la Orden</label>
       <input type="Date" name="Fecha" id="Fecha" value="13/07/2021">

       <label for="Hora">Hora de la Orden</label>
       <input type="Hour" name="Hora" id="Hora" value="Hora">
       <br>
       <br>
       <label for="tProveedor">Tipo de Proveedor</label>
       <select name="tProveedor" id="tProveedor">
       <option value="Seleccione">Seleccione</option>
       <option value="Persona natural">Persona natural</option>
       <option value="Empresa">Empresa</option>
       </select>

       <label for="nProveedor">Nombre del Proveedor</label>
       <input type="text" name="nProveedor" id="nProveedor">

       <label for="idProveedor"> ID del Proveedor</label>
       <input type="number" name="idProveedor" id="idProveedor">
       <br>
       <br>
       <label for="idPedido">Serial de la Maquina</label>
       <input type="text" name="idPedido" id="idMaquina">

       <label for="dPedido">Nombre de la Maquina</label>
       <input type="text" name="dPedido" id="dPedido" size="50">
        <br>
        <br>
       <button class="btn btn-primary" id="aOrden" type="submit">Activar Orden</button>
</br>
</br>
    </form>

</div>

<div class="Row">
   <div class="datos-Productos Column">
      <h6 class="header text-center"> Datos de la Maquinaria</h6>
      <br>
       <form action="submit">
       <label for="mMaquina">Modelo de la Maquina</label>
       <input  type="text" name="mMaquina" id="mMaquina">
       <br>
       <br>
       <label for="Fabricante">Fabricante</label>
       <input type="text" name="Fabricante" id="Fabricante">
       <br>
       <br>
       <label for="Capacidad">Capacidad</label>
       <input type="text" name="Capacidad" id="Capacidad">
       <br>
       <br>
       <label for="Cantidad">Cantidad</label>
       <input type="text" name="Cantidad" id="Cantidad">
       <br>
       <br>
       <label for="pMaquina">Precio</label>
       <input type="number" name="pMaquina" id="pMaquina">
       <br>
       <br>
       <button class="btn btn-primary" type="submit" id="Añadir">Añadir</button>
       <br>
       <br>
       </form>
   </div>
   <div class="datos-Dinero Column">
   <h6 class="header text-center"> Datos de compra</h6>
   <form action="submit">
   <label for="subTotal">Subtotal a pagar (Bs)</label>
   <input readonly type="number" name="subTotal" id="subTotal" value="0" >
   <br>
   <br>
   <label for="subTotalD">Subtotal a pagar ($)</label>
   <input readonly type="number" name="subTotalD" id="subTotalD" value="0" >
   <br>
   <br>
   <label for="tpago">Tipo de pago</label>
   <select name="tpago" id="tpago">
      <option value="Seleccione">Seleccione</option>
      <option value="Debito">Debito</option>
      <option value="Transferencia">Transferencia</option>
      <option value="Pago movil">Pago movil</option>
   </select>
   <br>
   <br>
   <label for="tBanco">Banco</label>
   <select name="tBanco" id="tBanco">
      <option value="Seleccione">Seleccione</option>
      <option value="Banco Mercantil">Banco Mercantil</option>
      <option value="Banco del Tesoro">Banco del Tesoro</option>
   </select>
   <br>
   <br>
   <label for="nReferencia">Numero de Referencia</label>
   <input type="number" name="nReferencia" id="nReferencia">
   <br>
   <br>
   <label for="fEntrega">Fecha de Entrega</label>
   <input type="Date" name="fEntrega" id="fEntrega">
   <br>
   <br>
   
   <button class="btn btn-primary" type="submit" id="rPedido">Registrar Pedido</button>
<br>

   </form>
   
   </div>
</div>


   <table>
      <tr>
      <th>Serial</th>
      <th>Modelo</th>
      <th>Nombre de la Maquina</th>
      <th>Capacidad</th>
      <th>Fabricante</th>
      <th>Precio</th>
      <th>Cantidad</th>
      </tr>
      <tr>
      <td>53006</td>   
      <td>Dania 300</td>
      <td>Torno paralelo</td>
      <td>900 x 1700</td>
      <td>GRAZIOLI</td>
      <td>40</td>
      <td>5</td>
      </tr>
      

   </table>

</div>

</div> 
</body>
</html>