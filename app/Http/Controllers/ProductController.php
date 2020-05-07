<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreateProductRequest;
use App\Product;
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
        return view('backend.product.index')->withProducts($this->repo->all()->sortByDesc('id'));
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    public function store(CreateProductRequest $request)
    {
        if ($request->hasFile('image'))
        {
            $file = $request->image;
            $file->move('upload/images/product', $file->getClientOriginalName());
            Product::create([
                'name' => $request->name,
                'img' => $file->getClientOriginalName(),
                'amount' => $request->amount,
                'price' => $request->price,
                'sale' => $request->sale,
                'description' => $request->description,
                'content' => $request->content_product,
                'color' => $request->color,
                'size' => $request->size,
                'id_category' => $request->type_category,
            ]);

        }
        else {
            Product::create($request->all());
        }
        return redirect()->route('product')->withFlashSuccess(__('alert.created'));
    }

    public function destroy($id)
    {
        $this->repo->deleteById($id);
        return redirect()->route('product')->withFlashSuccess(__('alert.deleted'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.edit')->withProduct($product);
    }

    public function update(CreateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->all();
        $data['img'] = $product->img;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move('upload/images/product', $file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }

        if ($product->update($data)) {
            return redirect()->route('product')->withFlashSuccess(__('alert.updated'));
        }

        return redirect()->back();
    }
}
