@extends('partialsBE.main')
@section('title')
  <title>About | Index</title>
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  @include('partialsBE.content-header',['key'=>'Home','name'=>'About'])
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">About</h3>
            <div class="card-tools row">
              <div class="input-group input-group-sm " style="width: 150px;">
                <div class="input-group-append">
                  <a href="{{route('about.create')}}" class="btn btn-success btn-sm">+ Thêm mới</a>
                </div>
              </div>
              <div class="input-group input-group-sm " style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right"
                       placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="overflow: scroll;max-height: 560px">
            <table class="table table-hover table-bordered">
              <thead>
              <tr style="text-align: center">
                <th>STT</th>
                <th>Title</th>
                <th>Timeline</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @if(!empty($abouts))
                @foreach($abouts as $about)
                  <tr style="text-align: center">
                    <td>{{$about->id}}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->timeline}}</td>
                    <td>{{\Illuminate\Support\Str::limit(strip_tags($about->description),10)}}</td>
                    <td><img src="{{url($about->image)}}" alt="Product Image"
                             style="width:100px;height: 100px;object-fit: cover"></td>
                    <td>
                      <a class="btn btn-info btn-sm"
                         href="{{route('about.edit',['id'=>$about->id])}}"
                      ><i class="fas fa-pencil-alt"></i> Edit</a>
                      <a class="btn btn-danger btn-sm"
                         onclick="confirm('Bạn chắc chắn muốn xoá không?')"
                         href="{{route('about.delete',['id'=>$about->id])}}"
                      ><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                  </tr>
                @endforeach
              @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->

@endsection
@section('js')

@endsection
