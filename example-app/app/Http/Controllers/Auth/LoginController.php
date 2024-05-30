<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Chuyển hướng sau khi đăng nhập thành công
        }

        return redirect()->back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']); // Chuyển hướng và hiển thị thông báo lỗi
    }
}
