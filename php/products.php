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


    require_once __DIR__ . "\..\\templates\startMainInProducts.php";
    $numProduct = 0;
    for ($k = 0; $k < $countProduct; $k++) {
        if ($k % 4 == 0) {
            echo "<div class=\"row\">";
            for ($i = 0; $i < 4; $i++) {
                if($listProd[$numProduct]) {
                     echo render("card", ["image" => $listProd[$numProduct]->getImage(),
                        "name" => $listProd[$numProduct]->getName(),
                        "description" => $listProd[$numProduct]->getDescription()]);

                    $numProduct++;
                }
            }
            echo "</div>";
        }
    }

    require_once __DIR__ . "\..\\templates\\endMainInProducts.php";
    require_once __DIR__ .  "\..\html\\footer.html";