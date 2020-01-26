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
        <div class="container px-0">
            <div id="index_slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#" class="index_slider_link" style="background-image: url('{{ $path_presenter->assets('images/slides/01.jpg') }}');"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="index_slider_link" style="background-image: url('{{ $path_presenter->assets('images/slides/02.jpg') }}');"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="index_slider_link" style="background-image: url('{{ $path_presenter->assets('images/slides/03.jpg') }}');"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="index_slider_link" style="background-image: url('{{ $path_presenter->assets('images/slides/04.jpg') }}');"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="index_slider_link" style="background-image: url('{{ $path_presenter->assets('images/slides/05.jpg') }}');"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-0">
            <div class="quick_link_menu">
                <div class="quick_link_item">
                    <a href="product-new.html" class="quick_link" title="新品上市">
                        <img src="{{ $path_presenter->assets('images/icon_menu_01.png') }}" alt="新品上市">
                        <span>新品上市</span>
                    </a>
                </div>
                <div class="quick_link_item">
                    <a href="product-promotion.html" class="quick_link" title="促銷專區">
                        <img src="{{ $path_presenter->assets('images/icon_menu_02.png') }}" alt="促銷專區">
                        <span>促銷專區</span>
                    </a>
                </div>
                <div class="quick_link_item">
                    <a href="product-clearance.html" class="quick_link" title="出清商品">
                        <img src="{{ $path_presenter->assets('images/icon_menu_03.png') }}" alt="出清商品">
                        <span>出清商品</span>
                    </a>
                </div>
                <div class="quick_link_item">
                    <a href="menu.html" class="quick_link" title="品牌旗艦">
                        <img src="{{ $path_presenter->assets('images/icon_menu_04.png') }}" alt="品牌旗艦">
                        <span>品牌旗艦</span>
                    </a>
                </div>
                <div class="quick_link_item">
                    <a href="filter-price.html" class="quick_link" title="價格搜尋">
                        <img src="{{ $path_presenter->assets('images/icon_menu_05.png') }}" alt="價格搜尋">
                        <span>價格搜尋</span>
                    </a>
                </div>
                <div class="quick_link_item">
                    <a href="product-hot.html" class="quick_link" title="預算精選">
                        <img src="{{ $path_presenter->assets('images/icon_menu_06.png') }}" alt="預算精選">
                        <span>預算精選</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('frontend::partials.footer')
    @include('frontend::partials.js')
</body>

</html>