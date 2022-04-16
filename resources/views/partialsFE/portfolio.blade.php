<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">My Recent Project</h2>
    </div>
    <div class="row">
      <!-- Portfolio item 1-->
      @if(!empty($portfolios[0]))
        @foreach($portfolios as $portfolio)
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{$portfolio->id}}">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="{{url($portfolio->image)}}" alt="..."/>
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">{{$portfolio->client}}</div>
                <div class="portfolio-caption-subheading text-muted">{{$portfolio->category}}</div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="text-center">There are currently no project!!!</div>
      @endif
    </div>
  </div>
</section>
