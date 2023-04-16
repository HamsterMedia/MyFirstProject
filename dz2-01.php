<!DOCTYPE html>
<html>
<head>
   <title>Поздравляем! Вы -новый телепузик!</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
     <h2>Введите имя</h2>
     <input type="text" name="name">
     <h2>Введите возраст</h2>
     <input type="number" name="year" step=any>
     <input type="submit" value="Submit year, name">
   </form>
<?php
$name = $_POST['name'];
echo "<h3> Ваше имя: $name </h3>";
$year = $_POST['year'];
echo "<h3> Ваш возраст: $year </h3>";
?>
</body>
</html>
