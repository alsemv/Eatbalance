$(document).ready(function(){
    $("#here").on("click", function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
});

$(document).ready(function(){
    $("#here2").on("click", function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
});



$(document).ready(function(){
    $("#one_nav").on("click", function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
});


$(document).ready(function(){
    $("#two_nav").on("click", function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
});

document.addEventListener('scroll', function(e){
    let scroll = $(window).scrollTop();
    if (scroll <= 500)
    {
        document.getElementById("one").src = "/uploads/figures/active_side_nav.png";
        document.getElementById("two").src = "/uploads/figures/muted_side_nav.png";
        document.getElementById("three").src = "/uploads/figures/muted_side_nav.png";
        document.getElementById("four").src = "/uploads/figures/muted_side_nav.png";
        document.getElementById("five").src = "/uploads/figures/muted_side_nav.png";
        document.getElementById("six").src = "/uploads/figures/muted_side_nav.png";
        document.getElementById("seven").src = "/uploads/figures/muted_side_nav.png";
    }
}, true);
