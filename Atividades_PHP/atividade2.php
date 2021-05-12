<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="atividade2_index.php" method="GET">

        <input type="text" name="campo_cidade"> <br />
        <input type="submit">

    </form>


    <h2><?php if(isset($nome)){echo $nome;} ?></h2>
    <p>temperatura: <?php if(isset($temperatura)){echo $temperatura;} ?></p>
    <p>sensação: <?php if(isset($sensacao)){echo $temperatura;} ?></p>
    <p>umidade: <?php if(isset($umidade)){echo $temperatura;} ?></p>
    <p>velocidade do vento: <?php if(isset($velocidade)){echo $temperatura;} ?></p>

</body>

</html>