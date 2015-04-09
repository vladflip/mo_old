require "owl"

$ = require 'jquery'

jQuery ->
	do slider = ->
		jQuery(".owl-carousel").owlCarousel({
			items: 1,
			nav: true,
			navText: ["<", ">"],
			smartSpeed: 600
		})
