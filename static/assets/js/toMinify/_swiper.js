var bigSwiper = (function(){

    function bindEvents() {
        // var swiper = new Swiper('.swiper-container', {
        //     pagination: '.swiper-pagination',
        //     paginationClickable: true,
        //     direction: 'vertical',
        //     parallax: true
        // });
        var s = skrollr.init({
            smoothScrolling: false,
            mobileDeceleration: 0.004
        });
        s.refresh($('.slide'));
    }

    function openContent() {
        $('.more_content').unbind('click').on('click', function(){
           if($('.block_content').hasClass('show')){
               $('.block_content').removeClass('show');
           }
           else {
               $('.block_content').addClass('show');
           }
        });
    }

    function init(){
        bindEvents();
        openContent();
    }

    return {
        init: init
    }

})();
bigSwiper.init();