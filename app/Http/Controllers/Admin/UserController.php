<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function destroy($user) {

        $user = User::findOrFail($user);

        try {
            $user->delete();
            notify()->success('Successfully deleted user ' . $user->name, 'Success :D');
        } catch (error) {
            notify()->error('Whoops! Deletion of user ' . $user->name . ' failed.', 'Failed :(');
        }

        return redirect(route('admin.users'));
    }
}
