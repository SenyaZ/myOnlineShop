<?php
    $linkMainPage = "";
    $linkBoots = "disabled";
    $linkBasket = "";
    $linkLogIn = "";
    require_once __DIR__ . "\..\html\header.php";


    require_once __DIR__ . "\..\data\productsData.php";
    extract($productList, EXTR_SKIP);

    //require_once __DIR__ . "\..\src\Product.php";

    $countProduct = 0;
    while ($productList[$countProduct]) {
        $listProd[] = new Product($productList[$countProduct]['id'],$productList[$countProduct]['name'],$productList[$countProduct]['image'],$productList[$countProduct]['description'],$productList[$countProduct]['price']);
        $countProduct ++;
    }


    require_once __DIR__ . "\..\\templates\products.tmp.php";

    require_once __DIR__ .  "\..\html\\footer.html";