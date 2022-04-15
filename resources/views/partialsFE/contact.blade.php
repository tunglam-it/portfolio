<!-- Contact-->
<section class="page-section" id="contact">
  <div class="row">
    <div class=" row row-cols-1 row-cols-md-2 g-4">
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <div class="card-body text-center text-white">
          <p class="text-uppercase font-monospace display-6 font-bold">About Personal Contact!</p>
          <br>
          <p class="font-monospace" style="font-size: 22px;">If you need to contact me about anything, feel free to tell
            me through my email.</p>
          <br>
          <div style="font-size: 24px">
            <i class="far fa-envelope"></i>
            <span>zonakute1@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <div class="card bg-transparent ">
          <form id="contactForm" method="post" action="{{route('contact.store')}}">
            @csrf
            <div class="text-center row">

              <!-- Name input-->
              <div class="form-group">
                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text"
                       placeholder="Your Name *" required/>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <!-- Email address input-->
              <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"
                       placeholder="Your Email *" required/>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <!-- Message input-->
              <div class="form-group">
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message"
                          placeholder="Your Message *" rows="6" required></textarea>
                @error('message')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">
                  Send Message
                </button>
                @if (session('error'))
                  <div class="text-danger mt-2">
                    <strong>Error!</strong>{{session('error')}}
                  </div>
                @endif

                @if (session('success'))
                  <div class="text-success mt-2">
                    <strong>Success!</strong>{{session('success')}}
                  </div>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>
