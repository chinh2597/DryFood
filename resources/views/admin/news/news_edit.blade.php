@extends('admin.admin_template')
@include('ckfinder::setup')
@section('styles')
    <link href="/css/admin/index.css" rel="stylesheet">
@endsection
@section('plugins')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>
    <script>CKFinder.config({connectorPath: '/ckfinder/connector'});</script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>
    <script src="/js/admin/news/news_edit.js"></script>
@endsection
@section('content')
    <form id="createNewsForm" method="POST" enctype="multipart/form-data" action="/admin/news/{{$news->id}}">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-group row mb-4">
            <label for="tenSP" class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="tenSP" value="{{ old('title',$news->title) }}"
                       placeholder="Tiêu đề" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2">Ảnh đại diện hiện tại</label>
            <img src="{{$news->image}}" alt="ảnh đại diện" class="col-sm-10 h-75">
        </div>

        <div class="form-group row mb-4">
            <label for="customFile" class="col-sm-2 col-form-label">Chọn ảnh đại diện mới</label>
            <div class="custom-file col-sm-10">
                <input type="file" name="image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @if ($errors->has('image'))
                <span class="help-block w-100">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row mb-4">
            <label for="subtitle" class="col-sm-2 col-form-label">Tổng quan</label>
            <textarea name="subtitle" id="subtitle"
                      class="editor col-sm-10">{{ old('subtitle', $news->subtitle) }}</textarea>
        </div>

        <div class="form-group row mb-4">
            <label for="description" class="col-sm-2 col-form-label">Nội dung</label>
            <textarea name="content" id="description" class="editor">{{ old('content',$news->content) }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Sửa bài viết</button>
    </form>
@endsection