<html>
    <head>

    </head>
    <body>
        <table>
            <tr><?php 
                require_once("../core/constantes.php");
                foreach(usuarioColumns as $value):?>
                <td><?php echo $value;?></td>
                    <?php endforeach; ?>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="">Editar</a></td>
                <td><a onclick="javascrip:return confirm('¿Seguro de elimminar este registro?')" href="">Eliminar</a></td>
            </tr>
        </table>
    </body>
</html>