<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="https://lk.easynetshop.ru/frontend/v5/ens-f035d576.js"></script>
    <link href="https://lk.easynetshop.ru/frontend/v5/ens-f035d576.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GribShop</title>
    <link rel = "icon" href ="img2/logo.png" type = "image/x-icon">
</head>
<body>
    <header id="shop">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">GribShop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#foot">Контакты</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Каталог
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="pc.php">Комплектующие</a></li>
                      <li><a class="dropdown-item" href="peripherals.php">Периферия</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="accessories.php">Аксессуары</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main>
        <h2 style="text-align:center; margin-top:15px; margin-bottom:20px;">Периферия</h2>
        <?php
            $host = 'localhost';  // Хост, у нас все локально
            $user = 'grib';    // Имя созданного вами пользователя
            $pass = 'sgdrrfg1337'; // Установленный вами пароль пользователю
            $db_name = 'gribshop';   // Имя базы данных
            $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

          // Ругаемся, если соединение установить не удалось
            if (!$link) {
             echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
             exit;
            }
            $sql = mysqli_query($link, 'SELECT `id`, `Цена`, `Описание`, `Фотография`, `Название` FROM `Периферия`');
            while ($result = mysqli_fetch_array($sql)) {
              echo '<div class="card" style="margin-left: 25px; width: calc(250px + (1700 -250) * ((100vw - 500px) / (1920 - 500))); min-width: 320px; margin-top:20px; margin-bottom: 20px;">
            <div class="card-body">
            <img src="'.$result['Фотография'].'" width="120px" height:"auto" style="margin-top: 10px;">
            <h5 class="card-title" style="margin-top:8px;">'.$result['Название'].'</h5>
            <p class="card-text" style="min-width: 300px; width: calc(250px + (1600 -250) * ((100vw - 500px) / (1920 - 500)));" >'.$result['Описание'].'</p>
            <a href="#" class="btn btn-primary btn-ens-action "data-rel="'.$result['id'].'">'.$result['Цена'].' ₽<br>Добавить в корзину</a>
            </div>
            </div>';
            }
            ?>
        </main>

        <footer id="foot">
      <div class="container container-fluid">
      <div class="d-flex justify-content-between">
          <div class="footer-right">
            <div class="fl">
            <span class="follow">Follow us:</span><br>
            <a href="https://vk.com/id248561260" target="_blank"><img src="img2/vk.png" class="vk"></a>
            <a href="#"><img src="img2/facebook.png" class="facebook"></a>
            <a href="#"><img src="img2/twitter.png" class="twitter"></a>
            <div class="contact">+7(918)452-94-82</div>
          </div>
          </div>
            <h1 class="logo"><a href="#shop" class="grib-1">GribShop</a></h1>
          </div>
        </div>
      </div>
    </footer>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>