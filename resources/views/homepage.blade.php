@extends('layouts.site')

@section('content')


{{--<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Forderpearlessence%2Fvideos%2F1613255002027960%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}



 <!--=== Flex Slider Start ===-->
     @include('layouts.partials.flex')
  <!--=== Flex Slider End ===-->

  <!--=== Who We Are Start ===-->

    @include('layouts.partials.who')
  <!--=== Who We Are End ===-->

  <!--=== Portfolio Start ===-->

     @include('layouts.partials.portfolio')
  <!--=== Portfolio End ===-->

  <!--=== Counter Start ===-->

  @include('layouts.partials.counter')
  <!--=== Counter End ===-->

  <!--=== Our Team Start ===-->
{{-- @include('layouts.partials.team') --}}
  <!--=== Our Team End ===-->

  <!--=== Testimonails Start ===-->
     @include('layouts.partials.testimonails')
  <!--=== Testimonails End ===-->

  <!--=== Blogs Start ===-->
    @include('layouts.partials.blog')
  <!--=== Blogs End ===-->

@endsection
