<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bProveedor.css?version=7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Buscador de proveedores</title>
</head>
<body>
    <h5 class="header text-center"> Buscador de Proveedores</h5>
  
    <div class="container">
       
      
         <div class="Buscadores">
         <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <form action="">

                   <input type="text" placeholder="Buscar.." name="search">
                    <button class="buscar" type="submit"><i class="bi bi-search"></i></button>
                    <br>
                     <br>
               <div class="filtros">
              
                   <label for="servicios">Servicios</label>
                     <select name="servicios" id="servicios">
                     <option value="Seleccione">Seleccione</option>
                        <option value="Materiales">Materiales</option>
                        <option value="Maquinaria">Maquinaria</option>
                       <option value="Consumibles">Consumibles</option>
                       <option value="Transito">Transito</option>
                    </select>

                   <label for="tlfno">telefonos</label>
                   <select name="tlfno" id="tlfno">
                   <option value="----">----</option>
                     <option value="0424">0424</option>
                      <option value="0414">0414</option>
                      <option value="0416">0416</option>
                     <option value="0412">0412</option>
                    </select>

                    <input type="radio" id="Cedula" name="fav_language" value="CEDULA">
                   <label for="Cedula">Cedula</label>
                    <input type="radio" id="RIF" name="fav_language" value="RIF">
                   <label for="RIF">Rif</label><br>

                </div>
                    
            </form>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
         </div>
      <br>
    <table>
      <tr>
         <th>id</th>
         <th>Nombre</th>
         <th>Cedula o Rif</th>
         <th>Telefono</th>
         <th>Servicio</th>
         <th>Opciones</th>
      </tr>
      <tr>
       <td>1</td>   
      <td>Jill</td>
      <td>25621214</td>
      <td>04248794568</td>
      <td>Maquinaria</td>
      <td class="opciones">
      <button class="editar" id="row-?" type="submit"><i class="bi bi-pencil-square"></i></button>
      <button class="borrar edit"  id="row-?" type="submit"><i class="bi bi-trash"></i></button>
      </td>
     </tr>
     <tr>
      <td>2</td>
      <td>Rubros America</td>
      <td>00001546879</td>
      <td>04148975623</td>
      <td>Consumibles</td>
      <td class="opciones">
      <button class="editar"  id="row-?" type="submit"><i class="bi bi-pencil-square"></i></button>
      <button class="borrar edit"  id="row-?" type="submit"><i class="bi bi-trash"></i></button>
      </td>
     </tr>
  </table>
 
    </div>
        
    <div class="edit" id="editor">
   <h5 class="text-center">Editor de Proveedores</h5>
    <label class="edit" for="Proveedor">Nombre del Proveedor:</label>
    <input readonly class="edit" type="text" id="Proveedor" name="Proveedor" size="30">
     
    
    <label class="edit" for="C-RIF">Cedula o RIF:</label>
       <select class="edit" id="C-RIF" name="C-RIF" >
       <option value="Seleccione">Seleccione</option>
       <option value="cedula">V:</option>
       <option value="RIF">R:</option>
        </select>
       <input readonly class="edit" type="number"  id="C-RIF" name="C-RIF">

        <br>
       <label class="edit" for="Descripcion">Descripción:</label>
       <input readonly class="edit" name="Descripcion" type="text"   id="Descripcion" class="input-descripcion"  size="96">

     <br>
     <br>
    <label class="edit" for="Direccion">Dirección:</label>
       <input readonly class="edit" name="Direccion"  id="Direccion" size="100" >
       
      <br>
       <label class="edit" for="Cpostal">Codigo postal:</label>
       <input readonly class="edit" type="number"  id="Cpostal" name="Cpostal">
       
     
       <label class="edit" for="Ciudad">Ciudad:</label>
       <input readonly class="edit" type="text"  id="Ciudad" name="Ciudad">
        <br>
       <br>
       <label class="edit" for="Estado">Estado:</label>
       <select readonly class="edit" id="Estado" name="Estado">
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


           <label class="edit" for="Tlfono">Telefono:</label>
           <input readonly class="edit" type="number"  name="Tlfono" id="Tlfono">
           <br>
           <br>
           <label class="edit" for="email">Correo Electronico:</label>
           <input readonly class="edit" type="email"  name="email" id="email">
           
           <label class="edit" for="web">pagina web:</label>
           <input readonly class="edit" type="text"  id="web" name="web">
           <br>
           <br>
           <label class="edit" for="Servicios">Tipo de Servicios:</label>
           <select readonly class="edit" id="Servicios" name="Servicios">
           <option value="Materiales">Materiales</option>
           <option value="Maquinaria">Maquinaria</option>
           <option value="Consumibles">Consumibles</option>
           <option value="Transito">Transito</option>
           </select>
           <br>
          <div class="editarbutton">
          <button class=" btn btn-primary" id="submit-edit" type="submit">Editar</button>

          </div>

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