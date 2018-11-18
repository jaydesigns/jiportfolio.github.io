function fadeAnimation() {
        jQuery('body').css('display', 'none');
        jQuery(document).ready(function() {
            jQuery('body').fadeIn(1000);
            jQuery('.anchor').on('click', function(event){
                var theTarget = this.getAttribute('target');
                if (theTarget != "_blank"){
                    var theRef = this.getAttribute('href');
                    event.preventDefault();
                    jQuery('body').fadeOut(1000, function(){
                        window.location = theRef;
                    });
                }
            });
        });
        setTimeout(function(){
            jQuery('body').fadeIn();
        },3000);
}