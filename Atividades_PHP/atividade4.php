<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="atividade4_index.php" method="GET">

        <input placeholder="Mês" type="number" name="mes"> <br />
        <input placeholder="Ano" type="number" name="ano"> <br />
        <input placeholder="Dia" type="number" name="dia"> <br />
        <button onclick='somatorio()' type="submit">Quantos % anjo vc é?</button>

    </form>    

    <?php
		if (isset($_GET['mes']) && isset($_GET['ano']) && isset($_GET['dia'])) {
			somatorio($_GET['mes'], $_GET['ano'], $_GET['dia']);
		}
	?>

    <p>%de anjo: <?php echo $anjo; ?></p>

</body>

</html>