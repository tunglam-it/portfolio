@extends('partialsBE.main')
@section('title')
    <title>ABC alo alo</title>
@endsection
@section('content')
    @include('partialsBE.content-header',['key'=>'Alo','name'=>'Blo'])
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sửa Bài viết</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="blogTitle">Tiêu Đề Lớn(*)</label>
                        <textarea name="title" class="form-control" id="blogTitle"
                                  @error('title') is-invalid @enderror></textarea>
                        @error('title')
                        <div class="text-danger col-sm-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="blogSubtitle">Tiêu Đề Nhỏ(*)</label>
                        <textarea name="subtitle" class="form-control" id="blogSubtitle"
                                  @error('subtitle') is-invalid @enderror></textarea>
                        @error('subtitle')
                        <div class="text-danger col-sm-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="blogContent">Nội Dung(*)</label>
                        <textarea name="blog_content" class="form-control" id="blogContent"
                                  @error('blog_content') is-invalid @enderror></textarea>
                        @error('blog_content')
                        <div class="text-danger col-sm-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="blogCredit">Nguồn(*)</label>
                        <input value="" type="text" name="credit" class="form-control"
                               id="blogCredit" @error('credit') is-invalid @enderror>
                        @error('credit')
                        <div class="text-danger col-sm-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="blogLink">Link(*)</label>
                        <input value="" type="text" name="blog_link" class="form-control"
                               id="blogLink" @error('blog_link') is-invalid @enderror>
                        @error('blog_link')
                        <div class="text-danger col-sm-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Trạng Thái(*)</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="status">
                            <label for="customRadio1" class="custom-control-label">Kích hoạt</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                   id="customRadio4" name="status">
                            <label for="customRadio4" class="custom-control-label">Ẩn</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
