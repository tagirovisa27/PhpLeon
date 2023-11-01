<?php
session_start();

$_SESSION['user'] = 'Добро пожаловать Иса!';

header('Location:index.php');