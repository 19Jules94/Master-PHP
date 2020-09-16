<?php

//Borrar la cookie, no sirve solo con unset,si no que tambien hay que caducarla
if ($_COOKIE['micookie']) {

    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}

header('Location:ver_cookies.php');