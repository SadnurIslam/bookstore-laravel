@extends('layout',['title'=>'Create Book'])

@section('page-content')
    <legend><b>Create Book</b></legend>
    <form method="post" action="{{route('books.store')}}">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid "  id="title" name="title"
                       placeholder="Title" value="{{old('title')}}">
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid "  id="title" name="author"
                       placeholder="Author" value="{{old('author')}}">
                @error('author')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">isbn</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid "  id="title" name="isbn"
                       placeholder="isbn" value="{{old('isbn')}}">
                    @error('isbn')
                       <div class="text-danger">{{$message}}</div>
                   @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " id="title" name="price"
                       placeholder="price" value="{{old('price')}}">
                       @error('price')
                       <div class="text-danger">{{$message}}</div>
                   @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " id="title" name="stock"
                       placeholder="stock" value="{{old('stock')}}">
                       @error('stock')
                       <div class="text-danger">{{$message}}</div>
                   @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('books.index')}}" class="btn btn-danger px-3">Back</a>
            </div>
        </div>
    </form>

@endsection



