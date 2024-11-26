@extends('layout',['title'=>'Homepage'])

@section('page-content')

<h1>Book List</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->stock}}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}" class="btn-sm btn-success">View</a>
                    <a href="" class="btn-sm btn-primary">Edit</a>
                    <a href="" class="btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$books->links()}}

@endsection