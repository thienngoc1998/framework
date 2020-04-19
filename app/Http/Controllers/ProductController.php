<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Repositories\Product\ProductRepo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $repo;

    public function __construct(ProductRepo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return view('backend.product.index')->withProduct($this->repo->all()->sortByDesc('id'));
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    public function store(CreateCategoryRequest $request)
    {
        $this->repo->create($request->all());
        return redirect()->route('category')->withFlashSuccess(__('alert.updated'));
    }

    public function destroy($id)
    {
        $this->repo->deleteById($id);
        return redirect()->route('category')->withFlashSuccess(__('alert.deleted'));
    }
}
