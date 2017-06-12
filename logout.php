<?php
session_start();
session_destroy();
header("location:/projeto/login.html");
exit();
?>