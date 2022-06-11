<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bpedidos.css?version=4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Buscar y Actualizar pedidos</title>
</head>
<body>
<h5 class="header text-center">Buscar y Actualizar Pedidos</h5>
    <div class="container ">
     <div class="Buscadores">
     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <form action="">

                   <input type="text" placeholder="Buscar.." name="search" size="54">
                    <button class="buscar" type="submit"><i class="bi bi-search"></i></button>
                    <br>
                     <br>
               <div class="filtros ">
                 <div class="subtitulo titulo text-center">Filtros</div>
                 <br>
                  <label for="Precio">Precio Total</label>
                  <input type="number" name="Precio" id="Precio">
 
                  <label for="llegada">Fecha de Llegada</label>
                  <input type="Date" name="llegada" id="llegada">

                  <label for="solicitud">Fecha de Solicitud</label>
                  <input type="Date" name="solicitud" id="solicitud">
                   
                   <br>
                   <br>
                    <input type="radio" id="Materia-Prima" name="fav_language" value="MATERIA-PRIMA">
                   <label for="Materia-Prima">Materia Prima</label>
                    <input type="radio" id="Materiales" name="fav_language" value="MATERIALES">
                   <label for="Materiales">Materiales</label>
                   <input type="radio" id="Maquinaria" name="fav_language" value="MAQUINARIA">
                   <label for="Maquinaria">Maquinaria</label>

                   <label for="Status">Status</label>
                   <select name="Status" id="Status">
                       <option value="No Disponible">No Disponible</option>
                       <option value="Disponible">Disponible</option>
                   </select>

                </div>
                    
            </form>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
         </div>
         <table class="element">
      <tr>
      <th>ID</th>
      <th>Descripcion del Pedido</th>
      <th>Subtotal</th>
      <th>Precio Total</th>
      <th>Fecha de Solicitud</th>
      <th>Fecha de Llegada</th>
      <th>Tipo de Pedido</th>
      <th>Status</th>
      <th>Opciones</th>
      </tr>
      <tr>
      <td>1</td>   
      <td>Tubos y ceramicas</td>
      <td>43.500.350</td>
      <td>59.503.850</td>
      <td>16/07/2021</td>
      <td>16/08/2021</td>
      <td>Materia Prima y Materiales</td>
      <td>Disponible</td>
      <td class="opciones">
      <button class="detalles" id="row-?" type="submit"><i class="bi bi-clipboard-plus"></i></button>
      <button class="actualizar" id="row-?" type="submit"><i class="bi bi-box-seam"></i></button>
      <button class="borrar"  id="row-?" type="submit"><i class="bi bi-trash"></i></button>
      </td>
      </tr>
     </table>

     <div class="Materiales column element">
            <div class="text-center titulo">Materiales</div>
            <br>
       <table class="Material">
      <tr>
      <th>ID</th>
      <th>Descripcion</th>
      <th>Especificacion</th>
      <th>Medida</th>
      <th>Material</th>
      <th>Dato Adicional(mm, kg, lt)</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Clasificacion</th>
      </tr>
      <tr>
      <td>1</td>   
      <td>Tubo</td>
      <td>Acero</td>
      <td>40mm</td>
      <td>inoxidable</td>
      <td>40</td>
      <td>50</td>
      <td>4</td>
      <td>Materiales</td>
      </tr>
     

    </table>
   </div>
    
   <div class="Materia-prima column element">
        <div class="text-center titulo">Materia Prima</div>
        <table class="Prima">
      <tr>
      <th>ID</th>
      <th>Descripcion</th>
      <th>Especificacion</th>
      <th>Medida</th>
      <th>Material</th>
      <th>Dato Adicional(mm, kg, lt)</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Clasificacion</th>
      </tr>
      <tr>
      <td>1</td>   
      <td>Tubo</td>
      <td>Acero</td>
      <td>40mm</td>
      <td>inoxidable</td>
      <td>40</td>
      <td>50</td>
      <td>4</td>
      <td>Materia Prima</td>
      </tr>
      

   </table>
        </div>

     
    </div>

    
   
    

</body>
</html>