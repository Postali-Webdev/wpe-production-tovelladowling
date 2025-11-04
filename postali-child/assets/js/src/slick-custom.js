/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('.testimonial-slider').slick({
		dots: true,
        arrows:false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        appendDots: '.nav-dots'
	});

    $('#attorney-slider').slick({
		dots: false,
		infinite: true,
        centerMode:false,
        vertical:false,
        arrows:false,
		fade: false,
  		speed: 600,
		slidesToShow: 3,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 821,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
	});

    $('#slides_1').slick({
		dots: true,
        arrows:false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        appendDots: '.nav-dots_1'
	});

    $('#slides_2').slick({
		dots: true,
        arrows:false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        appendDots: '.nav-dots_2'
	});    

    $('.slick-current').prev().addClass('prevSlide');

    $("#attorney-slider").on("afterChange", function (event, slick, currentSlide){
        $(".slick-slide").removeClass("prevSlide");
        $(".slick-slide").removeClass("nextSlide");
        $(".slick-slide").removeClass("fadeIn");
        $('.slick-slide').removeClass('fadeOut');
        $(".slick-current").prev().addClass("prevSlide");
        $(".slick-current").next().addClass("nextSlide");
    });
	
	$('.prev-button-slick').click(function(){
        $('#attorney-slider').slick("slickNext");
        $('.slick-current').prev().addClass('fadeOut');
    });

    $('.next-button-slick').click(function(){
        $('#attorney-slider').slick("slickPrev");
        $('.prevSlide').addClass('fadeIn'); 
    });

});