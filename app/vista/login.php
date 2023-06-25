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
                <a href="login.php" class="nav-menu-link nav-link nav-menu-link_active">Login</a> 
            </li>
        </ul>
        </nav>
    </header>
    <main>
        <table>
        <h2>Ingresar</h2>
        <form action="javascript:void(0);" onsubmit="">
        <tr>
                <input type="hidden" id="id" />
                <td><label for="usuario">Usuario </label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="usuario"
                    placeholder=""                    
                    value=""
             /></td>
            </tr>
            <tr>
            <td><label for="nombre">Clave </label></td>
                <td><input
                    type="text"
                    class="form-control"
                    id="clave"
                    placeholder=""                    
                    value=""
                /></td>
            </tr>
            <td colspan="2">
                <button onclick="appU.verificarLogin()" class="">Guardar</button>
                <button type="reset" class="">Limpiar</button>
            </td>
        </tr>       
    </form>
        </table>
    </main>
    <script src="../assets/login.js"></script>
</body>
</center>
</html>