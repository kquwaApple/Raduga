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

    $empty = '';

    if(!in_array($empty, $_POST)) {
        echo 'True';
        print_r($_SESSION);

        $type = $_POST['type'];

        if($type == 'auth') {
            $login = $_POST['login'];
            $pass = $_POST['password'];

            $check = $mysql->query("SELECT * FROM `usersdata` WHERE `login` = '$login' AND `password` = '$pass';");

            if (mysqli_num_rows($check) > 0) {
                $_SESSION = mysqli_fetch_assoc($check);
                header(('Location: kabihet.php'));
                exit();
            } else {
                header(('Location: admin.php'));
                exit();
            }
        } else if ($type == 'reg') {
            $name = $_POST['name'];
            $login = $_POST['login'];
            $password = $_POST['pass'];
            $date = $_POST['date'];
            $about = $_POST['about'];

            $mysql->query("INSERT INTO `usersdata` (`id`, `name`, `login`, `password`, `data`, `about`) VALUES (NULL, '$name', '$login', '$password', '$date', '$about');");
            
            header("Location: kabihet.php");
            exit();
        } else if ($type == 'signout') {
            session_unset();
            header(('Location: admin.php'));
            exit();
        }

        echo '<a href="adm/admindel.php">Удалить сессию</a>';


    } else {

    }

    $mysql -> close();
?>