$(document).ready(function(){

    //sticky navigation menu
    let navbar = $('.navbar');
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 100) {
            navbar.addClass('sticky_nav');
        } else {
            navbar.removeClass('sticky_nav');
        }
    });
    
// smooth scrolling using jquery
    // Get the specific section on the page
    let firstSection = $('#home');
    // Scroll to the top section

    if (firstSection.length > 0) {
        $('html, body').animate({
            scrollTop: firstSection.offset().top
        }, 'slow');
    }

    // Smooth scrolling using jquery;
    $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();

        var target = $(this.getAttribute('href'));

        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 'slow');
        }
    });
// smooth scrolling using jquery.end

    //  resume.showing
    $('.common_resume').on('click', function (e) {
        e.preventDefault();
        var target = $(this).data('target');
        $("#" + target).toggle();
        $(".resume_default").not("#" + target).hide();
      
    });

    //projects button 
    $('.tab').on('click', function () {
        // Remove 'active' class from all tabs
        $('.tab').removeClass('resume_active');
    
        // Add 'active' class to the clicked tab
        $(this).addClass('resume_active');
    });

    //  testimonial.owl.carousel

    $("#testimonial-slider").owlCarousel({
        autoplay: 1000,
        loop: true,
        responsive:{
            0:{items:1},
            768:{items:2},
            992:{items:3}
        }
    });
    $("#client_partner").owlCarousel({
        autoplay: 500,
        loop: true,
        autoplayHoverPause:true,
        responsive:{
            0:{items:2},
            768:{items:3},
            992:{items:5}
        }
    });



});