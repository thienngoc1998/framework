<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '<>', 1)
            ->where('id', '<>', auth()->id())
            ->orderBy('id', 'DESC')
            ->paginate(50);

        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = \Hash::make($data['password']);
        if (User::create($data)) {
            return redirect()->route('user')->withFlashSuccess(__('alert.created'));
        }

        return redirect()->route('create-user')->withFlashError(__('alert.created'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('backend.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        if (isset($data['password'])) {
            $data['password'] = \Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        if ($user->update($data)) {
            return redirect()->route('user')->withFlashSuccess(__('alert.updated'));
        }

        return redirect()->back()->withFlashDanger(__('alert.updated'));
    }

    public function destroy($id)
    {
        $user = User::where("id", $id)->whereHas("comment")->first();
        if ($user) {
            return redirect()->route('user')->withFlashDanger(__('alert.deleted_fail_comment'));
        }

        $user->delete();

        return redirect()->route('user')->withFlashSuccess(__('alert.deleted'));
    }
}
