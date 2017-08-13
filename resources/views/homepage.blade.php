@extends('layouts.site')

@section('content')

	<!--=== Flex Slider Start ===-->
	@include('layouts.partials.flex')
	<!--=== Flex Slider End ===-->

	<!--=== Who We Are Start ===-->
	@include('layouts.partials.who')
	<!--=== Who We Are End ===-->

	<!--=== Testimonails Start ===-->
	@include('layouts.partials.testimonails')
	<!--=== Testimonails End ===-->
	{{-- <div style="clear:both"></div> --}}
	<!--=== Portfolio Start ===-->
	@include('layouts.partials.portfolio')
	<!--=== Portfolio End ===-->

	<!--=== Counter Start ===-->
	{{-- @include('layouts.partials.counter') --}}
	<!--=== Counter End ===-->

	<!--=== Our Team Start ===-->
	{{-- @include('layouts.partials.team') --}}
	<!--=== Our Team End ===-->



	<!--=== Blogs Start ===-->
	@if (count($posts) > 1)
		@include('layouts.partials.blog')
	@endif
	<!--=== Blogs End ===-->
@endsection

@section('jsonld')

@endsection
