@extends('layouts.main')

@section("head")
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
@stop

@section("body")

	@include("layouts.inc.home.slider")

	@include("layouts.inc.home.content")
	
@stop

@section("footer")
	<script src='js/script.js'></script>
@stop