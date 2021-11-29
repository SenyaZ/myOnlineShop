<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>myOnlineShop</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  <!-- Bootstrap CSS (Cloudflare CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- jQuery (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
          integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap Bundle JS (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
          integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="wrapper">
  <header>
    <img class="logo" src="../../public/img/logo.png" alt="logo">
    <!--        <h1>My Shop</h1>-->
    <nav>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link <?php echo $linkMainPage;?>" href="../../../php/index.php">Main Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $linkBoots;?>" aria-current="page" href="../../../php/products.php">Boots</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $linkBasket;?>" href="../../../php/basket.php">Basket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $linkLogIn;?>" href="../../../php/logIn.php">Log in</a>
        </li>
      </ul>
    </nav>
  </header>
    <?php
require __DIR__ . "/../../functions.php";