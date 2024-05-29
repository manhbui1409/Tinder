<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
    use ValidatesRequests;

    // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Xử lý logic đăng ký
    public function register(Request $request)
    {
    // Validate the request
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to home or dashboard
        return redirect('/home');
    }
}
