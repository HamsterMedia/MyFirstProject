<!DOCTYPE html>
<html>
<head>
    <body>
    <title>КОРЗИНА</title>
    <style>
        /* ПАРАМЕТРЫ ПАЦАНСКОЙ КНОПКИ */
        button {
            background-color: blue;
            color: white;
            padding: 5px 14px;
            border: none;
            cursor: pointer;
            border-radius: 7px;
        }
        
    </style>

    <h1>ПАЦАНСКАЯ КОРЗИНА</h1>
    <p><img src="korzina-1.jpg" width="420" height="140" alt="Телега"/></p>
    <!-- Товары -->
    <form action="gop-stop.php" method="post">
        <table>
            <tr>
                <th>Товар </th>
                <th>Цена </th>
                <th>Количество </th>
                <th>ИТОГО </th>
            </tr>
            <tr>
                <?php $id=$_POST["sh"]; $count=$_POST["col"];
                  $prise = 0; $name=""; 
                  if ($id == "shmotka-1") {
                    $prise = 300; $name = "Кепка";
                  } else if ($id == "shmotka-2") {
                    $prise = 1500; $name = "Штаны";                  
                  }
                ?>
                <td><?php echo $name?></td>
                <td><?php echo $prise; echo " семок "; ?></td>
                <td><?php echo $count; ?></td>
                <td><?php echo $prise*$count; echo " семок " ?></td>
            </tr>
        </table>       
    <form name="contacts" method="POST" action="/example.php">
      <input type="text" id="in" name="name" placeholder="Ваше имя" />
      <input type="tel" id="ip" name="phone" placeholder="Ваш телефон" />
      <button type="submit" name="submit_button" value="main_button">Заказать звонок</button>
    </form>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 150px;
    position: fixed;
    z-index:1;
    top: 13px;
    right: 100px;
    background: #ffffff;
    overflow-x: hidden;
    padding: 5px 0;
}

.sidenav a {
    padding: 6px 8px 6px 18px;
    text-decoration: none;
    font-size: 5px;
    color: #025191;
    display: block;
}

.sidenav a:hover {
    color: #044f8d;
}

.main {
    margin-left: 90px; 
    font-size: 3px; 
    padding: 10px 10px;
}

@media screen and (max-height: 1800px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="sidenav">
  <a href="o-nas.html">О гоп-магазе</a>
  <a href="podderzhka.html">Браток, который разберется</a>
  <a href="kliennt.html">Наш район</a>
  <a href="phone.html">Мобила</a>
  <a href="gop-news.html">Гоп-вести</a>
  <a href="gop-stile.html">Гоп-style</a>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <body>
            <div  style="position: fixed; bottom: 0px; left: 0px;
top: auto; right: auto; width: 100%;
height: 150px;background-color: #0064ff; font-size: 13px;">
                <table> 
                    <tr><td><a href="o-nas.html">О гоп-магазе</a></td></tr>
                    <tr><td><a href="podderzhka.html">Браток, который разберется</a></td></tr>
                    <tr><td><a href="kliennt.html">Наш район</a></tr></td>
                    <tr><td><a href="phone.html">Мобила</a></tr></td>
                    <tr><td><a href="gop-news.html">Гоп-вести</a></tr></td>
                    <tr><td><a href="gop-stile.html">Гоп-style</a></tr></td>
                </table>
                <tr><p><img src="gopnik-7.jpg" width="30" height="31" alt="Реальные спортивки"/></p></tr>
            </div>
        </body>
    </head>
</html> 

