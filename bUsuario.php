<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bUsuarioo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Buscador de Usuarios</title>
</head>
<body>
     <div class="usuario" >
    <h5 class="header text-center"><i class="bi bi-file-person"></i> Buscador de Usuarios</h5>
  
    <div class="container">
       
      
         <div class="Buscadores">
            <form action="">

                   <input type="text" placeholder="  Buscar.." name="search">
                    <button type="submit"><i class="bi bi-search"></i></button>
                    <br>
                    </br>
               <div class="filtros">
                  
                 <label for="Rol"> <input type="checkbox" > Rol</label>
                     <select name="Rol" id="Rol">
                        <option value="  ">Seleccione</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Administrador">Administrador</option>
                       <option value="Almacenista">Almacenista</option>
                       <option value="Vendedor">Vendedor</option>
                    </select>
                             
                  

                   <label for="tlfno"><input type="checkbox" > Telefonos</label>
                   <select name="tlfno" id="tlfno">
                      <option value=" ">---</option>
                     <option value="0424">0424</option>
                      <option value="0414">0414</option>
                      <option value="0416">0416</option>
                     <option value="0412">0412</option>
                    </select>

                    <label for="Cedula">C.I</label>
                    <input type="radio" id="Cedula" name="fav_language" value="CEDULA">
                   

                </div>
                    
            </form>
         </div>
      
    <table>
      <tr>
         <th>id</th>
         <th>Nombre</th>
         <th>C.I</th>
         <th>Telefono</th>
         <th>Rol</th>
         <th>Opciones</th>
      </tr>
      <tr>
       <td>1</td>   
      <td>Jill</td>
      <td>25621214</td>
      <td>04248794568</td>
      <td>Gerente</td>
      <td class="opciones">
      <button class="editar" type="submit"><i class="bi bi-pencil-square"></i></button>
      <button class="borrar"  type="submit"><i class="bi bi-trash"></i></button>
     </td>
     </tr>
     <tr>
      <td>2</td>
      <td>Rubros America</td>
      <td>00001546879</td>
      <td>04148975623</td>
      <td>Administrador</td>
      <td class="opciones">
      <button class="editar"  type="submit"><i class="bi bi-pencil-square"></i></button>
      <button class="borrar"  type="submit"><i class="bi bi-trash"></i></button>
     </td>

     </tr>
  </table>
 
    </div>

    <div class="edit" id="editor">
    <label class="edit" ><h4 readonly class="text-center">Editor de Usuarios <hr readonly color="blue" size=3 width="850"></h4> </label>
     
</br>
     <label class="edit" for="Usuarios"> Nombre del Usuario:</label>
     <input readonly class="edit" type="text" id="Usuarios" name="Usuario" size="15" placeholder="nombres">
     <input readonly class="edit" type="text" id="Usuarios" name="Usuario" size="15" placeholder="apellidos">
</br>
</br>
     <label class="edit" for="CI">Cedula:</label> 
     <input readonly class="edit" type="number" id="CI"  name="CI">
     

     <label class="edit" for="fnacimiento">Fecha de nacimiento:</label>
     <input readonly class="edit" type="date" id="fnacimiento" name="fnacimiento">
</br>
</br>
     
     <label class="edit" for="Telefono">Telefono:</label>
     <input readonly class="edit"  type="number" id="Telefono" name="Telefono" placeholder="(Cod de área) Número">

     <label class="edit" for="email">Correo:</label>
     <input readonly class="edit" type="email1" id="email" name="email" size="30">

</br>
</br>


     <label class="edit" for="direccion">Direccion:</label>
     <input readonly class="edit" type="text" name="estado"  placeholder="estado" id="estado">
     <input readonly class="edit" type="text" name ="ciudad"  placeholder="ciudad" id="ciudad">
     <input readonly class="edit" type ="text" name="calle" placeholder="calle" id="calle">

</br>
</br>

 

<label class="edit" for="rol">Rol:</label>
<select readonly class="edit" id="rol" name="rol">
    <option value= "Seleccione">Seleccione </option>  
    <option value="Gerente">Gerente</option>
    <option value="Administrador">Administrador</option>
    <option value="Vendedor">Vendedor</option>
    <option value="Almacenista">Almacenista</option>
    
    </select>

   
    <label class="edit" for="Genero">Genero:</label>
      Hombre <input readonly class="edit" type="radio" name="gender" value="hombre"  id="Genero"> 
      Mujer  <input readonly class="edit" type ="radio" name="gender" value="mujer" id="Genero" >

</br>
</br>
  

    <label class="edit" for="Contraseña"> Contraseña:</label> 
    <input readonly class="edit" type="password"  name="Contraseña" id="Contraseña">
     
     
     <label class="edit" for="confirmar-contraseña">Confirmar Contraseña:</label>
     <input readonly class="edit" type="password"  name="Ccontraseña" id="confirmar-contraseña">

</br>
</br>

    <label class="edit" for="Guardar"></label>
     <button readonly class="edit" type="submit" class="btn btn-primary" id="button">Guardar</button>
      
</br>
</br>
  
 </div>









<script type="text/javascript">
  let c = document.querySelectorAll(".editar");
   
  for (let i=0; i<c.length; i++) {

     c[i].onclick=function(e) {
          e.preventDefault();
     



document.querySelector("div.edit").style.border="2px solid blue";

let hr=document.querySelectorAll("hr.edit");
for (let i=0; i<hr.length; i++) {
   hr[i].style.color="blue";
}

let labels=document.querySelectorAll("label.edit");
for (let i=0; i<labels.length; i++) {
   labels[i].style.color="black";
   
}


let inputs=document.querySelectorAll("input.edit");
for (let i=0; i<inputs.length; i++) {
   inputs[i].style.border="2px solid blue";
   inputs[i].removeAttribute("readonly");

}

let selects=document.querySelectorAll("select.edit");
for (let i=0; i<selects.length; i++) {
     selects[i].style.border="2px solid blue";
}

let button=document.querySelectorAll("button.edit");
for (let i=0; i<button.length; i++) {
      button[i].style.background="blue";

}

}

  }

    </script>

</div>
</body>
</html>