<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo h($this->fetch('title','Curso de php cake 4'))  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Para dizer que esse caminho é apenas para essa pagina -->
    <?= $this->fetch('css') ?>
</head>


<body>

    <div class="class container">
        <h2>Curso de Cake php!</h2>
        <?= $this->fetch('content') ?>
        <?= $this->fetch('sidebar') ?>
    </div>

    <?= $this->fetch('js') ?>
</body>

</html>