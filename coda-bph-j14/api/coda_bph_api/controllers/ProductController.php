<?php

class ProductController extends AbstractController
{
    public function list() : void
    {
        $manager = new ProductManager();

        $products = $manager->findAll();
        $arrayProducts = [];

        foreach($products as $product)
        {
            $arrayProducts[] = $product->toArray();
        }

        $this->render([
            "code" => 200,
            "products" => $arrayProducts
        ]);
    }

    public function details(int $id) : void
    {
        $manager = new ProductManager();

        $product = $manager->findById($id);

        $this->render([
            "code" => 200,
            "product" => $product->toArray()
        ]);
    }
}