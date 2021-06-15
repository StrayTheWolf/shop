<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>SHOP</title>
</head>
<body class="d-flex align-items-center flex-column w-20 p-3 text-center">

<header>
    <h1><?= $title ?? '' ?></h1>
    <?=include 'templates/menu.php'?>
</header>

<main>
    <div class="container d-flex justify-content-center flex-column" style="height: 80vh">
        <!-- здесь будет контент (стрианцы) которые собирается в буфер в файле index.php -->
        <?= $content ?? '' ?>
    </div>
</main>

<footer class="bottom-0 position-absolute">
    <?= include 'templates/footer.php' ?>
</footer>
</body>
</html>