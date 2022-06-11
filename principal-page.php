<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css?version=2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Inventario MetalMecanica</title>
</head>
<body>


<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h5 class="text-center"> Inventario MetalMecanica</h5>
        </div>

        <ul class="list-unstyled componentes">
        <a href="dashboard.php" onclick="" class="Principal"><i class="bi bi-card-text"></i>Menu Principal</a>

            <li>
            <a href="#Menu-Principal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-person"></i>Usuarios</a>
                <ul class="collapse list-unstyled" id="Menu-Principal">
                    <li>
                        <a href="#1">Registrar Usuarios</a>
                    </li>
                    <li>
                        <a href="#2">Buscar y editar Usuarios</a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="#proveedores" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-minecart-loaded"></i>Proveedores</a>
                <ul class="collapse list-unstyled" id="proveedores">
                    <li>
                        <a href="#1">Registrar Proveedores</a>
                    </li>
                    <li>
                        <a href="#2"> Buscar y editar Proveedores</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pedidos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-minecart-loaded"></i>Pedidos</a>
                <ul class="collapse list-unstyled" id="pedidos">
                    <li>
                        <a href="#1">Registrar Pedidos de Materiales y Materia Prima</a>
                    </li>
                    <li>
                        <a href="#2">Registrar Pedidos de Maquinarias</a>
                    </li>
                    <li>
                        <a href="#2"> Buscar y Actualizar Pedidos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#productos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-box-seam"></i>Productos</a>
                <ul class="collapse list-unstyled" id="productos">
                    <li>
                        <a href="#1">Buscar y Editar Productos</a>
                    </li>
                   
                </ul>
            </li>
              
        <li>
           <a href="#ventas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-receipt"></i>Trabajos</a>
           <ul class="collapse list-unstyled" id="ventas">
                    <li>
                        <a href="#1">Realizar Trabajos</a>
                    </li>
                    <li>
                        <a href="#2">Buscar y editar Trabajos</a>
                    </li>
               </ul>
        </li>
        <li>
           <a href="#clientes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bi bi-receipt"></i>Clientes</a>
           <ul class="collapse list-unstyled" id="clientes">
                    <li>
                        <a href="#1">Registrar Clientes</a>
                    </li>
                    <li>
                        <a href="#2">Buscar y editar Clientes</a>
                    </li>
            </ul>
           </li>
  
       
  
       
        </ul>

</nav>
<iframe onload="iframeLoaded()" src="user1.php" id="iframe" height="100%" width="100%" title="Iframe-principal" style="border:#111525;"></iframe>
    
</div>


</body>
<script type="text/javascript">
  function iframeLoaded() {
      var iFrameID = document.getElementById('iframe');
      if(iFrameID) {
            
            iFrameID.height = "";
            iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
      }   
  }
</script>   
</html>