@extends('layout',['title'=>'Homepage'])

@section('page-content')

<div class="row my-2">
    <div class="col-9">
        <form action="{{route('books.index')}}" method="get">
            <div class="row">
                <div class="col-9 px-0">
                    <input class="form-control" placeholder="Search title/author..." type="text" name="search" value="{{request('search')}}">
                </div>
                <div class="col-3 px-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>          
    </div>
    <div class="col-3 text-right">
        <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
    </div>
</div>

@if(session('status'))
<div class="alert alert-success row mt-2">
    <div class="col-10">{{session('status')}}</div>
    <div class="col-2 text-right"> <a class="text-right" href="{{route('books.index')}}"><i class="bi bi-x-lg"></i></a> </div>
</div>
@endif
<h1>Book List</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>
                    @if(request('search'))
                        {!! str_ireplace(request('search'),'<span class="bg-warning">'.request('search').'</span>',$book->title) !!}
                    @else
                        {{$book->title}}
                    @endif
                </td>
                <td>
                    @if(request('search'))
                        {!! str_ireplace(request('search'),'<mark class="bg-warning">'.request('search').'</mark>',$book->author) !!}
                    @else
                        {{$book->author}}
                    @endif
                </td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->stock}}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}" class="btn-sm btn-success">View</a>
                    <a href="{{route('books.edit',$book->id)}}" class="btn-sm btn-primary">Edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are You Sure')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$books->links()}}

@endsection