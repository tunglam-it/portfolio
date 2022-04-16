<!-- Services-->
<section class="page-section" id="services">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Services</h2>
    </div>
    <div class="row text-center">
      @if(!empty($services[0]))
        @foreach($services as $service)
          <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="{{$service->icon}} fa-stack-1x fa-inverse"></i>
                        </span>
            <h4 class="my-3">{{$service->title}}</h4>
            <p class="text-muted">{{$service->description}}</p>
          </div>
        @endforeach
      @else
        <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
          <h4 class="my-3">E-Commerce</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
            architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
          <h4 class="my-3">Responsive Design</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
            architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
          <h4 class="my-3">Web Security</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
            architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      @endif
    </div>
  </div>
</section>
