require "owl"

$ = require 'jquery'

$ ->
	do slider = ->
		$(".owl-carousel").owlCarousel({
			items: 1,
			nav: true,
			navText: ["<", ">"],
			smartSpeed: 600,
			autoplay: true,
			loop: true
		})
