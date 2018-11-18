function hoverGrid() {
    $('.grid-item').hover(
            function(){
                $(this)
                .find('p.altText')
                .stop().slideDown(600);
        }, 
            function(){
                $(this)
                .find('p.altText')
                .stop().slideUp(200);
        });
    }

