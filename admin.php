<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
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
<?php
            $host = 'localhost';  // Хост, у нас все локально
            $user = 'grib';    // Имя созданного вами пользователя
            $pass = 'sgdrrfg1337'; // Установленный вами пароль пользователю
            $db_name = 'gribshop';   // Имя базы данных
            $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
            $id=0;
          // Ругаемся, если соединение установить не удалось
            if (!$link) {
             echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
             exit;
            }
            $sql = mysqli_query($link, 'SELECT `id`, `Цена`, `Описание`, `Фотография`, `Название` FROM `Комплектующие`');
            while ($result = mysqli_fetch_array($sql)) {
              echo '
              <form action="db.php" method="post" >
                <div style="text-align:center; margin-top:20px;">
              <input type="text" name="table" value="Комплектующие" style="background-color:green;">
              </div>
              <div class="card" style="background-color:silver; margin-left: 25px; width: calc(250px + (1700 -250) * ((100vw - 500px) / (1920 - 500))); min-width: 320px; margin-top:20px; margin-bottom: 20px;">
            <div class="card-body">
            id
            <input type="text" style="margin-top:10px;" name="id" value="'.$result['id'].'">
            Фотография <input name="Фотография" value="'.$result['Фотография'].'" width="120px" height:"auto" style="margin-top: 10px;">
            Название <input type="text" value="'.$result['Название'].'" class="card-title" style="margin-top:8px;">
            Описание <textarea value="'.$result['Описание'].'" id="" cols="40" rows="3" name="Описание"  >'.$result['Описание'].'</textarea></br>
            Цена <input type="text" style="margin-top:10px; margin-bottom:10px;" name="Цена" value="'.$result['Цена'].'" ></br>
            <input type="submit" value="Удалить" class="btn btn-primary active" role="button" aria-pressed="true" name="dell">
            <input type="submit" value="Редактировать" class="btn btn-primary active" role="button" aria-pressed="true" name="red">
            </div>
            </div> </form>';
            }

            $sql = mysqli_query($link, 'SELECT `id`, `Цена`, `Описание`, `Фотография`, `Название` FROM `Периферия`');
            while ($result = mysqli_fetch_array($sql)) {
              echo '
              <form action="db.php" method="post">
                <div style="text-align:center; margin-top:20px;">
              <input type="text" name="table" value="Периферия" style="background-color:pink;" >
              </div>
              <div class="card" style="background-color:silver; margin-left: 25px; width: calc(250px + (1700 -250) * ((100vw - 500px) / (1920 - 500))); min-width: 320px; margin-top:20px; margin-bottom: 20px;">
            <div class="card-body">
            id
            <input type="text" style="margin-top:10px;" name="id" value="'.$result['id'].'">
            Фотография <input name="Фотография" value="'.$result['Фотография'].'" width="120px" height:"auto" style="margin-top: 10px;">
            Название <input type="text" value="'.$result['Название'].'" class="card-title" style="margin-top:8px;">
            Описание <textarea value="'.$result['Описание'].'" id="" cols="40" rows="3" name="Описание"  >'.$result['Описание'].'</textarea></br>
            Цена <input type="text" style="margin-top:10px; margin-bottom:10px;" name="Цена" value="'.$result['Цена'].'" ></br>
            <input type="submit" value="Удалить" class="btn btn-primary active" role="button" aria-pressed="true" name="dell">
            <input type="submit" value="Редактировать" class="btn btn-primary active" role="button" aria-pressed="true" name="red">
            </div>
            </div> </form>';
            }

            $sql = mysqli_query($link, 'SELECT `id`, `Цена`, `Описание`, `Фотография`, `Название` FROM `Аксессуары`');
            while ($result = mysqli_fetch_array($sql)) {
              echo '
              <form action="db.php" method="post">
                <div style="text-align:center; margin-top:20px;">
              <input type="text" name="table" value="Аксессуары" style="background-color:grey;" >
              </div>
              <div class="card" style="background-color:silver; margin-left: 25px; width: calc(250px + (1700 -250) * ((100vw - 500px) / (1920 - 500))); min-width: 320px; margin-top:20px; margin-bottom: 20px;">
            <div class="card-body">
            id
            <input type="text" style="margin-top:10px;" name="id" value="'.$result['id'].'">
            Фотография <input name="Фотография" value="'.$result['Фотография'].'" width="120px" height:"auto" style="margin-top: 10px;">
            Название <input type="text" value="'.$result['Название'].'" class="card-title" style="margin-top:8px;">
            Описание <textarea value="'.$result['Описание'].'" id="" cols="40" rows="3" name="Описание"  >'.$result['Описание'].'</textarea></br>
            Цена <input type="text" style="margin-top:10px; margin-bottom:10px;" name="Цена" value="'.$result['Цена'].'" ></br>
            <input type="submit" value="Удалить" class="btn btn-primary active" role="button" aria-pressed="true" name="dell">
            <input type="submit" value="Редактировать" class="btn btn-primary active" role="button" aria-pressed="true" name="red">
            </div>
            </div> </form>';
            }
            ?>
            <form action="db.php" method="post" >

<div style="display:flex;">
    <div style=" text-align:center; margin-left:30px;">

    <div style="padding-top:10px; ">Таблица  </div>
    <div style="padding-top:20px; ">id </div>
    <div style="padding-top:12px; ">Название товара </div>
    <div style="padding-top:70px; padding-bottom:-10px; ">Описание</div>
    <div style="padding-top:78px; ">Цена</div>
    <div style="padding-top:18px; ">Фотография</div>
    </div>


<div style="display:block; text-align:left; margin-left:90px; margin-top:5px;" >
 
<select name="table" id="" style="width:186px; height:30px;">
<option value=" " ></option>
<option value="Комплектующие" >Комплектующие</option>
   <option value="Периферия" >Периферия</option>
   <option value="Аксессуары" >Аксессуары</option>
</select></br>

<input type="text" style="margin-top:10px;" name="id"></br>


<input type="text" style="margin-top:10px;" name="Название"></br>
</br>
<textarea  id="" cols="60" rows="5" name="Описание" ></textarea></br>

<input type="text" style="margin-top:10px;" name="Цена" ></br>

<input type="text" style="margin-top:10px; margin-bottom: 15px;" name="Фотография"></br>


</div>
</div>

<div style="margin-left:270px; margin-bottom:90px;">
            <input type="submit" value="Добавить" class="btn btn-primary active" role="button" aria-pressed="true" name="add">
            
            </div>
</form>
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