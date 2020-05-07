<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Repositories\category\CategoryRepo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $repo;

    public function __construct(CategoryRepo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return view('backend.category.index')->withCategories($this->repo->all()->sortByDesc('id'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $this->repo->create($request->all());
        return redirect()->route('category')->withFlashSuccess(__('alert.created'));
    }

    public function issetActive ()
    {
    }

    public function edit($id)
    {
        return view('backend.category.edit')->withCategory($this->repo->getById($id));
    }

    public function destroy($id)
    {
        $this->repo->deleteById($id);
        return redirect()->route('category')->withFlashSuccess(__('alert.deleted'));
    }

    public function update($id, Request $request)
    {
        $this->repo->updateById($id, $request->all());
        return redirect()->route('category')->withFlashSuccess(__('alert.updated'));
    }
}
