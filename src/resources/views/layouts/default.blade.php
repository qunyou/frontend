@inject('path_presenter', 'Onepoint\Dashboard\Presenters\PathPresenter')
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    @include('frontend::partials.head')
    @yield('head')
</head>

<body>
    @include('frontend::partials.header')
    <section class="fix-top">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    {{-- 麵包屑清單 --}}
                    @yield('breadcrumb')
                </div>
            </div>
        </div>
    </section>
    <section>

        {{-- 主內容區塊 --}}
        @yield('content')
    </section>
    @include('frontend::partials.footer')
    @include('frontend::partials.js')
</body>

</html>