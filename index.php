<?php
 $uagent=$_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4)))
    header('location: http://unit18.ammi-team.ru/index.html');
 ?>
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
<body class="w-100">
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
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img2/pc1.jpg" class="d-block w-100 h-25" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Комплектующие</h5>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="img2/pc.jpg" class="d-block w-100 h-25" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Периферия</h5>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="img2/pc3.jpg" class="d-block w-100 h-25" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Аксессуары</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h2 class="grib">Популярные товары</h2>
          <div class="spaces">
          <div class="card" style="width: 18rem;">
            <img src="img2/vid.jpg" class="card-img-top" alt="Видеокарты">
            <div class="card-body">
              <h5 class="card-title">Видеокарты</h5>
              
              <a href="pc.php" class="btn btn-primary">Перейти к каталогу</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img2/head.jpg" class="card-img-top" alt="Игровая гарнитура" style="width: 250px; height:175px;">
            <div class="card-body">
              <h5 class="card-title">Игровая гарнитура</h5>
              
              <a href="peripherals.php" class="btn btn-primary">Перейти к каталогу</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img2/jet.jpg" class="card-img-top" alt="Жетоны" style="width: 280px; height:175px;">
            <div class="card-body">
              <h5 class="card-title">Жетоны</h5>
              <a href="accessories.php" class="btn btn-primary">Перейти к каталогу</a>
            </div>
          </div>
        </div>
        <h2 style="margin-top: 40px; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 34px; text-align: center;" >Немного о нас</h2>
        <div class="cn">
        <img src="img2/inform.jpg" alt="" class="inf">
       
        
        <p class="inform" style="margin-bottom:10px;">
            Наш интернет-магазин компьютерной техники и игровой переферии предоставляет большой ассортимент товаров в хорошем качестве с быстрой доставкой на дом и удобным оформлением заказа. Вы можете выбрать нужный вам товар и положить его в корзину. Список товаров обновляется каждый день. Также если на складе осталось малое кол-во какого-либо товара, то на этот товар действует скидка.
           <br>Поторопись купить комплектующие и гаджеты в нашем магазине!
        </p>
        </div>
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