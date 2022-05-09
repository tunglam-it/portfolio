<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
@if(!empty($portfolios))
  @foreach($portfolios as $portfolio)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$portfolio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="{{secure_asset('assets/img/close-icon.svg')}}" alt="Close modal"/>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">{{$portfolio->title}}</h2>
                  <p class="item-intro text-muted">{{$portfolio->subtitle}}</p>
                  <img class="img-fluid d-block mx-auto" src="{{url($portfolio->image)}}"
                       alt="..."/>
                  <p>{{$portfolio->description}}</p>
                  <ul class="list-inline">
                    <li>
                      <strong>Link:</strong>{{$portfolio->client}}
                    </li>
                    <li>
                      <strong>Category:</strong>{{$portfolio->category}}
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-xmark me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endif
