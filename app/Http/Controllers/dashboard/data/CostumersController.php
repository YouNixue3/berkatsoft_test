<?php

namespace App\Http\Controllers\dashboard\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class CostumersController extends Controller
{
    public function get_data()
    {
        $data = User::paginate(5);
        return $data;
    }
    public function get_edit_data($id)
    {
        $data = User::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;

        return $user->save();
    }

    public function update_data(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;

        return $user->save();
    }

    public function destroy_data($request)
    {
        $user = User::findOrFail($request->id)->delete();
        return $user;
    }

}
