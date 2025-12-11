<?php

class ProductManager extends AbstractManager
{
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT products.*, 
       product_categories.id AS pc_id, product_categories.name AS pc_name, 
       product_categories.description AS pc_description 
FROM products JOIN product_categories ON products.category_id = product_categories.id');
        $parameters = [

        ];
        $query->execute($parameters);

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $products = [];

        foreach ($results as $result)
        {
            $category = new ProductCategory($result['pc_name'], $result['pc_description'], $result['pc_id']);
            $product = new Product($result['name'], $result['description'], $result['price'], $result['image_url'], $category, $result['id']);
            $products[] = $product;
        }

        return $products;
    }

    public function findById(int $id) : ? Product
    {
        $query = $this->db->prepare('SELECT products.*, 
       product_categories.id AS pc_id, product_categories.name AS pc_name, 
       product_categories.description AS pc_description 
FROM products JOIN product_categories ON products.category_id = product_categories.id WHERE products.id = :id');
        $parameters = [
            "id" => $id
        ];
        $query->execute($parameters);

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $category = new ProductCategory($result['pc_name'], $result['pc_description'], $result['pc_id']);
            $product = new Product($result['name'], $result['description'], $result['price'], $result['image_url'], $category, $result['id']);

            return $product;
        }

        return null;
    }
}