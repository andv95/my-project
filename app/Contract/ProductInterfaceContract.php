<?php

namespace App\Contract;


use App\Repositories\ProductRepository;

class ProductInterfaceContract  implements ProductInterface
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function find($id)
    {
        return $this->repository->findOrFail($id);
//        return Product::findOrFail($id);
    }
}


// cách này là dùng l5-repository có thể khởi tạo nhiều model trong phần xử lý
