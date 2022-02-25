@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Show Article</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" value="{{$article->title}}"
                disabled >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select class="form-select" name="category_id" id="category" disabled>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected="selected"' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" 
                disabled>{{ $article->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" name="content" id="summernote" disabled>{{ $article->content }}</textarea>
            </div>
        </div>
    </div>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote('disable');
    </script>
@endsection