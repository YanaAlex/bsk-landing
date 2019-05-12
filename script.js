var owl0 = $('.slider0');
owl0.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
});

$('.custom-owl-next-button0').click(function() {
    owl0.trigger('next.owl.carousel');
})
$('.custom-owl-prev-button0').click(function() {
    owl0.trigger('prev.owl.carousel');
})

var owl1 = $('.slider1');
owl1.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
});

$('.custom-owl-next-button1').click(function() {
    owl1.trigger('next.owl.carousel');
})
$('.custom-owl-prev-button1').click(function() {
    owl1.trigger('prev.owl.carousel');
})


// feedback form 
function showFeedbackForm() { 
    document.getElementById('feedback-form').style.display = 'block'; 
    } 
    
    function hideFeedbackForm() { 
    document.getElementById('feedback-form').style.display = 'none'; 
    }