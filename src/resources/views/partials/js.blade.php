<!-- SCRIPTS -->
<script type="text/javascript" src="{{ $path_presenter->assets('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('plugins/owl.carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('plugins/owl.carousel/owl.carousel.thumbs.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('js/classie.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('js/main.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('plugins/nouislider/wNumb.min.js') }}"></script>
<script type="text/javascript" src="{{ $path_presenter->assets('plugins/nouislider/nouislider.min.js') }}"></script>
<script>
    $(function () {
        $(".quick_link_menu").imagesLoaded(function () {
            $('.quick_link_menu').masonry({
                itemSelector: '.quick_link_item',
                columnWidth: '.quick_link_item',
                percentPosition: true,
                gutter: 5
            });
        });
    });
</script>