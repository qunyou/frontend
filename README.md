# 國小課後社團報名系統前台

## composer.json

    "autoload": {
        "psr-4": {
            ...
            "Onepoint\\Frontend\\": "packages/onepoint/frontend/src"
        },
    },

    執行
    composer dump-autoload

## config/app.php

    'providers' => [
        ...
        Onepoint\Frontend\FrontendServiceProvider::class,
    ]

## 目前前台頁面網址(規則寫在這個檔routes/web.php)
    
    http://after-school.test/index
    http://after-school.test/register
    http://after-school.test/login
    http://after-school.test/profile