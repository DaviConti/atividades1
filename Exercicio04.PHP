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
        $n = $_POST['numero'];
        $f = 1;
        for ($i = 1; $i <= $n; $i++) {
            $f *= $i;
        }
        echo "Fatorial de $n é $f.";
    }
    ?>

</body>

</html>