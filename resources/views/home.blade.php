@extends('layouts.main')

@section("body")

	@include("layouts.inc.home.slider")

	@include("layouts.inc.home.content")
	
@stop

@section("footer")
	<script src='../resources/assets/coffee/home/slider/slider.js'></script>
@stop