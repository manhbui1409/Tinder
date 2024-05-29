<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function upload()
    {
        return view('user.upload');
    }

    public function search()
    {
        return view('user.search');
    }

    public function messages()
    {
        return view('user.messages');
    }
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('user.edit', compact('user'));
}

public function update(Request $request, User $user)
{
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        // Thêm các trường thông tin cần cập nhật khác nếu có
    ]);

    return redirect()->back()->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
}



public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    // Redirect về trang chính sau khi xóa thành công
}

}

