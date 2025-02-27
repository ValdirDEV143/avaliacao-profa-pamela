
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form method="POST">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id = "idade" name = "idade" require>
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $idade = $_POST['idade'];

            if ($idade >= 60){
                echo "<br>";
                echo "Você é maior de idade e é idoso(a)";
            } 
            elseif ($idade >= 18){
                echo "Você é maior de idade";
            }
            else {
                echo "Você é menor de idade";
            }
            
        }
    ?>

</body>
</html>
