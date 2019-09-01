jQuery(document).ready(function() {

    console.log('hhhhhhhhhhhhhhhhhhh')

    // SLIDESHOW SCRIPT
    var $prev = jQuery('.previous');
    var $next = jQuery('.next');
    var mode = "auto";

    $prev.on({
        click: function(e) {
            e.preventDefault();
            mode = "manual";
            showPreviousImage();
        }
    });

    $next.on({
        click: function(e) {
            e.preventDefault();
            mode = "manual";
            showNextImage();
        }
    });
    
    setInterval(function() {
        if (mode === "auto") {
            showNextImage();
        }
    }, 7000);
    
    function showNextImage() {
        var $actEl = jQuery('.active');
        var $nextEl = $actEl.next('.slide');

        if ($nextEl.length) {
            $actEl.removeClass('active');
            $nextEl.addClass('active');
        }
        else {
            $actEl.removeClass('active');
            jQuery('.slide:first-child').addClass('active');
        }
    }
    
    function showPreviousImage() {
        var $actEl = jQuery('.active');
        var $prevEl = $actEl.prev('.slide');

        if ($prevEl.length){
            $actEl.removeClass('active');
            $prevEl.addClass('active');
        }
        else {
            $actEl.removeClass('active');
            jQuery('.slide.last').addClass('active');
        }
    }

    // NAVBAR SCRIPT
    window.onscroll = function() { scroll() }

    function scroll() {
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600 ) {
            document.getElementById("navbar").style.background = "#222"
            document.getElementById("navbar").style.padding = ".3rem"
        }
        else {
            document.getElementById("navbar").style.background = "transparent"
            document.getElementsById("navbar").style.padding = ".5rem"
        }
    }

})
