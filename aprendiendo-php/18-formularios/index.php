<!DOCTYPE html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario PHP y HTML</title>
</head>

<body>

    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" /></p>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" /></p>

        <label for="boton">Boton:</label>
        <p><input type="button" name="boton" value="click" /></p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre:<input type="checkbox" name="sexo" value="Hombre" />
            Mujer:<input type="checkbox" name="sexo" value="nujer" checked="checked" />
        </p>

        <label for="color">Color:</label>
        <p><input type="color" name="color" /></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha" /></p>

        <label for="correo">Email:</label>
        <p><input type="email" name="correo" /></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" /></p>

        <label for="numero">Numero:</label>
        <p><input type="number" name="numero" /></p>

        <label for="pass">Pass:</label>
        <p><input type="password" name="pass" /></p>

        <label for="continente">Contienente:</label>
        <p>
            America:<input type="radio" name="continente" value="America" />
            Europa:<input type="radio" name="continente" value="Europa" />
            Asia:<input type="radio" name="continente" value="Asia" />
            Oceania:<input type="radio" name="continente" value="Oceania" />
        </p>

        <label for="web">URL:</label>
        <p><input type="url" name="web" /></p>

        <textarea></textarea><br />

        Peliculas:
        <select name="peliculas" id="">
            <option value="spiderman">Spiderman</option>
            <option value="barman">Batman</option>
            <option value="gran torino">Gran Torino</option>
        </select>
        <br/>






        <input type="submit" value="enviar" /><br />

    </form>
</body>

</html>