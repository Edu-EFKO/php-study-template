<!DOCTYPE html>
<html lang="ru-RU" class="h-100">
<head>
    <title>
        Калькулятор
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="image/x-icon" href="favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
</head>
<body class="d-flex flex-column h-100">
<header id="header">
    <nav id="w0" class="navbar-expand-md navbar-dark bg-dark navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo" src="img/logo.png" alt="ЭФКО">
            </a>
        </div>
    </nav>
</header>

<main class='container mt-5'>
    <div class='card p-3 shadow'>
        <h5 class='card-title'>Информация о грузе</h5>
        <div class='card-body'>
            <p class='mb-2'><strong>Наименование:</strong> <?= $name ?></p>
            <p class="mb-2"><strong>Тоннаж:</strong> <?= $tonnage ?> тонн</p>
            <p class="mb-2"><strong>Статус доставки:</strong> <?= $isDelivered ? 'Доставлен' : 'Не доставлен' ?></p>
            <p class="mb-2"><strong>Дальность доставки:</strong> <?= $distance ?> км</p>
            <p class="mb-2"><strong>Стоимость доставки:</strong> <?= $deliveryCost ?> руб.</p>
        </div>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">
                &copy; ЭФКО <?= date('Y') ?>
            </div>
        </div>
    </div>
</footer>

</body>
</html>