<?php


namespace App\Repositories\category;


use App\Category;
use App\Repository\AbstractRepo;

class CategoryRepo extends AbstractRepo
{

    /**
     * @inheritDoc
     */
    public function model()
    {
        return Category::class;
    }
}
