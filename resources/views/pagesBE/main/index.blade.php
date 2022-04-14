@extends('partialsBE.main')
@section('title')
  <title>Main | CRUD</title>
@endsection
@section('content')
  @include('partialsBE.content-header',['key'=>'Home','name'=>'Main'])
  <section class="content">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{route('main.update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row" id="link-form">
            <div class="col-md-3">
              <label for="">Image</label>
              <img id="preview_img" src="" alt="main image" style="width: 300px;height: 300px;">
              <input type="file" name="main_img" onchange="readURL(this);"
                     class="@error('main_img') is-invalid @enderror">
              @error('main_img')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-5">
              <label for="">Title 1</label>
              <input type="text" name="title1" class="form-control @error('title1') is-invalid @enderror"
                     value="{{$main->title1}}">
              @error('title1')
              <div class="text-danger">{{ $message }}</div>
              @enderror
              <label for="">Title 2</label>
              <input type="text" name="title2" class="form-control @error('title2') is-invalid @enderror"
                     value="{{$main->title2}}">
              @error('title2')
              <div class="text-danger">{{ $message }}</div>
              @enderror
              <label for="">Subtitle 1</label>
              <input type="text" name="subtitle1" class="form-control @error('subtitle1') is-invalid @enderror"
                     value="{{$main->subtitle1}}">
              @error('subtitle1')
              <div class="text-danger">{{ $message }}</div>
              @enderror
              <label for="">Subtitle 2</label>
              <input type="text" name="subtitle2" class="form-control @error('subtitle2') is-invalid @enderror"
                     value="{{$main->subtitle2}}">
              @error('subtitle2')
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
