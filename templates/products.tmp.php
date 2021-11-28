<main>
    <div class="container">
        <div class="row">
            <div class="col-12 content">
                <h1>Our Products</h1>
                <div class="container">

                    <?php
                        $numProduct = 0;
                        for ($k = 0; $k < $countProduct; $k++) {
                            if ($k % 4 == 0) {
                                echo "<div class=\"row\">";
                                for ($i = 0; $i < 4; $i++) {
                                    if($listProd[$numProduct]) {
                                        echo "
                                         <div class=\"col\">
                                             <div class=\"card\" style=\"width: 15rem;\">
                                                <img src=\"  {$listProd[$numProduct]->getImage()} \" class=\"card-img-top\" alt=\"photoProduct\">
                                                 <div class=\"card-body\">
                                                    <h5 class=\"card-title\"> {$listProd[$numProduct]->getName()} </h5>
                                                    <p class=\"card-text\">{$listProd[$numProduct]->getDescription()}</p>
                                                    <a href=\"../php/aboutProd.php\" class=\"btn btn-primary\">Go buy!</a>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                                        $numProduct++;
                                    }

                                }
                                echo "</div>";
                            }
                        }


                    ?>
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
</main>
