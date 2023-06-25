<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>

    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
    <header class="header">
        <nav class="nav">
          
        <ul class="nav-menu">
            <li class="nav-menu-item">
                <a href="usuario.php" class="nav-menu-link nav-link">Usuario</a>
            </li>
            <li class="nav-menu-item">
                <a href="cliente.php" class="nav-menu-link nav-link nav-menu-link_active">Cliente</a>
            </li>
            <li class="nav-menu-item">
                <a href="proveedor.php" class="nav-menu-link nav-link">Proveedor</a>
            </li>
            <li class="nav-menu-item">
                <a href="articulo.php" class="nav-menu-link nav-link">Articulo</a>
            </li>
            <li class="nav-menu-item">
                <a href="compra.php" class="nav-menu-link nav-link">Compra</a>
            </li>
            <li class="nav-menu-item">
                <a href="venta.php" class="nav-menu-link nav-link">Venta</a>
            </li>
            <li class="nav-menu-item">
                <a href="menulistado.php" class="nav-menu-link nav-link">Listados</a> 
            </li>
        </ul>

        </nav>
    </header>
    <main>
        <h2>Agregar Cliente</h2>
        <table>
        <form action="javascript:void(0);" onsubmit="">
        <tr>
                <input type="hidden" id="id" />
                <td><label for="cicliente">CI Cliente </label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="ci"
                    placeholder=""                    
                    value=""
                /></td>
                <td>
                    <button onclick="appU.buscarCliente()" class="">Buscar</button>
                </td>
            </tr>
            <tr>
            <td><label for="nombre">Nombre</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="nombre"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="apellido">Apellido</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="apellido"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="telefono">Telefono</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="telefono"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="direccion">Direccion</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="direccion"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="email">Email</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="email"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="ruc">RUC</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="ruc"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td colspan="2">
                <button onclick="appU.guardarCliente()" class="">Guardar</button>
                <button onclick="appU.eliminarCliente()" class="">Eliminar</button>
                <button type="reset" class="">Limpiar</button>
            </td>
        </tr>       
    </form>
        </table>
    </main>
    <script src="../assets/cliente.js"></script>
</body>
</html>