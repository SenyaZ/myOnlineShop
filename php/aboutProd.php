<?php
    $linkMainPage = "";
    $linkBoots = "";
    $linkBasket = "";
    $linkLogIn = "";
    require_once __DIR__ . "/../src/model/productsData.php";
    parse_str($_SERVER['QUERY_STRING'], $gets);
    extract($productList, EXTR_SKIP);

    require_once __DIR__ . "/../public/view/common/header.php";

    echo render("aboutProd", ['productImage' => $productList[$gets['id']]['image'],
        'productName' => $productList[$gets['id']]['name'], 'productDescription' => $productList[$gets['id']]['description']]);

    require_once __DIR__ . "/../public/view/common/footer.html";