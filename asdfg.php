<fieldset>
            <form action="1-edit-pelicula.php" method="GET">
            <h2>Editar Pelicula</h2>

            <input type="number" disabled="disabled" value="<?php echo $fila['id'] ?>" name="id"><br>
            <label>Nombre</label>
                <input type="text" value="<?php echo $fila['nombre'] ?>" name="nombre"><br>
            <label>Año</label>
                <input type="number" value="<?php echo $fila['año'] ?>" name="año"><br>
            <label>Genero</label>
                <select name="genero">
                    <option value="" disabled selected>---</option>
                        <?php
                        include "conexion.php";
                        $query = "SELECT * FROM genero";
                        $resultado = mysqli_query($conn, $query);
                        while ($valores = mysqli_fetch_array($resultado)) {
                            ?>
                                <option value="<?php echo $valores["id"] ?>" > <?php echo $valores["nombre"] ?> </option>
                            <?php } ?>

                </select><br>
            <label>Rating</label>
                <input type="number" step=0.01 value="<?php echo $fila['rating'] ?>" name="rating">
            <label>Precio</label>
                <input type="number" step=0.01 value="<?php echo $fila['precio'] ?>" name="precio">

            <button class="btn btn-primary" type="submit" name="modificar">Modificar</button>          

        </form>
        <?php }
        ?>
</fieldset>