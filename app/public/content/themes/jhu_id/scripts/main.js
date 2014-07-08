(function($) {
    $(function () {
        $(document).foundation();

        $('.example-lightbox').fancybox({
            helpers : {
                overlay : {
                    css : {
                        'background' : 'rgba(44, 44, 51, 0.9)'
                    }
                },
                title: {
                    type: 'outside'
                }
            }
        });
    });
})(jQuery);
