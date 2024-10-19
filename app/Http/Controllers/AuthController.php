<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Manager;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3|max:8',
            'password' => 'required|min:3|max:8',
            'email' => 'required|email|unique:members,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['state' => false, 'message' => '驗證失敗', 'errors' => $validator->errors()], 400);
        }

        // 準備資料
        $username = $request->input('username');
        $password = Hash::make($request->input('password'));  // 使用 Laravel Hash 來加密
        $email = $request->input('email');

        // 插入資料
        DB::table('members')->insert([
            'Username' => $username,
            'Password' => $password,
            'Email' => $email,
            'Created_at' => now(),
        ]);

        return response()->json(['state' => true, 'message' => '註冊成功']);
    }

    public function checkUsername(Request $request)
{
    $username = $request->input('username');
    $user = DB::table('members')->where('Username', $username)->first();

    if ($user) {
        return response()->json(['state' => false, 'message' => '帳號已存在，請選擇其他帳號']);
    }

    return response()->json(['state' => true, 'message' => '帳號可以使用']);
}

}
