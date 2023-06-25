<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="estilos.css"/>
</head>
<center>
<body>
    <header class="header">
        <nav class="nav">
        <ul class="nav-menu">
            <li class="nav-menu-item">
                <a href="compra.php" class="nav-menu-link nav-link">poner logo</a>
            </li>
            <li class="nav-menu-item">
                <a href="usuario.php" class="nav-menu-link nav-link">inicio</a>
            </li>
            <li class="nav-menu-item">
                <a href="cliente.php" class="nav-menu-link nav-link">categorias</a>
            </li>
            <li class="nav-menu-item">
                <a href="proveedor.php" class="nav-menu-link nav-link">novedades</a>
            </li>
            <li class="nav-menu-item">
                <a href="articulo.php" class="nav-menu-link nav-link">sucursales</a>
            </li>
            <li class="nav-menu-item">
                <a href="articulo.php" class="nav-menu-link nav-link">carrito</a>
            </li>
            <li class="nav-menu-item">
                <a href="login.php" class="nav-menu-link nav-link">login</a>
            </li>
        </ul>
        </nav>
    </header>
    <main>
        <table>
            <h2>Ingresar</h2>
            <form action="javascript:void(0);" onsubmit="">
                <tr>
                    <input type="hidden" id="id"/>
                    <td><label for="usuario">Usuario</label></td>
                    <td><input
                        type="text"
                        class="form-control"
                        id="usuario"
                        placeholder=""                    
                        value=""/>
                    </td>
                </tr>
                <tr>
                    <td><label for="clave">Clave</label></td>
                    <td><input
                        type="text"
                        class="form-control"
                        id="clave"
                        placeholder=""                    
                        value=""/>
                    </td>
                </tr>
                <td colspan="2">
                    <button onclick="appLogin.verificarLogin()"class="">ingresar</button>
                    <button type="reset" class="">Limpiar</button>
                </td>
                </tr>       
            </form>
        </table>
        <br>
        <br><br><br><br>
        <a href="registrarse.php">registrar</a>
    </main>
    <script src="../assets/login.js"></script>
</body>
</center>
</html>