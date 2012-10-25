$(function() {

    var $carousel = $('#album_slider').carousel({
        interval: 4000
    });
    
    $carousel.hover(function(){
        if ($(this).data().carousel.interval) $carousel.carousel('pause');
    }, function(){
        if (!$(this).data().carousel.interval) $carousel.carousel('cycle');
    });
    
/*
    $('#albums a').popover({
        placement: 'bottom'
    });
*/
    var $container = $('#albums');

    $container.imagesLoaded(function() {
        $container.masonry({
            animationOptions: {
                easing: 'easeInOutCubic',
                duration: 400
            },
            itemSelector : 'li.box',
            isAnimated: true,
            //gutterWidth: 10
            isFitWidth: true,
            isAnimatedFromBottom: true
            //columnWidth: function(containerWidth) {
            //    return containerWidth / 5;
            //}
        });
    });
    
    $('#contact_form').submit(function(e) {
        var $form = $(this);
        e.preventDefault();
        $.post('/contact/sendmail', $form.serialize(), function(data) {
            if (data.success && data.success === true) {
                var $div = $('<div class="alert fade in">Thanks, we will be in touch shortly.<a class="close" data-dismiss="alert" href="#">&times;</a></div>').alert();
                $form.find('fieldset').append($div);
            }
        }, 'json');
    });
});

jQuery.extend( jQuery.easing, {
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}
});