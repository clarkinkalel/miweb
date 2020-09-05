<!DOCTYPE html>
<html>
<head>
    <title> @yield('titulo') </title>
</head>
<body>

    <nav>
        <ul>
            <li> <a href="/">Inicio</a></li>
            <li> <a href="/productos">Productos</a></li>
            <li> <a href="/servicios">Servidcios</a></li>
            <li> <a href="/contacto">Contacto</a></li>
        </ul>
    </nav>

    @yield('contenido') 

</body>
</html>