<?php
include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HL Atalaia - Início</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/assets/css/style.css">
</head>
<body>
    <section class="header">
        <div class="header__top">
            <div class="header__top--left">
                <a href="<?=$BASE_URL?>"><img class="header__top--left_image" src="<?=$BASE_URL?>/assets/img/logo.png"></a>
            </div>
            <div class="header__top--right">
                <div class="cart-icon">
                    <a href="<?=$BASE_URL?>" class="link-none">
                    <div  class="cart-icon__icon"></div>
                    <div class="cart-icon__items">0</div>
                    </a>
                </div>
                <div class="profile-icon">
                    <a href="<?=$BASE_URL?>" class="link-none">
                    <div class="profile-icon__image"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__bottom--bars">
                <div class="header__bottom--bar"></div>
            </div>
            <div class="header__bottom--searchbar">
                <input type="text" class="header__bottom--searchbar_area" placeholder="Pesquisa"></input><div class="header__bottom--searchbar_space"><div class="header__bottom--searchbar_space-icon"></div></div>
            </div>
        </div>
    </section>