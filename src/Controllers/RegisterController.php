<?php

namespace Onepoint\Frontend\Controllers;

use App\Http\Controllers\Controller;

/**
 * 註冊
 */
class RegisterController extends Controller
{
    /**
     * 註冊
     */
    public function index()
    {
        $this->tpl_data = HomeController::getTplDatas();
        return view('frontend::pages.register', $this->tpl_data);
    }
}
