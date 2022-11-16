<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $products;

    public static function getProduct()
    {
        self::$products = [
            0 => [
                'id' => 1,
                'name' => "PHP",
                'desc' => "Description...",
                'image' => 'php.png'
            ],
            1 => [
                'id' => 2,
                'name' => "Next JS",
                'desc' => "Description...",
                'image' => 'next.png'
            ],
            2 => [
                'id' => 3,
                'name' => "flutter",
                'desc' => "Description...",
                'image' => 'flutter.png'
            ]
        ];

        return self::$products;
    }
}
