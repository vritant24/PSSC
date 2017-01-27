$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.parallax').parallax();
    $('.collapsible').collapsible();
});

$('nav li').click(function(){
    $(this).parent().children('li').not(this).removeClass('active');
    $(this).addClass('active');
});
