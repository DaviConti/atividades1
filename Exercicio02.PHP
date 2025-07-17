<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        Número: <input type="number" name="numero">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>

</body>

</html>