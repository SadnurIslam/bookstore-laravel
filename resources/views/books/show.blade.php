@extends('layout',['title'=>'Details'])

@section('page-content')

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
            <th>Price</th>
            <th>:</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <th>:</th>
            <td>{{$book->stock}}</td>
        </tr>
    </table>
@endsection