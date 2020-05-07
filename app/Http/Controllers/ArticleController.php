<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')
            ->paginate(5);

        return view('backend.article.index', compact('articles'));
    }

    public function create()
    {
        return view('backend.article.create');
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();
        if ($request->hasFile('img')) {
            $file = $request->img;
            $file->move('upload/images/articles', $file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }

        if (Article::create($data)) {
            return redirect()->route('article')->withFlashSuccess(__('alert.created'));
        }

        return redirect()->route('create-article')->withFlashError(__('alert.created_fail'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('backend.article.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->all();
        $data['id_user'] = 1;
        $data['img'] = $article->img;
        if ($request->hasFile('img')) {
            $file = $request->img;
            $file->move('upload/images/articles', $file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }

        if ($article->update($data)) {
            return redirect()->route('article')->withFlashSuccess(__('alert.updated'));
        }

        return redirect()->route('detail-article', $id)->withFlashError(__('alert.updated_fail'));
    }

    public function destroy($id)
    {
        if (Article::findOrFail($id)->delete()) {
            return redirect()->route('article')->withFlashSuccess(__('alert.deleted'));
        }

        return redirect()->route('article')->withFlashDanger(__('alert.deleted_fail'));
    }
}
