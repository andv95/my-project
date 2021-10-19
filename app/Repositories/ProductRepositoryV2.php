<?php

namespace App\Repositories;


use App\Contract\ProductInterface;
use App\Models\Product;

class ProductRepositoryV2 extends MyBaseRepository implements ProductInterface
{
    public function getModel()
    {
        return Product::class;
    }

    public function find($id)
    {
        return $this->model->limit(3)->get();
    }
}

//cách này là cách làm cổ điển ko dùng qua package repository l5-repository, chỉ dùng được 1 model trong phần xử lý
