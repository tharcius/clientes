<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

// Controle de exibição de erros do PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Code.Education - POO - Listagem de Clientes</title>

    <!-- Faicons -->
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="favicon/favicon-144.png">
    <meta name="msapplication-config" content="browserconfig.xml">


    <!-- CSS  -->
<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav>
    <div class="nav-wrapper light-blue accent-4">
        <a href="#" class="brand-logo">BrasilPAD</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php" class="waves-effect waves-light btn-large blue-grey darken-1">Clientes</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Clientes</a></li>
        </ul>
    </div>
</nav>
<p></p>
