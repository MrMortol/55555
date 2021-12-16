$("body").mousemove(function(e) {
    parallaxIt(e, ".obj", -100);
});

function parallaxIt(e, target, movement) {
    var $this = $("body");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement
    });
}

$(document).ready(function() {
    $('.nav-scroll').bind('click', function(event) {
        var link = $(this);

        if(link.attr("href") == "#") {
            $('body, html').animate({scrollTop:0},500);
        } else {
            var margin = 20;

            $('html, body').animate({
                scrollTop: $(link.attr('href').replace('/', '')).offset().top - margin
            }, 500);

            event.preventDefault();
        }
    });

    $(".steps a").click(function() {
        var tab = $(this).attr('href').replace('#', '');

        $(".tab").removeClass("show");
        $(".tab[data-tab="+ tab +"]").addClass("show");

        $(".steps li").removeClass("active");
        $(this).parent().addClass("active");
    });
});