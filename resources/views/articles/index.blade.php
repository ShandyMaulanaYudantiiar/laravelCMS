@extends('layout')
    
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Articles</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('article.create') }}"> Create New Article</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->description }}</td>
            <td>
                <form action="{{ route('article.destroy',$article->id) }}" method="POST">
    
                    <a class="btn btn-info" href="{{ route('article.show',$article->id) }}">Details</a>
    
                    <a class="btn btn-primary" href="{{ route('article.edit',$article->id) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $articles->links() !!}
    
@endsection