<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/login.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/register.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/values.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,100;1,200;1,400&display=swap" rel="stylesheet">
    <title>The Tablet Storage</title>
</head>

<body>
    <section id="container">
        <!-- CABEÇALHO -->
        <header>
            <h1>The <span><a class="myLink" href="<?php echo BASEURL . "/Home"; ?>">Tablet</a></span> Storage</h1>
        </header>

        <!-- -------------------------------------- -->
        <main>
            <?php
            $this->loadViewOnTemplate($viewName);
            ?>
        </main>
        <!-- -------------------------------------- -->


        <!-- RODAPÉ -->
        <footer>TheTabletStorage - by &nbsp;<a class="myLink" href="https://www.github.com/luizDorval/tablet-store-php"> Luiz Dorval</a></footer>
    </section>
</body>

</html>