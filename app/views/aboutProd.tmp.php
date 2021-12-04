<main style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12 content">
                <div class="all-photo-product">
                    <img class="photo-product" src="/../public/img/<?php echo $productImage?>" alt="Product"/>
                    <img class="child-photo-product clearLeft" src="/../public/img/boots1.jpg" alt="Product"/>
                    <img class="child-photo-product" src="/../public/img/boots1.jpg" alt="Product"/>
                </div>
                <div class="product-description">
                    <h1><?php echo $productName?></h1>
                    <p><?php echo $productDescription?></p>
                    <h4>We have all of this size:<?php
                            foreach ($warehouse[0] as $key => $value){
                                if($value != false){
                                    echo "<br/>" . str_replace('size','',$key);
                                }
                            }
                            ?></h4>
                    <button type="button" class="btn btn-outline-dark">Add to basket</button>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
    </div>
</main>