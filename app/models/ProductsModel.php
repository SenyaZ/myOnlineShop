<?php

class ProductsModel extends Model
{
    public function getDataProducts()
    {
        return $productList = [
        [
        "id" => 0,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 1,
        "name" => "Abibas",
        "image" => "boots1.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 2,
        "name" => "a23",
        "image" => "boots2.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 3,
        "name" => "Puma",
        "image" => "boots1.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 123,
        ],
        [
        "id" => 4,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 5,
        "name" => "Abibas",
        "image" => "boots1.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 6,
        "name" => "a23",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ],
        [
        "id" => 7,
        "name" => "Niwrtreke",
        "image" => "boots1.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 234,
        ],
        [
        "id" => 8,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ],
        [
        "id" => 9,
        "name" => "Abibas",
        "image" => "boots1.jpg",
        "description" => "sneakers, sneakers - the most common models, you can wear it both under
             jeans and for a “special” occasion, choosing the right clothes; they remain the most beloved 
             types of shoes among men; outdoor enthusiasts prefer them",
        "price" => 600,
        ],
        [
        "id" => 10,
        "name" => "a23",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ],
        [
        "id" => 11,
        "name" => "Niwrtreke",
        "image" => "boots1.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 324,
        ],
        [
        "id" => 12,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ],
        [
        "id" => 13,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ],
        [
        "id" => 14,
        "name" => "Nike",
        "image" => "boots2.jpg",
        "description" => "Edge-to-edge display. The most powerful battery ever in an iPhone. Maximum productivity. 
        Splash and water resistant. Studio quality photos and 4K video. Even more secure with Face ID. The new 
        iPhone XR. Great update",
        "price" => 600,
        ]


         ];
    }

    public function getDataWarehouse()
    {
        return $warehouse = [
            [
                "id" => 0,
                "size" => [
                    "size40" => true,
                    "size41" => false,
                    "size42" => true,
                    "size43" => false,
                    "size44" => false,

                ],
            ],
            [
                "id" => 1,
                "size" => [
                    "size40" => true,
                    "size41" => true,
                    "size42" => true,
                    "size43" => true,
                    "size44" => false,

                ],
            ],
            [
                "id" => 2,
                "size" => [
                    "size40" => true,
                    "size41" => false,
                    "size42" => true,
                    "size43" => false,
                    "size44" => false,

                ],
            ],
        ];
    }
}
