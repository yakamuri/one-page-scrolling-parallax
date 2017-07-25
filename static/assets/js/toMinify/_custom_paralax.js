var parallaxSection = (function(){

    function bindEvents(){

        var getHeight = $(window).height();
        console.log(getHeight);

    }

    function init(){
        bindEvents();
    }

    return {
        init: init
    }

})();
parallaxSection.init();