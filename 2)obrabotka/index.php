<?php 
 
$first=0;
$sec=0;
$first=(int)$_POST["first"];
$sec=(int)$_POST["second"];
//среднее
function average($first, $sec) {
  return ($first + $sec) / 2;
} 
//разница
$razhica= $first-$sec ;
//делятся на 7
$start = $sec;
$end = $first;

// определяем количество чисел, которые делятся на 7 в заданном промежутке
$count = 0-1; // Счетчик чисел, делящихся нацело на 7

if ($start <= $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 7 == 0) {
            $count++;
        }
    }
} else {
    for ($i = $end; $i <= $start; $i++) {
        if ($i % 7 == 0) {
            $count++;
        }
    }
}

?> 
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Анализ дней в выбранном месяце</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="jqui/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.7.1.js"></script>
<script src="jqui/jquery-ui.js"></script>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
<main class=" w-50 m-auto">
  <form action="" method="post">
  Первое число :
  <input type="text" class="form-control" id="first" name= "first" placeholder="Введите первое число">
	<br>
  <hr>
  Второе число:
    <input type="text" class="form-control" id="second" name="second" placeholder="Введите второе число">
	<br>
  <hr>
  <button type="submit"  class="btn btn-primary">посчитать</button>
  </form>
  <h2>Среднее чисел : <?php  echo average($first, $sec); ?></h2>
  <h2>Разница чисел: <?php echo $razhica ?></h2>
  <h2>Количество чисел, которые делятся на 7: <?php echo $count ?></h2>
</main>

 
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
 
    </body>
</html>
