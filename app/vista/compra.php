<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
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
                <a href="compra.php" class="nav-menu-link nav-link nav-menu-link_active">Compra</a>
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
        <h2>Agregar Compra</h2>
        <form action="javascript:void(0)" onsubmit="">
        <table>
            <tr>
            <tr>
            <tr>  
            
            <td><label for="ruc">RUC Proveedor</label>
                <td><input type="text" id="ruc" />   
                <button onclick="appC.buscarRUC()" class="">🔎</button> </td>
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
            <td><label for="fecha">Fecha</label></td>
                <td><input
                    type="date"
                    class="form-control"
                    id="fecha"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
        </form>   
        <tr>
        <tr> 
        </table>

        <hr>

        <form action="javascript:void(0)" onsubmit="">
        <table>
        <tr>
        <tr>
            <td><label for="articulo">Articulo</label></td>

            <td><label for="descripcion">Descripcion</label></td>

            <td><label for="precio">Precio</label></td>

            <td><label for="cantidad">Cantidad</label></td>

            <td><label for="total">Total</label></td>

            <td><button onclick="appC.guardarCompra()" class="">📋</button></td>

                <tr><td><input
                    type="text"
                    class="form-control"
                    id="articulo"
                    placeholder=""                    
                    value=""
                /></td>

                <td><input
                    type="text"
                    class="form-control"
                    id="descripcion"
                    placeholder=""                    
                    value=""
                />
                </td>

                <td><input
                    type="text"
                    class="form-control"
                    id="precio"
                    placeholder=""                    
                    value=""
                />
                </td>

                <td><input
                    type="text"
                    class="form-control"
                    id="cantidad"
                    placeholder=""                    
                    value=""
                />
                </td>

                <td><input
                    type="text"
                    class="form-control"
                    id="total"
                    placeholder=""                    
                    value=""
                />
                </td>

            </tr>
            <tr>
        </table>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Articulo</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
        </table>
            <!-- <td colspan="2">
                <button type="reset" class="">Limpiar</button>
                <button onclick="appCo.guardarCo()" class="">Guardar</button>
                <button onclick="appCo.eliminarCo()" class="">Eliminar</button>
                <button onclick="appCo.modificarCo()" class="">Modificar</button>
            </td> 
        </tr>    
        </form> -->
     </main>
    <script src="../assets/compra.js"></script>
</body>
</html>