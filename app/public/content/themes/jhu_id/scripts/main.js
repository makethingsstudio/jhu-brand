(function($) {
    $(function () {
        $(document).foundation();


        // Display example images in lightbox
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


        // Load Logo Choice Modal
        $('[href="#logos"]').fancybox({
            maxWidth    : 600,
            maxHeight   : 600,
            fitToView   : true,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
            afterShow   : function () {
                var $logos  = $('#logos'),
                    $images = $logos.find('img'),
                    $links  = $logos.find('a');
                console.log($images);

                $logos.on('mouseover', 'a', function (e) {
                    var data = $(this).data();

                    e.preventDefault();
                    console.log(data);
                    $images.removeClass('active');
                    $logos.find('img.' + data.preview).addClass('active');
                });
            }
        });


        // Logo Choice Preview



        // Quadon Typetester
        $('#type-quadon').typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Quadon","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http:\/\/www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Quadon-Regular.ttf","name":"Regular"},{"fontfile":"Quadon-Bold.ttf","name":"Regular"}]}],
            "panagrams" : [{"text": "JHU"}]
        });

        // Gentona Typetester
        $("#type-gentona").typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Gentona","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http://www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Gentona-Bold.ttf","name":"Bold"},{"fontfile":"Gentona-Book.ttf","name":"Book"}]}],
            "panagrams" : [{"text": "JHU"}]
        });
    });
})(jQuery);
