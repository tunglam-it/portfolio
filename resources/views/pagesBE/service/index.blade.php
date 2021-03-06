@extends('partialsBE.main')
@section('title')
  <title>Service | Index</title>
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  @include('partialsBE.content-header',['key'=>'Home','name'=>'Service'])
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Service</h3>
            <div class="card-tools row">
              <div class="input-group input-group-sm " style="width: 150px;">
                <div class="input-group-append">
                  <a href="{{route('service.create')}}" class="btn btn-success btn-sm">+ Thêm mới</a>
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
                <th>Description</th>
                <th>Icon</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @if(!empty($services))
                @foreach($services as $service)
                  <tr style="text-align: center">
                    <td>{{$service->id}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{\Illuminate\Support\Str::limit(strip_tags($service->description),10)}}</td>
                    <td>{{$service->icon}}&nbsp&nbsp&nbsp
                        <i class="{{$service->icon}}"></i>
                    </td>
                    <td>
                      <a class="btn btn-info btn-sm"
                         href="{{route('service.edit',['id'=>$service->id])}}"
                      ><i class="fas fa-pencil-alt"></i> Edit</a>
                      <a class="btn btn-danger btn-sm"
                         onclick="confirm('Bạn chắc chắn muốn xoá không?')"
                         href="{{route('service.delete',['id'=>$service->id])}}"
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
