<?php

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new View();
    }

    public function actionIndex()
    {
        echo $this->view->render(null, ['linkBoots' => "disabled"], "header");
        session_start();
        echo $this->view->render("productsData", null, null);
        $productList = $this->model->getDataProducts();
        extract($productList, EXTR_SKIP);

        $countProduct = 0;
        while ($productList[$countProduct]) {
            $listProd[] = new Product($productList[$countProduct]['id'], $productList[$countProduct]['name'], $productList[$countProduct]['image'], $productList[$countProduct]['description'], $productList[$countProduct]['price']);
            $countProduct ++;
        }
        echo $this->view->includeFile("startMainInProducts");
        $numProduct = 0;
        for ($k = 0; $k < $countProduct; $k++) {
            if ($k % 4 == 0) {
                echo "<div class=\"row\">";
                for ($i = 0; $i < 4; $i++) {
                    if ($listProd[$numProduct]) {
                        echo $this->view->render("card", ["image" =>$listProd[$numProduct]->getImage(),
                        "name" => $listProd[$numProduct]->getName(),
                        "description" => $listProd[$numProduct]->getDescription(),
                        "id" => $numProduct], null);

                        $numProduct++;
                    }
                }
                echo "</div>";
            }
        }
        echo $this->view->includeFile("endMainInProducts");
        echo $this->view->render(null, null, "footer");
    }



    public function actionAbout()
    {
        $productList = $this->model->getDataProducts();
        extract($productList, EXTR_SKIP);

        $warehouse = $this->model->getDataWarehouse();
        extract($warehouse, EXTR_SKIP);
        parse_str($_SERVER['QUERY_STRING'], $gets);

        echo $this->view->render(null, null, "header");

        echo $this->view->render("aboutProd", ['productImage' => $productList[$gets['id']]['image'],
            'productName' => $productList[$gets['id']]['name'], 'productDescription' => $productList[$gets['id']]['description'], 'warehouse' => [$warehouse[$gets['id']]['size']]]);

        require_once __DIR__ . "/../public/view/common/footer.php";
    }
}