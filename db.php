<a href="admin.php" class="btn btn-primary active" role="button" aria-pressed="true">Вернуться назад</a>
<?php
$table= $_POST['table'];
$id= $_POST['id'];
$about= $_POST['Описание'];
$name= $_POST['Цена'];
$img=$_POST['Фотография'];
$host = 'localhost';  // Хост, у нас все локально
            $user = 'grib';    // Имя созданного вами пользователя
            $pass = 'sgdrrfg1337'; // Установленный вами пароль пользователю
            $db_name = 'gribshop';   // Имя базы данных
            $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
            if (!$link) {
                echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
                exit;
               }
               if($_POST['add']){
                //Вставляем данные, подставляя их в запрос
                $sql = mysqli_query($link, "INSERT INTO `{$_POST['table']}` (`id`, `Название`, `Описание`, `Цена`, `Фотография`) VALUES ('{$_POST['id']}', '{$_POST['Название']}', '{$_POST['Описание']}', '{$_POST['Цена']}', '{$_POST['Фотография']}' )");
                //Если вставка прошла успешно
                if ($sql) {
                  echo '<p>Данные успешно добавлены в таблицу.</p>';
                } else {
                  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
                }
            }
                if($_POST['dell']){
                    $sql = mysqli_query($link, "DELETE FROM `{$_POST['table']}` WHERE id = '{$_POST['id']}'");
                    
                    if ($sql) {
                    echo '<p>Данные успешно удаленны из таблицы.</p>';
                    } else {
                echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}
                if($_POST['red']){
                 $sql = mysqli_query($link, "UPDATE `{$_POST['table']}` SET `Название`='{$_POST['Название']}',`Описание`='$about',`Цена`= $name,`Фотография`='{$_POST['Фотография']}' WHERE id = '{$_POST['id']}'");
    
                if ($sql) {
                echo '<p>Данные успешно отредактированны в таблице.</p>';
                } else {
                echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
}
}
?>