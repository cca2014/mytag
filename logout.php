<?php
    setcookie("auth", "", time()-3600);
    header("Location: https://mytag-c9-cca2014.c9.io/index.php");
?>