<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Proveedor.css?version=4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Inventario MetalMecanica</title>
</head>
<body>
    <h6 class="header-1 text-center jumbotron">Registro de Proveedores</h6>


    <h4 class="text-center">Datos del Proveedor</h4>

    <div class="container">
   
    <form>
     <div class="info-Principal">

     <h5 class="text-center subtitle">Datos principales</h5>
     
     <div class="form-1">
     <label for="Proveedor">Nombre del Proveedor:</label>
    <input type="text" id="Proveedor" name="Proveedor" size="50">
     
    <br>
    <br>
    <label for="C-RIF">Cedula o RIF:</label>
       <select id="C-RIF" name="C-RIF" >
       <option value="Seleccione">Seleccione</option>
       <option value="cedula">V:</option>
       <option value="RIF">R:</option>
        </select>
       <input type="number"  id="C-RIF" name="C-RIF">
    
      
    
     </div>
     
       
       
    <div class="descripcion">
    <label for="Descripcion">Descripción:</label>
       <input name="Descripcion" type="text"   id="Descripcion" class="input-descripcion"  >
    </div>
    
    
      
       

       </div>
        

        <br>

       <div class="info-Direccion ">
   <div class="content">
   <h5 class="text-center">Datos de Dirección</h5>
   <label for="Direccion">Dirección:</label>
       
       <input name="Direccion"  id="Direccion" size="100" >
       
    
       <label for="Cpostal">Codigo postal:</label>
      
       <input type="number"  id="Cpostal" name="Cpostal">
       

       <label for="Ciudad">Ciudad:</label>
       
       <input type="text"  id="Ciudad" name="Ciudad">
       
        <br>
        <br>
       <label for="Estado">Estado:</label>
       <select id="Estado" name="Estado">
       <option value="Seleccione">Seleccione</option>
           <option value=">Amazonas">Amazonas</option>
           <option value="Anzoátegui">Anzoátegui</option>
           <option value="Apure">Apure</option>
           <option value="Aragua">Aragua</option>
           <option value="Barinas">Barinas</option>
           <option value="Bolívar">Bolívar</option>
           <option value="Carabobo">Carabobo</option>
           <option value="Cojedes">Cojedes</option>
           <option value="Delta Amacuro">Delta Amacuro</option>
           <option value="Distrito Capital">Distrito Capital</option>
           <option value="Falcón">Falcón</option>
           <option value="Guárico">Guárico</option>
           <option value="Lara">Lara</option>
           <option value="Mérida">Mérida</option>
           <option value="Miranda">Miranda</option>
           <option value="Monagas">Monagas</option>
           <option value="Nueva Esparta">Nueva Esparta</option>
           <option value="Portuguesa">Portuguesa</option>
           <option value="Sucre">Sucre</option>
           <option value="Táchira">Táchira</option>
           <option value="Trujillo">Trujillo</option>
           <option value="Vargas">Vargas</option>
           <option value="Yaracuy">Yaracuy</option>
           <option value="Zulia">Zulia</option>
           </select>
   </div>
      
       
       </div>

       <br>

       <div class="info-Adicional">
           <div class="content">
           <h5 class="text-center">Datos Adicionales</h5>
           <label for="Tlfono">Telefono:</label>
           <input type="number"  name="Tlfono" id="Tlfono">
           
           <label for="email">Correo Electronico:</label>
           <input type="email"  name="email" id="email">
           <br>
           <br>
           <label for="web">pagina web:</label>
           <input type="text"  id="web" name="web">
           
           <label for="Servicios">Tipo de Servicios:</label>
           <select id="Servicios" name="Servicios">
           <option value="Seleccione">Seleccione</option>
           <option value="Materiales">Materiales</option>
           <option value="Maquinaria">Maquinaria</option>
           <option value="Consumibles">Consumibles</option>
           <option value="Transito">Transito</option>
           </select>
           </div>
           
        

       </div>
       <input type="submit" class="btn btn-primary text-center" value="Registrar Proveedor">


   </form>

    </div>


</body>
</html>