<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create a New Book</h1>
    
    <form method="POST" action="{{ route('books.store') }}">
     
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <input type="text" name="category" id="category" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Book</button>
    </form>
</div>
@endsection
