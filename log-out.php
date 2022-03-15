<?php

session_start();

unset($_COOKIE["remember_me"]);
setcookie("remember_me", "", time() - 3600);
session_destroy();

header("Location: index.php");

?>
