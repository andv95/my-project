<?php

namespace App\Repositories;


use App\Models\Product;

class ProductRepository extends CustomBaseRepository
{
    public function model()
    {
        return Product::class;
    }
}
