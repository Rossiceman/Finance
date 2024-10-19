<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function login(Request $req)
    {
        if (captcha_check($req->code) == false)
        {
            return back()->withInput()->withErrors(["code" => "驗證碼錯誤"]);
            exit;
        }

        $manager = (new Manager())->getManager($req->userId,$req->pwd);

        if (empty($manager))
        {
            return back()->withInput()->withErrors(["errors"=>"帳號或密碼錯誤"]);
            exit;
        }
        
        session()->put("manager",$manager->userId);
        return redirect("/admin/home");
    }

    public function home()
    {
        return view("admin.home");
    }
}
