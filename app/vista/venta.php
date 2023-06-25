<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
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
                <a href="cliente.php" class="nav-menu-link nav-link">Cliente</a>
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
                <a href="venta.php" class="nav-menu-link nav-link nav-menu-link_active">Venta</a>
            </li>
            <li class="nav-menu-item">
                <a href="menulistado.php" class="nav-menu-link nav-link">Listados</a> 
            </li>
        </ul>
        </nav>
    </header>
    <main>
        <h2>Agregar Venta</h2>
        <table>
        <form action="" onsubmit="">
        <tr>
            <input type="hidden" id="id" />
            <td><label for="fecha">Fecha</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="fecha"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="cliente_id">Cliente</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="cliente_id"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <tr>
            <td><label for="total">Total</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="total"
                    placeholder=""                    
                    value=""
                /><td>
            </tr>
            <tr>
            <td><label for="usuario">Usuario</label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="usuario"
                    placeholder=""                    
                    value=""
                /></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="reset" class="">Limpiar</button>
            </td>
        </tr>    
        </form>
    </table>
    </main>
</body>
</html>