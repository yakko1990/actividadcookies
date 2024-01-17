<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Introduzca datos para crear una cookie</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="Cookiename" class="form-label">Cookie name:</label>
                <input type="text" class="form-control" id="Cookiename" name="nameCookie" required>
            </div>
            <div class="mb-3">
                <label for="Cookievalue" class="form-label">Cookie value:</label>
                <input type="text" class="form-control" id="Cookievalue" name="valueCookie" required>
            </div>
            <div class="mb-3">
                <label for="Cookietime" class="form-label">Cookie expiration seconds:</label>
                <input type="text" class="form-control" id="Cookietime" name="timeCookie" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir cookie</button>


        </form>

        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST["nameCookie"];
            $valor = $_POST["valueCookie"];
            $tiempo = $_POST["timeCookie"];

            if ($tiempo < 0) {
                $tiempo = 0;
            }

            if (!empty($nombre) && !empty($valor)) {
                setcookie($nombre, $valor, time() + $tiempo);
                echo "<p>Cookie agregada con éxito.</p>";
            }

            include_once 'tablas_cookies.php';
            tablacookies();
            borrarcookies();
        }


        ?>

      
    </div>
</body>

</html>

</html>