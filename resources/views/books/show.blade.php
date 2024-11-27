@extends('layout',['title'=>'Details'])

@section('page-content')

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
    <a href="{{route('books.index')}}" class="btn btn-primary px-3"><i class="bi bi-caret-left-fill"></i> Back</a>
    <h1>Book Details</h1>
    <table class="table">
        <tr>
            <th width="20%">ID</th>
            <th width="5%">:</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <th>:</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <th>:</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <th>:</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <th>:</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <th>:</th>
            <td>{{$book->stock}}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <th>:</th>
            <td>{{$book->created_at}}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <th>:</th>
            <td>{{$book->updated_at}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-danger">Edit</a></td>
        </tr>
    </table>
@endsection