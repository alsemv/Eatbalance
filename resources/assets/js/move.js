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

let vm = new Vue({
    el: '#buttons',
    data: {
        activeBtn:''
    }
});

