<?php

namespace App\Http\Controllers;

use App\Contract\ProductInterface;

class ProductController extends Controller
{
    protected $contract;

    public function __construct(ProductInterface $contract)
    {
        $this->contract = $contract;
    }

    public function show($id)
    {
        $id = $id ? : 1;
        return $this->contract->find($id);
    }
}
