<?php
    $linkMainPage = "";
    $linkBoots = "";
    $linkBasket = "disabled";
    $linkLogIn = "";
    require_once __DIR__ . "/../public/view/common/header.php";
?>

    <main style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12 content">
                <h1>Your basket</h1>
                <div class="row">
                    <div class="col-4 content">
                        <img style="width: 400px" src="/../public/img//boots1.jpg" alt="">
                    </div>
                    <div class="col-8 content">
                        <ul class="list">
                            <li class=" head-of-list"></li>
                            <li class="list-group-item "><a href="">First boots</a></li>
                            <li class="list-group-item "><a href="">Second boots</a></li>
                            <li class="list-group-item "><a href="">Third boots</a></li>
                            <button type="button" class="btn btn-outline-dark">More about my products</button>
                        </ul>
                        <h3 style="float: left">Total price: <span>200$</span></h3>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
    </div>
        </main>

<?php
    require_once __DIR__ . "/../public/view/common/footer.html";

