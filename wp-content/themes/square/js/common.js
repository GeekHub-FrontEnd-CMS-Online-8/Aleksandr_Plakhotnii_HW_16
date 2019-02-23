$('.icon').click(function () {
    $('.menu').toggleClass('menu-none');
    $(this).toggleClass('icon-close');
});

$('.fa-angle-double-right').click(function () {
    $('.portfolio-slide-btn').hide();
    $('.slide-info').fadeIn(300);
});

$('.fa-angle-double-left').click(function () {
    $('.slide-info').hide();
    $('.portfolio-slide-btn').show();
});

//плавный скрол
$('.blog-go-top').click(function(){
    $('html, body').animate({scrollTop:$('#page').position().top}, 500);
});
