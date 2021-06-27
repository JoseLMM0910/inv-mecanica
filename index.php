<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario MetalMecanica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body class="principal-body">
    <h1 class="text-center principal-title">BIENVENIDO A METAL-MECANICA C.A</h1>
   <br>
   <div class= "container jumbotron">
   
   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle user-icon" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>

   <h2 class="text-center">Inicio de sesión</h2>
    <form>

    <div class="form-group" id="user-group">
     <label for="usuario">Introduzca el nombre de usuario</label>
     <br>
     <input type="text" class="form-control" placeholder="Usuario" id="usuario">
    </div>

    <div class="form-group" id="contrasena-group">
    <label for="contraseña">Introduzca la contraseña</label>
    <input type="password" class="form-control" placeholder="contraseña" id="contraseña">
     </div>

     <div class="row justify-content-center">
     <button type="submit" class="btn btn-primary">Iniciar sesión</button>
       </div>
       <br>
       <div class="contraseña-olv">
           <a href="contraseña-olv.php">¿Olvidaste la contraseña?</a>
       </div>
       <br>
       <div class="ir-page">
         <a href="principal-page.php"> ir a page</a>
       </div>

   </div> 
    
</body>
</html>
