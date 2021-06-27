<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css">
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
            <h5> Inventario MetalMecanica</h5>
        </div>

        <ul class="list-unstyled componentes">
            <p>Pagina principal</p>

            <li class="active">
            <a href="#Menu-Principal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
                <ul class="collapse list-unstyled" id="Menu-Principal">
                    <li>
                        <a href="#1">Registrar Usuarios</a>
                    </li>
                    <li>
                        <a href="#2">Buscar Usuarios</a>
                    </li>
                    <li>
                        <a href="#3">Editar Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#proveedores" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Proveedores</a>
                <ul class="collapse list-unstyled" id="proveedores">
                    <li>
                        <a href="#1">Registrar Proveedores</a>
                    </li>
                    <li>
                        <a href="#2"> Buscar Proveedores</a>
                    </li>
                    <li>
                        <a href="#3">Editar Proveedores</a>
                    </li>
                </ul>
            <li>
            <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Productos</a>
                <ul class="collapse list-unstyled" id="Submenu">
                    <li>
                        <a href="#">Registrar Productos</a>
                    </li>
                    <li>
                        <a href="#">Buscar Productos</a>
                    </li>
                    <li>
                        <a href="#">Editar Productos</a>
                    </li>
                </ul>
            </li>
           <li>
           <a href="#">Ventas</a>
           </li>
        </ul>

</nav>
<iframe onload="iframeLoaded()" src="dashboard.php" id="iframe" height="100%" width="100%" title="Iframe-principal" style="border:#111525;"></iframe>
    
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