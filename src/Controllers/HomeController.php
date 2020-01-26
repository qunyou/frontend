<?php

namespace Onepoint\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Onepoint\Dashboard\Services\FrontendService;

/**
 * 首頁
 */
class HomeController extends Controller
{
    /**
     * 重導
     */
    public function redirect()
    {
        return redirect()->route('home');
    }

    /**
     * 列表
     */
    public function index()
    {
        $this->tpl_data = $this->getTplDatas();
        return view('frontend::pages.index', $this->tpl_data);
    }

    /**
     * 所有頁面共用方法
     */
    public static function getTplDatas()
    {
        // 流量統計
        // FrontendService::agent();

        // 取得設定值
        $frontend_service = new FrontendService;
        return $frontend_service->putSetting(['global']);
    }
}
