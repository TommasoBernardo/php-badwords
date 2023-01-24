<?php //; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="./ricevi.php" method="POST">
            <label for="">inserisci una frase</label>
            <input type="text" name="frase" placeholder="Example ciao, come va?">
            <input type="text" name="word" placeholder="parola da censurare">
            <button type="submit">invia</button>
        </form>
    </main>
</body>

</html>