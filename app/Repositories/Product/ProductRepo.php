<?php


namespace App\Repositories\Product;


use App\Product;
use App\Repository\AbstractRepo;

class ProductRepo extends AbstractRepo
{
    /**
     * @inheritDoc
     */
    public function model()
    {
        return Product::class;
    }
}
