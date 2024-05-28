<?php 

session_start();

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'newbdraduga';
$allgood = 'sucsessfuly';

$mysql = new mysqli($servername, $user, $pass, $dbname);
$mysql -> query("SET NAMES 'utf8'");

if ($mysql -> connect_error) {
    die('Connect failed :'.$mysql->connect_error);
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <link rel="shortcut icon" href="foto/Радуга.png" type="image/x-icon">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Магазин "Радуга"</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37.1" />
	
	<link rel="stylesheet" href="raduga.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
</head>

<body class="body"> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	

<!-- После подключения jQuery, Popper и Bootstrap JS -->
<script>
  $(function () {
    $('[data-toggle="popover"]').popover({trigger:'hover'});
  });
</script>
	
	<header class="q">
    <img src="foto/Радуга.png" class="Ksusga">
    <h1 class="o">Радуга</h1>
    <button class="gor"><a href="#w" style="text-decoration: none; color:#FFF2DB;">Категории</a></button>
    <a href="#q"><button class="popTov">Популярные товары</button>
    <a href="#top"><button class="info">Подвал</button>
    <img src="foto/happyHouse.jpg" class="house">

		<p class="qg" ><?php 
      if ($_SESSION == null) {
        echo '<a href="admin.php" style="text-decoration:none;color:#FFF2DB;"> Войти </a>';
      } else {
        echo '<a href="kabihet.php" style="text-decoration:none; color:#FFF2DB;">'.$_SESSION["name"].'</a>';
      }
    ?></p>
  </header>
		
	<div class="w"> 
<!-- Пример отдельной кнопки danger -->

<select class="spisok">
  <option class="town" style="color:#FFF2DB; font-family: WhitehallCyr;">Города</option>
  <option style="font-family: WhitehallCyr;">Курган</option>
  <option >Шадринск</option>
  <option>Катайск</option>
  <option>Долматово</option>
  <option>Петухово</option>
  <option>Шумиха</option>
  <option>Куртамыш</option>
  <option>Мишкино</option>
  <option>Юргамыш</option>
  <option>Шатрово</option>

</select><a name="w"></a>

<!-- <div class="q">

		<img src="foto/Радуга.png"  class="qw" alt="lorem">

		<br><p class="o">Радуга</p>
		<button  class="gor"><a href="#w" style="text-decoration: none; color: #AB8E7A">Я катя</a></button>
		<a href="#q"><button  class="popTov">Популярные товары</button></a>
		<a href="#top"><button  class="info">Информация</button></a>


		<img src="foto/happyHouse.jpg"  class="qd" alt="lorem" hidden>
		<p class="qg"><?php 
      if ($_SESSION == null) {
        echo '<a href="admin.php"> Войти </a>';
      } else {
        echo $_SESSION['name'];
      }
    ?></p>

	</div> -->

<select class="spisok2">
  <option class="town" style="color:#FFF2DB; font-family: WhitehallCyr;">Категории</option>
  <option>Товары для школы</option>
  <option>Рисование</option>
  <option>Значки</option>
  <option>Сумки</option>
  <option>Фигурки</option>
  <option>Глобусы</option>
  <option>Картины по номерам</option>
  <option>Офисная канцелярия</option>
  <option>Рюкзаки</option>
  <option>Аниме</option>
  <option>Игры</option>
  <option>Ластики</option>
  <option>Карандаши</option>
  <option>Кисти</option>
  <option>Краски</option>
  <option>Пеналы</option>
  <option>Брелки</option>
  <option>Блокноты</option>
  <option>Скетчбуки</option>
</select>


</div>

	</div>
	


	<div class="e"><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto/магаз.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto/товары.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto/пон.jpg" class="d-block w-100" alt="...">
    </div>

      <div class="carousel-item">
      <img src="foto/аон.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div></div>
	
    

	
	<div class="r">
		<input border="0" type="text" class="n" size="42"> <button  class="poisk"><img src="foto/67.png" class="pois" alt="..."></button>
			 <!--<img src="Карта.png"  class="m" alt="lorem"> -->
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d139.14068482370627!2d63.63017417479934!3d56.083574000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c786083a12ff87%3A0xd69362ef2a111a32!2z0KDQsNC00YPQs9Cw!5e0!3m2!1sru!2sru!4v1703651487850!5m2!1sru!2sru" width="310" height="250" style="border:0; margin-top:-19px; margin-left:14px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			 </div>
			  </div>	  


     

    <div class="j"><a name="q"></a><br><p class="qe">Популярные товары</p></div>
    <div class="h"><img src="foto/шоперы.jpg" class="qr" alt="lorem"><b><p class="qu">500р.</p></b>  <p class="qi">Шоперы</p>  	<button type="button" class="kyp">Купить</button> </div>
    <div class="k"><img src="foto/кружка2.jpg" class="qr" alt="lorem"><b><p class="qu">489р.</p></b> <p class="qo">Кружка</p>   <button type="button" class="kyp">Купить</button> </div>
    <div class="l"><img src="foto/зна.jpeg" class="qr" alt="lorem"><b><p class="qu">75р.</p></b>     <p class="qp">Значoк</p>	<button type="button" class="kyp">Купить</button> </div>
    <div class="z"><img src="foto/кр.jpeg" class="qr" alt="lorem"><b><p class="qu">180р.</p></b>     <p class="qs">Карандаши</p>	<button type="button" class="kyp">Купить</button> </div>
    <div class="x"><img src="foto/фигурки.jpg" class="qr" alt="lorem"><b><p class="qu">400р.</p></b> <p class="qi">Фигурки</p>	<button type="button" class="kyp">Купить</button> </div>   
    <div class="c"><img src="foto/ручка.jpg" class="qr" alt="lorem"><b><p class="qu">500р.</p></b>   <p class="qa">Ручка</p>	<button type="button" class="kyp">Купить</button> </div>
    <div class="v"><img src="foto/кисть.jpg" class="qr" alt="lorem"><b><p class="qu">250р.</p></b>   <p class="qa">Кисти</p>	<button type="button" class="kyp">Купить</button> </div>   
    <div class="b"><img src="foto/тетрадь.jpg" class="qr" alt="lorem"><b><p class="qu">5р.</p></b>   <p class="qi">Тетрадь</p>	<button type="button" class="kyp">Купить</button> </div>         

  <div class="p"> <a name="top"></a> <br><div class="a">Часы работы</div>
  <div class="a">пн.-пт. 10.00-19.00</div> 
  <div class="a">cб.-вс. 10.00-16.00</div>  
  <div class="s">г.Шадринск</div>    <div class="d">ул. Свердлова 45</div> 
    <div class="d">ул. Комсомольская 19</div> 
    <div class="f">ksusha20220@mail.ru</div>    <div class="g">8 922 670-19-11</div>
  <div>		<a href="https://vk.com/magazingrafika"><img src="foto/вк(1).png" class="qy" alt="lorem"></a>
            <a href="https://t.me/"><img src="foto/тг.png" class="qt" alt="lorem"></a>
  </div>
  </div>

	
</body> 

</html>

