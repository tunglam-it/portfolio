@extends('partialsBE.main')
@section('title')
  <title>Contact | Create</title>
@endsection
@section('content')
  @include('partialsBE.content-header',['key'=>'Home','name'=>'Contact'])
  <section class="content">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="form-group row" id="link-form">
          <div class="col-md-3">
            <label>Loại tk</label>
            <select name="" class="form-control">
              <option value=""></option>
            </select>
          </div>
          <div class="col-md-7">
            <label for="">Links</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-2">
            <label for=""></label>
            <button id="add-link" class="btn btn-success form-control mt-2">Thêm tk</button>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </section>
@endsection
@section('js')
  $('#add-link').click(function(){
    $('#link-form').append()
  });
@endsection
