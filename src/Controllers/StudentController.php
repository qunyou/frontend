<?php

namespace Onepoint\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Onepoint\AfterSchool\Repositories\StudentRepository;

/**
 * 學生
 */
class StudentController extends Controller
{
    /**
     * 登入
     */
    public function login()
    {
        $this->tpl_data = HomeController::getTplDatas();
        return view('frontend::pages.login', $this->tpl_data);
    }

    /**
     * 登入
     */
    public function postLogin()
    {
        $action = request('action', '');
        $credentials = request()->only('school_student_id', 'password');
        $credentials['status'] = '啟用';
        $remember = false;
        if (request('remember', false) == 'remember-me') {
            $remember = true;
        }
        if (auth()->guard('student')->attempt($credentials, $remember)) {
            if (!empty($action)) {
                return redirect($action);
            } else {
                return redirect('profile');
            }
        } else {
            auth()->guard('student')->logout();
        }
        session()->flash('login_message', '帳號密碼錯誤');
        return redirect('login');
    }

    /**
     * 登出
     */
    public function logout()
    {
        auth()->guard('student')->logout();
        return redirect('login');
    }

    /**
     * 個人資料維護
     */
    public function profile()
    {
        $this->tpl_data = HomeController::getTplDatas();
        $this->tpl_data['student_detail'] = auth()->guard('student')->user();
        return view('frontend::pages.profile', $this->tpl_data);
    }

    /**
     * 個人資料維護
     */
    public function putProfile(StudentRepository $student_repository)
    {
        $student_repository->frontendProfileUpdate();
        return redirect('profile');
    }
}
