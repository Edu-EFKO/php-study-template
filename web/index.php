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
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .card {
            flex: 1 1 calc(33.333% - 10px);
            min-width: 250px;
        }

        .card-body p {
            margin-bottom: 5px;
        }
    </style>
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
    <div class='card p-3 shadow mb-4'>
        <h5 class='card-title'>Список грузов</h5>
        <div class='card-body card-container'>
            <div class='card p-2'>
                <div class='card-body'>
                    <p><strong>Наименование:</strong> ...</p>
                    <p><strong>Тоннаж:</strong> ... тонн</p>
                    <p><strong>Статус:</strong> ...</p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">
                &copy; ЭФКО 2024
            </div>
        </div>
    </div>
</footer>

</body>
</html>
