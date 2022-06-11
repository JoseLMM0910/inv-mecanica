<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario MetalMecanica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="js/intlTELInput.js"></script>

</head>

<body class="principal-body">
<h4 class="text-center principal-title">REGISTRAR EMPLEADO</h4>

   
   <div class= "grid">
     <h5 class=" subtitle" > RELLENE LOS CAMPOS SOLICITADOS PARA EL REGISTRO DE USUARIO </h5>

     <h6 class="datos-obligatorios"> Todos los campos son obligatorios*</h6>


<div class="user-registre" >
    Ingrese nombre completo : </br>
  
    <input type="text" placeholder="nombres" maxlength="50"/>
 
   <input type="text" placeholder="apellidos"  maxlength="50"/>

   

     
</div>

     <div class="cedula">
      Ingrese Cedula: </br>
      <input type="number" name ="cedula" placeholder=""/>
      </div>



      <div class="fnacimiento" >
     Fecha de Nacimiento : </br>
     <input type="date" name ="fecha" placeholder=" " />
     </div>
      
     

     <div class="telefono">
     Telefono : </br>
     
    <input type="number" name="telefono" placeholder="(Cod de área) Número" />

 
     
     </div>

     
     <div class="email">
     Correo : </br>
     <input type="email" name="correo" placeholder="ex:myname@example.com"/>
     
     
     </div>

     <div class="direccion">
     Direccion: </br>

     <input type="text" name="estado" size="20" placeholder="estado" id="estado"/>
     <input type="text" name ="ciudad" size="20" placeholder="ciudad" id="ciudad"/>
     <input type ="text" name="calle" size="20" placeholder="calle" id="calle" />
  
     </div>
     

       <div class ="Rol" >
    Rol : 
    <select name id=" ">
    <option value= " ">seleccione </option>  
    <option value="Gerente">Gerente</option>
    <option value="Administrador">Administrador</option>
    <option value="Vendedor">Vendedor</option>
    <option value="Almacenista">Almacenista</option>
    
    </select>

    </div>


     <div class= "genero">
      Genero: 
      Hombre <input type="radio" name="gender" value="hombre" /> 
      Mujer  <input type ="radio" name="gender" value="mujer" />
  </div> 

    <div class="contraseña">
     Contraseña: </br>
     <input type="password"  name="contraseña" id="contraseña"/>
     </div>
     
     <div class="confirmar-contraseña">
      Confirmar contraseña: </br>
       <input type="password"  name="Ccontraseña" id="ConfirmarC"/>
  </div>


</br>

    <div class="boton">
     <button type="submit" class="btn btn-primary">Guardar Registro</button>
       </div>

</br>
</br>



    
     
     



    




   

</div>



</body>




        





</html>