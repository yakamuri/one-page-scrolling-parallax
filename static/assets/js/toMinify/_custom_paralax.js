var parallaxSection = (function(){

    function bindEvents(){

        var getHeight = $(window).height();
        console.log(getHeight);
        $('.parallax_section').height(getHeight);

    }

    function init(){
        bindEvents();
    }

    return {
        init: init
    }

})();
parallaxSection.init();