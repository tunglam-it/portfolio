@extends('partialsBE.main')
@section('title')
  <title>Service | Add</title>
@endsection
@section('content')
  @include('partialsBE.content-header',['key'=>'Home','name'=>'Service'])
  <section class="content">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row" id="link-form">
            <div class="col-md-6">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                     value="{{old('title')}}">
              @error('title')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Icon</label>
              <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror"
                     value="{{old('icon')}}">
              @error('icon')
              <div class="text-danger">{{ $message }}</div>
              @enderror

              <label for="">Description</label>
              <textarea rows="5" type="text" name="description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
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
