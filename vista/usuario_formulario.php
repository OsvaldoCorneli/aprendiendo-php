<html>
<head>
    <title>Mi página</title> <!-- Título de la página en la pestaña del navegador -->
</head>
<body>

<!-- Formulario para crear o editar un usuario, enviando los datos a index.php para ser procesados -->
<form action="index.php?controlador=usuario&accion=guardar" method="post">
    <table>
        <!-- Campo oculto que guarda el ID del usuario para diferenciar entre crear o actualizar -->
        <input type="hidden" name="id" value="<?php echo $usuario->id ?>">

        <!-- Campo de texto para el nombre del usuario -->
        <tr><td>Nombre</td>
            <td><input type="text" name="nombre" value="<?php echo $usuario->nombre ?>"></td>
        </tr>

        <!-- Campo de texto para el apellido del usuario -->
        <tr><td>Apellido</td>
            <td><input type="text" name="apellido" value="<?php echo $usuario->apellido ?>"></td>
        </tr>

        <!-- Campo de texto para el teléfono del usuario -->
        <tr><td>Telefono</td>
            <td><input type="text" name="telefono" value="<?php echo $usuario->telefono ?>"></td>
        </tr>

        <!-- Campo de texto para la edad del usuario -->
        <tr><td>Edad</td>
            <td><input type="text" name="edad" value="<?php echo $usuario->edad ?>"></td>
        </tr>

        <!-- Botón para enviar el formulario (crear o actualizar) -->
        <tr>
            <td><input type="submit" name="guardar" value="Guardar"></td>
        </tr>
    </table>
</form>

</body>
</html>


<!-- Explicación:

Formulario HTML:

La acción del formulario apunta a index.php con parámetros controlador=usuario y accion=guardar, que indica al controlador que guarde los datos.
Se usa el método post para enviar los datos de manera segura.
Campos de Entrada:

Cada campo del formulario (nombre, apellido, telefono, edad) toma valores de la variable $usuario para mostrar los datos actuales si es una edición.
El campo oculto id ayuda a determinar si el usuario ya existe o si es un nuevo registro.
Botón Guardar:

Este botón envía el formulario y dispara la acción de guardado en el controlador. -->