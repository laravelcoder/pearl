
  <section class="pt-0 pb-0">
    <div class="container-fluid">
      <div class="row">
        <div class="portfolio-container text-center">
         {{--  <ul id="portfolio-filter" class="list-inline filter-transparent wow fadeTop" data-wow-delay="0.1s">
            <li class="active" data-group="all">All</li>
            <li data-group="design">Design</li>
            <li data-group="web">Web</li>
            <li data-group="branding">Branding</li>
            <li data-group="print">Print</li>
          </ul> --}}
          <ul id="portfolio-grid" class="three-column hover-two">

            @foreach($designs as $design)

            <li class="portfolio-item wow fadeIn wow fadeIn" data-wow-delay="0.1s" data-groups='["all", "print", "branding"]'>
              <div class="portfolio gallery-image-hover">
                <div class="dark-overlay"></div>
                <img src="{!! asset('assets/images/designs/hp/'. @$design->image[0]) !!}" alt="{!! $design->name !!}" />

                <div class="portfolio-wrap">
                  <div class="portfolio-description">
                    <h3 class="portfolio-title">{!! $design->name !!}</h3>
                    <a href="{!! route('design', [$design->id]) !!}" class="links">More Details</a> </div>
                  <!--=== /.project-info ===-->
                  <ul class="portfolio-details">
                    <li><a class="alpha-lightbox" href="{!! asset('assets/images/designs/'. @$design->image[0]) !!}"><i class="fa fa-search"></i></a></li>

                    <li><a href="{!! route('design', [$design->id]) !!}"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--=== /.portfolio ===-->
            </li>
            @endforeach





          </ul>
        </div>
      </div>
    </div>
  </section>
