<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<form method="post">
            <div class="mb-3">
                <h1>cookies creadas</h1>
            </div>
            <button type="submit" class="btn btn-primary" >Borrar cookies</button>
        </form>

        

    <?php

    include_once 'cookies.php';


    function tablacookies()
    {

        echo '<table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cookie name</th>
                    <th scope="col">Cookie value</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($_COOKIE as $nombre => $valor) {
            echo '<tr>
                <td>' . $nombre . '</td>
                <td>' . $valor . '</td>
              </tr>';
        }

        echo '</tbody></table>';
    }


    function borrarcookies()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                foreach ($_COOKIE as $nombre => $valor) {
                    setcookie($nombre, $valor, time() - 3600);
                    unset($_COOKIE[$nombre]);
                }
           

                echo "<p>Todas las cookies han sido eliminadas.</p>";
            }
           
        }
      
    ?>

</body>

</html>