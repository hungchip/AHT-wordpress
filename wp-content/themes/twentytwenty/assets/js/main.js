jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var pos = $('html, body').scrollTop();
        if (pos >= 100) {
            $('#header').css('background', '#d6ba8d');
            $('.navbar-menu-res').css('background', '#d6ba8d');
            $('#header').css('padding', '15px');

        } else {
            $('#header').css('background', 'none');
            $('.navbar-menu-res').css('background', 'none');
            $('#header').css('padding', '30px 15px');
        }
    });
    $('.slider-item-product').slick({
        infinite: true,
        speed: 1000,
        cssEase: 'ease-in-out',
    });

    $('.navbar-menu-res').hide();
    $('.menu-icon').click(function(e) {
        e.preventDefault();
        $('.navbar-menu-res').toggle('');
    });
});