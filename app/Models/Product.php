<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\ErrorHandler\setLoggers;

class Product extends Model
{
    use HasFactory;
    public static $products;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'T-Shirt',
                'price' => '1250',
                'image' => '1.png'
            ],
            1 => [
                'id' => 2,
                'name' => 'Hand Bag',
                'price' => '2500',
                'image' => 'product5.png'
            ],
            2 => [
                'id' => 3,
                'name' => 'Suit',
                'price' => '5600',
                'image' => '01.jpg'
            ],
            3 => [
                'id' => 4,
                'name' => 'Formal Shoe',
                'price' => '7800',
                'image' => 'product7.png'
            ],
        ];
    }

    public static function getProductById($id)
    {
        self::$products = self::getAllProduct();
        foreach (self::$products as $product)
        {
            if($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}
