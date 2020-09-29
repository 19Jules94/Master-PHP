<?php

$server = 'localhost';
$usuario = 'root';
$pass = '';
$database = 'blog_master';
$db = mysqli_connect($server,$usuario,$pass,$database);

mysqli_query($db,"SET NAMES 'utf-8' ");

//Iniciar sesion

session_start();

