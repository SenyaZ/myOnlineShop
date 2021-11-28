<?php
    $linkMainPage = "";
    $linkBoots = "disabled";
    $linkBasket = "";
    $linkLogIn = "";
<<<<<<< HEAD
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
=======
    require_once "../html/header.php";
?>

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 content">
                <h1>Our Products</h1>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="../media/image-main-page/boots1.jpg" class="card-img-top" alt="photoProduct">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="../php/aboutProd.php" class="btn btn-primary">Go buy</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="../media/image-main-page/boots1.jpg" class="card-img-top" alt="photoProduct">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="../php/aboutProd.php" class="btn btn-primary">Go buy</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="../media/image-main-page/boots1.jpg" class="card-img-top" alt="photoProduct">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="../php/aboutProd.php" class="btn btn-primary">Go buy</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="../media/image-main-page/boots1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="../php/aboutProd.php" class="btn btn-primary">Go buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="nav-in-bottom-prod">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once "../html/footer.html";
>>>>>>> 46cfe253e1a85876ae47386385e2bc8646510f04
