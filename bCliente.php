<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bCliente.css?version=2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Buscar y editar Clientes</title>
</head>
<body>
<h5 class="title header text-center">Buscar y editar Clientes</h5>
     <div class="box">
     <h6 class="title text-center">Buscar Clientes</h6>
     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <form action="submit">
        <input type="text" placeholder="Introduzca el nombre del cliente..." name="search" size="54">
                    <button class="buscar" type="submit"><i class="bi bi-search"></i></button>
                    <br>
                     <br>

                 <div class="filtros">
                 <div class="subtitulo title text-center"><i class="bi bi-funnel"></i>Filtros</div>
                 <br>
                 <input type="checkbox" id="TelefonoCh" name="telefonoCh" value="TelefonoC">
                  <label for="telefono">Telefono</label>
                  <input type="number" name="telefono" id="telefono">

                  <input type="radio" id="Cedula-F" name="fav_language" value="CEDULA-F">
                   <label for="Cedula-F">Cedula</label>
                   <input type="radio" id="rif-F" name="fav_language" value="RIF-F">
                   <label for="Rif-F">Rif</label>
                   
                   <br>
                   <br>
                   

                </div>
        </form> 
     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
     <form action="onChange">
<div class="Orden"> Ordenar tabla por:
                   <input type="radio" id="nombre-O" name="fav_language" value="NOMBRE-O">
                   <label for="nombre-O">Nombre</label>
                   <input type="radio" id="cedula-O" name="fav_language" value="CEDULA-O">
                   <label for="cedula-O">Cedula</label>
                   <input type="radio" id="rif-O" name="fav_language" value="RIF-O">
                   <label for="rif-O">Rif</label>
</div>
</form>
  
<table>
    <tr>
    <th>Cliente</th>
    <th>Cedula/Rif</th>
    <th>Correo Electronico</th>
    <th>Telefono</th>
    <th>Opciones</th>
    </tr>
    <tr>
        <td>Oskar greds</td>
        <td>24687894</td>
        <td>oska@gmail.com</td>
        <td>04248963856</td>
        <td class="opciones">
      <button class="editar" id="row-?" type="submit"><i class="bi bi-pencil-square"></i></button>
      <button class="borrar edit"  id="row-?" type="submit"><i class="bi bi-trash"></i></button>
      </td>
    </tr>

    
</table>

     </div>

     <div class="edit" id="editor">
   <h5 class="text-center">Editor de Clientes</h5>
   <form>
    <label class="edit" for="nombreC">Nombre del Cliente</label>
    <input readonly class="edit" type="text" id="nombreC" name="nombreC" size="30">
     
    
    <label class="edit" for="C-RIF">Cedula o RIF:</label>
       <select class="edit" id="C-RIF" name="C-RIF" >
       <option value="Seleccione">Seleccione</option>
       <option value="cedula">V:</option>
       <option value="RIF">R:</option>
        </select>
       <input readonly class="edit" type="number"  id="C-RIF" name="C-RIF">

     <br>
     <br>
       <label class="edit" for="DireccionC">Dirección:</label>
       <input readonly class="edit" type="text" name="DireccionC"  id="DireccionC" size="100" >
       <br>
       <br>
       <label class="edit" for="CElectronico">Correo electronico</label>
       <input readonly class="edit" type="text"  id="CElectronico" name="CElectronico" size="50">

       <br>
       <br>
      
           <label class="edit" for="TlfonoC">Telefono:</label>
           <input readonly class="edit" type="number"  name="TlfonoC" id="TlfonoC">
           <br>
           <br>
           
          <div class="editarbutton">
          <button class="editar-C btn btn-primary" id="submit-edit" type="submit">Editar</button>
          </div>
       </form>
    </div>
    <script type="text/javascript">
    let c = document.querySelectorAll(".editar");    

  for (let i = 0; i < c.length; i++) {

    c[i].onclick = function(e) {

        e.preventDefault();

        document.querySelector("div.edit").style.border="2px solid blue"

         let labels= document.querySelectorAll("label.edit");
         for (let i = 0; i < labels.length; i++) {
         labels[i].style.color = "black";
         }        

        let inputs= document.querySelectorAll("input.edit");
        for(let i=0;i< inputs.length; i++){
        inputs[i].style.border="2px solid blue"
        inputs[i].removeAttribute("readonly");

       }

          let selects= document.querySelectorAll("select.edit");
        for(let i=0;i<selects.length;i++){
         selects[i].style.border= "2px solid blue"
         } 

    }

}
        
       
    </script>
     
</body>
</html>