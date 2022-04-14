@extends('partialsBE.main')
@section('title')
  <title>Portfolio | Update</title>
@endsection
@section('content')
  @include('partialsBE.content-header',['key'=>'Home','name'=>'Portfolio'])
  <section class="content">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{route('portfolio.update',['id'=>$portfolio->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row" id="link-form">
            <div class="col-md-3">
              <label for="">Image</label>
              <img id="preview_img" src="{{url($portfolio->image)}}" alt="main image" style="width: 300px;height: 300px;">
              <input type="file" name="image" onchange="readURL(this);"
                     class="@error('image') is-invalid @enderror">
              @error('image')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                     value="{{$portfolio->title}}">
              @error('title')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Subtitle</label>
              <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                     value="{{$portfolio->subtitle}}">
              @error('subtitle')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Category</label>
              <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                     value="{{$portfolio->category}}">
              @error('category')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Client</label>
              <input type="text" name="client" class="form-control @error('client') is-invalid @enderror"
                     value="{{$portfolio->client}}">
              @error('client')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Description</label>
              <textarea rows="5" type="text" name="description"
                        class="form-control @error('description') is-invalid @enderror">{{$portfolio->description}}</textarea>
              @error('description')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </section>
@endsection
@section('js')
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#preview_img').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

@endsection
