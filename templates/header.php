<?php

include_once("config/url.php");
include_once("config/process.php");

if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Movie List</title>
        <meta name="viewport" content="width=device=width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    </head>
    <body>
 
        <header id="header">
            <nav class="contain-header">
                <a class="home-link" href="<?= $BASE_URL ?>index.php">
                    <img id="img-logo" src="
                    ./img/pipoca.jpg" alt="">
                </a>
                <div id="header-add-edit">
                    <a id="contain-btn-nav" href="<?= $BASE_URL ?>index.php">
                        <div id="header-nav" class="shadow-save">
                            <i id="icon" class="bi bi-house-fill"></i><div id="contain-name-link">Home</div>
                        </div>
                    </a>
                    <a id="contain-btn-nav" href="<?= $BASE_URL ?>create.php"><div id="header-nav" class="shadow-save"><i id="icon" class="bi bi-plus-lg"></i><div id="contain-name-link">To add</div></div></a>
                </div>    
            </nav>
            