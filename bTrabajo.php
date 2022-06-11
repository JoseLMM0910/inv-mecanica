<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bTrabajo.css?version=4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<h5 class="title header text-center">Buscar Trabajos</h5>
     <div class="box">
     
     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <form action="submit">
        <input type="text" placeholder="Introduzca el nombre del trabajo..." name="search" size="54">
                    <button class="buscar" type="submit"><i class="bi bi-search"></i></button>
                    <br>
                     <br>

                 <div class="filtros">
                 <div class="subtitulo title text-center"><i class="bi bi-funnel"></i>Filtros</div>
                 <br>
                 <input type="checkbox" id="ClientecT" name="ClientecT" value="ClientecT">
                  <label for="nCliente">Cliente</label>
                  <input type="text" name="nCliente" id="nCliente">
                  
                  <input type="checkbox" id="statuscT" name="statuscT" value="statuscT">
                  <label for="statusT">Status</label>
                  <select name="statusT" id="statusT">
                      <option value="Seleccione">Seleccione</option>
                      <option value="Terminado">Terminado</option>
                  </select>
                   
                   <br>
                   <br>
                   

                </div>
        </form> 
     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
     <form action="onChange">
<div class="Orden"> Ordenar tabla por:
                   <input type="radio" id="nombre-O" name="fav_language" value="NOMBRE-O">
                   <label for="nombre-O">Nombre</label>
                   <input type="radio" id="cliente-O" name="fav_language" value="CLIENTE-O">
                   <label for="cliente-O">Cliente</label>
                   
</div>
</form>
  
<table class="Principal">
    <tr>
    <th>id</th>
    <th>Trabajo</th>
    <th>Cliente</th>
    <th>Fecha de Entrega</th>
    <th>Status</th>
    <th>Opciones</th>
    </tr>
    <tr>
        <td>1</td>
        <td>reparo de Barco</td>
        <td>Maria Patiño</td>
        <td>30/08/2021</td>
        <td>En Progreso</td>
        <td class="opciones">
      <button class="editar" id="row-?" type="submit"><i class="bi bi-arrow-clockwise"></i></button>
      <button class="borrar edit"  id="row-?" type="submit"><i class="bi bi-trash"></i></button>
      <button class="detalles" id="row-?" type="submit"><i class="bi bi-card-list"></i></button>
      </td>
    </tr>

    
</table>

     </div>

  <div class="details edit">
    <div class="box-1">
    <h6 class="text-center">Detalles del Trabajo</h6>
    <label for="nTrabajo">Nombre del Trabajo</label>
  <input type="text" name="nTrabajo" id="nTrabajo" style="margin-left:40px">
  <br>
  <br>
  <label for="dTrabajo">Descripción del Trabajo</label>
  <input type="text" name="dTrabajo" id="dTrabajo" >
  <br>
  <br>
  <label for="idC">ID del Cliente</label>
  <input type="text" name="idC" id="idC" style="margin-left:80px">
  <br>
  <br>
  <label for="nCliente">Nombre del Cliente</label>
  <input type="text" readonly id="nCliente" name="nCliente" style="margin-left:40px">
  <br>
  <br>
  <label for="tlfnoC">Telefono</label>
  <input type="number" readonly id="tlfnoC" name="tlfnoC" style="margin-left:120px">
  <br>
  <br>
  <label for="dCliente">Dirección</label>
  <input type="text" readonly id="dCliente" name="dCliente" style="margin-left:110px">
    </div>

    <div class="box-2">
        <h6 class="text-center">Detalles Bancarios</h6>
        <label for="pTrabajo">Precio del Trabajo</label>
        <input type="number" readonly id="pTrabajo" name="pTrabajo" style="margin-left:40px">
        <br>
        <br>
        <label for="tpago">Tipo de pago</label>
        <input type="text" readonly id="tpago" name="tpago" style="margin-left:80px">
        <br>
        <br>
        <label for="tBanco">Banco</label>
        <input type="text" readonly id="tBanco" name="tBanco" style="margin-left:120px">
        <br>
        <br>
        <label for="nReferencia">Numero de Referencia</label>
        <input type="number" readonly name="nReferencia" id="nReferencia" style="margin-left:10px">
        <br>
        <br>
        <label for="fEntrega">Fecha de Entrega</label>
        <input type="Date" readonly name="fEntrega" id="fEntrega" style="margin-left:40px;border:2px solid black;border-radius:5px">
    </div>
   
  </div>
  <br>
  <br>
  <div class="details edit">
    <div class="box-1">
       <h6 class="title text-center">Materiales del Trabajo</h6>
        <table  class=" mx-auto">
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

    <div class="box-2">
    <h6 class="title text-center">Maquinarias del Trabajo</h6>
    <table class=" mx-auto">
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

</body>
</html>