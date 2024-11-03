<html>
<head>
</head>
<body>

<!-- Enlace para crear un nuevo usuario, lleva al formulario de usuario sin ningún ID -->
<a href="index.php?controlador=usuario&accion=mostrarUsuario">Nuevo</a>

<!-- Tabla que muestra todos los usuarios almacenados -->
<table>
    <!-- Fila de encabezado que muestra los nombres de las columnas, usando las constantes de usuarioColumns -->
    <tr><?php 
        require_once("core/constantes.php"); // Incluye las columnas definidas en constantes.php
        foreach(usuarioColumns as $value):?>
        <td><?php echo $value;?></td>
    <?php endforeach; ?>
    </tr>

    <!-- Bucle que recorre cada usuario obtenido de la base de datos y lo muestra en una fila -->
    <?php foreach($this->consultarTodo() as $usuario):?>
    <tr>
        <td><?php echo $usuario->nombre?></td> <!-- Nombre del usuario -->
        <td><?php echo $usuario->apellido?></td> <!-- Apellido del usuario -->
        <td><?php echo $usuario->telefono?></td> <!-- Teléfono del usuario -->
        <td><?php echo $usuario->edad?></td> <!-- Edad del usuario -->

        <!-- Enlace para editar el usuario actual, pasando su ID como parámetro -->
        <td><a href="index.php?controlador=usuario&accion=mostrarUsuario&id=<?php echo $usuario->id;?>">Editar</a></td>

        <!-- Enlace para eliminar el usuario actual, pasando su ID y pidiendo confirmación antes de eliminar -->
        <td><a href="index.php?controlador=usuario&accion=eliminar&id=<?php echo $usuario->id;?>" onclick="return confirm('¿Seguro de eliminar este registro?')">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
<!-- 
Explicación del código:
Enlace "Nuevo": Este enlace permite agregar un nuevo usuario. Redirige al formulario usuario_formulario.php, 
donde se puede ingresar información para crear un nuevo usuario.
Tabla de usuarios:
Encabezado: Utiliza las constantes de usuarioColumns para crear el encabezado de la tabla con las columnas

Nombre, Apellido, Telefono y Edad.
Filas de datos: Cada fila muestra los datos de un usuario obtenido mediante $this->consultarTodo(), que es 
un método del controlador para obtener todos los registros de la tabla de usuarios.
Enlace para Editar: Redirige al formulario de usuario, precargando los datos del usuario para editar.
Enlace para Eliminar: Incluye un enlace para eliminar el usuario y muestra una alerta de confirmación antes de realizar la acción. -->
