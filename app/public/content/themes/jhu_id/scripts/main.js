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

        $('#type-quadon').typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Quadon","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http:\/\/www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Quadon-Regular.ttf","name":"Regular"},{"fontfile":"Quadon-Bold.ttf","name":"Regular"}]}],
            "panagrams" : [{"text": "JHU"}]
        });

        $("#type-gentona").typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Gentona","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http://www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Gentona-Bold.ttf","name":"Bold"},{"fontfile":"Gentona-Book.ttf","name":"Book"}]}],
            "panagrams" : [{"text": "JHU"}]
        });
    });
})(jQuery);
