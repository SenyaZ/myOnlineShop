<?php
    $linkMainPage = "";
    $linkBoots = "";
    $linkBasket = "";
    $linkLogIn = "";
    require_once __DIR__ . "\..\html\header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 content">
                    <div class="all-photo-product">
                        <img class="photo-product" src="../media/image-main-page/boots1.jpg" alt="Product"/>
                        <img class="child-photo-product clearLeft" src="../media/image-main-page/boots1.jpg" alt="Product"/>
                        <img class="child-photo-product" src="../media/image-main-page/boots1.jpg" alt="Product"/>
                    </div>
                    <div class="product-description">
                        <h1>Name of product</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="button" class="btn btn-outline-dark">Add to basket</button>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
        </main>

<?php
    require_once __DIR__ .  "\..\html\\footer.html";