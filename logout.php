<?php
session_start();

session_destroy();
header("Location:http://localhost/perpus/login/index.php")
?>