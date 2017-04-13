<?php
setcookie('lang',$_GET['lang'],time()+60*60);
header('Location: ' . $_SERVER['HTTP_REFERER']);