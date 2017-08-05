  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Our Blog</h2>
          <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Latest News -</h4>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-12 remove-padding">
          <div class="owl-carousel blog-slider">

          @foreach($posts as $post)
            <div class="post">
              <div class="post-img">
              <img class="img-responsive" src="{!! asset('assets/images/post') !!}/{!! $post->image !!}" alt="{!! $post->title !!}"/>
              </div>
              <div class="post-info">
                <h3><a href="">{!! $post->title !!}</a></h3>
                <h6>
                    <span datetime="{!! $post->created_at !!}" class="time">
                        {!! date('F d, Y', strtotime($post->created_at)) !!}
                    </span>
                </h6>
                <p>{!! str_limit(strip_tags($post->content), $word = 350, $end = '...') !!}</p>
                <a class="readmore" href="#"><span>Read More</span></a> </div>
            </div>
            <!--=== Post End ===-->
          @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
