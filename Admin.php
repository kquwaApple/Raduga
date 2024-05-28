<!DOCTYPE html>
<link rel="shortcut icon" href="foto/Радуга.png" type="image/x-icon">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="pon.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

</head>
<body class="body">

<header class="q">
    <img src="foto/Радуга.png" class="Ksusga">
    <a href="index.php" class="o">Радуга</a>
  </header>



    <div class="vhod">
    <button type="button" onclick="showAuth()" class="avt">Авторизация</button>
        <button type="button" onclick="showRegistr()" class="v">Регистрация</button>


        <form action="wait.php" method="post" id="AuthWin">
            <br><p class="l">Логин</p>
            <input type="text" size="40" name="login" class="imp">
            <p class="l">Пароль</p>
            <input type="password" size="40" name="password" class="imp">
            <input type="text" name="type" value="auth" hidden>
            <br><input type="submit" value="Вхoд" size="40" class="vh" >
        </form>

        <form action="wait.php" method="post" id="regWin">
            <table>
                <tr>
                    <td><input type="text" name="name" id="" class="vima" placeholder="Введите имя"></td>
                    <td><input type="date" name="date" id="" class="vda" placeholder="Введите дату"></td>
                </tr>
                <tr>
                    <td> <textarea name="about" id="" class="ose" placeholder="Напишите о себе"></textarea></td>
                </tr>
                <tr>
                    <td> <input type="text" name="login" id="" class="log" placeholder="Введите логин"></td>
                    <td><input type="password" name="pass" id="" class="par" placeholder="Введите пароль"></td>
                    <input type="text" name="type" value="reg" hidden>
                </tr>
            </table>

            <input type="submit" value="Отправить" class="otpr">
        </form>
    </div>


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

    <script src="js/raduga.js"></script>



</body>
</html>
