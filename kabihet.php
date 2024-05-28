 
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

if ($_SESSION == null) {
  header("Location: admin.php");
  exit();
}


?>


 


<!DOCTYPE html>
<link rel="shortcut icon" href="foto/Радуга.png" type="image/x-icon">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="kabihet.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
</head>


<body class="body">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  $(function () {
    $('[data-toggle="popover"]').popover({trigger:'hover'});
  });
</script>

<header class="q">
    <img src="foto/Радуга.png" class="Ksusga">
    <a href="index.php" class="o">Радуга</a>
    <form action="wait.php" method="post">
      <input type="text" name="type" value="signout" hidden>
      <input type="submit" value="Выход" class="vih">
    </form>
  </header>


    
    <div class="block">
      
    <img src="foto/happyHouse.jpg" class="ava" alt="lorem">
    <button  class="izm">Изменить</button>
    <p class="nel">Я ЗАПРЕЩАЮ ВАМ МЕНЯТЬ АВАТАРКУ</p>
      <div class="fio">
        <p class="fi"><?php echo $_SESSION['name']; ?></p>
      </div>
      
      <div class="data"><p class="fi"><?php echo $_SESSION['data']; ?></p></div>
        
      <div class="oseb"><p class="os"><?php echo $_SESSION['about']; ?></p></div>
 
    </div>

    <footer class="p"> <a name="top"></a> <br><div class="a">Часы работы</div>
  <div class="a">пн.-пт. 10.00-19.00</div> 
  <div class="a">cб.-вс. 10.00-16.00</div>  
  <div class="s">г.Шадринск</div>    <div class="d">ул. Свердлова 45</div> 
    <div class="d">ул. Комсомольская 19</div> 
    <div class="f">ksusha20220@mail.ru</div>    <div class="g">8 922 670-19-11</div>
  <div>		<a href="https://vk.com/magazingrafika"><img src="foto/вк(1).png" class="qy" alt="lorem"></a>
            <a href="https://t.me/"><img src="foto/тг.png" class="qt" alt="lorem"></a>
  </div>
</footer>
</body>
</html>